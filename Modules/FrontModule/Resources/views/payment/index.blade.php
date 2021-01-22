@extends('frontmodule::.layouts.master')

@section('head')
    <meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://js.stripe.com/v3/">
    <script src="https://js.stripe.com/v3/"></script>

    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="form-control card">
                    <div class="card-header">Subscribe</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <select name="plan" class="form-control" id="subscription-plan">
                            @foreach($plans as $key=>$plan)
                                <option value="{{$key}}">{{$plan}}</option>
                            @endforeach
                        </select>

                        <input placeholder="Card Holder" class="form-control" id="card-holder-name" type="text">

                        <!-- Stripe Elements Placeholder -->
                        <div id="card-element"></div>

                        <button class="mt-2 btn btn-sm btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">
                            Subscribe
                        </button>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Latest jQuery -->
    <script src="{{asset('assets/front/')}}/js/jquery-1.12.4.min.js"></script>
    <!-- popper min js -->
    <script src="{{asset('assets/front/')}}/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{asset('assets/front/')}}/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{{asset('assets/front/')}}/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{{asset('assets/front/')}}/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{{asset('assets/front/')}}/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{{asset('assets/front/')}}/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{{asset('assets/front/')}}/js/jquery.countdown.min.js"></script>
    <!-- fit video  -->
    <script src="{{asset('assets/front/')}}/js/Hoverparallax.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{{asset('assets/front/')}}/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{{asset('assets/front/')}}/js/isotope.min.js"></script>
    <!-- jquery.appear js  -->
    <script src="{{asset('assets/front/')}}/js/jquery.appear.js"></script>
    <!-- jquery.dd.min js -->
    <script src="{{asset('assets/front/')}}/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="{{asset('assets/front/')}}/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="{{asset('assets/front/')}}/js/jquery.elevatezoom.js"></script>
    <!-- Google Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
    <!-- scripts js -->
    <script src="{{asset('assets/front/')}}/js/scripts.js"></script>
    <script>
        window.addEventListener('load', function() {
            const stripe = Stripe('{{env('STRIPE_KEY')}}');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;
            const plan = document.getElementById('subscription-plan').value;
            cardButton.addEventListener('click', async (e) => {
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                    alert(error.message)
                    console.error("Look! ", error)
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);

                    $.ajax({
                        'type': 'POST',
                        'url': '{{url('payment/subscribe')}}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            payment_method: setupIntent.payment_method,
                            plan : plan
                        },
                        'statusCode': {
                            200: function (url) {
                                console.log("Successfully Subscribed")
                                window.location.replace('{{url('user/home')}}');
                            },
                            402: function (response) {
                                console.error(response)
                                sweetError(response.responseJSON.message, 4000)
                            },
                            500: function (response) {
                                console.error(response)
                                sweetError(response.responseJSON.message, 4000)
                            }
                        }
                    })

                }
            });
        })
    </script>
@endsection
