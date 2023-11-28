<x-app-layout>
    <div class="h-16"></div>
    <section class="bg-cover mb-0.5 mt-0.5 shadow h-32" style="background-image: url({{ asset('img/cases/port22.jpg') }})">
        <div class="container pt-8">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Registro de gastos</h1>
                <p class="text-white text-2xl mb-6"></p>
            </div>
        </div>
    </section>
    <section class="container mt-6 ">
        <h3 class="text-cyan-600 font-bold text-xl mb-2">Nuestro compromiso</h3>
        <p class="text-gray-500 text-base indent-3">Como parte de nuestro compromiso con nuestros usuario y personas interesadas dejamos a su disposición detalles de los gastos realizados con sus respectivos comprobantes, para que exista transparencia con el usos de las donaciones recibidas. </p>
        <p class="text-gray-500 text-base indent-3 mb-4">El destino de los fondos conseguidos son evaluados y decididos
            por los
            administradores y moderadores del grupo (<a class="text-blue-500 hover:underline" href="">si te
                interesa ser parte podés postularte</a>).
        </p>
    </section>
@livewire('donation.show-expenses-public')
</x-app-layout>