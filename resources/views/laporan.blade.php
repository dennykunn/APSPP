@extends('layout')
@section('konten')
<div class="col-span-5 p-3 bg-gray-200">
    <div class="flex justify-between items-center">
        <div class="flex items-end">
            <h1 class="text-2xl mr-2">Laporan Keuangan</h1>
            <span class="breadcrumb-item active" aria-current="page">List</span>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laporan Keuangan</li>
            </ol>
        </nav>
    </div>
    <div class="bg-white p-2 rounded-md border-t-4 border-red-500">
        <div class="grid grid-cols-4 gap-6">
            <div class="col-span-1 input-group my-3">
                <span class="input-group-text bg-white" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                </span>
                <input type="text" id="dateawal" class="form-control bg-gray-200 outline-none" placeholder="Tanggal Awal" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="col-span-1 input-group my-3">
                <span class="input-group-text bg-white" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                </span>
                <input type="text" id="dateakhir" class="form-control bg-gray-200 outline-none" placeholder="Tanggal Akhir" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="col-span 1 my-3">
                <button class="border-2 border-red-500 text-red-500 px-4 py-2 rounded-sm font-semibold text-sm hover:ring ring-pink-500 ring-offset-2 ring-offset-pink-100 border-rose-500 hover:bg-rose-500 transtition duration-300 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-rose-500 font-semibold hover:text-white">Filter</button>
            </div>
        </div>
    </div>
</div>
@endsection