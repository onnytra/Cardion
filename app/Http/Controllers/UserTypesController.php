<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class UserTypesController extends Controller
{
    public function index()
    {
        $title = 'User Type';
        $slug = 'user-type';

        $delete = 'Delete User Type';
        $delete_message = 'Are you sure you want to delete this user type?';
        confirmDelete($delete, $delete_message);

        $role = Role::all();
        return view('admin/main/user-type/user-type', compact('role', 'title', 'slug'));

    }

    public function create()
    {
        $title = 'Tambah User Type';
        $slug = 'add';
        
        $permissions = Permission::all()->groupBy('group');
        $rowingBydescription = $permissions->map(function ($item, $key) {
            return $item->groupBy('description');
        });
        $roles = Role::all();
        return view('admin/main/user-type/add-user-type', compact('roles', 'title', 'slug', 'rowingBydescription', 'permissions'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
        ], [
            'nama.required' => 'Name harus diisi',
            'nama.max' => 'Name maksimal 100 karakter',
        ]);
        // dd($request->all());
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $role = Role::create(['name' => $request->nama, 'guard_name' => 'web', 'status_role' => $request->status_role ? 1 : 0]);

        // Check if 'permission' exists in the request
        if ($request->has('permission')) {
            // Iterate through each permission
            foreach ($request->permission as $permissionId => $permissionName) {
                // Check if permission ID is numeric (to avoid processing unexpected keys)
                if (is_numeric($permissionId)) {
                    // Find the permission by ID
                    $permission = Permission::find($permissionId);

                    // If permission exists, assign it to the role
                    if ($permission) {
                        $role->givePermissionTo($permission);
                    }
                }
            }
        }
        toast()->success('User Type berhasil ditambahkan');
        return redirect()->route('dashboard.user-type.index');
    }

    public function edit(Role $role)
    {
        $title = 'Edit User Type';
        $slug = 'edit';

        $permissions = Permission::all()->groupBy('group');
        $rowingBydescription = $permissions->map(function ($item, $key) {
            return $item->groupBy('description');
        });
        $userRole = $role->permissions->pluck('id')->toArray();
        return view('admin/main/user-type/edit-user-type', compact('role', 'title', 'slug', 'rowingBydescription', 'permissions', 'userRole'));
    }

    public function update(Request $request, Role $role)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
        ], [
            'nama.required' => 'Name harus diisi',
            'nama.max' => 'Name maksimal 100 karakter',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $role->update(['name' => $request->nama, 'status_role' => $request->status_role ? 1 : 0]);

        // Check if 'permission' exists in the request
        if ($request->has('permission')) {
            // Iterate through each permission
            foreach ($request->permission as $permissionId => $permissionName) {
                // Check if permission ID is numeric (to avoid processing unexpected keys)
                if (is_numeric($permissionId)) {
                    // Find the permission by ID
                    $permission = Permission::find($permissionId);

                    // If permission exists, assign it to the role
                    if ($permission) {
                        $role->givePermissionTo($permission);
                    }
                }
            }
        }else{
            $role->permissions()->detach();
        }
        toast()->success('User Type berhasil diubah');
        return redirect()->route('dashboard.user-type.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        toast()->success('User Type berhasil dihapus');
        return redirect()->route('dashboard.user-type.index');
    }
}
