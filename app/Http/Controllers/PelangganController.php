<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PelangganController extends Controller
{
    public function profile(){
        $nama = 'GedeJuniada';
        $nim = '2501010153';
        return view('pelanggan.profile', ['nama' => $nama, 'nim' => $nim]);
    }


    public $pelanggans = [
        ['nama' => 'Juniada', 'nim' =>'2501010153', 'photo' => '/img/juniadafoto.jpeg'],
        ['nama' => 'Jokowi', 'nim' =>'2501010135', 'photo' => '/img/jokowi.jpg'],
        ['nama' => 'Gibran', 'nim' =>'2501010152', 'photo' => '/img/gibran.jpg']
    ];

    public function show($id){
        $pelanggan = $this->pelanggans[$id];
        return view('pelanggan.profile', ['nama' => $pelanggan['nama'], 'nim' => $pelanggan['nim'], 'photo' => $pelanggan['photo']]);
    }

    public function store(Request $request){
        return $request->nama;
    }

    // public function store(Request $request){
    //     return $request->name. $request->nim;
    // }

    public function edit(){
        $nama = 'Andi';
        return view('pelanggan/edit', ['nama' => $nama]);
    }
    public function update(Request $request){
        $nama = $request->input('nama');
        return view('pelanggan.update', ['nama' => $nama]);
    }
}
