@extends('layouts.app')

@section('titulo')
    Lista de estudiantes

@endsection

@section('contenido')

    <div class="flex justify-center mb-10">
        <form action="{{ route('students.create') }}" method="GET">
            @csrf
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                Agregar estudiante
            </button>
        </form>
    </div>


    <div class="flex justify-center">

       <table class="min-w-full divide-y divide-gray-200">
           <thead class="bg-gray-50">
           <tr>
               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   ID
               </th>
               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Nombre
               </th>
               <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Apellido
               </th>
           </tr>
           </thead>
           <tbody class="bg-white divide-y divide-gray-200">
           @foreach ($students as $student)
               <tr>
                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                       {{ $student->id_student }}
                   </td>
                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                       {{ $student->name_student }}
                   </td>
                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                       {{ $student->lastname_student }}
                   </td>
               </tr>
           @endforeach
           </tbody>
       </table>

   </div>

@endsection

