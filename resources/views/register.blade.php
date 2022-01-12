@extends('layoutForm')
@section('konten')
<form class="bg-white w-[500px] p-12 shadow-md rounded-lg">
    <div class="flex flex-col items-center mb-8">
        <h1 class="text-xl font-semibold mb-1">REGISTER</h1>
        <p class="h-[2px] w-[130px] bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500"></p>
    </div>
    <div class="font-bold text-sm space-y-6">
        <p class="">
            <label>Nama</label>
            <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="text" class="form-control" name="nama">
        </p>
        <div class="grid grid-cols-2 gap-3">
            <p class="col-span-1">
                <label>NISN</label>
                <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="text" class="form-control" name="nisn">
            </p>
            <p class="col-span-1">
                <label>NIS</label>
                <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="text" class="form-control" name="nis">
            </p>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <p class="col-span-1">
                <label>TELP</label>
                <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="text" class="form-control" name="telp">
            </p>
            <p class="col-span-1">
                <label>Username</label>
                <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="text" class="form-control" name="username">
            </p>
        </div>
        <p class="p">
            <label>Password</label>
            <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="password" class="form-control" name="password">
        </p>
    </div>
    <div class="flex flex-col items-center mt-12">
        <button class="w-32 py-1 rounded-full border-2 hover:border-pink-500 border-rose-500 hover:bg-rose-500 transtition duration-300 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-rose-500 font-semibold hover:text-white">LOGIN</button>
        <a class="text-sm text-rose-500 mt-2" href="\loginSiswa">Kembali?</a>
    </div>
</form>
@endsection