<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRegisterController extends Controller
{
    // FORM REGISTER
    public function registerForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:3',
            'role' => 'required'
        ]);

        // kalau role admin, cek tambahan password admin
        if ($request->role === 'admin' && $request->admin_password !== '12345') {
            return back()->with('error', 'Password admin salah!');
        }

        // simpan user baru tanpa hash (password sesuai input)
        Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,  // ⬅️ langsung simpan
            'role' => $request->role,
        ]);

        return redirect()->route('loginForm')->with('success', 'Registrasi berhasil, silakan login.');
    }

            // FORM LOGIN
            public function loginForm() {
                return view('auth.login');
            }

        public function login(Request $request) {
            $user = Register::where('email', $request->email)
                            ->where('password', $request->password)
                            ->first();

            if ($user) {
                Auth::login($user); // ✅ pakai default guard

                if ($user->role === 'admin') {
                    return redirect()->route('flights.create');
                } else {
                    return redirect()->route('bookings.index');
                }
            }

            return back()->with('error', 'Email atau password salah!');
        }

        public function logout() {
            Auth::logout(); // ✅ default logout
            return redirect()->route('loginForm');
        }

}
