@extends("layouts.master")
@section('slot')
    
<div class="px-8 py-10">
    @foreach ($productos as $producto)
    <div class="flex w-full space-x-4 p-4">
        <div class="w-1/5">
            <div class="shadow-lg rounded-lg bg-white p-2 cursor-pointer hover:shadow-2xl">
                <img src="{{ $producto->foto }}" class="w-full" alt="Polo">
                <hr>
                <h4 class="text-xl font-bold">{{ $producto->nombre }}</h4>
                <div class="flex justify-between">
                    <span class="text-blue-600 text-lg font-bold">S/.{{ $producto->precio }}</span>
                </div>
            </div>
        </div>
        <div class="w-4/5 space-y-8">
            <div>
                <h5 class="text-xl font-bold">Descripción</h5>
                <p>{{ $producto->descripcion }}</p>
            </div>
            <div class="flex justify-start space-x-4">
                <a href="{{route('product.edit', $producto->id)}}" class="text-green-500">Editar</a>
                <form action="{{route('product.destroy', $producto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-500">Borrar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection