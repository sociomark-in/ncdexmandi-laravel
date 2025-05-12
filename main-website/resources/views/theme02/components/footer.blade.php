<!-- Start Footer
    ============================================= -->
<footer class="bg-black">
    <div class="container">
        <div class="row g-3 g-lg-4">
            <div class="col-12">
                <div class="footer-form">
                    <div class="row g-2 g-md-3">
                        <div class="col-xl-5 col-lg-6 col-12">
                            <h4>Subscribe to the Newsletter</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate eius, culpa quaerat sapiente nemo amet doloribus voluptates esse deleniti dolor.</p>
                        </div>
                        <div class="offset-xl-1 col-lg-6">
                            <form action="" method="post">
                                @csrf
                                <div class="row g-2">
                                    <div class="col-12">
                                        <div class="">
                                            <input type="email" name="" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-secondary btn-icon">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="row g-3">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-description footer-social">
                            <h5>About NCDEX Mandi</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quae perferendis
                                harum distinctio sed eveniet odio dicta facilis officiis placeat?</p>
                            <ul class="nav gap-2">
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
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Quick Links</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_about') }}">About NCDEX Mandi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('episodes_home') }}">Kheti Ke Sikandar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_events') }}">Upcoming Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Important Resources</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Webinars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Podcast</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Calculators</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_gallery') }}">Infographics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQs</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Important Links</h5>
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.nabard.org/"
                                                target="_blank">NABARD</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://wdra.gov.in/" target="_blank">WDRA</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://agriwelfare.gov.in/"
                                                target="_blank">Ministry of
                                                Agriculture</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://consumeraffairs.nic.in/"
                                                target="_blank">Ministry
                                                of Consumer Affairs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://fci.gov.in/" target="_blank">Food
                                                Corporation of
                                                India</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://www.nafed-india.com/"
                                                target="_blank">NAFED</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://agmarknet.gov.in/"
                                                target="_blank">AGMARKNET</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://mausam.imd.gov.in/"
                                                target="_blank">IMD</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://enam.gov.in/web/"
                                                target="_blank">eNAM</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://www.remsl.in/" target="_blank">ReMS</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-none">
                <div class="row">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Lorem, ipsum dolor.</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Important Resources</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Webinars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Podcast</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Infographics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQs</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Lorem, ipsum dolor.</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Lorem, ipsum dolor.</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Lorem, ipsum dolor.</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lorem, ipsum.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
