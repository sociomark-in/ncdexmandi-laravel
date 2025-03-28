<!-- Start Footer
    ============================================= -->
<footer class="bg-black text-light" style="background-image: url(assets/img/shape/8.png);">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">

                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <img class="logo" src="{{ asset('assets/img/ncdex-logo.jpeg') }}" alt="Logo">
                        {{-- <img class="logo" src="https://placehold.co/200x200" alt="Logo"> --}}
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        {{-- <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> Go</button>
                        </form> --}}
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-2 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Explore</h4>
                        <ul>
                            <li>
                                <a href="{{ route('main_about') }}">About NCDEX Mandi</a>
                            </li>
                            <li>
                                <a href="{{ route('main_episodes') }}">IPFT Schools</a>
                            </li>
                            <li>
                                <a href="{{ route('main_publications') }}">Publications</a>
                            </li>
                            <li>
                                <a href="{{ route('blogs_home') }}">Blogs</a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="team.html">Meet Our Team</a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="blog-single-with-sidebar.html">News & Media</a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="services.html">Services</a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="contact-us.html">Contact Us</a>-->
                            <!--</li>-->
                            <!--{{-- <li>-->
                            <!--    <a href="team-details.html">Volunteers</a>-->
                            <!--</li> --}}-->
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item recent-post">
                        <h4 class="widget-title">Recent Posts</h4>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="meta-title">
                                        <span class="post-date">12 Sep, 2025</span>
                                    </div>
                                    <h5><a href="blog-single-with-sidebar.html">Lorum ipsum
                                        </a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html">
                                        <img src="{{ url('https://iamsabbirislam.github.io/landi-Jekyll-theme-live/assets/images/about/2.jpg') }}" alt="Thumb">
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="meta-title">
                                        <span class="post-date">12 Sep, 2025</span>
                                    </div>
                                    <h5><a href="blog-single-with-sidebar.html">Lorum ipsum
                                        </a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-lg-3 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="content">
                                    <strong>Address:</strong>
                                    <span class="text-theme">Lorum ipsum</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <strong>Email:</strong>
                                    <a class="text-theme" href="mailto:ncdex.mandi@gmail.com">ncdex.mandi@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <strong>Phone:</strong>
                                    <a class="text-theme" href="tel:18001034861">+1800-103-4861</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Single Itme -->

            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Copyright {{ date('Y') }}.
                    <!--All Rights Reserved by <a href="#">Sociomark</a>-->
                    </p>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
    <div class="shape-right-bottom">
        <!--<img src="{{ asset('assets/img/shape/7.png') }}" alt="Image Not Found">-->
    </div>
</footer>
<!-- End Footer -->
