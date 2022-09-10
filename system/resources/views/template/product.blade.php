<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Personal Care
        :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ url('public') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ url('public') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{ url('public') }}/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{ url('public') }}/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link
        href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ url('public') }}/js/move-top.js"></script>
    <script type="text/javascript" src="{{ url('public') }}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
            </div>
            <div class="agile-login">
                <ul>
                    <li><a href="registered.html"> Create Account </a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="index.html">super Market</a></h1>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html" class="act">Home</a></li>
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">product<b
                                    class=""></b></a>

                    </ul>
                    </li>

                </div>
            </nav>
        </div>
    </div>

    <!-- //navigation -->
    <!--- personalcare --->
    <div class="products">
        <div class="container">

            <div class="col-md-8 products-right">
                <div class="products-right-grid">
                    <div class="products-right-grids">

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="agile_top_brands_grids">
                    @foreach ($list_produk as $produk)
                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="{{ url('public') }}/images/offer.png" alt=" "
                                            class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" "
                                                            src="{{ url('public') }}/images/pc1.png"></a>
                                                    <p>{{ $produk->nama }}</p>
                                                    <h4>{{ $produk->harga }}</h4>
                                                    <h4>Stok : {{ $produk->stok }}</h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name"
                                                                value="Fortune Sunflower Oil">
                                                            <input type="hidden" name="amount" value="35.99">
                                                            <input type="hidden" name="discount_amount"
                                                                value="1.00">
                                                            <input type="hidden" name="currency_code"
                                                                value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return"
                                                                value=" ">
                                                            <input type="submit" name="submit" value="Add to cart"
                                                                class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
                <div class="agile_top_brands_grids">
                    <nav class="numbering">
                        <ul class="pagination paging">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--- personalcare --->
        <!-- //footer -->
        <div class="footer">
            <div class="container">
                <div class="w3_footer_grids">
                    <div class="footer">
                        <div class="container">
                            <div class="w3_footer_grids">
                                <div class="col-md-3 w3_footer_grid">
                                    <h3>Category</h3>
                                    <ul class="info">

                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a
                                                href="{{ url('product') }}/">Product
                                            </a></li>

                                    </ul>
                                </div>
                                <div class="col-md-3 w3_footer_grid">
                                    <h3>Profile</h3>
                                    <ul class="info">

                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a
                                                href="{{ url('login') }}">Login</a>
                                        </li>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a
                                                href="{{ url('register') }}/">register
                                            </a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                        <div class="footer-copy">

                            <div class="container">
                                <p>© 2017 Super Market. All rights reserved | Design by <a
                                        href="http://w3layouts.com/">W3layouts</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <div class="footer-copy">

                <div class="container">
                    <p>© 2017 Super Market. All rights reserved | Design by <a
                            href="http://w3layouts.com/">W3layouts</a>
                    </p>
                </div>
            </div>

        </div>
        <div class="footer-botm">
            <div class="container">
                <div class="w3layouts-foot">
                    <ul>
                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="payment-w3ls">
                    <img src="{{ url('public') }}/images/card.png" alt=" " class="img-responsive">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ url('public') }}/js/bootstrap.min.js"></script>
        <!-- top-header and slider -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear'
                	};
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //here ends scrolling icon -->
        <script src="{{ url('public') }}/js/minicart.min.js"></script>
        <script>
            // Mini Cart
            paypal.minicart.render({
                action: '#'
            });

            if (~window.location.search.indexOf('reset=true')) {
                paypal.minicart.reset();
            }
        </script>
        <!-- main slider-banner -->
        <script src="{{ url('public') }}/js/skdslider.min.js"></script>
        <link href="{{ url('public') }}/css/skdslider.css" rel="stylesheet">
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#demo1').skdslider({
                    'delay': 5000,
                    'animationSpeed': 2000,
                    'showNextPrev': true,
                    'showPlayButton': true,
                    'autoSlide': true,
                    'animationType': 'fading'
                });

                jQuery('#responsive').change(function() {
                    $('#responsive_wrapper').width(jQuery(this).val());
                });

            });
        </script>
        <!-- //main slider-banner -->

</body>

</html>
