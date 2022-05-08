<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register_page(){
        return view('register');
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required|max:16',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8|max:16',
            'confirmation' => 'same:password',
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = new User;
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> password = $data['password'];
        $user -> save();

        auth()->login($user);

        return redirect('/');
    }

    public function login_page(){
        return view('login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt($data)){
            return redirect('/')->with('success');
        }
        else{
            return back()->withErrors([
                'email' => 'Your email or password may be incorrect',
            ]);
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
