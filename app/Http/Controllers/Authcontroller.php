<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Brand;


class AuthController extends Controller
{
    // Constructor if needed
    public function __construct() {
        // Middleware or other initialization code if needed
    }

    // Dashboard method
    public function dashboard(Request $request) {
        $categories = Category::all();
        $products = Product::all();
        $units = Unit::all();
        $brands = Brand::all();
        
        return view('admin.dashboard', [
            'categories' => count($categories),
            'products' => count($products),
            'units' => count($units),
            'brands' => count($brands),
            'app_logo' => 'https://icons.iconarchive.com/icons/crountch/one-piece-jolly-roger/256/Luffys-flag-icon.png'
        ]);
    }

    // Login method
    public function login(Request $request) {
        // Server-side validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:25'
        ]);

        // Check if the user exists
        $user = User::where('email', $request->email)->first();
        $credentials = $request->only('email', 'password');

        if ($user) {
            if (Auth::attempt($credentials)) {
                session(['firstname' => $user->name]);
                session(['lastname' => $user->surname]);
                return redirect('/admin/dashboard');
            } else {
                return back()->with('failed', 'Invalid credentials');
            }
        } else {
            return back()->with('failed', 'Invalid credentials');
        }
    }

    // Logout method
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/admin');
    }
}
