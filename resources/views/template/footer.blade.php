<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Zackk</title>
</head>
<body>
    <div class="container mx-auto mt-14 flex flex-row justify-between items-start gap-4 my-20">
        <div class="flex flex-col items-start">
          <img src="{{ Storage::url('images/contac/galerri.png') }}" class="w-36" alt="Gambar Galeri">
          <h4 class="text-blue-400 font-medium text-2xl mt-2">Spesialis motor injeksi produksi Jepang</h4>
          <span class="font-medium text-gray-600 text-xl mt-1">Jl. Raya Kedungasem No. 19 A, Rungkut, Surabaya</span>
        </div>
    
        <div class="flex flex-col items-start">
          <h4 class="text-gray-400 text-xl font-semibold mb-2">LAYANAN</h4>
          <span class="mb-1 text-lg">&gt; Tune up dan Ganti Oli</span>
          <span class="mb-1 text-lg">&gt; Mesin dan Transmisi</span>
          <span class="mb-1 text-lg">&gt; Ban dan Velg</span>
          <span class="mb-1 text-lg">&gt; Sistem Rem</span>
          <span class="mb-1 text-lg">&gt; Sistem Kelistrikan</span>
        </div>
    
        <div class="flex flex-col items-start">
          <h4 class="text-gray-400 text-xl font-semibold mb-2">TIPS MOTOR DARI ...</h4>
          <span class="mb-1 text-lg">&gt; Tips Mesin</span>
          <span class="mb-1 text-lg">&gt; Tips Kelistrikan</span>
          <span class="mb-1 text-lg">&gt; Tips servis dan Perawatan Rutin</span>
          <span class="mb-1 text-lg">&gt; Tips Perawatan Rantai dan Belt</span>
          <span class="mb-1 text-lg">&gt; Tips Cek Sistem Rem</span>
          <span class="mb-1 text-lg">&gt; Tips Menggunakan Bahan Bakar Yang Tepat</span>
        </div>
    
        <div class="flex flex-col items-start">
          <h4 class="text-gray-400 text-xl font-semibold mb-2">FOLLOW ...</h4>
          <div class="flex flex-row gap-2">
            <a href="https://www.instagram.com/username_anda" target="_blank">
              <i class="fa-brands fa-instagram text-3xl text-gray-700"></i>
            </a>
            <a href="https://www.youtube.com/channel/your_channel" target="_blank">
              <i class="fa-brands fa-youtube text-3xl text-gray-700"></i>
            </a>
            <a href="https://www.facebook.com/yourprofile" target="_blank">
              <i class="fa-brands fa-facebook text-3xl text-gray-700"></i>
            </a>
            <a href="https://wa.me/yourwhatsappphone" target="_blank">
              <i class="fa-brands fa-whatsapp text-3xl text-gray-700"></i>
            </a>
          </div>
        </div>        
        <button id="backToTop" class="fixed bottom-5 right-5 bg-gray-500 text-white p-3 rounded-lg shadow-lg hover:bg-gray-800">
          <i class="fa-solid fa-arrow-up"></i>
        </button>        
      </div>
      <div class="bg-gray-200 text-center flex flex-col">
        <span class="text-gray-500">Copyright © 2020 Bengkel Motor BOP</span>
        <span class="text-gray-500">Website by Circle Digital Media</span>
      </div>

      <script>
        const backToTopButton = document.getElementById("backToTop");
          
        backToTopButton.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
      </script>
</body>
</html>
