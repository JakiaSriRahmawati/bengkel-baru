<nav class="bg-red-950 shadow-lg">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
        <div class="text-white text-2xl font-bold">
            <a href="{{ route('home') }}">HOME</a>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="{{ route('about') }}" class="text-white hover:text-red-300 transition">About Us</a>
            <a href="{{ route('artikel') }}" class="text-white hover:text-red-300 transition">Artikel</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-red-300 transition">Contact</a>
            <a href="{{ route('layanan') }}" class="text-white hover:text-red-300 transition">Layanan</a>
            <a href="{{ route('galery') }}" class="text-white hover:text-red-300 transition">Galery</a>
            <a href="{{ route('login') }}" class="text-white hover:text-red-300 transition">Login</a>
        </div>    
    </div>  
</nav>
