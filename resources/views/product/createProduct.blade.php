@extends('layouts.master')

@section('slot')

<h5>Categoría</h5>

    <form method="POST" action="{{ route('product.save') }}">
        @csrf
        <label>Nombre</label>
        <input name="nombre" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Descripcion</label>
        <textarea name="descripcion" rows="5" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="descripcion">{{ old('descripcion') }}</textarea>
        @error('descripcion')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Precio</label>
        <input name="precio" type="number" min="0" step="0.5" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="precio" value="{{ old('precio') }}">
        @error('precio')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Descuento</label>
        <input name="descuento" type="number" min="0" step="0.5" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="descuento" value="{{ old('descuento') }}">
        @error('descuento')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Estado</label>
        <select name="estadoProducto">
            <option value=""></option>
            <option value="nuevo">Nuevo</option>
            <option value="usado">Usado</option>
            <option value="malogrado">Malogrado</option>
            <option value="reparado">Reparado</option>
        </select>
        @error('estadoProducto')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Stock</label>
        <input name="stock" type="number" min="0" step="1" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="stock" value="{{ old('stock') }}">
        @error('stock')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Foto</label>
        <input name="foto" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="foto" value="{{ old('foto') }}">
        @error('foto')
            <span class="text-red-500 text-sm">{{$message}}</span><br>
        @enderror
        <label>Categoría</label>
        <select name="idcategoria">
            <option value=""></option>
            @foreach ($categories as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
            @endforeach
        </select>
        @error('idcategoria')
            <span class="text-red-500">{{$message}}</span><br>
        @enderror

        <input type="submit" class="bg-blue-400 py-1 px-3 rounded-md text-white" value="Enviar"/>
    </form>

@endsection