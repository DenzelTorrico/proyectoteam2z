@extends('layouts.master')

@section('slot')
    <section class="grid-cols-2 grid m-40 gap-28">
        @foreach ($product as $prod)
            <section class="flex flex-col">
                <img src="{{ $prod->foto }}" alt="nombre"/>
                <section>
                    <section id="splide3" class="splide w-full" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img src="{{ $prod->foto }}"/></li>
                                <li class="splide__slide"><img src="{{ $prod->foto }}"/></li>
                                <li class="splide__slide"><img src="{{ $prod->foto }}"/></li>
                            </ul>
                        </div>
                    </section>
                </section>
            </section>

            <section class="flex flex-col">
                <h1 class="text-5xl">{{ $prod->nombre }}</h1>
                <p class="text-gray-500 mt-4">{{ $prod->descripcion }}</p>
                <div class="space-y-5 mt-4">
                    <div>
                        <span class="p-1 bg-gray-400 rounded-md text-white">{{ $prod->categoria }}</span><br/>
                    </div>
                    <div >
                        <span class="text-green-500">Precio: </span>    <span>S/. {{ $prod->precio }}</span><br/>
                    </div>
                    <div>
                        <span class="text-green-500">Descuento: </span> <span> S/.{{ $prod->descuento }}</span>
                    </div>
                    <div>
                        <a href="{{ route('product.checkout', ['id' => $prod->id]) }}">AAA</a>
                    </div>
                </div>
            </section>
            @endforeach
    </section>


@endsection