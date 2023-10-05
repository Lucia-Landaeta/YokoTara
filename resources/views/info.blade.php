<x-app-layout>
    <section class="container">
     <h1 class="mt-4 ml-2 text-lg text-gray-600 font-bold">Información </h1>
 
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