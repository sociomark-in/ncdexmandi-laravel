<!-- Start Footer
    ============================================= -->
<footer class="bg-black">
    <div class="container">
        <div class="row g-3 g-lg-4">
            @if (request()->is('resources/*'))
                <div class="col-12">
                    <div class="footer-form">
                        <div class="row g-2 g-md-3">
                            <div class="col-xl-5 col-lg-6 col-12">
                                <h4>Subscribe to the Newsletter</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate eius, culpa
                                    quaerat sapiente nemo amet doloribus voluptates esse deleniti dolor.</p>
                            </div>
                            <div class="offset-xl-1 col-lg-6">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <div class="">
                                                <input type="email" name="" id=""
                                                    class="form-control">
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
            @endif
            <div class="col-12">
                <div class="row g-3">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-description footer-social">
                            <h5>About NCDEX Mandi</h5>
                            <p>(15 - 20 Words)Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quae
                                perferendis harum distinctio sed eveniet odio dicta?</p>
                            <ul class="nav gap-2">
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="https://www.facebook.com/TrustNCDEX/"
                                        target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="https://www.linkedin.com/company/27547/"
                                        target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="https://www.youtube.com/user/trustncdex"
                                        target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="https://x.com/ncdex" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                        <div class="footer-links">
                            <h5>Quick Links</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_about') }}">About NCDEX Mandi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('faqs_home') }}">FAQs</a>
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
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-6">
                        <div class="footer-links">
                            <h5>Resources</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blogs</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#">Webinars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Podcast</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_publications') }}">Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('main_gallery') }}">Infographics</a>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link bg-primary p-2" data-bs-toggle="modal"
                                        data-bs-target="#subscribeModal">Subscribe Now&nbsp;&nbsp;<i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="footer-links">
                            <h5>Important Links</h5>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Calculators</a>
                                        </li>
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
                                <div class="col-6">
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
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="subscribeModalLabel">Subscribe for Updates!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Enter your Email Address</label>
                            <input type="email" name="" id="" class="form-control"
                                placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <p class="">Select from below Resources:</p>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                        value="Blogs" checked id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Blogs
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="FAQs" checked id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            FAQs
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="Key Institutions" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Key Institutions
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="Webinars" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Webinars
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="Podcast" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Podcast
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="Reports" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Reports
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="Infographics" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Infographics
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="resources[]"
                                            value="News Articles" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            News Articles
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Subscribe Now</button>
            </div>
        </div>
    </div>
</div>
