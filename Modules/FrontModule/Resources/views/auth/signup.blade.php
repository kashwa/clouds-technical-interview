<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>Clouds technical task</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/')}}/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/linearicons.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/front/')}}/css/responsive.css">

</head>

<body>

<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Register</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Create an Account</h3>
                            </div>
                            <!-- SIGNUP FORM -->
                            <div id="error_div" style="display: none">
                                <span class="alert alert-danger" id="error_span"></span>
                                <br/>
                                <br/>
                            </div>
                            <form method="post" action="{{ route('user.signup') }}" id="signup_form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" required class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" pattern="[0-9]+" title="must be number" required class="form-control" name="phone" placeholder="Enter Your Phone">
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control" required type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input id="confirm_password" class="form-control" required type="password" name="password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Already have an account? <a href="{{route('user.login')}}">Log in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3>Subscribe Our Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form">
                        <form>
                            <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

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

<script type="text/javascript">
    var icon = '<i class="fa fa-info-circle"></i>';

    $(document).on('submit', '#signup_form', function (e) {
        e.preventDefault();

        // Check password confirmation
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();
        if (password === confirm_password){

            var token = '{{csrf_token()}}';
            var formData = new FormData(document.querySelector('#signup_form'));
            formData.append("_token", token);

            $.ajax({
                'type': 'POST',
                'url': $(this).attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                'statusCode': {
                    200: function (url) {
                        window.location.replace(url);
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
        }else{
            sweetError('Error, password is not matching!', 3000);
        }
    });

    function sweetError(text, time){
        if($('#error_div').is(':hidden')){
            $('#error_span').html(icon+text)
            $('#error_div').show()
        }

        setTimeout(function () {
            $('#error_div').hide('slow')
        }, time)
    }
</script>
</body>
</html>
