<!-- Start Header Top
    ============================================= -->
<div class="top-bar-area top-bar-style-one bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8">
                <ul class="item-flex">
                    <li>
                        <i class="fas fa-clock"></i> Opening Hours : Sunday- Friday, 08:00 am - 05:00pm
                    </li>
                    <li>
                        <a href="tel:18001034861"><i class="fas fa-phone-alt"></i> 1800-103-4861</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-end">
                <div class="social">
                    <ul class="d-flex align-items-center">
                        <li>
                            <div id="google_translate_element"></div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en',
                                        includedLanguages: 'en,mr,hi,gu',
                                    }, 'google_translate_element');
                                }

                                $('.lang-select').on("click", () => {
                                    var theLang = $(this).attr('data-lang');
                                    $('.goog-te-combo').val(theLang);

                                    //alert($(this).attr('href'));
                                    window.location = $(this).attr('href');
                                    // location.reload();

                                });
                            </script>
                            <style>
                                #google_translate_element {
                                    height: 2rem;
                                    overflow: hidden;
                                }
                                #google_translate_element .goog-te-combo{
                                    font-size: 1rem;
                                    font-family: 'Poppins', 'Segoe UI', Tahoma, 'Geneva', 'Verdana', sans-serif;
                                    padding: 0.15rem;
                                    margin: 0;
                                }

                                iframe.skiptranslate {
                                    display: none !important;
                                }

                                body {
                                    top: 0px !important;
                                }
                            </style>

                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                            </script>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
    ============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">

        <div class="container d-flex justify-content-between align-items-center">


            <div class="navbar-brand-left">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('main_home') }}">
                        <img src="{{ asset('assets/img/ncdex-logo.jpeg') }}" class="logo" alt="Logo">
                        {{-- <img src="https://placehold.co/200x200" class="logo" alt="Logo"> --}}
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{ asset('assets/img/ncdex-logo.jpeg') }}" alt="Logo">
                {{-- <img src="https://placehold.co/200x200" alt="Logo"> --}}
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item">
                        <a href="{{ route('main_home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('main_about') }}" class="nav-link">About</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right d-none">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="far fa-shopping-cart"></i>
                                <span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu cart-list">
                                <li>
                                    <div class="thumb">
                                        <a href="#" class="photo">
                                            <img src="{{ asset('assets/img/products/1.png') }}" alt="Thumb">
                                        </a>
                                        <a href="#" class="remove-product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h6><a href="#">Delica omtantur </a></h6>
                                        <p>2x - <span class="price">$99.99</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#" class="photo">
                                            <img src="{{ asset('assets/img/products/2.png') }}" alt="Thumb">
                                        </a>
                                        <a href="#" class="remove-product">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h6><a href="#">Omnes ocurreret</a></h6>
                                        <p>1x - <span class="price">$33.33</span></p>
                                    </div>
                                </li>
                                <li class="total">
                                    <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                    <a href="#" class="btn btn-default btn-cart">Cart</a>
                                    <a href="#" class="btn btn-default btn-cart">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="button"><a href="#">Register</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

            </div>

            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->

    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->
