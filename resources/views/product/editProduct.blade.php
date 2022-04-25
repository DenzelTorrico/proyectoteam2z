@extends("layouts.master")
@section('slot')

<div class="px-8 py-10">
    <div class="p-4">
        <h3 class="text-xl">Tus productos publicados</h3>
    </div>
    <div class="flex space-x-10 w-full">
        <div class="w-1/4">
            <img src="{{ $producto->foto }}" class="rounded-md border-blue-500 border-2 w-full" alt="Polo">
        </div>
        <div class="space-y-4 bg-white px-4 w-3/4">
            <form action="{{ route('product.update',$producto) }}" method="POST">
                @csrf
                @method('put')
                <div>
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="nombre" value="{{ old('nombre', $producto->nombre) }}">
                    @error('nombre')
                        <span class="text-red-500 text-sm">{{$message}}</span><br>
                    @enderror
                </div>
                <label>Descripcion</label>
                <textarea name="descripcion" rows="5" class="border-gray-600/50 p-2 rounded-md outline-none border-[1px] w-full" aria-label="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>
                @error('descripcion')
                    <span class="text-red-500 text-sm">{{$message}}</span><br>
                @enderror
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label>Precio</label>
                        <input name="precio" type="number" min="0" step="0.5" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="precio" value="{{ old('precio', $producto->precio) }}">
                        @error('precio')
                            <span class="text-red-500 text-sm">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div>
                        <label>Categoría</label>
                        <select name="idcategoria" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="categoria">
                            @foreach ($categories as $categoria)
                                <option {{$producto->idcategoria == $categoria->id? "selected":""}} value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
                            @endforeach
                        </select>
                        @error('idcategoria')
                            <span class="text-red-500">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div>
                        <label>Descuento</label>
                        <input name="descuento" type="number" min="0" step="0.5" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="descuento" value="{{ old('descuento', $producto->descuento) }}">
                        @error('descuento')
                            <span class="text-red-500 text-sm">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div>
                        <label>Estado</label>
                        <select name="estadoProducto" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" >
                            <option {{$producto->estadoProducto == "nuevo"? "selected":""}} value="nuevo">Nuevo</option>
                            <option {{$producto->estadoProducto == "usado"? "selected":""}}  value="usado">Usado</option>
                            <option {{$producto->estadoProducto == "malogrado"? "selected":""}}  value="malogrado">Malogrado</option>
                            <option {{$producto->estadoProducto == "reparado"? "selected":""}}  value="reparado">Reparado</option>
                        </select>
                        @error('estadoProducto')
                            <span class="text-red-500 text-sm">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div>
                        <label>Stock</label>
                        <input name="stock" type="number" min="0" step="1" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="stock" value="{{ old('stock', $producto->stock) }}">
                        @error('stock')
                            <span class="text-red-500 text-sm">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div>
                        <label>Foto</label>
                        <input name="foto" type="text" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="foto" value="{{ old('foto', $producto->foto) }}">
                        @error('foto')
                            <span class="text-red-500 text-sm">{{$message}}</span><br>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-end space-x-4">
                    <button class="text-red-500">Cancelar</button>
                    <input type="submit" class="text-green-500 cursor-pointer" value="Enviar"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection