<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{




    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = User::where('email', $email)->first();
            Auth::login($user);
            return redirect(route('homeui'))->with(['msg' => 'Logged in successfully', 'status' => 'success']);
        } else {
            return redirect(route('loginui'))->with(['msg' => 'Invalid Credentials', 'status' => 'er']);
        }
    }
    public function Register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'username' => 'required|unique:users,username',
            'password' => 'required|size:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $username = $request->input('username');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        if ($user->save()) {
            Auth::login($user);
            return redirect(route('homeui'));
        }
    }



    public function Logout()
    {
        Auth::logout();
        return redirect(route('indexui'));
    }
}
