<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController 
{
    public function login(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:25'
        ]);

        // Check if user exists
        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)){
            // User exists and password is correct
            //var_dump($user->name);
            //var_dump($user->surname);
            //dd('');
            session(['firstname' => $user->name]);
            session(['lastname' => $user->surname]);
            
            return redirect('/admin/dashboard');
        } else {
            // User does not exist or password is incorrect
            return back()->with('failed', 'Invalid credentials');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
    }
    


}
