<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $title = 'User';
        $slug = 'user';

        $delete = 'Delete User';
        $delete_message = 'Anda yakin ingin menghapus user ini ?';
        confirmDelete($delete, $delete_message);

        $users = User::all();
        foreach ($users as $user) {
            $user->role = $user->getRoleNames()->first();
        }
        return view('admin/main/user/user', compact('users', 'title', 'slug'));
    }

    public function create()
    {
        $title = 'Tambah User';
        $slug = 'add';

        $roles = Role::all();
        return view('admin/main/user/add-user', compact('roles','title', 'slug'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
            'email' => 'required | email | unique:users,email',
            'user_type' => 'required | not_in:#',
            'password' => 'required | min:8',
            'verify_password' => 'required | same:password',
        ], [
            'nama.required' => 'Nama harus diisi',
            'nama.max' => 'Nama maksimal 100 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'user_type.required' => 'Role harus dipilih',
            'user_type.not_in' => 'Role harus dipilih',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'verify_password.required' => 'Konfirmasi password harus diisi',
            'verify_password.same' => 'Konfirmasi password tidak sama dengan password',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $userassign = User::where('email', $request->email)->first();
        $userassign->assignRole($request->user_type);

        toast()->success('User berhasil ditambahkan');
        return redirect()->route('dashboard.user.index');
    }

    public function edit(User $users)
    {
        $title = 'Edit User';
        $slug = 'edit';

        $roles = Role::all();
        $users->role = $users->getRoleNames()->first();
        return view('admin/main/user/edit-user', compact('users', 'roles', 'title', 'slug'));
    }

    public function update(Request $request, User $users)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required | max:100',
            'email' => 'required | email | unique:users,email,'. $users->id_user .',id_user',
            'user_type' => 'required | not_in:#',
            'password' => 'nullable | min:8',
            'verify_password' => 'nullable | same:password',
        ], [
            'nama.required' => 'Nama harus diisi',
            'nama.max' => 'Nama maksimal 100 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'user_type.required' => 'Role harus dipilih',
            'user_type.not_in' => 'Role harus dipilih',
            'password.min' => 'Password minimal 8 karakter',
            'verify_password.same' => 'Konfirmasi password tidak sama dengan password',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        }
        $users->name = $request->nama;
        $users->email = $request->email;
        if ($request->password) {
            $users->password = bcrypt($request->password);
        }
        $users->save();
        $users->syncRoles($request->user_type);
        toast()->success('User berhasil diperbarui');
        return redirect()->route('dashboard.user.index');
    }

    public function destroy(User $users)
    {
        try {
            $users->delete();
            toast()->success('User berhasil dihapus');
            return redirect()->route('dashboard.user.index');
        } catch (\Exception $e) {
            toast()->error('User gagal dihapus');
            return redirect()->route('dashboard.user.index');
        }
    }
}
