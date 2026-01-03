<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login() {
        return view('auth/login');
    }

    public function loginProses(Request $request) {
        // dd($request);

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ],[
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'password.min' => 'Password Min 8 Karakter'
        ]);

        $data = array(
            'email' => $request->email,
            'password' => $request->password,
        );

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard')->with('success', 'Anda Berhasil Login');
        } else {
            return redirect()->back()->with('error', 'Email atau Password Salah');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users.email',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password Min 8 Karakter',
            'password.confirmed' => 'Konfirmasi Password Salah',
        ]);

        // create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role_id'  => Role::where('role_name', 'admin')->first()->id,
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Anda Berhasil Register');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
    }
}
