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
                        <div class="banner-thumb bg-cover shadow dark"
                            style="background: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
                        </div>
                        <div class="shape">
                            <img src="{{ asset('assets/img/shape/2.png') }}" alt="Image Not Found">
                            <!--<img src="https://placehold.co/400x400" alt="Image Not Found">-->
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
                                                        <textPath href="#textPath">100% Lorem, ipsum dolor.</textPath>
                                                    </text>
                                                </svg>
                                                <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ"
                                                    class="popup-youtube"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h3 class="title"><strong>Lorem ipsum dolor</strong> sit amet.</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.
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
                        <div class="banner-thumb bg-cover shadow dark"
                            style="background: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
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
                                                        <textPath href="#textPath">100% Lorem, ipsum dolor.</textPath>
                                                    </text>
                                                </svg>
                                                <a href="https://www.youtube.com/watch?v=ipUuoMCEbDQ"
                                                    class="popup-youtube"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h3 class="title"><strong>Lorem ipsum dolor</strong> sit amet.</h3>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.
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
                            <img src="{{ url('https://www.shutterstock.com/shutterstock/photos/2304603711/display_1500/stock-photo-two-farmers-using-technology-to-check-crop-quality-2304603711.jpg') }}" alt="Image Not Found">
                            <div class="animation-shape">
                                <img src="{{ url('https://validthemes.net/site-template/agrica/assets/img/illustration/1.png')}}" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                        <div class="about-style-one-info">

                            <h2 class="title">Lorem ipsum dolor sit <br> amet consectetur adipisicing.</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.
                            </p>
                            <div class="fun-fact-style-flex mt-35">
                                <div class="counter">
                                    <div class="timer" data-to="25" data-speed="2000">25</div>
                                    <div class="operator">M</div>
                                </div>
                                <span class="medium">Lorem ipsum <br> dolor sit.</span>
                            </div>
                            <ul class="top-feature">
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}"alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quisquam.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}"alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quisquam.
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

        <!-- Start Services
                                ============================================= -->
        <div class="services-style-one-area bg-gray default-padding bottom-less">
            <div class="shape-right-top" style="background-image: url(assets/img/shape/9.png);"></div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="site-heading text-center">
                            <h5 class="sub-title">What we do</h5>
                            <h2 class="title">Lorem ipsum dolor sit amet <br>consectetur adipisicing elit!</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="service-one-single">
                                <div class="service-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image Not Found">
                                    </div>
                                    <div class="info">
                                        <div class="top">
                                            <h4><a href="#">Lorem, ipsum dolor <span>Lorem, ipsum.</span></a></h4>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores et commodi id
                                            sed
                                            accusantium harum, at odio omnis quibusdam quod deserunt dolorem corrupti,
                                            soluta
                                            delectus aspernatur facere cumque sint optio!
                                        </p>
                                    </div>
                                    <a href="services-details.html" class="btn-angle"><i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    @endfor
                </div>
            </div>
        </div>
        <!-- End Services -->


        <!-- Start Benifits
                                ============================================= -->
        <div class="benifits-area default-padding-top video-bg-live bg-cover mt--50 mt-md-0 mt-xs-0"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="player"
                data-property="{videoURL:'w9eRIGTHKJM',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:13, opacity:1, quality:'default'}">
            </div>
            <div class="shape-top-center" style="background-image: url(assets/img/shape/10.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="benifit-items text-dark">
                            <div class="shape">
                                <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image Not Found">
                            </div>
                            <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex ad reprehenderit quas eaque
                                iste molestiae, libero accusamus unde laborum vel nostrum! Ut, consequatur nesciunt. Est
                                molestiae id quae ipsam mollitia?
                            </p>
                            <ul class="list-standard">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Benifits -->

        <!-- Start Product
                                ============================================= -->
        <div class="product-cat-area default-padding">
            <div class="shape-right-bottom-mini">
                <img src="assets/img/shape/11.png" alt="Image Not Found">
            </div>
            <div class="container">
                <div class="product-cat-items">
                    <div class="row align-center">
                        <div class="col-lg-5 product-cat-info">
                            <h2 class="mask-text" style="background-image: url({{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }});">
                                Connecting From Farms to Market</h2>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="product-cat-lists text-light">
                                <div class="product-list-box">
                                    @for ($i = 0; $i < 6; $i++)
                                        <!-- Single Item -->
                                        <div class="product-list-item">
                                            <a href="services-details.html">
                                                <img src="{{ asset('assets/img/icon/4.png') }}" alt="Icon">
                                                <h5>Lorem, ipsum.</h5>
                                            </a>
                                        </div>
                                        <!-- End Single Item -->
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cat -->

        <!-- Start Testimonial
                                ============================================= -->
        <div class="testimonial-area default-padding bg-gray" style="background-image: url(assets/img/shape/13.png);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-heading">
                            <h2>Testimonials</h2>
                        </div>
                        <div class="testimonial-carousel testimonial-style-one swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <!-- Single item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one">
                                            <div class="thumb">
                                                <img src="https://img.freepik.com/premium-photo/farmer-is-working-field-potatoes_1313119-2840.jpg" alt="Imge Not Found">
                                            </div>
                                            <div class="info">
                                                <img src="assets/img/shape/quote-big.png" alt="Image Not Found">
                                                <p>
                                                    “Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                                    aspernatur
                                                    autem vel quo eaque obcaecati voluptate officia, omnis temporibus unde
                                                    atque, quos fugiat perferendis. Officiis, harum quibusdam, molestiae
                                                    enim
                                                    minus dolorum earum accusantium nulla odio consequuntur architecto
                                                    ducimus
                                                    esse, deleniti nihil! Labore neque commodi, officiis minima eius ab
                                                    deleniti
                                                    id.”
                                                </p>
                                                <div class="provider">
                                                    <div class="content">
                                                        <h4>Metho k. Partho</h4>
                                                        <span>Senior Developer</span>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial -->

        <!-- Start Gallery
                                ============================================= -->
        <div class="gallery-style-one-area default-padding">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="site-heading text-center">
                            <h5 class="sub-title">Awesome Initaitives</h5>
                            <h2 class="title">Explore CSR Initiatives</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fill">
                <div class="row">
                    <div class="gallery-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Category</p>
                                        <h4><a href="project-details.html">Lorem ipsum dolor sit.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Category</p>
                                        <h4><a href="project-details.html">Lorem ipsum dolor sit.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Category</p>
                                        <h4><a href="project-details.html">Lorem ipsum dolor sit.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Category</p>
                                        <h4><a href="project-details.html">Lorem ipsum dolor sit.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Image not Found">
                                    <div class="overlay">
                                        <p>Category</p>
                                        <h4><a href="project-details.html">Lorem ipsum dolor sit.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery  -->

        <!-- Start Choose Us Area
                                ============================================= -->
        <div class="choose-us-style-one-area default-padding-bottom">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-5 col-lg-5">
                        <div class="choose-us-thumb">
                            <img src="{{ url('https://www.villagesquare.in/wp-content/uploads/2024/12/LEAD-image11-Milan-Barad.jpg') }}" alt="Image Not Found">
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-7">
                        <div class="achivement-items">
                            <ul class="list-details">
                                <li>
                                    <h4>Lorem ipsum dolor sit.</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni saepe earum facilis
                                        quaerat nobis, maiores maxime fugiat mollitia eaque aut illum, nam tempora iusto at.
                                        Rem similique impedit nobis sunt.
                                    </p>
                                </li>
                                <li>
                                    <h4>Lorem ipsum dolor sit.</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni saepe earum facilis
                                        quaerat nobis, maiores maxime fugiat mollitia eaque aut illum, nam tempora iusto at.
                                        Rem similique impedit nobis sunt.
                                    </p>
                                </li>
                            </ul>
                            <div class="achivement-content">
                                <div class="item">
                                    <div class="progressbar">
                                        <div class="circle" data-percent="83">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <h4>Lorem ipsum dolor sit.</h4>
                                </div>
                                <div class="item">
                                    <div class="progressbar">
                                        <div class="circle" data-percent="60">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <h4>Lorem ipsum dolor sit.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Us -->

        @include('components._contactus')
        @include('components._blogslist')
    </main>
@endsection
