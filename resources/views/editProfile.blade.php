@extends("layouts.master")
@section('slot')
    <div class="px-8 py-10">
        <div class="flex w-full">
            <div class="border-gray-600 border-r-[1px] w-2/12 pr-2">
                <h5 class="py-2 text-lg font-bold">AJUSTES</h5>
                <div class="py-1">
                    <a href="#">Información personal</a>
                </div>
                <hr>
                <div class="py-1">
                    <a href="#">Reestablecer contraseña</a>
                </div>
                <hr>
                <div class="py-1">
                    <a href="#">Historial</a>
                </div>
            </div>
            <div class="w-3/12">
                <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png"
                    class="mx-auto rounded-full border-blue-500 border-2 w-32 h-32" alt="Polo">
            </div>
            <div class="w-7/12 space-y-2">
                <h5>Información personal</h5>
                <hr>
                <form action="{{ route('profile.update', $profile) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label>Nombre</label>
                            <input name="nombre" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="nombre" value="{{ old('nombre', $profile->nombre) }}">
                            @error('nombre')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Apellidos</label>
                            <input name="apellidos" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="apellidos" value="{{ old('apellidos', $profile->apellidos) }}">
                            @error('apellidos')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Telefono</label>
                            <input name="telefono" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="telefono" value="{{ old('telefono', $profile->telefono) }}">
                            @error('estadoProducto')
                                <span class="text-red-500 text-sm">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label>Dirección</label>
                            <input name="direccion" type="text"
                                class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full"
                                aria-label="direccion" value="{{ old('direccion', $profile->direccion) }}">
                            @error('descuento')
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
    </div>
@endsection
