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
    <div class="justify-center items-center flex flex-col mt-8">
        <img src="{{ Storage::url('images/contac/galerri.png') }}" class="object-cover" alt="Gambar Galeri">
        <h1 class="font-normal text-4xl">Tips Merawat Mesin</h1>
    </div>
    <div class="container mx-auto px-4">
        <p class="text-lg my-5">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam voluptatem ut accusantium cum beatae veniam dolor earum sequi nobis voluptatum. Deleniti sint, veritatis aspernatur culpa nemo doloribus modi nisi ea.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos corporis consequuntur ducimus porro amet alias consequatur debitis perferendis dolorem rerum laboriosam suscipit, facilis officia totam ut incidunt, ipsum optio excepturi.
        </p>
        <p class="text-lg my-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ea repellat, libero atque unde maxime voluptatibus qui amet aspernatur magnam ducimus rem officia dicta labore autem tenetur commodi culpa cupiditate!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit atque aliquam dolorem dolor officiis mollitia cum sed nisi non omnis quam, alias quae vero a aliquid ut. Repellat, blanditiis consequuntur!
        </p>
        <p class="text-lg my-5">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis soluta doloremque quos id aliquid? Nobis fugiat itaque voluptatem delectus sint minima adipisci quia libero rerum! Eos labore repellendus eius sapiente!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis impedit mollitia aliquam rem, reiciendis quos eos excepturi, maxime, sit aut ab tempora iste quasi obcaecati quae. Voluptas alias maxime eveniet.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel culpa distinctio amet rem, quod, perferendis iusto nisi delectus incidunt voluptatibus aspernatur aut! Labore, temporibus. Ad consequuntur temporibus quibusdam quasi alias?
        </p>
        <div class="flex flex-col">
            <h3 class="my-5 text-2xl font-medium">Layanan Kami</h3>
            <span class="mb-1 text-lg before:content-['\2022'] before:text-3xl before:mr-2">Mesin dan Transmisi</span>
            <span class="mb-1 text-lg before:content-['\2022'] before:text-3xl before:mr-2">Mesin dan Transmisi</span>
            <span class="mb-1 text-lg before:content-['\2022'] before:text-3xl before:mr-2">Mesin dan Transmisi</span>
            <span class="mb-1 text-lg before:content-['\2022'] before:text-3xl before:mr-2">Mesin dan Transmisi</span>
            <span class="mb-1 text-lg before:content-['\2022'] before:text-3xl before:mr-2">Mesin dan Transmisi</span>
            <span class="mb-1 text-lg before:content-['\2022'] before:text-3xl before:mr-2">Mesin dan Transmisi</span>
        </div>
        <p class="text-lg my-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque inventore quisquam obcaecati excepturi pariatur, natus a architecto ad animi vero quam quaerat nostrum repellat nemo quos! Quaerat accusamus accusantium animi?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque hic sunt sequi nemo odit ducimus voluptas vel porro quam blanditiis illum distinctio possimus consequatur, perferendis quo magni quae optio aliquam.
        </p>
        <p class="text-lg my-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque inventore quisquam obcaecati excepturi pariatur, natus a architecto ad animi vero quam quaerat nostrum repellat nemo quos! Quaerat accusamus accusantium animi?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque hic sunt sequi nemo odit ducimus voluptas vel porro quam blanditiis illum distinctio possimus consequatur, perferendis quo magni quae optio aliquam.
        </p>
        <p class="text-lg my-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque inventore quisquam obcaecati excepturi pariatur, natus a architecto ad animi vero quam quaerat nostrum repellat nemo quos! Quaerat accusamus accusantium animi?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque hic sunt sequi nemo odit ducimus voluptas vel porro quam blanditiis illum distinctio possimus consequatur, perferendis quo magni quae optio aliquam.
        </p>
        
    </div>
    @include('template.footer')

</body>
</html>

 

