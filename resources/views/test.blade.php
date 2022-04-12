<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <header class="bg-[#0078D4] text-white">
        <nav class="flex flex-wrap justify-between items-center px-5 py-2">
            <div class="flex space-x-4 items-center">
                <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649644785/test/logo_iheuew.png" alt="Logo">
                <h1 class="text-3xl">Mercado Z</h1>
            </div>
            <div class="space-y-2">
                <div class="flex w-96">
                    <input
                      class="bg-white text-gray-600 text-sm rounded-l-md border-r-2 outline-none border-gray-500 block w-full p-2.5"
                      type="text"
                      placeholder="Buscar"
                      aria-label="Search"/>
                      <button class="bg-white rounded-r-md px-3 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search w-5 h-5 text-gray-600" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                      </button>
                  </div>
                  <div>
                      <div class="flex space-x-4">
                          <a href="#">Historial</a>
                          <a href="#">Vender</a>
                          <a href="#">Categorias</a>
                      </div>
                  </div>
            </div>
            <div>
                <div class="flex space-x-4">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                    <a href="#">Mis pedidos</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mx-auto py-5">
            <div class="p-4">
                <div class="text-4xl">Ya pero eres o no eres</div>
                <div class="text-4xl">Calla pe bab🐻</div>
            </div>
        <div class="grid grid-cols-5 gap-5">
            @component('components.card')
            @slot('title')
                Polo
            @endslot
            @slot('price')
                54
            @endslot
        @endcomponent
        @component('components.card')
            @slot('title')
                Camisa
            @endslot
            @slot('price')
                54
            @endslot
        @endcomponent
        @component('components.card')
            @slot('title')
                Pantalón
            @endslot
            @slot('price')
                54
            @endslot
        @endcomponent
        @component('components.card')
            @slot('title')
                Vestido
            @endslot
            @slot('price')
                54
            @endslot
        @endcomponent
        @component('components.card')
            @slot('title')
                Zapatos
            @endslot
            @slot('price')
                54
            @endslot
        @endcomponent
        </div>
    </div>
</body>
</html>