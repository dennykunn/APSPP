<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased font-mono">
    <nav class="flex justify-between py-2 px-3 bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-white">
        <h3 class="text-xl font-semibold cursor-pointer">E-Pembayaran SPP</h3>
    </nav>
    <main class="px-3 mt-8">
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
        <div class="flex justify-center mt-4">
            <a class="px-5 py-2 hover:transition duration-500 hover:scale-110 hover:text-white font-semibold rounded-full text-red-500 hover:easy-is-out border-2 border-red-500 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500" href="\">CANCEL</a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>