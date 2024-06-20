<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function index()
    {
        if (auth()->check() == true) {
            if (auth()->user()->role == 'guru') {
                return redirect()->route('guru.dashboard');
            }
            return redirect()->route('siswa.dashboard');
        }
        return view('auth.login');
    }

    function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'guru') {
                return redirect()->intended('/guru/dashboard');
            }

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'Email atau password yang anda masukkan salah'
        ]);
    }

    function register()
    {
        $data['kelas'] = Kelas::all();
        return view('auth.register', $data);
    }

    function store(Request $request)
    {
        $user = $request->validate(
            [
                'email' => ['required', 'email', 'unique:users,email'],
                'name' => ['required'],
                'password' => ['required', 'min:8'],
                'nisn' => ['required'],
                'kelas' => ['required']
            ],
            [
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah digunakan',
                'name.required' => 'Nama tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal terdiri dari 8 karakter',
                'nisn.required' => 'NISN tidak boleh kosong',
                'kelas.required' => 'Kelas tidak boleh kosong'
            ]
        );

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        $newSiswa = Siswa::create([
            'user_id' => $newUser->id,
            'kelas_id' => $request->kelas,
            'nisn' => $request->nisn
        ]);

        return redirect()->route('login')->with('success', 'Berhasil mendaftar');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
