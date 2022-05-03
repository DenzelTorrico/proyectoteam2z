@extends('layouts.master')

@section('slot')
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&buyer-country=US"></script>

    <div id="paypal-button-container"></div>

    <script>
        function comprar() {
            window.location.href = "{{ route('paypal.process') }}";
        }

        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({

                    application_context: {
                        shipping_preference: "NO_SHIPPING"
                    },
                    purchase_units: [{
                        amount: {
                            value: 100
                        }
                    }],
                });
            },
            onApprove: function(data, actions) {
                console.log('data', data);
                console.log('actions', actions);
                let resp = confirm("TRANSACCIÓN EXITOSA");
                if (resp){
                    comprar();
                }
            },
            onError: function(err) {
                console.log("ERROR CRÍTICO: ", err);
            }
        }).render('#paypal-button-container');
    </script>
@endsection
