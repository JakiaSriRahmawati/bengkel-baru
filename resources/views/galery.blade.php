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
    <div class="container mx-auto py-16 px-4 lg:px-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Galeri Foto</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 justify-center">
            @for ($i = 0; $i < 6; $i++)
                <div class="relative group overflow-hidden rounded-xl shadow-lg">
                    <img src="{{ Storage::url('images/galery/one.jpg') }}" 
                         class="w-full h-72 object-cover transform scale-100 transition-all duration-700 group-hover:scale-105 group-hover:blur-[1px]" 
                         alt="Gambar Galeri">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out"></div>
                    <div class="absolute inset-0 flex flex-col justify-end p-6 translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700 ease-out">
                        <span class="text-white text-2xl font-semibold mb-2">Judul Foto</span>
                        <span class="text-gray-300 text-lg">Lihat Detail</span>
                    </div>
                </div>
            @endfor
        </div>
    </div>
        
    
    
    
{{-- <div class="container">
    @for ($i = 0; $i < 6; $i++)
    <img src="{{ is_array($data['images']) ? $data['images'][0] : $data['images'] }}" class="" alt="Image">
    @endfor
</div> --}}
@include('template.footer')

</body>
</html>

 