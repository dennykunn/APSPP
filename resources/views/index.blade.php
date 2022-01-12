@extends('layoutForm')
@section('konten')
<div class="flex items-center justify-center text-black space-x-2 font-bold text-2xl">
    <svg class="w-8" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z" />
    </svg>
    <h1>Selamat Datang</h1>
</div>
<h2 class="mt-1 mb-3 text-white">Sistem Pembayaran Pendidikan Sekolah</h2>
<div class="grid grid-cols-3 gap-6">
    <a href="\loginAdmin" class=" col-span-1 text-center bg-white border shadow-md border-1 border-rose-500 hover:bg-rose-500 p-4 rounded-md hover:text-white text-rose-500 transition duration-500 hover:bg-gradient-to-b from-rose-500 via-pink-600 to-violet-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-24 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
        </svg>
        <h3>Login Admin</h3>
    </a>
    <a href="#" class="col-span-1 text-center border bg-white border-1 shadow-md border-rose-500 hover:bg-rose-500 p-4 rounded-md hover:text-white text-rose-500 transition duration-500 hover:bg-gradient-to-b from-rose-500 via-pink-600 to-violet-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-24 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
        </svg>
        <h3>Cek Pembayaran Siswa</h3>
    </a>
    <a href="\loginSiswa" class="col-span-1 text-center border border-1 bg-white shadow-md border-rose-500 hover:bg-rose-500 p-4 rounded-md hover:text-white text-rose-500 transition duration-500 hover:bg-gradient-to-b from-rose-500 via-pink-600 to-violet-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-24 w-32" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
        </svg>
        <h3>Login Siswa</h3>
    </a>
</div>
@endsection