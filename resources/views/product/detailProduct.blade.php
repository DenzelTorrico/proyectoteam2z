@extends('layouts.master')

@section('slot')
    <section class="grid-cols-2 grid m-40 gap-28">
        @foreach ($product as $prod)
            <section class="flex flex-col">
                <img src="{{ $prod->foto }}" alt="nombre" />
                <section>
                    <section id="splide3" class="splide w-full" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img src="{{ $prod->foto }}" /></li>
                                <li class="splide__slide"><img src="{{ $prod->foto }}" /></li>
                                <li class="splide__slide"><img src="{{ $prod->foto }}" /></li>
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
                        <span class="p-1 bg-gray-400 rounded-md text-white">{{ $prod->categoria }}</span><br />
                    </div>
                    <div>
                        <span class="text-green-500">Precio: </span> <span>S/. {{ $prod->precio }}</span><br />
                    </div>
                    <div>
                        <span class="text-green-500">Descuento: </span> <span> S/.{{ $prod->descuento }}</span>
                    </div>
                    <form action="{{ route('product.checkout', $prod->id) }}" method="get">
                        <span class="text-gray-500">Stock disponible: {{ $prod->stock }}</span>
                        @csrf
                        <div class="flex space-x-2">
                            <label>Cantidad</label>
                            <input name="cantidad" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="cantidad"
                                value="{{ old('cantidad') }}">
                        </div>
                        <input class="my-2 px-3 py-2 rounded-lg bg-green-500 text-white hover:bg-green-700 cursor-pointer" type="submit" value="Comprar">
                    </form>
                </div>
            </section>
        @endforeach
    </section>
@endsection
