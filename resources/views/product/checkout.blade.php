@extends('layouts.master')

@section('slot')
    <div class="flex bg-gray-300/50">
        <section class="container px-16 py-20 w-7/12">
            <h4 class="text-xl font-bold py-3">Agregar domicilio</h4>
            <form action=" {{ route('product.paypal') }}" method="post">
                @csrf
                <div class="bg-white rounded-lg p-2 shadow-lg px-4 py-6 space-y-6">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label>Nombre</label>
                            <input name="nombre" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="nombre"
                                value="{{ old('nombre', Auth::user()->nombre) }}">
                        </div>
                        <div>
                            <label>Apellidos</label>
                            <input name="apellidos" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="apellidos"
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
                        <label>Fecha Envio</label>
                        <input class="border-gray-600/50 p-2 rounded-md outline-none border-[1px]" type="date" name="fechaEnvio" aria-label="fechaEnvio">
                        {{-- <label>Referencia</label>
                        <textarea name="referencia" rows="5" class="border-gray-600/50 p-2 rounded-md outline-none border-[1px] w-full"
                                aria-label="referencia">{{ old('referencia') }}</textarea> --}}
                    </div>
                    
                    <input type="text" name="idProducto" value="{{ $producto->id }}" aria-label="idProducto" hidden>
                    <input type="text" name="descuento" value="{{ $producto->descuento }}" aria-label="descuento" hidden>
                    <input type="text" name="precioUnitario" value="{{ $producto->precio }}" aria-label="precioUnitario" hidden>
                    <input type="text" name="cantidad" value="{{ $request->cantidad }}" aria-label="cantidad" hidden>
                    <input type="text" name="total" value="{{ 
                    round((((($producto->precio*$request->cantidad)-(($producto->precio*$request->cantidad)* $producto->descuento/100))+16)+((($producto->precio*$request->cantidad)-(($producto->precio*$request->cantidad)* $producto->descuento/100)+16)*0.18))*0.26,2) }}" aria-label="total" hidden>
                </div>
                <div class="text-right py-5">
                    {{-- <a class="px-3 py-2 rounded-lg bg-green-500 text-white hover:bg-green-700 cursor-pointer" href="{{route('product.paypal')}}">Continuar</a> --}}
                    {{-- <input type="submit"  value="Continuar"> --}}
                    <input type="submit" class="px-3 py-2 rounded-lg bg-green-500 text-white hover:bg-green-700 cursor-pointer" value="Continuar">
                </div>
            </form>
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
                    <span>S/ {{ $producto->precio }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Cantidad</span>
                    <span>{{ $request->cantidad }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Descuento {{  $producto->descuento }}%</span>
                    <span>-S/ {{ (($producto->precio*$request->cantidad)* $producto->descuento/100) }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Costo Envio</span>
                    <span>S/ 16</span>
                </div>
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>S/ {{ ((($producto->precio*$request->cantidad)-(($producto->precio*$request->cantidad)* $producto->descuento/100))+16) }}</span>
                </div>
                <div class="flex justify-between">
                    <span>IGV 18%</span>
                    <span>S/ {{ ((($producto->precio*$request->cantidad)-(($producto->precio*$request->cantidad)* $producto->descuento/100)+16)*0.18) }}</span>
                </div>
                <div class="h-[1px] w-full bg-gray-500"></div>
                <div class="flex justify-between">
                    <span>Total</span>
                    <span>S/ {{ round((((($producto->precio*$request->cantidad)-(($producto->precio*$request->cantidad)* $producto->descuento/100))+16)+((($producto->precio*$request->cantidad)-(($producto->precio*$request->cantidad)* $producto->descuento/100)+16)*0.18)),2) }}</span>
            </div>
        </div>
    </div>
@endsection
