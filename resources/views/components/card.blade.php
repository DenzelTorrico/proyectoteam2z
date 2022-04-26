<div class="shadow-lg rounded-lg bg-white p-2 cursor-pointer hover:shadow-2xl">
        <img src="{{$foto}}" class="w-full bg-cover" alt="Polo">
        <hr>
        <h4 class="text-xl font-bold">{{ $title }}</h4>
        <span class="text-green-500 text-xs font-bold">Envio gratis</span>
        <div class="flex justify-between">
            <span class="text-blue-600 text-lg font-bold">S/.{{ $price }}</span>
            {{-- <button class="bg-blue-600 text-white px-2 rounded-sm text-xs hover:bg-blue-500 active:bg-blue-700 ">Comprar</button> --}}
        </div>
</div>