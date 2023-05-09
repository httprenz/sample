
<?php session_start()?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SHOEI HELMETS | HEADTURNER'S</title>

    <?php
    
    include "connect.php";
    include "include/header_link.php";

    // navigation bar 
    include 'include/navbar.php';
    ?>

</head>


<body class="antialiased ">

    <section class="py-32 bg-gray-300">

        <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

            <nav id="sgoei" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                    <a class="y-30 text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline " href="#">
                        SHOEI PREMIUM HELMETS
                    </a>
                </div>
            </nav>

            <div class="flex flex-col w-full p-6 mb-10 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#" id="readProductButton" data-modal-toggle="readProductModal">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/SNPJHS8/product1-exzero.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">SHOEI Ex zero</p>
                </a>
                <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                </svg>
            </div>
            <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/KbQcdfR/product2-cheeta.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI GLAMSTER CHEETAH
            </a> CUSTOM CYCLE</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/12CPbjG/product3-offwhite.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI GLAMSTER OFFWHIT
            </a>E 1</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/ZxBzY3c/product4-ressur.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI GLAMSTER RESURRE
            </a>CTION TC10 1</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/Wx2Gk7j/product5-gt-air2.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI GT AIR 2</p>
            </a>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/ZdZYj8w/product6-neotec.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI NEOTEC 2 1</p>
            </a>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/sy7Q1wG/product7-fifteen.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI X FIFTEEN 1</p>
            </a>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/t3cBM64/product8-fourteen.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI X FOURTEEN MM93< </a>/p>
                            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                            </svg>
                </div>
                <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/6P51mgJ/product9-aerody.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI X-SPIRIT III AER
            </a>ODYNE TC-4</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/wwzHc29/product10-Z-8-ACCOLADE-NXR2-ACCOLADE.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI X14 ACCOLADE NXR
            </a>2 ACCOLADE</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/0JTByQz/product11-Z-8-ORIGAMI-NXR2-ORIGAMI.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI z8 ORIGAMI NXR2
            </a>ORIGAMI</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">
                <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/dcfMmcK/product12-Z-8-FAUST-NXR2-FAUST.png">
                <div class="flex items-center justify-between pt-3">
                    <p class="">SHOEI z8 FAUST NXR2 FA
            </a>UST</p>
            <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
            </svg>
        </div>
        <p class="pt-1 text-red-800">₱9.99</p>
        </div>

        <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
            <a href="#">

            </a> <img class="w-full transition group-hover:rotate-6 group-hover:scale-125" src="https://i.ibb.co/5Rpsszm/product13-Z-8-MM93-RETRO-NXR2-MM93-RETRO.png">
            <div class="flex items-center justify-between pt-3">
                <p class="">SHOEI z8 MM93 RETRO NXR2 MM93 RETRO</p>

                <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                </svg>
            </div>
            <p class="pt-1 text-red-800">₱9.99</p>

        </div>

        </div>

    </section>

    <section class="py-8 bg-gray-300">

        <div class="container px-6 py-8 mx-auto">

            <a class="mb-8 text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline" href="#">
                About Shoei Helmets
            </a>

            <p class="mt-8 mb-8">THE WORLD’S PREMIER HELMET MANUFACTURER
                <br>
            <p>The name SHOEI has long been synonymous with “premium” in the motorcycle helmet market-a credential that hundreds of loyal men and women in our Japan factories wear with great pride. The evolution and production of our world-class helmet line is a meticulous process that combines the very latest in technology with consumer feedback, modern testing practices, advanced materials, and 60 years of helmet building experience. Just like the very first SHOEI helmet built by our founder back in 1959, every SHOEI today is still handmade in Japan utilizing a sophisticated process that involves over 50 people for each and every helmet.</p>

        </div>

    </section>
    <!-- ====== Forms Section End -->

         <!-- For the slider to work add these links in your header :
          <link href="https://npmcdn.com/flickity@2/dist/flickity.css" rel="stylesheet" />
         -->
         <div class="flex items-center justify-center px-4 py-12 md:px-6 2xl:px-0 2xl:container 2xl:mx-auto">
            <div class="flex flex-col items-start justify-start w-full space-y-8">
                <div class="flex items-start justify-start">
                    <p class="text-3xl font-semibold leading-7 text-gray-800 lg:text-4xl lg:leading-9 dark:text-white ">Reviews</p>
                </div>
                <div class="flex flex-col items-start justify-start w-full p-8 bg-gray-50 dark:bg-gray-800">
                    <div class="flex flex-col justify-between w-full md:flex-row">
                        <div class="flex flex-row items-start justify-between">
                            <p class="text-xl font-medium leading-normal text-gray-800 md:text-2xl dark:text-white">Beautiful addition to the theme</p>
                            <button onclick="showMenu(true)" class="ml-4 md:hidden">
                                <img id="closeIcon" class="dark:hidden" src="../svg/svg2.svg" alt="stars"/>
                                <img id="closeIcon" class="hidden dark:block" src="../svg/svg2.svg" alt="stars"/>
                                <img id="openIcon" class="hidden transform rotate-180 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg2.svg

" alt="stars"/>
                                <img id="openIcon" class="hidden transform rotate-180 dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg2.svg

