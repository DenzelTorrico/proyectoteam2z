@extends('layouts.master')

@section('slot')
    <section class="grid grid-cols-8 m-20 gap-28 px-10 py-16 shadow-xl rounded-xl border-2">
        @foreach ($product as $prod)
            <section class="flex flex-col col-span-5">
                <section class="w-3/4 mx-auto">
                    <img src="{{ $prod->foto }}" class="w-full" alt="{{ $prod->nombre }}" />
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
            </section>

            <section class="flex flex-col rounded-xl shadow-xl border-2 p-5 col-span-3">
                <h3 class="text-5xl">{{ $prod->nombre }}</h3>
                <div class="text-green-500 text-xl">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </div>
                <div class="space-y-3 mt-4">
                    <div>
                        <span class="p-1 bg-gray-400 rounded-md text-white">{{ $prod->categoria }}</span>
                    </div>
                    <div>
                        <span class="text-gray-400 line-through text-2xl">S/ {{ $prod->precio }}</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-gray-800 text-4xl">S/{{ round($prod->precio - ($prod->precio * $prod->descuento/100),2) }}</span>
                        <span class="text-green-600 text-xl">{{ $prod->descuento }} %</span>
                    </div>
                    <div>
                        <div class="flex text-xl text-green-500">
                            <h5>
                                <i class="bi bi-arrow-return-left"></i>
                                Devolución gratis
                            </h5>
                        </div>
                        <p class="text-gray-500">Tienes 30 días desde que lo recibes.</p>
                    </div>
                    <div>
                        <div class="flex text-xl text-green-500">
                            <h5>
                                <i class="bi bi-shield-check"></i>
                                Paquete seguro
                            </h5>
                        </div>
                        <p class="text-gray-500">El traslado del paquete sera enviado sin daños.</p>
                    </div>
                    <div>
                        <div class="flex text-xl text-green-500">
                            <h5>
                                <i class="bi bi-truck"></i>
                                Envio de entre 1 semana
                            </h5>
                        </div>
                        <p class="text-gray-500">La entrega será desde 1 o 2 dias desde Lima y máximo 1 semana en provincias</p>
                    </div>
                    <form action="{{ route('product.checkout', $prod->id) }}" method="get">
                        <span class="text-gray-500 pb-4">{{ $prod->stock }} unidades disponibles</span>
                        @csrf
                        <div class="flex space-x-2 items-center">
                            <label>Cantidad</label>
                            <input name="cantidad" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="cantidad"
                                value="{{ old('cantidad') }}">
                        </div>
                        <input class="my-2 px-3 py-2 w-full rounded-lg bg-green-500 text-white hover:bg-green-700 cursor-pointer" type="submit" value="Comprar">
                    </form>
                </div>
            </section>
        @endforeach
    </section>
    <section class="m-20 px-10 py-16 shadow-xl rounded-xl border-2">
        <h5 class="text-3xl text-gray-800">Descripción</h5>
        <p class="text-gray-500 text-xl mt-4">{{ $prod->descripcion }}</p>
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Splide('#splide3', {
                type: 'loop',
                perPage: 3,
            }).mount();
    })
    </script>
@endsection