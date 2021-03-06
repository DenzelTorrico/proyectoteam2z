@extends("layouts.master")
<script src="https://cdn.tailwindcss.com"></script>
@section('slot')

    <form class="container mx-auto px-4 grid grid-cols-2 p-5" action="{{ route
    ('registrado') }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="POST" />
        
        <div class="col-span-2">
            <h1 class="text-4xl">Formulario de registro</h1>
        </div>
        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Nombre</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="nombre" id=""
                placeholder="Nombre">
            @error('nombre')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Correo</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="correo" id=""
                placeholder="Correo">
            @error('correo')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Apellidos</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="apellidos" id=""
                placeholder="Apellidos">
            @error('apellidos')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Usuario</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="usuario" id=""
                placeholder="Usuario">
            @error('usuario')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Telefono</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="telefono" id=""
                placeholder="Telefono">
            @error('telefono')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Contrase??a</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="password" name="password" id=""
                placeholder="Contrase??a">
            @error('password')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Direccion</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="direccion" id=""
                placeholder="Direccion">
            @error('direccion')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Confirmar Contrase??a</label>
            <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="password" name="confirmcontra"
                id="" placeholder="Confirmar Contrase??a">
            @error('confirmcontra')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col mt-7">
            <label class="text-gray-700 text-sm font-bold mb-2">ROL</label>
            <select name="id_role" class="rounded border p-2" id="">
                <option value="1">Usuario</option>
            </select>
        </div>
        
        <div class="flex flex-col mt-7 col-span-2  items-center">
            <input class="block text-sm text-white bg-blue-500 p-2 rounded w-40" type="submit" value="Registrarme">
            <a class="mt-5 text-blue-500" href="{{ route('login') }}">Ya tengo una cuenta</a>
        </div>



    </form>
@endsection
