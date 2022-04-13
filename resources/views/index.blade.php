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
                  <li class="splide__slide">
                    @component('components.card')
                        @slot('title')
                            Polo
                        @endslot
                        @slot('price')
                            54
                        @endslot
                    @endcomponent
                </li>
                  <li class="splide__slide">
                    @component('components.card')
                        @slot('title')
                            Polo
                        @endslot
                        @slot('price')
                            54
                        @endslot
                    @endcomponent
                </li>
                  <li class="splide__slide">
                    @component('components.card')
                        @slot('title')
                            Polo
                        @endslot
                        @slot('price')
                            54
                        @endslot
                    @endcomponent
                </li>
                  <li class="splide__slide">
                    @component('components.card')
                        @slot('title')
                            Polo
                        @endslot
                        @slot('price')
                            54
                        @endslot
                    @endcomponent
                </li>
              </ul>
        </div>
      </section>
</section>
@endsection