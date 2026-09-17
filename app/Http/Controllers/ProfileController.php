<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm = "", $kelas = "") {
        $data = [
            'nama' => 'Annisa Azzahra',
            'npm' => '2417051059',
            'kelas' => 'B'
        ];

        return view('profile', $data);
    }
}