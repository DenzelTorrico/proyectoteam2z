@extends('layouts.master')

@section('slot')

<section>
    <section id="splide1" class="splide w-full" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
              <ul class="splide__list">
                  <li class="splide__slide"><img src="{{asset('image/banner_grandes.png')}}"/></li>
                  <li class="splide__slide"><img src="{{asset('image/ad1.webp')}}"/></li>
                  <li class="splide__slide"><img src="{{asset('image/officina.jpg')}}"/></li>
              </ul>
        </div>
      </section>
</section>

<section class="container mx-auto px-20 md:px-8 py-20">
    <section id="splide2" class="splide w-full" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($productos as $producto)
                <li class="splide__slide">
                    <a href="{{ route('product.detail', $producto)}}">
                        @component('components.card')
                            @slot('foto')
                                {{$producto->foto}}
                            @endslot
                            @slot('title')
                                {{$producto->nombre}}
                            @endslot
                            @slot('price')
                                {{$producto->precio}}
                                <a href="{{route('product.edit', $producto->id)}}">Editar</a>
                            @endslot
                        @endcomponent
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="my-36 space-y-5">
        <h4 class="text-4xl">Ofertas</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($productos as $producto)
            <div>
                <a href="{{ route('product.detail', $producto)}}">
                    @component('components.card')
                        @slot('foto')
                            {{$producto->foto}}
                        @endslot
                        @slot('title')
                            {{$producto->nombre}}
                        @endslot
                        @slot('price')
                            {{$producto->precio}}
                            {{-- <a href="{{route('product.edit', $producto->id)}}">Editar</a> --}}
                        @endslot
                    @endcomponent
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <section class="my-36 space-y-5">
        <h4 class="text-4xl">Categorias Populares</h4>
        <div class="grid grid-cols-7">
            @for ($i = 0; $i < 14; $i++)
                <div class="border-2 border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-white text-center py-10 px-2">
                    <i class="bi bi-tv text-8xl"></i>
                    <div>
                        <span class="text-black">TV</span>
                    </div>
                </div>
            @endfor
        </div>
    </section>
</section>
@endsection