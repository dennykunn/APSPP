<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about', [
            'nama' => 'Denny Firmansyah',
            'alamat' => 'Jl. Bangun Sarti KM 8 Mekarsari'
        ]);
    }
    public function petugas()
    {
        $data = DB::table('petugas')->get();
        return view('petugas', [
            'petugas' => $data
        ]);
    }
}
