<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Untuk Koslow ygy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;0,800;1,500&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navigasi -->
    <nav class="shadow-xl bg-white">
        <div
            class="container w-11/12 md:w-10/12 px-2 flex justify-between items-center text-color1 font-bold mx-auto py-3 my-2 mt-0">
            <span>PT. SARO SARA SEMESTA</span>
            <div class="hidden md:flex gap-3 font-normal items-center">
                <a href="" class="">Beranda</a>
                <a href="" class="nav-active">Produk</a>
                <a href="">Galeri</a>
                <a href="">Tentang</a>
            </div>
            <button onclick="navBuka()" class="w-7  py-3 my-2 flex flex-col gap-1 md:hidden">
                <div class="bg-color1 h-[3px] w-full origin-right duration-75 "></div>
                <div class="bg-color1 h-[3px] w-full origin-right duration-75 "></div>
            </button>
        </div>
    </nav>

    <div id="navTutup"
        class="fixed z-[1000] w-full h-full top-0 bg-stone-400/50 backdrop-blur-sm duration-75 -left-full">
        <div class="w-1/2 h-full bg-white shadow-s1">
            <div class="text-[10px] text-center text-color1 p-3 shadow-sm"><b>PT. SATO SARA SEMESTA</b></div>
            <div class="text-sm text-stone-700 pt-4 ">
                <b class="pl-4 text-[12px]">Menu</b>
                <ul class="font-normal text-stone-600 text-[10px] w-full">
                    <li class="m-2 py-1 mr-0 menu-active"><a class="pl-4" href="">Beranda</a></li>
                    <li class="m-2 py-1 mr-0"><a class="pl-4" href="">Produk</a></li>
                    <li class="m-2 py-1 mr-0"><a class="pl-4" href="">Galeri</a></li>
                    <li class="m-2 py-1 mr-0"><a class="pl-4" href="">Tentang</a></li>
                </ul>

            </div>
            <hr>
            <div class="text-sm text-stone-700 pt-4 ">
                <b class="pl-4 text-[12px]">Kategori</b>
                <ul class="font-normal text-stone-600 text-[10px] w-full">
                    <li class="m-2 py-1 mr-0"><a class="pl-4" href="">Kategori 1</a></li>
                    <li class="m-2 py-1 mr-0"><a class="pl-4" href="">Kategori 2</a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- End Navigation -->

    <div class="">

        <div class=" text-stone-600">
            <!-- Start Slideshow -->
            <div class="overflow-hidden rounded w-full relative">
                <figure id="slider" class="flex duration-75 left-0">
                    <img class="w-full hidden" src="https://picsum.photos/1024/300?random=1" alt="">
                    <img class="w-full hidden" src="https://picsum.photos/1024/300?random=2" alt="">
                    <img class="w-full hidden" src="https://picsum.photos/1024/300?random=3" alt="">
                </figure>
                <div
                    class="font-extrabold md:text-[50px] flex absolute top-[50%] translate-y-[-50%] w-full justify-between text-white px-4">
                    <button class="opacity-50 hover:opacity-100" onclick="left()">&#9664</button>
                    <button class="opacity-50 hover:opacity-100" onclick="right()">&#9654</button>
                </div>
            </div>
            <!-- EndSlide -->

            <!-- Content -->
            <section>
                <div class="container w-11/12 md:w-10/12 lg:1/2 my-3 mx-auto text-stone-600">
                    @yield('container')
                </div>
            </section>
            <!-- End Content -->





        </div>
        <!-- Footer -->
        <footer class=" px-2 text-center py-2 shadow-2xl md:flex justify-center gap-2 bg-stone-900 text-stone-300">
            <div class="mb-10 md:mb-0 md:w-1/3 md:text-left">
                <div class="font-bold mb-2 text-sm">Tentang Kami</div>
                <div class="text-[10px] font-medium">Lor`em ipsum dolor sit amet, consectetur adipisicing elit. Qui
                    quibusdam ipsum cum. Molestias totam aliquid consequuntur neque, magnam soluta nulla odio
                    necessitatibus pariatur? Recusandae cum distinctio eos eligendi ex repudiandae.</div>
            </div>
            <div class="md:text-left">
                <div class="font-bold mb-2 text-sm">Kontak Kami</div>
                <div class="text-[10px] font-medium">
                    <b>PT. SARA SEMESTA</b>
                    <p>Jln, Hasyim Ashari (Jl. Kemuliaan)
                        <br>
                        No. 100, Cipandoh Tangerang <br>
                        Banten, 51468 Indonesia
                    </p>
                </div>
            </div>

        </footer>
        <!-- End Footer -->
        <script src="js/script.js"></script>
        <script>
            let indexOf = 0;
            let slider = document.querySelector('#slider');
            slider.children[0].classList.remove('hidden');

            function right() {
                indexOf += 1;
                for (let i = 0; i < slider.children.length; i++) {
                    slider.children[i].classList.add('hidden');
                }
                if (indexOf >= slider.children.length) {
                    indexOf = 0;
                }
                slider.children[indexOf].classList.remove('hidden');
            }

            function left() {
                indexOf -= 1;
                for (let i = 0; i < slider.children.length; i++) {
                    slider.children[i].classList.add('hidden');
                }
                if (indexOf == -1) {
                    indexOf = slider.children.length - 1;
                }
                slider.children[indexOf].classList.remove('hidden');
            }

            setInterval(right, 5000);
        </script>
</body>

</html>
