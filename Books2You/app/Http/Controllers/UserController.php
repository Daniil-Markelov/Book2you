<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    
    public function edit(User $user)
    {
        $roles = Role::all();
        $currentRoles = $user->roles()->pluck('name')->toArray();
        return view('admin.users.edit', ['user' => $user, 'roles' => $roles, 'currentRoles' => $currentRoles]);
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required|exists:roles,name',
        ]);
        

        $role = Role::where('name', $request->input('role'))->first();


        // Sync the user's roles with the role ID
        $user->roles()->sync([$role->id]);
    
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }
}


