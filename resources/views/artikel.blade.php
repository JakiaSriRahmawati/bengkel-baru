<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @include('template.nav')
</head>
<body>
    <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-full h-screen" alt="Gambar Galeri">
    @for ($i = 0; $i < 3; $i++)
    <div class="container mx-auto px-4 w-full my-16">
        <div class="flex flex-row gap-8">
            <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-4/12" alt="Gambar Galeri">
            <div class="flex flex-col">
                <h2 class="text-3xl font-medium">Cara Merawat Mesin</h2>
                <p class="text-xl">
                    Bengkel Mobil Bandung – Bengkel dengan layanan service terlengkap. Bisa service mobil matic maupun manual. 
                    Buka 24 jam, menerima antar jemput mobil di lokasi. Hubungi kami sekarang juga KLIK DI SINI. Ada banyak alasan 
                    mengapa seseorang mengunjungi bengkel mobil, dari untuk melakukan 
                    perawatan maupun perbaikan pada mobil yang rusak. Bengkel mobil saat ini sudah banyak […]
                </p>
                <a href="/artikel/detail" 
                    class="mt-20 text-xl text-orange-500 hover:text-gray-600">
                    Read More >
                </a>
            </div>
        </div>
        <hr class="my-6 border-gray-300">
    </div>
    @extends('template.footer')
    @endfor
</body>
</html>


    

 