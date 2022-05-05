<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <header class="bg-[#0078D4] text-white">
        <nav class="flex flex-wrap justify-between items-center px-5 py-2">
            <div class="flex space-x-4 items-center">
                <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649644785/test/logo_iheuew.png"
                    alt="Logo">
                <a href="/" class="text-3xl">Mercado Z</a>
            </div>

            <div class="space-y-2">
                <form action="{{ route('search') }}" method="get">
                    <div class="flex w-96">
                        <input
                            class="bg-white text-gray-600 text-sm rounded-l-md border-r-2 outline-none border-gray-500 block w-full p-2.5"
                            type="text" placeholder="Buscar" aria-label="Search" name="buscador" />
                        <button type="submit" class="bg-white rounded-r-md px-3 py-2">
                            <i class="bi bi-search text-gray-600"></i>
                        </button>
                    </div>
                </form>
                <div>
                    <div class="flex space-x-4">
                        @guest
                        <a class="p-2 hover:bg-blue-700 hover:rounded-xl hover:transition-all" href="">Categorias</a>
                        @else
                        <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"   href="{{ route('product.create') }}">Vender</a>
                        <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"   href="#">Categorias</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div>
                <div class="flex space-x-4">
                    @guest
                    <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"  href="{{ route('login') }}">Login</a>
                    <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"  href="{{ route('register') }}">Register</a>
                    @else
                        <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"  href="{{ route('profile.edit', Auth::user()->id) }}">Bienvenido:
                            {{ Auth::user()->usuario }}</a>
                            <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"   href="{{ route('logout') }}">Cerrar sesion</a>
                            <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"  href="{{ route('product.publish', Auth::user()->id) }}">Mis publicaciones</a>
                        <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"   href="{{ route('profile.historial') }}">Historial</a>
                    @endguest

                </div>
            </div>
        </nav>
    </header>
    @yield('slot')
    <div class="flex flex-col">
        <footer class="bg-blue-500 text-white mt-auto p-10 ">
            <div class="grid grid-cols-3 items-center text-lg">
                <div class="col-span-2">
                    <a class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"   href="">Nosotros</a>
                    <a  class="p-2 hover:bg-blue-700 hover:rounded-xl duration-500"   href="{{ route('index.terminos') }}">Terminos y condiciones de privacidad</a>
                </div>

                <div class="flex items-center">
                    <p>Derechos reservados 2022</p>
                    <img class="h-12 w-20" src="{{ url('image/logo.png') }}" />
                </div>

            </div>
        </footer>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            try {
                new Splide('#splide1', {
                    type: 'loop',
                    autoplay: true,
                    speed: 1000,
                    interval: 5000,
                    arrows: false,
                }).mount();
            } catch {

            }
            try {
                new Splide('#splide2', {
                    type: 'loop',
                    perPage: 3,
                }).mount();
            } catch (error) {

            }
            try {
                new Splide('#splide3', {
                    type: 'loop',
                    perPage: 3,
                }).mount();
            } catch (error) {

            }

        })
    </script>
</body>

</html>
