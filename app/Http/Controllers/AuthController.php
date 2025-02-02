<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;  

class AuthController extends Controller  
{  
    public function showLoginForm()  
    {  
        return view('/'); 
    }  

    public function login(Request $request)  
    {  
        $request->validate([  
            'email' => 'required|email',  
            'password' => 'required',  
        ]);  

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {  
            // Jika login berhasil, redirect ke halaman dashboard atau halaman lain  
            return redirect()->intended('/admin/dashboard'); 
        }  

        // Jika login gagal, kembali ke form login dengan pesan error  
        return back()->withErrors([  
            'email' => 'Email atau password salah.',  
        ]);  
    }  

    public function logout()  
    {  
        Auth::logout();  
        return redirect('/'); 
    }  
}