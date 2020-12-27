@extends('layouts.layout')

@section('content')
    <script src="https://www.paypal.com/sdk/js?client-id=AbobDk25HEfyVNSFDpVwUM4bn-AXRPwm0hqO9HqiDEb_6pIGqT8o1KZgwPsaWSw__SJRG8RjbzvqRa8M&currency=CAD"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
    </script>
    <div class="" style="background-color: #efeef2; padding: 0 20px;">
        <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
            <a class="link-secondary" href="#">
                <i class="fab fa-canadian-maple-leaf" style="font-size: 55px; color: #c60045"></i>
            </a>
            </div>
            <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">DreamcC</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-lg btn-outline-secondary free-btn" href="{{ route('dreamc.create') }}">
                <i class="fas fa-chevron-circle-right" style="font-size: 20px;"></i>
                Free Assessment
            </a>
            </div>
        </div>
        </header>
    </div>
    <form action="" class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h4 class="mb-3">Pricing</h4>

        <div class="d-block my-3" id="rates">
            <div class="custom-control custom-radio">
                <input id="enterprise" name="rate" type="radio" class="custom-control-input" value=100 checked>
                <label class="custom-control-label" for="enterprise">$100 / hr</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="paypal" name="rate" type="radio" class="custom-control-input" value=150>
                <label class="custom-control-label" for="paypal">$150 / month</label>
            </div>
        </div>
       
        <hr class="mb-4">
        <div id="paypal-button-container" class="text-center"></div>
    </form>
    <script>
    
        paypal.Buttons({
            createOrder: function(data, actions) {
                var radios = document.getElementsByName('rate');
                for (var radio of radios) {
                    if (radio.checked) {
                        var rate_value = radio.value;
                    }
                }
                // console.log(rate_value);
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                amount: {
                    value: rate_value
                }
                }]
            });
            },
            onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
            }
        }).render('#paypal-button-container');
        //This function displays Smart Payment Buttons on your web page.
    </script>

@endsection