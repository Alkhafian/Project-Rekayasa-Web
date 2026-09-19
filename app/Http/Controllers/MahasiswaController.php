<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700923',
            'nama' => 'Al Khafian',
            'prodi' => 'Sistem Informasi',
            'email' => 'alkhafiann@gmail.com',
            'Universitas' => 'Universitas Pamulang',
            'status' => 'Aktif'
        ];
            return view('mahasiswa', compact('mahasiswa'));
    }
}
