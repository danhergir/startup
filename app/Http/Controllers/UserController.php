<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function userProfile() {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    public function userAccount(User $user) {
        $user = Auth::user();
        return view('user.account', compact('user'));
    }
    
    public function nameUpdate(User $user)
    { 
        $this->validate(request(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255'
        ]);

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');

        $user->save();

        return redirect()->back();
    }

    public function emailUpdate(User $user)
    { 
        $this->validate(request(), [
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user->email = request('email');

        $user->save();

        return redirect()->back();
    }

    public function passwordUpdate(User $user) {
        $this->validate(request(), [
            'password' => 'required|min:8|confirmed',
        ]);

        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect()->back();
    }
}
