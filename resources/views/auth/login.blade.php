@extends('layouts.app')

@section('titulo')
    Iniciar sesión
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w.4/12">
            <img>
        </div>

        <div class="md:w-4/12 bg-white p-6  rounded-lg shadow-xl">
            <form action={{ route('login') }} method="POST">
                @csrf
                <div class="mb-5">

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
                    <input class="w-full p-2 border border-gray-200 rounded-lg" type="password" name="password" id="password"
                        placeholder="Tu contraseña">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror



                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-gray-500">Recuérdame</label>
                </div>
                
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold p-3 rounded-lg uppercase"
                    type="submit">
                    Iniciar sesión
                </button>
            </form>
        </div>
    </div>
@endsection
