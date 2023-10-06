@php
    $nav_links = [['name' => 'Inicio', 'route' => route('home'), 'icon' => 'fa-solid fa-shop'], ['name' => 'Roles', 'route' => route('admin.roles.index'), 'icon' => 'fa-solid fa-user-plus']];
@endphp
<aside class="flex w-72 min-h-screen flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2" 
    x-show="asideOpen">
    <ul class="mt-6 space-y-2 tracking-wide">
        @foreach ($nav_links as $link)
            <li class="min-w-max">
                <a href="{{ $link['route'] }}"
                    class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 ">
                    <i class="{{ $link['icon'] }} text-orange-600 group-hover:text-cyan-600"></i>
                    <span class="group-hover:text-gray-700">{{ $link['name'] }}</span>
                </a>
            </li>
            <hr>
        @endforeach
    </ul>
</aside>
{{-- bg-gradient-to-r from-sky-600 to-cyan-400 --}}
