@extends('layouts.admin')
@section('slot')
    <div class="w-full p-4">
        <h1 class="text-xl font-bold text-gray-500 ml-3 mb-1">Lista de Usuarios</h1>
        <hr class="mb-6">
        @livewire('user.show-users')
    </div>
@stop