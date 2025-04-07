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
                        <h1>Latest Blog</h1>
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
        <div class="blog-area full-blog default-padding">
            <div class="container">
                <div class="blog-items">
                    <div class="row">
                        <div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">
                            <div class="blog-item-box">
                                @for ($i = 0; $i < 10; $i++)
                                    <!-- Single Item -->
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="blog-single-with-sidebar.html"><img
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
                                                        <a href="{{ url('blog/' . $slug . '#comments') }}"
                                                            target="_blank">26 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h2 class="title">
                                                <a href="blog-single-with-sidebar.html">
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
                                @endfor
                            </div>

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-md-12 pagi-area text-center">
                                    <nav aria-label="navigation">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i
                                                        class="fas fa-angle-double-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="blog-with-sidebar.html">1</a></li>
                                            <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i
                                                        class="fas fa-angle-double-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <!-- Start Sidebar -->
                        <div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-100 mt-xs-50">
                            <aside>
                                <div class="sidebar-item search">
                                    <div class="sidebar-info">
                                        <form method="get" action="{{ url('blogs/search') }}">
                                            <input type="text" placeholder="Enter Keyword" name="q"
                                                class="form-control">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-item recent-post">
                                    <h4 class="title">Recent Post</h4>
                                    <ul>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/3.jpg" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span class="post-date">12 Feb, 2020</span>
                                                </div>
                                                <a href="blog-single-with-sidebar.html">Commanded household smallness
                                                    delivered.</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/4.jpg" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span class="post-date">05 Jul, 2022</span>
                                                </div>
                                                <a href="blog-single-with-sidebar.html">Future Plan & Strategy for
                                                    Consutruction </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/5.jpg" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta-title">
                                                    <span class="post-date">29 Aug, 2020</span>
                                                </div>
                                                <a href="blog-single-with-sidebar.html">Melancholy particular devonshire
                                                    alteration</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-item category">
                                    <h4 class="title">category list</h4>
                                    <div class="sidebar-info">
                                        <ul>
                                            <li>
                                                <a href="blog-with-sidebar.html">national <span>69</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-with-sidebar.html">national <span>25</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-with-sidebar.html">sports <span>18</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-with-sidebar.html">megazine <span>37</span></a>
                                            </li>
                                            <li>
                                                <a href="blog-with-sidebar.html">health <span>12</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item gallery">
                                    <h4 class="title">Gallery</h4>
                                    <div class="sidebar-info">
                                        <ul>
                                            <li>
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/1.jpg" alt="thumb">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/2.jpg" alt="thumb">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/3.jpg" alt="thumb">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/4.jpg" alt="thumb">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/5.jpg" alt="thumb">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-single-with-sidebar.html">
                                                    <img src="assets/img/thumbs/6.jpg" alt="thumb">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item archives">
                                    <h4 class="title">Archives</h4>
                                    <div class="sidebar-info">
                                        <ul>
                                            <li><a href="blog-with-sidebar.html">Aug 2020</a></li>
                                            <li><a href="blog-with-sidebar.html">Sept 2020</a></li>
                                            <li><a href="blog-with-sidebar.html">Nov 2020</a></li>
                                            <li><a href="blog-with-sidebar.html">Dec 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item social-sidebar">
                                    <h4 class="title">follow us</h4>
                                    <div class="sidebar-info">
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
                                            <li class="pinterest">
                                                <a href="#">
                                                    <i class="fab fa-pinterest"></i>
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
                                <div class="sidebar-item tags">
                                    <h4 class="title">tags</h4>
                                    <div class="sidebar-info">
                                        <ul>
                                            <li><a href="blog-with-sidebar.html">Fashion</a>
                                            </li>
                                            <li><a href="blog-with-sidebar.html">Education</a>
                                            </li>
                                            <li><a href="blog-with-sidebar.html">nation</a>
                                            </li>
                                            <li><a href="blog-with-sidebar.html">study</a>
                                            </li>
                                            <li><a href="blog-with-sidebar.html">health</a>
                                            </li>
                                            <li><a href="blog-with-sidebar.html">food</a>
                                            </li>
                                            <li><a href="blog-with-sidebar.html">travel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- End Start Sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->
    </main>
@endsection
