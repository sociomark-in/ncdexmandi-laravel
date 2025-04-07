@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>All Events</h1>
                        </div>
                        <nav aria-label="">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a
                                        href="https://ncdex.apogeedigitech.in/ncdexmandi-laravel/main-website"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">All Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="event-style-one">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html"><img
                                            src="https://i3.ytimg.com/vi/wVYuqFrUEOM/hqdefault.jpg"
                                            alt="Image Not Found" class="w-100"></a>
                                    <div class="date">
                                        <strong>7</strong>
                                        <span>April, 2025</span>
                                    </div>
                                </div>
                                <div class="event-details">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    <a href="">Lorem ipsum dolor sit amet
                                                        dolor
                                                        sit.</a>
                                                    </h3>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    <strong>Date:</strong><br>
                                                    <span>April 02, 2025</span>
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    <strong>Time:</strong><br>
                                                    <span>12:30 PM.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    </main>
@endsection
