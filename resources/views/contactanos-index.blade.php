<x-app-layout>
    <div class="pb-6">
        <div class="h-16"></div>
        {{-- SECCIÓN PORTADA --}}
        <section class="bg-cover mb-0.5 mt-0.5 shadow h-32"
            style="background-image: url({{ asset('img/cases/port22.jpg') }})">
            <div class="container pt-5">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">Contactanos</h1>
                    <p class="text-white text-2xl mb-6">Despeja toda duda que tengas</p>
                </div>
            </div>
        </section>
        {{-- Formulario de contacto --}}
        <div class="container bg-white mt-6 py-4 rounded-xl w-3/6">
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <x-label value="Nombre" />
                    @if ($user)
                        <x-input id="name" class="block mt-1 w-full"
                            value="{{ $user->name }} {{ $user->lastname }}" type="text" name="name" />
                    @else
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" />
                    @endif
                    <x-input-error class="mt-1" for="name" />
                </div>
                <div class="mb-4">
                    <x-label value="Asunto" />
                    <x-input id="subject" class="block mt-1 w-full" type="text" name="subject" />
                    <x-input-error class="mt-1" for="subject" />
                </div>
                <div class="mb-4">
                    <x-label value="Email de contacto" />
                    @if ($user)
                        <x-input id="contact_email" value="{{ $user->email }}" class="block mt-1 w-full" type="email"
                            name="contact_email" />
                    @else
                        <x-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" />
                    @endif
                    <x-input-error class="mt-1" for="contact_email" />
                </div>
                <div class="mb-4">
                    <x-label value="Teléfono de contacto" />
                    @if ($user)
                        <x-input id="contact_number" class="block mt-1 w-full" value="{{ $user->phone }}"
                            type="number" name="contact_number" />
                    @else
                        <x-input id="contact_number" class="block mt-1 w-full" type="number" name="contact_number" />
                    @endif

                    <x-input-error class="mt-1" for="contact_number" />
                </div>
                <div class="mb-4">
                    <x-label value="Contenido" />
                    <textarea rows="6" class="form-control w-full mt-2" name="description"></textarea>
                    <x-input-error class="mt-1" for="description" />
                </div>
                <button class="w-full bg-sky-600 py-2 rounded-md hover:bg-sky-400 text-lg text-white font-bold"
                    type="submit">Enviar</button>
            </form>
        </div>
    </div>
    {{-- Alerta de exito --}}
    <script>
        @if (Session::has('message'))
            Swal.fire({
                html: '<p><i class="fa-solid fa-check-double text-green-400 pr-4"></i>' +
                    "{{ Session::get('message') }}" + '</p>',
                heightAuto: false,
                width: 'auto',
                showConfirmButton: false,
                timer: 2000,
                position: 'top',
                backdrop: false
            })
        @endif
    </script>
</x-app-layout>
