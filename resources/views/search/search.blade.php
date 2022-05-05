@extends("layouts.master")
<script src="https://cdn.tailwindcss.com"></script>
@section('slot')
    <section class="container mx-auto px-20 md:px-8 py-20">
        <div class="grid grid-cols-4 gap-4">
            <div>
                <h1 class="text-xl font-bold">Categorias</h1>
                @foreach ($categories as $category)
                    <p class="text-gray-500 hover:text-gray-800">
                        <a href="{{ route('searchcategory', ['categoria' => $category->id]) }}">
                            {{ $category->nombre }}
                        </a>
                    </p>
                @endforeach
                <hr>
                <p>Productos menores a: </p>

                <form action="{{ route('searchprice') }}">
                    <input type="range" value="100" name="ranges" min="100" max="8000" step="100"
                        onchange="document.getElementById('range').innerHTML=this.value" id="">
                    <input type="hidden" name="buscador" value={{ $buscador }}>
                    <p>S/.<span id="range">100</span></p>

                    <button type="submit" class="bg-blue-600 text-white rounded-lg p-2">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-span-3">
                @if (count($buscar) == 0)
                <div class="my-10 py-10 text-center rounded-lg border-2 space-y-5">
                    <span class="text-4xl text-gray-400 font-bold">Búsqueda no encontrada</span>
                    <p>No se encontraron resultados de la búsqueda. Intente probar con otro.</p>
                </div>
                @else
                    @foreach ($buscar as $item)
                        <div class="flex shadow-lg mt-5">
                            <img src="{{ $item->foto }}" width="40%" alt="" srcset="">

                            <div class="p-5">
                                <a href="{{ route('product.detail', $item->id) }}">
                                    <h1 class="text-3xl">{{ $item->nombre }}</h1>
                                </a>
                                <h1 class="">{{ $item->descripcion }}</h1>
                                <p class="font-bold text-xl mt-2">S/ {{ $item->precio }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
