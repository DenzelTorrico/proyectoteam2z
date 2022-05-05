@extends('layouts.master')

@section('slot')
    <section class="container mx-auto px-8 py-10">
        <h5 class="text-2xl font-bold">Vender producto</h5>
        <div class="flex space-x-10 w-full">
            <div class="w-1/4">
                <img src="" class="rounded-md border-blue-500 border-2 w-full" alt="Polo">
            </div>
            <div class="space-y-4 bg-white px-4 w-3/4">
                <form action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Nombre</label>
                        <input name="nombre" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="nombre"
                            value="{{ old('nombre') }}">
                        @error('nombre')
                            <span class="text-red-500 text-sm">{{ $message }}</span><br>
                        @enderror
                    </div>
                    <label>Descripcion</label>
                    <textarea name="descripcion" rows="5" class="border-gray-600/50 p-2 rounded-md outline-none border-[1px] w-full"
                        aria-label="descripcion">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <span class="text-red-500 text-sm">{{ $message }}</span><br>
                    @enderror
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label>Precio</label>
                            <input name="precio" type="number" min="0" step="0.5"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="precio" value="{{ old('precio') }}">
                            @error('precio')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Categoría</label>
                            <select name="idcategoria"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="categoria">
                                @foreach ($categories as $categoria)
                                    <option value="{{ $categoria->id }}">
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('idcategoria')
                                <span class="text-red-500">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Descuento</label>
                            <input name="descuento" type="number" min="0" step="0.5"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="descuento" value="{{ old('descuento') }}">
                            @error('descuento')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Estado</label>
                            <select name="estadoProducto"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full">
                                <option value=""></option>
                                <option value="nuevo">Nuevo</option>
                                <option value="usado">Usado</option>
                                <option value="malogrado">Malogrado</option>
                                <option value="reparado">Reparado</option>
                            </select>
                            @error('estadoProducto')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Stock</label>
                            <input name="stock" type="number" min="0" step="1"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="stock" value="{{ old('stock') }}">
                            @error('stock')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Foto</label>
                            <input type="file" name="file" aria-label="file" accept="image/jpeg,image/png">
                            @error('foto')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button class="text-red-500">Cancelar</button>
                        <input type="submit" class="text-green-500 cursor-pointer" value="Enviar" />
                    </div>
                </form>
            </div>
        </div>
        {{-- <form method="POST" action="{{ route('product.save') }}">
            @csrf
            <label>Nombre</label>
            <input name="nombre" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full"
                aria-label="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <label>Descripcion</label>
            <textarea name="descripcion" rows="5" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full"
                aria-label="descripcion">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <label>Precio</label>
            <input name="precio" type="number" min="0" step="0.5"
                class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="precio"
                value="{{ old('precio') }}">
            @error('precio')
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <label>Descuento</label>
            <input name="descuento" type="number" min="0" step="0.5"
                class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="descuento"
                value="{{ old('descuento') }}">
            @error('descuento')
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
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
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <label>Stock</label>
            <input name="stock" type="number" min="0" step="1"
                class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="stock"
                value="{{ old('stock') }}">
            @error('stock')
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <label>Foto</label>
            <input name="foto" type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full"
                aria-label="foto" value="{{ old('foto') }}">
            @error('foto')
                <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <label>Categoría</label>
            <select name="idcategoria">
                <option value=""></option>
                @foreach ($categories as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            @error('idcategoria')
                <span class="text-red-500">{{ $message }}</span><br>
            @enderror

            <input type="submit" class="bg-blue-400 py-1 px-3 rounded-md text-white" value="Enviar" />
        </form> --}}
    </section>
@endsection
