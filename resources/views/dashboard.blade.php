@extends('layouts.panel')

@section('titulo')
    {{-- Perfil: {{ $user->name }} --}}
    Dashboard
@endsection

{{-- @section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.png') }}">

            </div>
            <div class="md:w-8/12 lg:m-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <p class="text-gray-700 text-2xl"> {{ $user->name }}</p>
                <p class="text-gray-800 text-sm mb-3 font bold mt-5 font-bold">
                    0
                    <span class="font-normal">
                        Siguiendo
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold"> 0
                    <span class="font-normal">
                        Seguidores
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">
                        Publicaciones
                    </span>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">
            Publicaciones
        </h2>

        @if($posts->count())
            <div class="ml-56 grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($posts as $post)

                    <div>
                        <a>
                            <img src="{{ asset('/uploads') . '/' . $post->image }}" alt="Publicación" {{ $post->title }}>
                        </a>
                    </div>

                @endforeach
            </div>
        @else
            <p class="text-gray-600 uppercase text-center font-bold text-sm">No hay publicaciones</p>
        @endif

    </section>

@endsection --}}




{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('sidebar')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
