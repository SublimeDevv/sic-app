@extends('layouts.app')

@section('titulo')
    {{-- Perfil: {{ $user->name }} --}}
    Formulario
@endsection

@section('contenido')
    <div class="bg-white md:flex md:justify-center justify-center md:w-4/12 p-6 rounded-lg shadow-xl ml-[600px]">
        <form action="{{ route('students.store')  }}"  class="w-full max-w-lg mx-auto" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name_student" class="block text-gray-700 font-bold mb-2">Nombre</label>
                <input type="text" name="name_student" id="name_student" placeholder="Nombre" value="{{ old('name_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('name_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lastname_student" class="block text-gray-700 font-bold mb-2">Apellidos</label>
                <input type="text" name="lastname_student" id="lastname_student" placeholder="Apellidos" value="{{ old('lastname_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('lastname_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="id_student" class="block text-gray-700 font-bold mb-2">Matrícula</label>
                <input type="text" name="id_student" id="id_student" placeholder="Matrícula" value="{{ old('id_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('id_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email_student" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
                <input type="text" name="email_student" id="email_student" placeholder="Correo Electrónico" value="{{ old('email_student') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_student" class="block text-gray-700 font-bold mb-2">Contraseña</label>
                <input type="password" name="password_student" id="password_student" placeholder="Contraseña" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password_student')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrar</button>
            </div>
        </form>
    </div>

@endsection



