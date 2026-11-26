<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = [
            'Nama' => 'I Gede Juniada Wira Pratama',
            'NIM' => 2501010153,
            'Program Studi' => 'Informatika',
            'Angkatan' => '2025',
            'Peminatan' => 'Data Science',
            'Tanggal Lahir' => '18 Juni 2007'
        ];

        $matakuliah = [
            'Pemrograman Web',
            'Basis Data',
            'Struktur Data',
            'Algoritma dan Logika Informatika',
            'Pemrograman Web Framework'
        ];

        return view('profile.index', ['profile' => $profile, 'matakuliah' => $matakuliah]);
    }
}
