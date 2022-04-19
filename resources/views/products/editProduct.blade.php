@extends("layouts.master")
@section('slot')

<div class="px-8 py-10">
    <div class="p-4">
        <h3 class="text-xl">Tus productos publicados</h3>
    </div>
    <div class="flex space-x-10 w-full">
        <div class="w-1/4">
            <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1649645038/test/polo_rbgtq6.png" class="rounded-md border-blue-500 border-2 w-full" alt="Polo">
        </div>
        <div class="space-y-4 bg-white px-4 w-3/4">
            <h5>Descripción</h5>
            <textarea name="descripcion" class="border-gray-600/50 p-2 rounded-md outline-none border-[1px] w-full" aria-label="descripcion"></textarea>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h5>Precio</h5>
                    <input type="text" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="precio">
                </div>
                <div>
                    <h5>Categoría</h5>
                    <input type="text" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="categoria">
                </div>
                <div>
                    <h5>Descuento</h5>
                    <input type="text" class="border-gray-600/50 p-1 rounded-md outline-none border-[1px] w-full" aria-label="descuento">
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <button class="text-red-500">Cancelar</button>
                <button class="text-green-500">Aceptar</button>
            </div>
        </div>
    </div>
</div>
@endsection