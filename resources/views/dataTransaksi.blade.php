@extends('layout')
@section('konten')
<div class="col-span-5 p-3">
    <div class="flex justify-between items-center">
        <div class="flex items-end">
            <h1 class="text-2xl mr-2">Transaksi Pembayaran</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transaksi Pembayaran</li>
            </ol>
        </nav>
    </div>
    <div class="border-2 border-rose-500 rounded-sm">
        <div class="text-white font-bold py-2 px-3 text-xl bg-rose-500">
            <h1>Cek Data Pembayaran Siswa</h1>
        </div>
        <div class="grid grid-cols-3 gap-6 py-3">
            <div class="col-span-1 flex items-center justify-end">
                <label class="font-semibold mr-4" for="Tahun Ajaran">Tahun Ajaran</label>
                <div class="">
                    <select class="outline-none p-2 border-2 border-gray-300 focus:border-red-500" name="n">
                        <option class="w-32" value="">-- Tahun Ajaran --</option>
                        <!-- <option value="">2020/2021</option> -->
                    </select>
                </div>
            </div>
            <div class="col-span-1 flex items-center justify-end">
                <label class="font-semibold mr-4" for="Tahun Ajaran">Cari Siswa</label>
                <input type="text" name="nis" class="p-2 outline-none border-2 border-gray-300 focus:border-red-500" placeholder="NIS Siswa">
            </div>
            <div class="col-span-1">
                <button class="bg-red-500 py-2 px-4 rounded-sm flex items-center font-semibold text-white hover:transition duration-500 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                    Cari Siswa
                </button>
            </div>
        </div>
    </div>
</div>
@endsection