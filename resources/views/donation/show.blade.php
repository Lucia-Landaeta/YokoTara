<?php
require base_path('vendor/autoload.php');

use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));
$client = new PreferenceClient();
// Se crea la preferencia de MP, con los detalles de pago
$preference = $client->create([
    'items' => [
        [
            'title' => 'Donación',
            'quantity' => 1,
            'currency_id' => 'ARS',
            'unit_price' => $donation,
        ],
    ],
]);
// urls de redirección
$preference->back_urls = array(
    'success' => 'https://www.google.com/',
    'failure' => 'http://www.tu-sitio/failure',
);
?>
<x-app-layout>
    <div class="h-16"></div>
    <div class="container mt-8">
        <div class="max-w-sm w-full lg:max-w-full lg:flex bg-white">
            <div class="h-52 lg:h-auto lg:w-60 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('{{ asset('img/card.jpg') }}')" title="Woman holding a mug">
            </div>
            <div
                class="border-r border-b border-l border-gray-200 lg:border-l-0 lg:border-t lg:border-gray-200 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <h3 class="text-cyan-600 font-bold text-xl mb-2">Gracias por tu colaboración</h3>
                    <p class="text-gray-500 text-lg indent-3">Toda donación realizada se destina al pago de tratamientos,
                        estudios y
                        honorarios veterinarios, compra de insumos y alimento de los animalitos que se encuentran en
                        espera de un
                        hogar.</p>
                    <p class="text-gray-500 text-lg indent-3">Agradecemos tu colaboración y que te involucres para
                        lograr una mejor calidad de vida para los animalitos que lo necesitan.</p>
                </div>
                <p class="text-gray-700 font-bold text-lg">Donación a realizar: <span
                        class="text-amber-500">${{ $donation }}</span> </p>
                <div class="">
                    <div id="wallet_container"></div>
                    <a href="{{ route('donations.index') }}"
                        class="bg-transparent hover:bg-blue-500 text-blue-700 mb-4 mr-6 font-semibold hover:text-white py-2.5 px-4 border border-blue-500 hover:border-transparent rounded">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="h-16"></div>
    {{-- SDK MercadoPago.js --}}
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    {{-- Se crea el botod de pago y de vincula a la preferencia creada --}}
    <script>
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}");
        const bricksBuilder = mp.bricks();
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "{{ $preference->id }}",
                redirectMode: "modal"
            },
        });
    </script>
</x-app-layout>
