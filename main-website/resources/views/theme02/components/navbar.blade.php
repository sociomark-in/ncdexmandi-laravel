<header class="w-100">
    <nav class="navbar bg-white">
        <div class="container-fluid">
            <marquee class="navbar-text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsam illo ad at ullam obcaecati a
                cumque dolore aperiam exercitationem maxime veniam dolor adipisci quidem laborum, omnis blanditiis
                velit. Inventore.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ipsam illo ad at ullam obcaecati a
                cumque dolore aperiam exercitationem maxime veniam dolor adipisci quidem laborum, omnis blanditiis
                velit. Inventore.
            </marquee>
        </div>
    </nav>
    <nav class="navbar navbar-expand-xl bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="{{ route('main_home') }}">
                <img src="{{ asset('theme02/assets/logo.jpeg') }}" class="me-2" height="50" alt="Mandi Logo">
                <img src="{{ asset('theme02/assets/NCDEx-IPFT.png') }}" height="30" alt="Mandi Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between flex-row-reverse ms-0 ms-xl-5 mt-3 mt-xl-0"
                id="navbarNavDropdown">
                <ul class="navbar-nav gap-2">
                    <li>
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en',
                                    includedLanguages: 'en,mr,hi,gu',
                                }, 'google_translate_element');
                            }

                            $('.lang-select').on("click", () => {
                                var theLang = $(this).attr('data-lang');
                                $('.goog-te-combo').val(theLang);

                                //alert($(this).attr('href'));
                                window.location = $(this).attr('href');
                                // location.reload();

                            });
                        </script>
                        <style>
                            #google_translate_element {
                                height: 2.6rem;
                                overflow: hidden;
                            }

                            #google_translate_element .goog-te-combo {
                                font-size: 1rem;
                                font-family: 'Poppins', 'Segoe UI', Tahoma, 'Geneva', 'Verdana', sans-serif;
                                padding: 0.5rem;
                                margin: 0;
                            }

                            iframe.skiptranslate {
                                display: none !important;
                            }

                            body {
                                top: 0px !important;
                            }
                        </style>

                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                        </script>
                    </li>
                    <li class="nav-item">
                        <div class="btn btn-icon btn-search" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fa-solid fa-magnifying-glass icon-prepend"></i><span
                            class="ms-2">Search</span></div>
                    </li>
                </ul>
                <ul class="navbar-nav g-3 g-md-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('main_home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main_about') }}">About NCDEX Mandi</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('episodes_home') }}">Kheti Ke Sikandar</a> --}}
                        <a class="nav-link" href="{{ route('kks_home') }}">Kheti Ke Sikandar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            NCDEX Ki Pathshala
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Key Institutions</a></li>
                            <li><a class="dropdown-item" href="#">Blogs</a></li>
                            <li><a class="dropdown-item" href="#">Webinars</a></li>
                            <li><a class="dropdown-item" href="#">Podcast</a></li>
                            <li><a class="dropdown-item" href="#">Reports</a></li>
                            <li><a class="dropdown-item" href="#">Infographics</a></li>
                            <li><a class="dropdown-item" href="#">FAQs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-flashy" href="{{ route('main_events') }}">Upcoming Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main_contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar bg-white">
        <div class="container-fluid">
            <div class="swiper bidSwiper">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="swiper-slide">
                            <div class="card">
                                <div class=" p-2 py-1">
                                    <div class="row g-0 justify-content-between">
                                        <div class="col-auto">
                                            Product #{{ $i + 1 }}
                                        </div>
                                        <div class="col-auto">
                                            <span class="text-success">{{ rand(199, 599) }}&nbsp;<i
                                                    class="fa-solid fa-caret-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class=" p-2 py-1">
                                    <div class="row g-0 justify-content-between">
                                        <div class="col-auto">
                                            Product #{{ $i + 1 }}
                                        </div>
                                        <div class="col-auto">
                                            <span class="text-danger">{{ rand(199, 599) }}&nbsp;<i
                                                    class="fa-solid fa-caret-down"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <script>
                new Swiper('.bidSwiper', {
                    loop: true,
                    slidesPerView: 3,
                    spaceBetween: 20,
                    autoplay: {
                        enabled: true,
                        delay: 500
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 5,
                            spaceBetween: 20,
                            autoplay: {
                                delay: 2000
                            },
                        },
                        768: {
                            slidesPerView: 6,
                            spaceBetween: 20,
                            autoplay: {
                                delay: 1500
                            },
                        },
                        1024: {
                            slidesPerView: 8,
                            spaceBetween: 20,
                            autoplay: {
                                delay: 1000
                            },
                        },
                        1400: {
                            slidesPerView: 9,
                            spaceBetween: 10,
                        },
                    },
                });
            </script>
        </div>
    </nav>
</header>
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row justify-content-center w-100">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <input type="search" name="" placeholder="Start searching on NCDEX Mandi Website..."
                            class="form-control" id="">
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                No Results
            </div>
        </div>
    </div>
</div>
