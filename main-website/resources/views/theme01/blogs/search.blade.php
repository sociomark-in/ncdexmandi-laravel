@extends('core.pages')
@section('content')
    <main>
        <!-- Start Breadcrumb
                            ============================================= -->
        <div class="breadcrumb-area text-center shadow dark bg-fixed text-light"
            style="background-image: url(assets/img/banner/3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Blog Standard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Blog</li>
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
                <div class="mb-3 mb-md-5">
                    <div class="sidebar-item search">
                        <div class="sidebar-info">
                            <form method="get" action="{{ url('blogs/search') }}">
                                <div class="row align-items-center">
                                    <div class="col-lg">
                                        <input type="text" placeholder="Enter Keyword" name="q"
                                            class="form-control">

                                    </div>
                                    <div class="col-lg-auto">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="blog-item-box">
                    <div class="row">
                        @for ($i = 0; $i < 20; $i++)
                            <!-- Single Item -->
                            <div class="col-xl-6 col-12 single-item">
                                <div class="blog-style-one">
                                    <div class="thumb">
                                        <a href="{{ url('blog/' . $slug . '#main') }}"><img class="w-100"
                                                src="https://placehold.co/840x480/jpg" alt="Thumb"></a>
                                        <div class="date">
                                            <strong>{{ date('j') }}</strong><span>{{ date('F, Y') }}</span>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="{{ url('blogs/search?post_author=admin') }}">Admin</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('blog/' . $slug . '#comments') }}" target="_blank">26
                                                        Comments</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title">
                                            <a href="{{ url('blog/' . $slug . '#main') }}">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
                                                laudantium!
                                            </a>
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur
                                            laudantium beatae dignissimos, facere soluta nihil eos ut quas, ex,
                                            quibusdam possimus inventore harum illum sapiente quod minima placeat maxime
                                            eius similique? Mollitia repudiandae natus sequi perferendis aspernatur enim
                                            quis nobis!
                                        </p>
                                        <a class="btn mt-10 btn-md btn-theme animation"
                                            href="{{ url('blog/' . $slug . '#main') }}" target="_blank">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        @endfor
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="blog-standard.html"><i
                                                class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="blog-standard.html">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="blog-standard.html">2</a></li>
                                    <li class="page-item"><a class="page-link" href="blog-standard.html">3</a></li>
                                    <li class="page-item"><a class="page-link" href="blog-standard.html"><i
                                                class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Blog -->
    </main>
@endsection
