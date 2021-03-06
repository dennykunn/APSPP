@extends('layoutForm')
@section('konten')
<form class="bg-white w-[400px] p-12 shadow-md rounded-lg" method="GET" action="\dashboard">
    <div class="flex flex-col items-center mb-8">
        <h1 class="text-xl font-semibold mb-1">LOGIN ADMIN</h1>
        <p class="h-[2px] w-[130px] bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500"></p>
    </div>
    <div class="font-bold text-sm space-y-6">
        <p>
            <label class="">Username</label>
            <br>
            <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="text" name="username" />
        </p>
        <p>
            <label>Password</label>
            <br>
            <input class="py-2 outline-none border-b-[2px] border-rose-100 w-full focus:border-rose-500" type="password" name="password" />
        </p>
    </div>
    <div class="flex flex-col items-center mt-12">
        <button class="w-32 py-1 rounded-full border-2 hover:ring ring-pink-500 ring-offset-2 ring-offset-pink-100 border-rose-500 hover:bg-rose-500 transtition duration-300 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-rose-500 font-semibold hover:text-white">LOGIN</button>
        <a class="text-sm text-rose-500 mt-2" href="\">Kembali?</a>
    </div>
</form>
@endsection