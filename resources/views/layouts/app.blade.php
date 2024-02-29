    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIC | @yield('titulo')</title>
        @stack('styles')
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class="bg-gray-100">
        <header class="sticky top-0 z-50 p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    SIC
                </h1>

                @auth
                    <nav class="flex gap-4 items-center">
                        <a href="{{ route('posts.create') }}"
                            class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">Crear
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                            </svg>
                        </a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href={{ route('posts.index', auth()->user()->name ) }}>
                            Hola: <span class="font-normal"> {{ auth()->user()->name }}</span>
                        </a>


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">Cerrar sesión</button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav class="flex gap-4 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="login">Iniciar sesión</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href={{ route('register') }}>Registrarse</a>
                    </nav>
                @endguest
            </div>
        </header>

        <main>
            @auth

            @include('sidebar')
            @endauth
            <h2 class="mb-10 text-3xl font-bold text-center mt-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

            <div>
                @yield('sidebar')
            </div>


        </main>




        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            Sistema Integral de calificaciones | Todos los derechos reservados {{ now()->year }}
        </footer>

    </body>

    </html>
