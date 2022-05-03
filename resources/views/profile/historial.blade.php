@extends('layouts.master')

@section('slot')
    <section class="container mx-auto px-20 md:px-8 py-20">
        <h4 class="text-3xl my-5">Historial de compras</h4>
        @if (count($historial) == 0)
            <div class="my-10 py-10 text-center rounded-lg border-2 space-y-5">
                <span class="text-4xl text-gray-400 font-bold">Upss!</span>
                <p>Parece que aún no ha comprado nada. Intente comprar un producto y el historial se llenara con su información.</p>
                <img src="https://res.cloudinary.com/di4pp938j/image/upload/v1651602267/Captura_de_pantalla_2022-05-03_132409_ocguiv.png" class="mx-auto" alt="Not found">
            </div>
        @else
        {{ $historial }}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs text-gray-100 uppercase bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                N. Compra
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Producto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cantidad
                            </th>
                            <th scope="col" class="px-6 py-3">
                                IGV
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CostoEnvio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Estado Venta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha Pago
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha Envio
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historial as $item)
                            <tr class="bg-white border-b bg-gray-200 border-gray-300 hover:bg-gray-300">
                                <td class="px-6 py-4">
                                    {{ $item->idVenta }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->nombre }}
                                </td>
                                <td class="px-6 py-4">
                                    S/. {{ $item->precioUnitario }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->cantidad }} cant.
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->igv }}
                                </td>
                                <td class="px-6 py-4">
                                    S./ {{ $item->costoEnvio }}
                                </td>
                                <td class="px-6 py-4">
                                    S./ {{ ($item->precioUnitario * $item->cantidad) + $item->costoEnvio + (($item->precioUnitario * $item->cantidad) + $item->costoEnvio)*$item->igv }}
                                </td>
                                <td class="flex justify-center my-3">
                                    @if ($item->estadoVenta == 0)
                                        <div class="rounded-lg bg-red-600 p-1 w-20 text-center text-white">No enviado</div>
                                    @else
                                        <div class="rounded-lg bg-green-600 text-center p-1 w-20 text-white">Enviado</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->fechaPago }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->fechaEnvio }}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection