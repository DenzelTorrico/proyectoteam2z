@extends("layouts.master")
<script src="https://cdn.tailwindcss.com"></script>
@section('slot')

<form class="container mx-auto px-4 grid grid-cols-2 p-5" action="">
    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Nombre</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="Nombre" id="" placeholder="Nombre">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Correo</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="correo" id="" placeholder="correo">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Apellidos</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="apellidos" id="" placeholder="apellidos">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Usuario</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="Usuario" id="" placeholder="Usuario">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Telefono</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="telefono" id="" placeholder="Telefono">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Contraseña</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="contraseña" id="" placeholder="Contraseña">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Direccion</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="direccion" id="" placeholder="Direccion">
    </div>

    <div class="flex flex-col mt-7">
        <label class="text-gray-700 text-sm font-bold mb-2" for="">Confirmar Contraseña</label>
        <input class="w-3/4 shadow border rounded focus:outline-none  py-2 px-3" type="text" name="confirmcontra" id="" placeholder="Confirmar Contraseña">
    </div>

    <div class="flex flex-col mt-7 col-span-2  items-center"> 
        <input class="block text-sm text-white bg-blue-500 p-2 rounded w-40" type="submit" value="Registrarme">
        <a class="mt-5 text-blue-500" href="">Ya tengo una cuenta</a>
   </div>
    

    
</form>

@endsection