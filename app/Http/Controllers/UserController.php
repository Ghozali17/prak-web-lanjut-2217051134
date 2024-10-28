<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($nama, $kelas, $npm)
    {
        // Logika untuk menampilkan profil pengguna
        return view('profile', compact('nama', 'kelas', 'npm'));
    }

    public function create()
    {
        // Logika untuk menampilkan halaman create user
        return view('create_user'); // Pastikan view ini ada
    }

    public function store(Request $request)
    {
        // Ambil input dari request
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];

        // Mengarahkan ke view profile dengan data yang diambil
        return view('profile', $data);
    }
}
