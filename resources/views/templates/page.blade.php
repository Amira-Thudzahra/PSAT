<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>software House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark text-white">
    <nav class="bg-white w-80 p-2 m-5 d-flex justify-content-between align-items-center rounded-5 shadow postion fix">
        <div>
            <img src="/images/logoo.png" alt="ZAA_CODE Logo" style="height: 40px;">
        </div>

        <div class="d-flex gap-4">
            <a class="nav-link text-dark" href="{{ route('home') }}">Home</a>
            <a class="nav-link text-dark" href="{{ route('about') }}">About Us</a>
            <a class="nav-link text-dark" href="{{ route('contact') }}">Contact</a>
        </div>
    </nav>


    <div class="contsiner">
        {{-- yield: menyediakan tempat untuk bagian dinamis (bagian berbeda tiap halamannya) --}}
        @yield('content')
    </div>

    <footer class="bg-white w-100 py-3 d-flex justify-content-center align-items-center px-4 border-top">
        <p class="mb-0 text-dark">&copy; 2025 ZaaCode</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>
