@extends('core.pages')
@section('content')
    <main>
        <!-- Start Banner Area
        ============================================= -->
        <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
            <!-- Slider main container -->
            <div class="banner-fade">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Single Item -->
                    <div class="swiper-slide banner-style-one">
                        <div class="banner-thumb bg-cover shadow dark" style="background: url(https://placehold.co/1500x1000/jpg);">
                        </div>
                        <div class="shape">
                            <img src="{{ asset('assets/img/shape/2.png') }}" alt="Image Not Found">
                        </div>
                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-9">
                                    <div class="content">
                                        <div class="badge">
                                            <div class="curve-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150"
                                                    version="1.1">
                                                    <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                    <text>
                                                        <textPath href="#textPath">100% Organic Product</textPath>
                                                    </text>
                                                </svg>
                                                <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ"
                                                    class="popup-youtube"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h2><strong>Agriculture</strong> Farming Products</h2>
                                            <p>
                                                Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on
                                                my jointure horrible margaret suitable.
                                            </p>
                                            <div class="button">
                                                <a class="btn btn-theme btn-md radius animation"
                                                    href="about-us.html">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="swiper-slide banner-style-one">
                        <div class="banner-thumb bg-cover shadow dark" style="background: url(https://placehold.co/1500x1000/jpg);">
                        </div>
                        <div class="shape">
                            <img src="{{ asset('assets/img/shape/2.png') }}" alt="Image Not Found">
                        </div>
                        <div class="container">
                            <div class="row align-center">
                                <div class="col-xl-9">
                                    <div class="content">
                                        <div class="badge">
                                            <div class="curve-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150"
                                                    version="1.1">
                                                    <path id="textPath2" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                    <text>
                                                        <textPath href="#textPath">100% Organic Product</textPath>
                                                    </text>
                                                </svg>
                                                <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ"
                                                    class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h2><strong>Homemade</strong> Organic Product</h2>
                                            <p>
                                                Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on
                                                my jointure horrible margaret suitable.
                                            </p>
                                            <div class="button">
                                                <a class="btn btn-theme btn-md radius animation"
                                                    href="about-us.html">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>

                <!-- Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
        <!-- End Banner -->

        <!-- Start About
        ============================================= -->
        <div class="about-style-one-area default-padding overflow-hidden">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-style-one-thumb">
                            <img src="https://placehold.co/800x1000" alt="Image Not Found">
                            <div class="animation-shape">
                                <img src="https://placehold.co/800x1000" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                        <div class="about-style-one-info">

                            <h2 class="title">Agriculture & Organic <br> Product Farm</h2>
                            <p>
                                There are many variations of passages of ipsum available but the majority have suffered
                                alteration in some form by injected humor or random word which don’t look even. Comparison
                                new ham melancholy.
                            </p>
                            <div class="fun-fact-style-flex mt-35">
                                <div class="counter">
                                    <div class="timer" data-to="25" data-speed="2000">25</div>
                                    <div class="operator">M</div>
                                </div>
                                <span class="medium">Growth Tonns <br> of Harvest</span>
                            </div>
                            <ul class="top-feature">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/3.png') }}"alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>100% Guaranteed Organic Product</h4>
                                        <p>
                                            Always parties but trying she shewing of moment.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/2.png') }}"alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Top-Quality Healthy Foods Production</h4>
                                        <p>
                                            Majority have suffered alteration in some form by injected humor.
                                        </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->
    </main>
@endsection
