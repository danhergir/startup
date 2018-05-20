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

}
