<x-app-layout>
    <section class="bg-cover mb-0.5 shadow" style="background-image: url({{ asset('img/port2.jpg') }})">
        <div class="container py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Información importante</h1>
                <p class="text-white text-2xl mb-6">Preguntas frecuentes</p>
            </div>
        </div>
    </section>
    <section class="container"> 
     <article class="mt-4" x-data="{open: false}">
         <header class="border border-gray-200 px-4 py-2 curser-pointer bg-gray-200" x-on:click="open=!open">
             <h1 class="text-lg text-gray-600 font-bold">Título</h1>
         </header>
         <div class="bg-white py-2 px-4 " x-show="open">
             <ul class="grid grid-cols-1 gap-3">
                 <li class="text-gray-700 text-base">
                     <i class="fa-solid fa-paw mr-2"></i> Párrafo
                 </li>
                 <li class="text-gray-700 text-base">
                     <i class="fa-solid fa-paw mr-2"></i>Párrafo
                 </li>
                 <li class="text-gray-700 text-base">
                     <i class="fa-solid fa-paw mr-2"></i>Párrafo
                 </li>
             </ul>
         </div>
     </article>
    </section>
 </x-app-layout>