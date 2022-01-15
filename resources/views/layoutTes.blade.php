<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="flex justify-between py-2 px-3 bg-gradient-to-r from-rose-500 via-pink-600 to-violet-500 text-white">
        <h3 class="text-xl font-semibold ">E-Pembayaran SPP</h3>
        <div class="btn-group">
            <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                Administrator
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div>
    </nav>
    <main class="grid grid-cols-6 h-[92.5vh]">
        <div class="col-span-1 py-3 shadow-lg">
            <div class="space-y-1">
                <h3 class="text-gray-500 text-sm px-3 py-2">MENU</h3>
                <a href="\dashboardTes" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -ml-[2px]" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Dashboard
                </a>
                <a href="\profilTes" class="px-3 text-sm flex items-center font-semibold hover:text-black hover:bg-gray-200 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                    Profil
                </a>
            </div>
        </div>
        <div class="col-span-5 p-2">
            @yield('konten')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>