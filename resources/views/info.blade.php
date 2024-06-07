<x-app-layout>
    <div class="h-16"></div>
    <section class="bg-cover mt-0.5 mb-0.5 shadow" style="background-image: url({{ asset('img/port2.jpg') }})">
        <div class="container py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Información importante</h1>
                <p class="text-white text-2xl mb-6">Preguntas frecuentes</p>
            </div>
        </div>
    </section>
    <section class="container"> 
     <article class="mt-4" x-data="{open: false}">
         <header class="border border-gray-200 px-4 py-2 curser-pointer bg-amber-500 rounded-lg" x-on:click="open=!open">
             <h3 class="text-lg text-gray-600 font-bold">¿Quiénes somos?</h3>
         </header>
         <div class="bg-white py-2 px-4 " x-show="open">
             <ul class="grid grid-cols-1 gap-3">
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">YokoTara es un grupo compuesto por voluntarios que comparten el respeto por la vida de los animales y busca concientizar sobre la importancia de la tenencia responsasble de animales.</span> 
                </li>
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">                Se busca luchar contra el abandono, el maltrato animal.
                        Educar sobre el respeto por la vida de y la tenencia responsable de los animales.
                        Concientizar sobre la importancia de las castraciones como único método ético de control de la superpoblación animal.
                        Realizar seguimineto de los casos para acompañar no solo a los animales, si no tambien a las personas en el proceso de incluir a un animalito a sus vidas.</span> 
                </li>
             </ul>
         </div>
     </article>
     <article x-data="{open: false}">
        <h2 class="text-xl text-gray-500 font-bold my-3 ml-2">Preguntas frecuentes</h2>
        <header class="border border-gray-200 px-4 py-2 curser-pointer bg-amber-500 rounded-lg" x-on:click="open=!open">
           <h3 class="text-lg text-gray-600 font-bold">Condiciones de adopción</h3>
       </header>
       <div class="bg-white py-2 px-4 " x-show="open">
           <ul class="grid grid-cols-1 gap-3">
            <li class="text-gray-700 text-base">
                <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">Ser mayor de 21 años.</span> 
            </li>
            <li class="text-gray-700 text-base">
                <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">Contar con los medios y el tiempo para dedicarle a la mascota.</span> 
            </li>
            <li class="text-gray-700 text-base">
                <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                    Tener buena predisposición: se realices una entrevista con un moderador encargado donde se informara la situación particular del animalito.</span> 
            </li>
            <li class="text-gray-700 text-base">
                <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                    Se debe aceptar y cumplir con los seguimientos realizados por los moderadores encargados.</span> 
            </li>
            <li class="text-gray-700 text-base">
                <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                    Comprometerse con el cuidado, tiempo de calidad y muy importante la castración de la mascota.</span> 
            </li>
           </ul>
       </div>
     </article>
     <article x-data="{open: false}">
        <header class="border border-gray-200 px-4 py-2 curser-pointer bg-amber-500 rounded-lg mt-3" x-on:click="open=!open">
            <h3 class="text-lg text-gray-600 font-bold">En que consisten los seguimientos</h3>
        </header>
        <div class="bg-white py-2 px-4 " x-show="open">
            <ul class="grid grid-cols-1 gap-3">
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                        Los seguimientos son visitas o comunicaciones telefonicas en la que el encargado del caso corroborara el bien estar del animalito, la correcta adaptación a la familia y el cumplimiento de las condiciones de tenencia. (Controles veterinarios de ser necesarios, castración, etc)</span> 
                </li>
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                        Es importante comprender que la buena predisposición y cumplimiento con los seguimientos seran requisito para que se concreten las adopciones.</span> 
                </li>
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                        Los responsables de los seguimientos podran pedir fotos de las condiciones de las mascotas y tomarlas durante las visitas programadas.</span> 
                </li>
            </ul>
        </div>
     </article>
     <article x-data="{open: false}">
        <header class="border border-gray-200 px-4 py-2 curser-pointer bg-amber-500 rounded-lg mt-3" x-on:click="open=!open">
            <h3 class="text-lg text-gray-600 font-bold">Como ser moderador</h3>
        </header>
        <div class="bg-white py-2 px-4 " x-show="open">
            <ul class="grid grid-cols-1 gap-3">
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                        Si quieres colaborar y ser parte de nuestro equipo de moderadores puedes llenar el formulario de solicitud.</span> 
                </li>
                <li class="text-gray-700 text-base">
                    <i class="fa-solid fa-paw mr-2 text-sky-600"></i> <span class="text-gray-500 text-lg">
                        Una vez completado alguien de nuestro equipo se pondra en contacto contigo y se programara una entrevista para determinar las condiciones para participar.</span> 
                </li>
            </ul>
        </div>
    </article>
    </section>

 </x-app-layout>