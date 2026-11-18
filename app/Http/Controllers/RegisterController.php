<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show() {
        return view('formRegister');
    }

    public function register(Request $request) {
    // Validasi Input
        $request->validate([
            'nama'          => 'required|string',
            'username'      => 'required|string',
            'no_telepon'    => 'required|string',
            'blok'          => 'required|string',
        ]);

    // Buat User Baru
        User::create([
            'nama'          => $request->nama,
            'username'      => $request->username,
            'no_telepon'    => $request->no_telepon,
            'blok'          => $request->blok,
            'password'      => bcrypt($request->password),
        ]);

    return redirect('/login')->with('status', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }
}
