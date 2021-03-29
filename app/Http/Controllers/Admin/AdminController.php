<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.admin.home', compact('user'));
    }

    public function indexUsers()
    {
        $users = User::all();
        return view('pages.admin.users', ['users' => $users]);
    }

    public function createUsers()
    {
        $user = Auth::user();
        return view('pages.admin.createusers', compact('user'));
    }

    public function storeUsers(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create($request->all());
        return redirect('/users')->with('status', 'User data has been added successfully');;
    }

    public function editUsers(User $user)
    {
        $user = Auth::user();
        return view('pages.admin.editusers', compact('user'));
    }

    public function updateUsers(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::where('id', $user->id)
                    ->update([
                        'name'      => $request->name,
                        'email'     => $request->email,
                        'password'  => $request->password,
                        'role'      => $request->role
                    ]);
        return redirect('/users')->with('status', 'Data User berhasil diubah');
    }

    public function destroyUsers(User $user)
    {
        User::destroy($user->id);
        return redirect('/users')->with('status', 'Data User berhasil dihapus');
    }
}

