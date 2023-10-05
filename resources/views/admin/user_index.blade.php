@vite(['resources/css/app.css', 'resources/js/app.js'])
<main class="min-h-screen w-full bg-gray-100 text-gray-700">
    <!-- navbar-->
    <x-own.nav_admin />
    <div class="flex">
        <!-- menu lateral -->
        <x-own.sidebar />
        <!-- contenido -->
        <div class="w-full p-4">
            contenido
        </div>
    </div>
</main>
