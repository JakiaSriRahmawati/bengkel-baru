<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satoshi:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
    @include('template.nav')
</head>
<body>
    <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-full " alt="Image">
<div class="container mx-auto px-4">
<h3 class="font-bold text-5xl text-red-950 text-center">Automaster Bengkel</h3>
    <div class="container flex flex-row mt-14 gap-10">
        <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-3/5" alt="Image">
        <div class="flex flex-col w-2/5 text-xl">
            <ul class="gap-10">
                <li>
                    Automaster Bengkel selalu menyediakan paket-paket menarik yang membuat pengeluaran pelanggannya lebih hemat.
                </li>
                <li>
                    Kami akan memastikan setiap suku cadang yang digunakan adalah orisinil. Penggunaan komponen asli memiliki beberapa keuntungan salah satunya mesin mobil jauh lebih awet.
                </li>
                <li>
                    Anda harus tahu bahwa seluruh teknisi di Automaster Bengkel resmi sudah dilatih khusus untuk menguasai produk-produk dari merek bersangkutan.
                </li>
            </ul>
        </div>
    </div>
    <p class="text-xl my-6">
        Kami siap melayani anda dengan sepenuh hati!… semua keluhan anda akan berusaha kami selesaikan dengan baik karena 
        AutomasterBengkel merupakan Bengkel yang Berkualitas dan telah teruji dengan berbagai macam penghargaan.
    </p>
    <div class="w-full h-1 bg-gray-400 shadow-sm rounded-sm my-4"></div> 
    <div class="container mx-auto px-4 w-full">
        <div class="flex flex-row gap-10">
            <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-1/2" alt="Image">
            <div class="flex flex-col w-1/2">
                <h1 class="text-4xl text-red-950 font-bold">SEJARAH</h1>
                <span class="text-3xl text-red-950 font-semibold">Automaster Bengkel</span>
                <ul class="text-xl">
                    <li>
                        Kami berdiri sejak tahun 2010. Telah banyak pengalaman yang kami dapatkan dalam 
                    melayani konsumen untuk memperbaiki kendaraannya. Berbagai macam kendaraan telah kami tangani dengan baik. 
                    Kemajuan teknologijuga tidak kami abaikan begitu saja, karena kami terus mengikuti tuntutan pasar. 
                    Kualitas tenaga ahli yang berkompeten adalah keunggulan kami untuk mencapai kepuasan pelanggan. 
                    Selain itu, ruang tunggu yang nyamanjuga menjadi bentuk bahwa kami terus berkeinginan untuk memfasilitasi pelanggan.
                    </li>
                    <li>
                        Kini Autonaster hadir di Antapani dan Bojongsoang, lalu dalam beberapa bulan ke depan bakal hadir di 
                    Jalan Veteran. Beberapa prestasi telah kami terima. salah satunya adalah The Best 
                    Quality Toko Model Bridgestone 2016.Ini adalah sebuah bukti bahwa Automaster selalu memprioritaskan.
                    </li>
                </ul>   
            </div>
        </div>
        <div class="w-full h-1 bg-gray-400 shadow-sm rounded-sm my-4"></div> 
    </div>

    <h1 class="text-red-950 font-bold text-center text-5xl">Visi & Misi Automaster Bengkel</h1>
    <span class="text-red-900 text-2xl font-bold">Visi</span>
    <p class="text-xl">
        Menjadi Bengkel yang berkualitas untuk perbaikan dan perawatan Mobil dengan mengutamakan kepuasan pelanggan.
    </p>
    <span class="text-red-900 text-2xl font-bold">Misi</span>
    <ul class="text-xl flex flex-col">
        <li>- Memberikan layanan servis mobil dengan peralatan canggih dan tenaga ahli yang kompeten, serta fasilitas ruang tunggu yang nyaman.</li>
        <li>- Membangun relasi sosial dengan Komunitas Mobil di Bandung.</li>
    </ul>
    <div class="w-full h-1 bg-gray-400 shadow-sm rounded-sm my-4"></div> 
</div>
<div class="flex items-center justify-center bg-gray-200">
    <div class="container mx-auto">
      <div class="w-full">
        <div class="w-full p-4 bg-white shadow-md rounded-lg my-16">
          <h1 class="text-2xl font-semibold text-gray-800">Location</h1>
          <a 
            href="https://www.google.com/maps?q=Melbourne" 
            target="_blank" 
            class="relative w-full h-80 rounded-md overflow-hidden block">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.628797913694!2d106.92588219999999!3d-6.934891899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6848182063ba19%3A0xcc6bd9bbe54d5cb7!2sSMKN%202%20Sukabumi!5e0!3m2!1sid!2sid!4v1734081166007!5m2!1sid!2sid"
              class="w-full h-full border-0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </a>
        </div>
      </div>
    </div>
</div>
@extends('template.footer')
    
</body>
</html>