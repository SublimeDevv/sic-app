@extends('layouts.panel')

@section('titulo')
    Lista de estudiantes
@endsection

@section('contenido')
    @if (session()->has('notificacion'))
        <div class="flex justify-center" style="color:green">
            {{ session('notificacion') }}
        </div>
    @endif

    <div class="flex justify-center mb-10">
        <form action="{{ route('students.create') }}" method="GET">
            @csrf
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-150 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                Agregar estudiante
            </button>
        </form>
    </div>


    <div class="flex justify-center">

        <table class="w-[900px] divide-y divide-gray-200 ml-32">
            <thead class="bg-gray-50 align-items-center">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Apellido
                    </th>
                    <th scope="col"
                        class=" flex justify-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Acciones
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
                        <td class="flex justify-center mt-1">
                            <a href="{{ route('estudiantes.show', $student->id) }}"
                                class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">Detalles</a>
                            <a href="{{ route('estudiantes.edit', $student->id) }}"
                                class="inline-block ml-2 px-4 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-300 ease-in-out">Editar</a>
                            <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="ml-2 px-4 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-700 transition duration-300 ease-in-out">
                                    Borrar
                                </button>
                            </form>

                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="flex justify-center mt-10">

        {{ $students->links() }}
    </div>
@endsection
