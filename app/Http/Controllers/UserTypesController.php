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
        if ($role->id == 1) {
            toast()->error('User Type Admin Tidak Dapat Diedit');
            return redirect()->route('dashboard.user-type.index');
        }
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
        if ($role->id == 1) {
            toast()->error('User Type Admin Tidak Dapat Diedit');
            return redirect()->route('dashboard.user-type.index');
        }

        $validate = Validator::make($request->all(), [
            'nama' => 'required|max:100',
        ], [
            'nama.required' => 'Name harus diisi',
            'nama.max' => 'Name maksimal 100 karakter',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $role->update(['name' => $request->nama, 'status_role' => $request->status_role ? 1 : 0]);

        // Ambil semua permission ID yang ada dalam request
        $newPermissions = $request->has('permission') ? array_keys($request->permission) : [];

        // Ambil semua permission ID yang saat ini ada pada role
        $currentPermissions = $role->permissions->pluck('id')->toArray();

        // Permissions yang perlu ditambahkan
        $permissionsToAdd = array_diff($newPermissions, $currentPermissions);

        // Permissions yang perlu dihapus
        $permissionsToRemove = array_diff($currentPermissions, $newPermissions);

        // Tambahkan permissions baru
        foreach ($permissionsToAdd as $permissionId) {
            $permission = Permission::find($permissionId);
            if ($permission) {
                $role->givePermissionTo($permission);
            }
        }

        // Hapus permissions yang tidak lagi ada dalam request
        foreach ($permissionsToRemove as $permissionId) {
            $permission = Permission::find($permissionId);
            if ($permission) {
                $role->revokePermissionTo($permission);
            }
        }

        toast()->success('User Type berhasil diubah');
        return redirect()->route('dashboard.user-type.index');
    }


    public function destroy(Role $role)
    {
        if ($role->id == 1) {
            toast()->error('User Type Admin Tidak Dapat Dihapus');
            return redirect()->route('dashboard.user-type.index');
        }
        $role->delete();
        toast()->success('User Type berhasil dihapus');
        return redirect()->route('dashboard.user-type.index');
    }
}