" alt="stars"/>
                                
                            </button>
                        </div>
                        <div class="mt-2 cursor-pointer md:mt-0">
                           <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg1.svg" alt="stars"/>
                           <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg1dark.svg" alt="stars"/>
                        </div>
                    </div>
                    <div id="menu" class="md:block">
                        <p class="w-full mt-3 text-base leading-normal text-gray-600 dark:text-white md:w-9/12 xl:w-5/6">When you want to decorate your home, the idea of choosing a decorative theme can seem daunting. Some themes seem to have an endless amount of pieces, while others can feel hard to accomplish</p>
                        <div class="flex-row items-start justify-start hidden mt-6 space-x-4 md:flex">
                            <div>
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-1" />
                            </div>
                            <div>
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-2" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-3" />
                            </div>
                            <div class="hidden md:block">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-4" />
                            </div>
                        </div>
                        <div class="pt-8 md:hidden carousel cursor-none" data-flickity='{ "wrapAround": true,"pageDots": false }'>
                            <div class="carousel-cell">
                                <div class="relative h-full md:w-full">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="bag" class="object-cover w-full h-full object-fit" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="relative h-full md:w-full">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="shoes" class="object-cover w-full h-full object-fit" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="relative h-full md:w-full">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="object-cover w-full h-full object-fit" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="relative h-full md:w-full">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="object-cover w-full h-full object-fit" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="relative h-full md:w-full">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="wallet" class="object-cover w-full h-full object-fit" />
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="relative h-full md:w-full">
                                    <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="wallet" class="object-cover w-full h-full object-fit" />
                                </div>
                            </div>
                            <div class="carousel-cell"></div>
                        </div>
                        <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                            <div>
                                <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
                            </div>
                            <div class="flex flex-col items-start justify-start space-y-2">
                                <p class="text-base font-medium leading-none text-gray-800 dark:text-white">Anna Kendrick</p>
                                <p class="text-sm leading-none text-gray-600 dark:text-white">14 July 2021</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="flex flex-col items-start justify-start w-full py-8 bg-gray-50 dark:bg-gray-800 md:px-8">
                        <div class="flex flex-col justify-between w-full md:flex-row">
                            <div class="flex flex-row items-start justify-between">
                                <p class="text-xl font-medium leading-normal text-gray-800 md:text-2xl dark:text-white">Comfortable and minimal, just how I like it!</p>
                                <button onclick="showMenu2(true)" class="ml-4 md:hidden">
                                    <img id="closeIcon2" class="dark:hidden" src="../svg/svg2.svg" alt="stars"/>
                                    <img id="closeIcon2" class="hidden dark:block" src="../svg/svg2.svg" alt="stars"/>
                                    <img id="openIcon2" class="hidden transform rotate-180 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg2.svg" alt="stars"/>
                                    <img id="openIcon2" class="hidden transform rotate-180 dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg2dark.svg" alt="stars"/>
                                </button>
                            </div>
                            <div class="mt-2 cursor-pointer md:mt-0">
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg1.svg" alt="stars"/>
                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productReview1-svg2.svg" alt="stars"/>
                            </div>
                        </div>
                        <div id="menu2" class="hidden md:block">
                            <p class="w-full mt-3 text-base leading-normal text-gray-600 dark:text-white md:w-9/12 xl:w-5/6">This style relies more on neutral colors with little to no embellishment on furniture. Lighter fabrics, such as silk and cotton, are popular, as are lighter colors in wood and metal.</p>
                            <div class="flex flex-row items-start justify-start mt-6 space-x-4">
                                <div class="px-8 py-4 bg-gray-100">
                                    <img src="https://i.ibb.co/xfg5T5T/sam-moqadam-kvmds-Tr-GOBM-unsplash-removebg-preview-1.png" alt="chair-5" />
                                </div>
                                <div class="px-8 py-4 bg-gray-100">
                                    <img src="https://i.ibb.co/54F7vvV/Group-1855.png" alt="chair-6" />
                                </div>
                            </div>
                            <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                                <div>
                                    <img src="https://i.ibb.co/RCTGZTc/Mask-Group-1.png" alt="girl-avatar" />
                                </div>
                                <div class="flex flex-col items-start justify-start space-y-2">
                                    <p class="text-base font-medium leading-none text-gray-800 dark:text-white">James Schofield</p>
                                    <p class="text-sm leading-none text-gray-600 dark:text-white">23 June 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .carousel-cell {
                width: 150px;
                height: 150px;
    
                margin-right: 24px;
                counter-increment: carousel-cell;
            }
    
            .carousel-cell:before {
                display: block;
                width: 20%;
            }
    
            .flickity-slider {
                position: absolute;
                width: 100%;
                height: 100%;
                left: -260px !important;
            }
    
            .flickity-button {
                position: absolute !important;
                inset: 0 !important;
                top: 50% !important;
                left: 80% !important;
                background: white;
                border: 0px;
                color: #27272a;
            }
    
            .flickity-prev-next-button:hover {
                background-color: #27272a;
                color: white;
            }
    
            .flickity-prev-next-button.previous {
                visibility: hidden;
            }
    
            .flickity-prev-next-button.next {
                margin-left: 50px;
                width: 48px;
                height: 48px;
                visibility: hidden;
            }
    
            .flickity-enabled.is-draggable .flickity-viewport {
                cursor: none;
                cursor: default;
            }
    
            .flickity-prev-next-button .flickity-button-icon {
                margin-left: 2px;
                margin-top: 2px;
                width: 24px;
                height: 24px;
            }
        </style>
      
      
    

    <?php
    // navigation bar 
    include 'include/contact.php';
    // navigation bar 
    include 'include/footer.php';
    // footer link
    include "include/footer_link.php";
    ?>



</body>

</html>