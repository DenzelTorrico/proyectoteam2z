@extends('layouts.master')

@section('slot')

    <section class="grid-cols-2 grid m-40 gap-28">
        <section class="flex flex-col">
            <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png" alt="HOla"/>
            <section>
                <section id="splide3" class="splide w-full" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                          <ul class="splide__list">
                              <li class="splide__slide"><img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png"/></li>
                              <li class="splide__slide"><img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png"/></li>
                              <li class="splide__slide"><img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png"/></li>
                          </ul>
                    </div>
                  </section>
            </section>
        </section>

        <section class="flex flex-col">
            <h1 class="text-5xl">{{ $producto->nombre }}</h1>
            <p class="text-gray-500 mt-4">{{ $producto->descripcion }}</p>
            <div class="space-y-5 mt-4">
                <div>
                    <span class="p-1 bg-gray-400 rounded-md text-white">Polos</span><br/>
                </div>
                <div >
                   <span class="text-green-500">Precio: </span>    <span>$5444</span><br/>
                </div>
                <div>
                    <span class="text-green-500">Descuento: </span> <span>$9999</span>
                </div>
            </div>
        </section>

    </section>


@endsection