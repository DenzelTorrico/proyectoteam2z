@extends("layouts.master")
<script src="https://cdn.tailwindcss.com"></script>
@section('slot')
    <form action="{{ route('logeado') }}" class="flex flex-col  items-center mt-10 pb-3" method="post">
        @csrf
        <input type="hidden" name="_method" value="POST" />
        <div>
            <img class="h-20" src="{{ url('image/user.png') }}" />
        </div>

        <div class="flex flex-col w-1/4 mt-5">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Correo</label>
            <input class="shadow border rounded focus:outline-none  py-2 px-3" type="text" name="correo" id=""
                placeholder="email">
            @error('correo')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col w-1/4 mt-5">
            <label class="text-gray-700 text-sm font-bold mb-2" for="">Contraseña</label>
            <input class="shadow rounded border px-2 py-2 focus:outline-none" type="password" name="password" id=""
                placeholder="Contraseña">
        </div>

        <div class="flex flex-col mt-5">
            <input class="block text-sm text-white bg-blue-500 p-2 rounded" type="submit" value="Ingresar">
            <a class="mt-5 text-blue-500" href="">¿Olvidaste la contraseña?</a>
        </div>


    </form>
@endsection
