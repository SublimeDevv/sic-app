@extends('layouts.app')

@section('titulo')
    Registrarse
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w.4/12">
            <img>
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action={{ route('register') }} method="POST">
                @csrf
                <div class="mb-5">
                    <label class="m-2 uppercase block text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input class="w-full p-2 border rounded-lg @error('name') border-red-500 @enderror" type="text"
                        name="name" id="name" placeholder="Tu nombre" value="{{ old('name') }}">

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                    <label class="m-2
                        uppercase block text-gray-500 font-bold">
                        Correo
                    </label>

                    <input class="w-full p-2 border border-gray-200 rounded-lg" type="email" name="email" id="email"
                        value="{{ old('email') }}" placeholder="Tu correo">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <label class="m-2 uppercase block text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input class="w-full p-2 border rounded-lg border-gray-200" type="password" name="password" id="password"
                        placeholder="Tu contraseña">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <label for="password_confirmation"" class="rounded-lg m-2 uppercase block text-gray-500 font-bold">
                        Confirmar contraseña
                    </label>
                    <input class="w-full p-2 border border-gray-200 rounded-lg" type="password" name="password_confirmation"
                        id="password_confirmation" placeholder="Confirma tu contraseña">
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold p-3 rounded-lg uppercase"
                    type="submit">
                    Crear cuenta
                </button>
            </form>
        </div>
    </div>
@endsection
