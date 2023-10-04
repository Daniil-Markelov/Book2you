<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Subscription;
use Illuminate\Support\Facades\Redirect;

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

    public function destroy(User $user)
{
    // Admin Check
    if ($user->hasRole('admin')) {
        return Redirect::route('admin.users.index')->with('error', 'Admin users cannot be deleted.');
    }

    $user->delete();

    return Redirect::route('admin.users.index')->with('success', 'User deleted successfully');
}

public function viewSubscriptions(User $user)
{
    // admin check
    if (!auth()->user()->hasRole('admin')) {
        abort(403); //NO NO
    }

    $subscriptions = $user->subscriptions;


    return view('admin.users.subscriptions', ['user' => $user, 'subscriptions' => $subscriptions]);
}


}


