@extends("layouts.master")
<script src="https://cdn.tailwindcss.com"></script>
@section('slot')
<section class="container mx-auto px-20 md:px-8 py-20">
<div class="grid grid-cols-4 gap-4">
    <div class="">
     <h1 class="text-xl font-bold">Categorias</h1>
     @foreach ($categories as $category)
        <p class="text-gray-600	">{{$category->nombre}}</p>
     @endforeach
    </div>
    <div class="col-span-3">
    @foreach ($buscar as $item)
        <div class="flex shadow-lg mt-5">
            <img src="{{$item->foto}}" width="30%" alt="" srcset="">
        
            <div>
            <h1 class="text-3xl">{{$item->nombre}}</h1>
            <h1 class="">{{$item->descripcion}}</h1>
            <p class="font-bold text-xl mt-2">S/ {{$item->precio}}</p>
            </div>
                   
        </div>
    @endforeach
    </div>
</div>
</section>
@endsection