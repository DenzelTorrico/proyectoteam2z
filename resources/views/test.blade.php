<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="text-4xl">Ya pero eres o no eres</div>
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
</body>
</html>