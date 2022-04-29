@extends('layouts.master')

@section('slot')
    <div class="flex bg-gray-300/50">
        <section class="container px-16 py-20 w-7/12">
            <h4 class="text-xl font-bold py-3">Agregar domicilio</h4>
            <div class="bg-white rounded-lg p-2 shadow-lg px-4 py-6 space-y-6">
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label>Nombre</label>
                        <input name="nombre" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="nombre" disabled
                            value="{{ old('nombre', Auth::user()->nombre) }}">
                    </div>
                    <div>
                        <label>Apellidos</label>
                        <input name="apellidos" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="apellidos" disabled
                            value="{{ old('apellidos', Auth::user()->apellidos) }}">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label>Departamento</label>
                        <input name="departamento" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="departamento"
                            value="{{ old('departamento') }}">
                    </div>
                    <div>
                        <label>Distrito</label>
                        <input name="distrito" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="distrito"
                            value="{{ old('distrito') }}">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label>Tipo de Calle</label>
                        <input name="tipoCalle" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="tipoCalle"
                            value="{{ old('tipoCalle') }}">
                    </div>
                    <div>
                        <label>Nombre de la calle</label>
                        <input name="nombreCalle" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="nombreCalle"
                            value="{{ old('nombreCalle') }}">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label>Telefono</label>
                        <input name="telefono" type="text"
                            class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="telefono" disabled
                            value="{{ old('telefono', Auth::user()->telefono) }}">
                    </div>
                </div>
                <div>
                    <label>Referencia</label>
                    <textarea name="descripcion" rows="5" class="border-gray-600/50 p-2 rounded-md outline-none border-[1px] w-full"
                            aria-label="descripcion">{{ old('descripcion') }}</textarea>
                </div>
            </div>
            <div class="text-right py-5">
                <input type="submit" class="px-3 py-2 rounded-lg bg-green-500 text-white hover:bg-green-700 cursor-pointer" value="Continuar">
            </div>
        </section>
        <div class="h-screen flex justify-center px-4 w-5/12">
            <div class="w-2/3 bg-white shadow-xl px-5 py-20 text-center space-y-5">
                <img src="{{ $producto->foto }}" alt="{{ $producto->nombre }}">
                <div>
                    <span>{{ $producto->nombre }}</span>
                </div>
                <div class="h-[1px] w-full bg-gray-500"></div>
                <div class="flex justify-between">
                    <span>Precio</span>
                    <span>S/. {{ $producto->precio }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Cantidad</span>
                    <span>{{ $request->cantidad }}</span>
                </div>
                <div class="h-[1px] w-full bg-gray-500"></div>
                <div class="flex justify-between">
                    <span>Total</span>
                    <span>S/. {{ $producto->precio * $request->cantidad }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
