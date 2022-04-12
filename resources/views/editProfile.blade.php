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
            <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png" class="mx-auto rounded-full border-blue-500 border-2 w-32 h-32" alt="Polo">
        </div>
        <div class="w-7/12 space-y-2">
            <h5>Información personal</h5>
            <hr>
            <div>
                <h5>Categoría</h5>
                <input type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="categoria">
            </div>
            <div>
                <h5>Categoría</h5>
                <input type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="categoria">
            </div>
            <div>
                <h5>Categoría</h5>
                <input type="text" class="border-gray-600/50 py-1 px-2 rounded-md outline-none border-[1px] w-full" aria-label="categoria">
            </div>
            <div class="flex justify-end space-x-5">
                <button class="bg-[#FF866B] px-7 py-1 rounded-md text-white">Cancelar</button>
                <button class="bg-[#0078D4] px-7 py-1 rounded-md text-white">Guardar</button>
            </div>
        </div>
    </div>
</div>
@endsection