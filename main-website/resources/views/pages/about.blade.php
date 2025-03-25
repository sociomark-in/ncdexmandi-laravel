@extends('core.pages')
@section('content')
    <main>
        <!-- Start Breadcrumb
                ============================================= -->
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="{{ route('main_home') }}"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start About
                                        ============================================= -->
        <div class="about-style-one-area default-padding overflow-hidden">
            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-style-one-thumb">
                            <img src="{{ url('https://img.freepik.com/free-photo/hard-work-garden-brings-results_329181-4615.jpg?t=st=1742827318~exp=1742830918~hmac=936451b2dd16b5d6850ab352dd46f5c0e418ded83c58850594634a380adca513&w=740') }}" alt="Image Not Found">
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

        <!-- Start Timeline
                ============================================= -->
        <div class="timeline-area default-padding-bottom" style="background-image: url(assets/img/shape/21.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading">
                            <h2 class="title">Farming have been <br> since 1866</h2>
                            <div class="row">
                                <div class="col-xl-10 offset-xl-2">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam eaque laborum ad
                                        asperiores dolorem. Adipisci error eaque dolorem, itaque aliquam animi fuga dolor
                                        ipsam! Velit ratione hic corporis veritatis odit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="timeline-items">
                            <!-- Single Item -->
                            <div class="timeline-item">
                                <h2>1906</h2>
                                <h4>Lorem ipsum dolor sit.</h4>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="timeline-item">
                                <h2>1920</h2>
                                <h4>Lorem ipsum dolor sit.</h4>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="timeline-item">
                                <h2>1925</h2>
                                <h4>Lorem ipsum dolor sit.</h4>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="timeline-item">
                                <h2>1925</h2>
                                <h4>Lorem ipsum dolor sit.</h4>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="timeline-item">
                                <h2>1925</h2>
                                <h4>Lorem ipsum dolor sit.</h4>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="timeline-item">
                                <h2>1925</h2>
                                <h4>Lorem ipsum dolor sit.</h4>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Timeline -->

        <!-- Start Team
                ============================================= -->
        <div class="team-style-one-area default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-4">
                        <h4 class="sub-title">Kheti Ke Sikandar</h4>
                        <h2 class="title">Meet our Kheti Ke Sikandar</h2>
                        <a class="btn btn-theme secondary mt-10 btn-md radius animation" href="farmers.html">Meet all
                            Farmers</a>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="team-style-one-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="farmer-style-one-item">
                                            <div class="thumb">
                                                <img src="{{ url('https://img.freepik.com/premium-photo/indian-farmer_981168-3801.jpg?w=740') }}" class="w-100" alt="Image Not Found">
                                                <div class="social">
                                                    <i class="fas fa-share-alt"></i>
                                                    <ul>
                                                        <li class="facebook">
                                                            <a href="#">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li class="twitter">
                                                            <a href="#">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="linkedin">
                                                            <a href="#">
                                                                <i class="fab fa-linkedin-in"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <span>Farmer of Lorem, ipsum dolor.</span>
                                                <h4><a href="farmer-details.html">Lorem ipsum dolor sit.</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team -->

        @include('components._contactus')
        @include('components._blogslist')
    </main>
@endsection
