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
                        <h1>All Episodes</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="{{ route('main_home') }}"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">All Episodes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Blog
                ============================================= -->
        <div class="blog-area blog-grid default-padding">
            <div class="container">
                <div class="blog-item-box">
                    <div class="row">
                        @for ($i = 0; $i < 20; $i++)
                            <!-- Single Item -->
                            <div class="col-xl-4 col-md-6 single-item">
                                <div class="blog-style-one">
                                    <div class="thumb">
                                        <a href="blog-single-with-sidebar.html"><img
                                                src="https://i3.ytimg.com/vi/nHp71fz5YGo/hqdefault.jpg"
                                                alt="Image Not Found"></a>
                                        <div class="date"><strong>{{ date('j') }}</strong>
                                            <span>{{ date('F, Y') }}</span></div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#">Admin</a>
                                                </li>
                                                <li>
                                                    <a href="#">26 Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="blog-single-with-sidebar.html">
                                            <h4 class="post-title">
                                                Lorem ipsum dolor sit amet, sit amet adipisicing elit. Perspiciatis, fugiat!
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
    </main>
@endsection
