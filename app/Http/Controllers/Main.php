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
    public function loginAdmin()
    {
        return view('loginAdmin');
    }
    public function home()
    {
        return view('home');
    }
    public function loginSiswa()
    {
        return view('loginSiswa');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function register()
    {
        return view('register');
    }
    public function dataSiswa()
    {
        return view('dataSiswa');
    }
    public function dashboardTes()
    {
        return view('dashboardTes');
    }
    public function profilTes()
    {
        return view('profilTes');
    }
    public function laporan()
    {
        return view('laporan');
    }
    public function dataKelas()
    {
        return view('dataKelas');
    }
    public function dataPetugas()
    {
        return view('dataPetugas');
    }
    public function dataTransaksi()
    {
        return view('dataTransaksi');
    }
    public function dataHistory()
    {
        return view('dataHistory');
    }
}
