@extends('layouts.panel')

@section('titulo')
    Crea una nueva publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-96">
            <form id="dropzone" action="{{ route('images.store') }}" enctype="multipart/form-data" method="POST"
                  class="dropzone border-dashed w-80 border-2 h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 px-10">
            <div class="md:w-500px bg-white p-10 rounded-lg shadow-xl md:mt-0 mr-10">
                <form action={{ route('posts.store') }} method="POST">
                    @csrf
                    <div class="mb-5">
                        <label class="m-2 uppercase block text-gray-500 font-bold">
                            Título de la publicación
                        </label>
                        <input class="w-full p-2 border rounded-lg @error('name') border-red-500 @enderror" type="text"
                               name="titulo" id="titulo" placeholder="Título de la publicación"
                               value="{{ old('titulo') }}">

                        @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="m-2 uppercase block text-gray-500 font-bold">
                            Descripción de la publicación
                        </label>
                        <textarea class="w-full p-2 border rounded-lg @error('descripcion') border-red-500 @enderror"
                                  type="text"
                                  name="descripcion" id="descripcion"
                                  placeholder="Descripción de la publicación">{{ old('descripcion') }} </textarea>

                        @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <input name="image" type="hidden" value="{{ old('image') }}">
                        @error('image')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold p-3 rounded-lg uppercase"
                            type="submit">
                        Crear publicación
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

