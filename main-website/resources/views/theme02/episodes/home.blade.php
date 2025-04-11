@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Kheti Ke Sikandar Episodes</h1>
                        </div>
                        <nav aria-label="">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a
                                        href="{{  route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">All Episodes</li>
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
                        <div class="col-12">
                            <div class="event-style-two">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12">
                                        <div class="thumb">
                                            <a href="blog-single-with-sidebar.html"><img
                                                    src="https://i3.ytimg.com/vi/7tk9oSJKK1w/hqdefault.jpg"
                                                    alt="Image Not Found" class="w-100"></a>
                                            <div class="date">
                                                <strong>7</strong>
                                                <span>April, 2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-6 col-12">
                                        <div class="event-details">
                                            <div class="col-12">
                                                <div class="py-0 py-md-4">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <a href="">
                                                                <h3>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Repudiandae iste veniam ipsam suscipit, alias eaque.
                                                                </h3>
                                                            </a>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="clipped-content line-3">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Vero
                                                                vel repudiandae id temporibus eius aliquam cum doloremque
                                                                ipsum
                                                                at, molestiae, quis dolorem aperiam fugit quia quas? At
                                                                dolorem
                                                                repudiandae inventore ipsum, illum optio nemo autem aliquid
                                                                tempore quos dicta quas, amet officia possimus magnam
                                                                perferendis facilis sunt ducimus laboriosam. Totam.
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <ul class="nav social-share align-items-center gap-2">
                                                                <li class="nav-item me-3">Share:</li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link social-icon" href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link social-icon" href="#"><i
                                                                            class="fa-brands fa-linkedin-in"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link social-icon" href="#"><i
                                                                            class="fa-brands fa-x-twitter"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link social-icon" href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
