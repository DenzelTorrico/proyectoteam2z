@extends('layouts.master')

@section('slot')

<h5>Categoría</h5>

    <form method="POST" action="{{ route('product.save') }}">
        @csrf
        <label>Nombre</label>
        <input name="nombre" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="nombre">
        <label>Descripcion</label>
        <input name="descripcion" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="descripcion">
        <label>Precio</label>
        <input name="precio" type="number" min="0" step="0.5" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="precio">
        <label>Descuento</label>
        <input name="descuento" type="number" min="0" step="0.5" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="descuento">
        <label>Estado</label>
        <select name="estadoProducto">
            <option value="nuevo">Nuevo</option>
            <option value="usado">Usado</option>
            <option value="malogrado">Malogrado</option>
            <option value="reparado">Reparado</option>
        </select>
        <label>Stock</label>
        <input name="stock" type="number" min="0" step="1" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="stock">
        <label>Foto</label>
        <input name="foto" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="foto">
        
        <label>Categoría</label>
        <select name="idcategoria">
            <option value="1">Ropa</option>
            <option value="2">Electrodomésticos</option>
        </select>

        <input type="submit" class="bg-blue-400 py-1 px-3 rounded-md text-white" value="Enviar"/>
    </form>

@endsection