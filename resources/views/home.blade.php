<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Zackk</title>
</head>

<body>

    @include('template.nav')
    <div class="container mx-auto pt-4 mt-14 my-20">
        <h5 class="text-gray-600 text-2xl">Welcome to</h5>
        <h2 class="text-3xl font-serif">Bengkel Mobil Sukabumi</h2>
        <hr class="my-6 border-t-4 border-red-900 w-1/4">
        <div class="flex flex-row justify-between gap-10">
            <div class="flex flex-col w-4/12">
                <h3 class="font-bold text-3xl text-red-900">5 Tahun</h3>
                <h3 class="font-mono text-2xl text-red-900">100% Amanah</h3>
                <h3 class="font-sans text-2xl text-red-900 font-bold">Best Services</h3>
            </div>
            <p class="w-4/12 text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, blanditiis suscipit? Iste, natus soluta aspernatur
                consequatur obcaecati accusamus repudiandae voluptas nobis, tempora sed et nihil! Et nihil vel amet optio.
            </p>
            <img src="{{ Storage::url('images/depan/baru.png') }}" class="w-3/12" alt="Gambar Galeri">
        </div>
    </div>
    <div class="container mx-auto pt-4 mt-14 flex flex-row gap-12">
        <img src="{{ Storage::url('images/depan/baru.png') }}" class="w-5/12" alt="Gambar Galeri">
        <div class="w-7/12 flex flex-col">
            <span class="font-serif text-xl">Sekilas tentang</span>
            <h3 class="font-serif text-3xl text-red-950">Bengkel Motor Sukabumi</h3>
            <p class="text-lg">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus iste, veritatis maxime molestias voluptatum est expedita. Laborum odio cupiditate tempore laboriosam reiciendis delectus architecto maxime. Nemo quia officiis temporibus, reiciendis est nihil illum natus eius vero aperiam, culpa tenetur dolorem laboriosam neque unde illo voluptatibus vel, obcaecati impedit ad esse.
            </p>
            <p class="text-lg">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, autem. Tempore temporibus a vero sint aliquid! Laboriosam praesentium explicabo suscipit!
            </p>
            <a href="{{ route('about')}}" class="text-blue-600 text-lg mt-6">Read More ></a>
        </div>
    </div>
    <h4 class="font-semibold text-4xl text-red-800 text-center mt-9">Services</h4>
    <h2 class="font-bold text-4xl text-red-950 text-center">Layanan Automaster</h2>
    <div class="container mx-auto px-4 mt-14">
        <div class="grid grid-cols-3 gap-4">
            @for ($i = 0; $i < 6; $i++)
            <div class="mx-auto border border-gray-300 rounded-lg shadow-md p-6 transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-red-900 hover:to-red-700 hover:text-white hover:shadow-lg group">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-white transition-colors duration-300 ease-in-out">
                    Tune up
                </h3>
                <img src="{{ Storage::url('images/depan/baru.png') }}" class="w-5/12 transition-transform duration-300 group-hover:scale-110" alt="Gambar Galeri">
                <p class="text-gray-600 group-hover:text-white transition-colors duration-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, autem!   
                </p>
                <button  onclick="window.location.href='{{ route('layanan') }}'" class="mt-4 bg-gradient-to-r from-blue-400 to-blue-600 text-white py-2 px-4 rounded hover:bg-gradient-to-r hover:from-blue-600 hover:to-blue-800 shadow-lg hover:shadow-blue-500/50 transition-transform duration-300 hover:scale-105">
                    Lihat Selengkapnya
                </button>
            </div>
            @endfor
        </div>
    </div>
    <div class="container mx-auto mt-14 flex flex-row gap-8 justify-between">
        <div class="flex flex-col">
            <h3 class="font-semibold text-3xl mb-6">Apa yang kami kerjakan ?</h3>
            @for ($i = 0; $i < 6; $i++)
            <span class="mb-1 text-xl inline-flex items-center">
                <i class="fas fa-tools text-2xl mr-2"></i>
                Mesin dan Transmisi
            </span>
            @endfor
        </div>
        <img src="{{ Storage::url('images/mekanik/enam.png') }}" class="w-80" alt="Gambar Galeri">
        <div class="px-3 py-4 bg-gray-300 w-80 text-center rounded-lg shadow-md">
            <h4 class="text-xl mb-2 mt-6 font-semibold text-gray-800">Why us ?</h4>
            <p class="text-3xl font-great-vibes" style="font-family: 'Great Vibes', cursive;">
                Alasan Memilih Kami
            </p>
            @for ($i = 0; $i < 5; $i++)
            <button id="mobileLanguageButton" class="flex items-center space-x-2 hover:bg-gray-100 text-black rounded-[60px] px-[8px] py-[8px] my-2 bg-slate-100 w-full">
                <i class="fa-solid fa-circle-check text-xl"></i>
                <span class="text-lg font-semibold leading-7">Montir Profesional</span>
            </button> 
            @endfor                                                                                                                              
        </div> 
    </div>
    <div class="flex justify-center">
        <button id="mobileLanguageButton" onclick="window.location.href='{{ route('layanan') }}'" class="flex items-center justify-center space-x-2 hover:scale-105 text-white rounded-[50px] px-6 py-3 my-4 w-60 bg-gradient-to-r from-black to-blue-500 transition duration-300 ease-in-out">
            <span class="text-lg font-semibold leading-7 text-center">SELENGKAPNYA</span>
        </button>
    </div>
    <div class="bg-red-950 w-full">
        <div class="container mx-auto mt-14">
            <div class="flex flex-row items-center gap-4">
                <div class="flex flex-col gap-5 w-1/4">
                    <i class="fas fa-images fa-4x text-amber-600 "></i>
                    <h3 class="font-normal text-4xl text-white">Dokumentasi</h3>
                    <span class="font-serif text-5xl text-white">Galeri Foto</span>
                    <a href="{{ route('galery')}}" class="text-yellow-600 text-xl">Lebih banyak ></a>
                </div>
                <div class="flex gap-8 w-3/4">
                    @for ($i = 0; $i < 3; $i++)
                        <img src="{{ Storage::url('images/galery/one.jpg') }}" class="my-8 w-72 transform transition hover:translate-y-1 hover:rotate-2" alt="Gambar Galeri">
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="relative w-full h-screen">
        <img src="{{ Storage::url('images/depan/baruuy.jpg') }}" class="w-full h-screen object-cover" alt="Gambar Galeri">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center bg-black bg-opacity-40 p-4">
            <h3 class="text-3xl text-white font-bold mb-2">+200</h3>
            <span class="text-3xl text-white mb-2">Kami Melayani Customer</span>
            <span class="text-3xl text-white">di seluruh area Sukabumi dan sekitarnya</span>
        </div>
    </div>
    <div class="container mx-auto mt-14 flex flex-row justify-between gap-10">
        <div class="px-3 py-4 bg-gray-200 w-80 text-center rounded-lg shadow-md">
            <h4 class="text-xl mb-2 mt-6 font-semibold">New Posts!</h4>
            <p class="text-3xl font-great-vibes text-gray-800" style="font-family: 'Great Vibes', cursive;">
                Blog & Artikel
            </p>
            <a href="/artikel" 
                class="mt-20 text-xl text-orange-500 hover:text-gray-600">
                Lihat Lebih Banyak >
            </a>                                                       
        </div>
        @for ($i = 0; $i <3; $i++)
        <a href="/artikel/detail" class="relative w-96 h-64 rounded-lg shadow-md overflow-hidden group">
            <img src="{{ Storage::url('images/galery/one.jpg') }}" alt="Example Image" 
                 class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
            <div class="absolute inset-0 flex bg-black bg-opacity-50">
                <p class="text-white text-2xl font-bold pl-6">Tips Mesin</p>
            </div>
        </a>             
        @endfor
    </div>

    @include('template.footer') 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>
