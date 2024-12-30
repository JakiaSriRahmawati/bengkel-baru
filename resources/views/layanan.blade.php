@extends('template.index')

    <div class="relative w-full h-screen">
        <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-full h-screen object-cover" alt="Gambar Galeri">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <h3 class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-6xl font-bold text-white text-center leading-[70px]">
                Daftar Layanan Service<br>
                <span class="text-4xl font-bold whitespace-nowrap text-blue-400">Bengkel Mobil BOP Spesialis Mobil Injeksi Produksi Jepang</span>
            </h3>
            <p class="absolute w-full top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-0 text-white font-normal text-2xl text-center mt-10">
                Nikmati service yang lebih nyaman dengan fasilitas Booking Service. Dengan daftar fasilitas ini, anda tak perlu antri lama untuk mendapatkan pelayanan. Karena waktu anda begitu berharga<br>
                {{-- <button onclick="window.location.href='{{ route('booking.create') }}'" class="mt-10 bg-gradient-to-r from-amber-500 to-blue-500 text-white text-xl font-semibold py-3 px-6 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 ease-in-out">
                    Booking Service
                </button> --}}
            </p>
    </div>

    <div class="bg-red-950 w-full">
        <div class="container mx-auto">
            <div class="flex flex-wrap gap-4">
                <div class="flex justify-center items-center flex-col">
                    <h1 class="font-bold text-5xl text-white my-2">Layanan Service</h1>
                    <p class="text-xl text-white font-normal my-3">
                        Mobil anda kan mendapatkan penanganan dari para mekanik kami yang handal. Didukung peralatan standar 
                        bengkel modern termasuk alat scan dan remap ECU yang akan mengembalikan performa mobil anda seperti baru.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis odio facere. Quas saepe similique repudiandae, sequi ad fuga dolorem? Asperiores facilis voluptas nobis iure quo libero! Assumenda, corporis iusto!
                    </p>
                </div>
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap gap-14 justify-center">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="flex flex-col items-center gap-4 w-1/4">
                                <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-full h-96 object-cover" alt="Gambar Galeri">
                                <h3 class="text-white text-2xl font-semibold">Tune Up - Ganti Oli</h3>
                                <p class="text-white text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam quia, eligendi explicabo reprehenderit rem et laudantium unde. Odit, doloremque!
                                </p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 w-full my-16">
        <h1 class="text-center text-5xl font-bold text-red-950 mb-3">Kapan Waktunya Service ?</h1>
        <h4 class="text-center text-4xl font-bold mb-12">Simak penjelasan ini</h4>
        
        <div class="flex flex-wrap gap-8 justify-center">
            @for ($i = 0; $i < 6; $i++)
                <div class="flex flex-col items-start w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-4">
                    <h2 class="font-bold text-red-950 text-2xl mb-4">Ganti Oli Mesin</h2>
                    <p class="text-lg">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis aut dolorum et explicabo nisi autem rerum, vel ratione. Libero, est?
                    </p>
                </div>
            @endfor
        </div>
    </div>

    <div class="flex flex-col items-center justify-center text-center py-10">
        <h1 class="text-red-950 text-5xl font-bold">Bebas Antrian Lama</h1>
        <span class="font-bold text-4xl mt-4">dengan booking service online</span>
        <p class="text-gray-500 text-xl mt-4">
            Kami sangat menghargai waktu anda dan memberikan prioritas kepada pelanggan yang telah melakukan booking service online.
        </p>
    
        {{-- <button onclick="window.location.href='{{ route('booking.create') }}'" class="bg-gradient-to-r from-black to-red-500 text-white text-xl font-semibold py-3 px-6 rounded-full shadow-lg mt-6 hover:shadow-xl hover:scale-105 transition-all duration-300 ease-in-out">
            Booking Service
        </button> --}}
    </div>
    
