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

<section class="container mx-auto px-8 py-20">
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
                            @endslot
                        @endcomponent
                        </a>
                    </li>
                  @endforeach
              </ul>
        </div>
      </section>
</section>
@endsection