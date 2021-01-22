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
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/linearicons.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('assets/front')}}/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/responsive.css">

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

<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">

    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg"></nav>
        </div>
    </div>
</header>
<!-- END HEADER -->

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Login</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Login</li>
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
                                <h3>Login</h3>
                            </div>
                            <!-- LOGIN FORM -->
                            <div id="error_div" style="display: none">
                                <span class="alert alert-danger" id="error_span"></span>
                                <br/>
                                <br/>
                            </div>
                            <form method="post" action="{{ route('user.login')  }}" id="login_form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember_me" id="exampleCheckbox1" value="1">
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <ul class="btn-login list_none text-center">
                                <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                            </ul>
                            <div class="form-note text-center">Don't Have an Account? <a href="{{route('user.signup')}}">Sign up now</a></div>
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

<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('assets/front')}}/images/logo_light.png" alt="logo"/></a>
                        </div>
                        <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Category</h6>
                        <ul class="widget_links">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Woman</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Best Saller</a></li>
                            <li><a href="#">New Arrivals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, New South London , UK</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#"><img src="{{asset('assets/front/')}}/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="{{asset('assets/front/')}}/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="{{asset('assets/front/')}}/images/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{asset('assets/front/')}}/images/paypal.png" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{asset('assets/front/')}}/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

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

{{--  Login AJAX  --}}
<script type="text/javascript">
    $(document).on('submit', '#login_form', function (e) {
        e.preventDefault();

        var token = '{{csrf_token()}}';
        var formData = new FormData(document.querySelector('#login_form'));
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
                    if($('#error_div').is(':hidden')){
                        var icon = '<i class="fa fa-info-circle"></i>'
                        $('#error_span').html(icon+response.responseJSON)
                        $('#error_div').show()
                    }

                    setTimeout(function () {
                        $('#error_div').hide('slow')
                    }, 4000)
                }
            }
        })
    })
</script>

</body>
</html>
