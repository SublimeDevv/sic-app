@extends('layouts.panel')

@section('titulo')
    Estudiante
@endsection

@section('contenido')

<div class="flex justify-center mb-10">
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm">
        <div class="text-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Información del Estudiante</h2>
        </div>
        <div class="mb-2">
            <h3 class="text-lg font-semibold text-gray-600">Nombre:</h3>
            <p class="text-gray-700">{{ $student->name_student }}</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-gray-600">Matrícula:</h3>
            <p class="text-gray-700">{{ $student->id_student }}</p>
        </div>
    </div>
</div>

@endsection
