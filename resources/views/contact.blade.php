<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satoshi:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
    @include('template.nav')
</head>
<body>
    <div class="relative w-full h-screen">
        <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-full h-screen object-cover" alt="Gambar Galeri">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <h3 class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-5xl font-bold text-white text-center leading-[70px]">
                Kunjungi Kami<br>
                <span class="text-5xl font-bold whitespace-nowrap">Dapatkan Perawatan Terbaik Mobil Anda</span>
            </h3>
            <h3 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-0 text-amber-600 font-bold text-5xl text-center mt-12">
                Hindari Antrian Lama<br>
                <span class="text-blue-400 text-4xl leading-loose">Gunakan Fasilitas Booking Service Online</span>
                <button class="bg-gradient-to-r from-amber-500 to-red-500 text-white text-xl font-semibold py-3 px-6 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 ease-in-out">
                    Booking Sekarang
                </button>
            </h3>
        
    </div>
    
    <div class="flex flex-col bg-gray-200">
    <h1 class="font-semibold text-blue-500 text-center text-5xl leading-relaxed">Contact Us</h1>
        <div class="container mx-auto leading-10">
          <div class="w-full">
            <span class="text-xl">Hubungi Kami</span>
            <h3 class="text-3xl font-serif">Bengkel Mobil Bandung</h3>
            <div class="flex flex-row gap-3">
                <i class="fa-solid fa-location-dot text-3xl"></i>
                <span class="text-xl">Sukabumi – Jawa Barat</span>
            </div>
            <a href="https://wa.me/6287809787675" target="_blank" class="flex flex-row items-center gap-3">
                <i class="fa-brands fa-whatsapp text-3xl"></i>
                <span class="text-blue-500 text-xl">0878 0978 7675</span>
            </a>
            <a href="mailto:jakiasrirahmawatiiii@gmail.com" class="flex flex-row items-center gap-3">
                <i class="fa-solid fa-envelope text-3xl"></i>
                <span class="text-blue-500 text-xl">jakiasrirahmawatiiii@gmail.com</span>
            </a>
            <hr class="my-6 border-gray-400 w-3/12">
            <div class="flex flex-row gap-4">
                <a href="https://www.facebook.com/yourprofile" target="_blank" class="text-blue-600 text-2xl hover:text-blue-800">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/yourprofile" target="_blank" class="text-blue-500 text-2xl hover:text-blue-700">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.youtube.com/yourchannel" target="_blank" class="text-red-600 text-2xl hover:text-red-800">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/yourprofile" target="_blank" class="text-pink-500 text-2xl hover:text-pink-700">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            

            <div class="w-1/4 p-4 bg-white shadow-md rounded-lg my-6">
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
    @include('template.footer')

</body>
</html>