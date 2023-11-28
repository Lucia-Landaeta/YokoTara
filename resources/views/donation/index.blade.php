<x-app-layout>
    <div class="pb-10">
        <div class="h-16"></div>
        {{-- SECCIÓN PORTADA --}}
        <section class="bg-cover mt-0.5" style="background-image: url({{ asset('img/port3.jpg') }})">
            <div class="container py-16">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">Donaciones</h1>
                    <p class="text-white text-2xl mb-4">Tu colaboración cuenta</p>
                </div>
            </div>
        </section>
        <section class="container mt-6 ">
            <h3 class="text-cyan-600 font-bold text-xl mb-2">Sistema de donaciones</h3>
            <p class="text-gray-500 text-base indent-3">Puedes ver el monto actual de las donaciones que se han
                realizado. </p>
            <p class="text-gray-500 text-base indent-3 mb-4">El destino de los fondos conseguidos son evaluados y decididos
                por los
                administradores y moderadores del grupo (<a class="text-blue-500 hover:underline" href="">si te
                    interesa ser parte podés postularte</a>), todos los gastos realizados serán informados en el sitio.
            </p>
            <a href="{{route('expenses.expensesRecord')}}" class="text-cyan-600 hover:text-sky-300 hover:underline font-bold text-base mb-2">Registro de gastos</a>
        </section>
        
        <div class="container text-center mt-8 rounded-md" style="background-image: url({{ asset('img/port4.jpg') }})">
            <hr>
            <h2 class="text-amber-500 text-2xl mb-4 mt-6 font-bold">Monto actual de donaciones</h2>
            <div class="animate-bounce mt-10 mb-12">
                <p class="text-4xl"><i class="fa-solid fa-hand-holding-heart mr-4"></i>${{$donations}}</p> 
            </div>
            <hr>
        </div>
        
        <div class="grid grid-cols-2 mt-12">
            <div>
                <h2 class="container text-amber-500 text-center text-2xl mb-1 mt-6 font-bold">Transferencia
                </h2>
                <p class="container text-gray-500 text-center text-sm mb-5 mt-1">(Doná monto el que quieras
                    directamente.)</p>
                <p class="container text-center text-gray-500 text-md mb-2">Cuenta Mercado Pago</p>
                <p class="container text-center text-gray-500 text-md mb-2">CBU: XXXXXXXXXXXXXXXXXXXXXX</p>
                <p class="container text-center text-gray-500 text-md mb-2">Alias: PROYECTO-Y-T</p>
            </div>
            <div>
                <h2 class="container text-amber-500 text-center text-2xl mb-1 mt-6 font-bold">Podes donar a travez de
                    mercado pago</h2>
                <p class="container text-gray-500 text-center text-sm mb-1 mt-1">(Todas las tarjetas de crédito y
                    débito, Pago
                    Fácil,
                    Rapipago o desde la APP)</p>
                <p class="container text-gray-500 text-center text-md mb-2 mt-3">No necesitas loguearte para realizar
                    una donación
                </p>
                <div class="flex justify-center">
                    <div class="w-80 grid md:grid-cols-1 lg:grid-cols-2 gap-6 mt-8">
                        <div> <a href="{{ route('donations.show', 300) }}"
                                class="bg-transparent hover:bg-blue-500 ml-4 pr-6 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Donar $300 </a>
                        </div>
                        <div> <a href="{{ route('donations.show', 500) }}"
                                class="bg-transparent hover:bg-blue-500 ml-4 pr-6 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Donar $500
                            </a></div>
                        <div>
                            <a href="{{ route('donations.show', 1000) }}"
                                class="bg-transparent hover:bg-blue-500 ml-4 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Donar $1000
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('donations.show', 2000) }}"
                                class="bg-transparent hover:bg-blue-500 ml-4 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Donar $2000
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('donations.show', 4000) }}"
                                class="bg-transparent hover:bg-blue-500 ml-4 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Donar $4000
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('donations.show', 5000) }}"
                                class="bg-transparent hover:bg-blue-500 ml-4 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Donar $5000
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script></script>
</x-app-layout>
