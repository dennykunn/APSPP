<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>APSPP</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#dateawal").datepicker({
                showAnim: "slideDown"
            });
        });
        $(function() {
            $("#dateakhir").datepicker({
                showAnim: "slideDown"
            });
        });
    </script>
</head>

<body class="antialiased font-mono">
    <nav class="flex justify-between py-2 px-3 bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-white">
        <h3 class="text-xl font-semibold ">E-Pembayaran SPP</h3>
        <div class="btn-group">
            <button type="button" class="text-sm dropdown-toggle flex items-center " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <div class="h-5 w-5 rounded-full bg-white mr-2"></div>
                <span>Administrator</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end mt-2">
                <li>
                    <div>
                        <div class="bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-white text-center -mt-2 -mb-2 py-4 px-16">
                            <div class="w-10 h-10 mx-auto rounded-full bg-white"></div>
                            <div class="mt-3">
                                <span>Administrator</span>
                                <span class="uppercase text-xs">SUPERUSER</span>
                                <span class="text-xs">dennykunn@gmail.com</span>
                            </div>
                        </div>
                        <div class="flex justify-between pt-[20px] pb-1 px-2">
                            <button class="p-2 rounded-sm border-2 hover:ring ring-pink-500 ring-offset-2 ring-offset-pink-100 border-rose-500 hover:bg-rose-500 transtition duration-300 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-rose-500 font-semibold hover:text-white">Profil</button>
                            <a href="\" class="px-2 py-1 rounded-sm border-2 hover:ring ring-pink-500 ring-offset-2 ring-offset-pink-100 border-rose-500 hover:bg-rose-500 transtition duration-300 hover:bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-rose-500 font-semibold hover:text-white">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <main class="grid grid-cols-6 h-[92.5vh]">
        <div class="col-span-1 py-3 shadow-lg">
            <div class="flex px-3 items-center mb-4">
                <div class="w-12 h-12 bg-black mr-2"></div>
                <div>
                    <p>Administrator</p>
                    <p class="text-sm">Online</p>
                </div>
            </div>
            <div class="space-y-1">
                <h3 class="text-gray-500 text-sm px-3 py-2">MENU</h3>
                <a href="\dashboard" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-[2px]" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Dashboard
                </a>
                <a href="\dataSiswa" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                    Data Siswa
                </a>
                <a href="\dataPetugas" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-[2px]" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    Data Petugas
                </a>
                <a href="#" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 -ml-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Data SPP
                </a>

                <a href="\dataKelas" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-[2px]" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                        <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                        <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                    </svg>
                    Data Kelas
                </a>
                <a href="\dataTransaksi" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 -ml-[1px] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    Transaksi Pembayaran
                </a>

                <a href="\dataHistory" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 -ml-[2px] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    History Pembayaran
                </a>
                <a href="\laporan" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 -ml-1 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                    </svg>
                    Laporan
                </a>

            </div>
        </div>
        @yield('konten')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>