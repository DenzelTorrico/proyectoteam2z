@extends('layouts.master')

@section('slot')
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&buyer-country=PE"></script>
    <div class="text-center pt-10">
        <h3 class="text-3xl text-gray-600">Elige metodo pago</h3>
    </div>
    <div class="flex justify-center my-10">
        <div id="paypal-button-container"></div>
    </div>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({

                    application_context: {
                        shipping_preference: "NO_SHIPPING"
                    },
                    purchase_units: [{
                        amount: {
                            value: {{ $request->total }}
                        }
                    }],
                });
            },
            onApprove: function(data, actions) {
                console.log('data', data);
                console.log('actions', actions);
                alert("TRANSACCIÓN EXITOSA, redirigiendo al inicio.");
                setTimeout(() => {
                    window.location.href = "{{ route('index') }}";
                }, 2000);
            },
            onError: function(err) {
                console.log("ERROR CRÍTICO: ", err);
            }
        }).render('#paypal-button-container');
    </script>
@endsection

@section('scripts')
    
@endsection