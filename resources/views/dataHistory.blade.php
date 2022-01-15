@extends('layout')
@section('konten')
<div class="col-span-5 p-3 bg-gray-200">
    <div class="flex justify-between items-center">
        <div class="flex items-end">
            <h1 class="text-2xl mr-2">History</h1>
            <span class="breadcrumb-item active" aria-current="page">List</span>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">History</li>
            </ol>
        </nav>
    </div>
    <div class="bg-white p-2 rounded-md border-t-4 border-violet-500">
        <div class="flex justify-between">
            <div>
                <a href="#" class="flex items-center px-3 py-1 bg-emerald-500 rounded-full text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Tambah
                </a>
            </div>
            <div class="flex items-center ">
                <input class="border-y-2 rounded-full border-l-2 outline-none border-violet-500 pl-3 pr-10 py-[2px]" type="text" placeholder="NIS Siswa">
                <button class="py-1 px-2 -ml-[38px] border-2  rounded-full bg-violet-500 border-violet-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <table class="table table-hover text-sm mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Tgl. Bayar</th>
                    <th>Bln. Bayar</th>
                    <th>Thn. Bayar</th>
                    <th>ID SPP</th>
                    <th>Jml. Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Denny Firmansyah</td>
                    <td>1234</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>1234</td>
                    <td>-</td>
                    <td class="flex space-x-2">
                        <a href="#" class="flex items-center px-2 py-1 bg-blue-500 rounded-sm text-white">
                            Edit
                        </a>
                        <button class="flex items-center px-2 py-1 bg-red-500 rounded-sm text-white">
                            Delete
                        </button>

                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection