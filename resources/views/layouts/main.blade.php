<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body x-data="{ open: false }" x-cloak class="antialiased position-relative">
    {{-- header --}}
    <nav class="navbar p-0 pt-3  bg-light">
        <div class="container-fluid border-bottom pb-2">
            <div class="container">

                <div class="row w-100 justify-content-between  ">
                    <div class="col-12 d-flex align-items-center justify-content-center   col-md-2">
                        <p @click="open = ! open" class="d-block d-md-none align-self-end" style="padding: 4px"><i
                                class="fa-solid fa-bars"></i></p>
                        <img src="images/something.png" alt="something" />
                    </div>
                    <form class="d-flex col-12 col-md-7 col-lg-6  align-items-center justify-content-center"
                        role="search">
                        <input class="form-control input-lg rounded-0  px-4  " type="search" placeholder="Search..."
                            aria-label="Search" style="max-width: 300px; height : 45px">
                        <button class="btn btn-success rounded-0" style="transform: translateX(-5%); height : 45px">Search</button>
                    </form>
                    <div class="col-12 col-md-3 p-4 p-md-0 d-flex justify-content-around  align-items-center ">
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>

                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>

                        </div>

                        <a class="btn btn-md btn-success">My Account</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="w-100 px-5 d-none d-md-flex py-2 ">
                <ul class="d-flex gap-4 w-100 cursor-pointer list-unstyled">
                    <li class="btn border text-success rounded-0 border-success border-top-0 border-end-0 border-start-0 "><a>Home</a></li>
                    <li class="btn "><a>Products</a></li>
                    <li class="btn "><a>Menu</a></li>
                    <li class="btn "><a>Contact</a></li>
                    <li class="btn "><a>Pages</a></li>
                    <li class="btn "><a>Blogs</a></li>
                    <li class="btn "><a>Customer</a></li>
                    <li class="btn "><a>Rider</a></li>

                </ul>
            </div>

        </div>

    </nav>

    {{-- Header --}}


    {{-- Contents --}}
    @yield('content')

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    {{-- <script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
    autoplay: {
   delay: 3000,
 },

})


</script> --}}

</body>

</html>

<style>
    .icon {
        padding: 4px;
        border-radius: 50%;
        font-size: 16px;
        width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        color: green;
        box-shadow: 0px 1px 4px 1px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .icon:hover {
        color: white;
        background-color: green;
    }
</style>
