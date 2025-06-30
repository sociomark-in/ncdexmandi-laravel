{{-- Core Template for Basic Pages --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme02/assets/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme02/assets/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme02/assets/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('theme02/assets/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Plugin: Lite Youtube  -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.5.0/lite-youtube.js"></script>
    <!-- Plugin: Lite Youtube  -->

    @stack('libraries')

    <link rel="stylesheet" href="{{ asset('theme02/assets/css/style.min.css') }}">

    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body>
    @include('theme02.components.loader')
    @include('theme02.components.navbar')
    {{-- Popup Modal --}}
    <div class="modal fade" id="contactShortModal" tabindex="-1" aria-labelledby="contactShortModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="contactShortModalLabel">Fill Details Below</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Email Address</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Contact</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Message</label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="col-auto">
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Popup Modal --}}
    {{-- <aside class="position-fixed floating-widget floating-style-01 ">
        <a href="" data-bs-toggle="modal" data-bs-target="#contactShortModal" class="btn btn-secondary">Contact
            Us</a>
    </aside> --}}

    {{-- FAQ Model --}}
    <div class="modal fade" id="faqChatModal" tabindex="-1" aria-labelledby="faqChatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="faqChatModalLabel">Ask Your Query</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <form action="">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="text" placeholder="Type Your Query" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary">Ask Query</button>
                                            </div>
                                            <div class="col-auto">
                                                <button type="reset" class="btn btn-secondary">Nevermind</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <p class="mb-1">Most Searched Queries</p>
                            @for ($i = 0; $i < 5; $i++)
                                <span class="badge bg-light text-black">Lorem ipsum dolor sit amet.</span>
                            @endfor
                        </div>
                        <hr class="mb-0">
                        <div class="col-12">
                            <p>Need a more personlized resolution</p>
                            <p><a href="{{ route('main_contact') }}" class="btn btn-primary">Contact
                                    Us</a>&nbsp;&nbsp;OR&nbsp;&nbsp;<a href="{{ route('faqs_home') }}"
                                    class="btn btn-secondary">Explore More FAQs</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FAQ Model --}}
    <aside class="floating-widget-stack floating-style-01">
        <div class="row g-3">
            <div class="col-12">
                <div class="widget round-widget bg-primary-100 text-white" data-bs-toggle="modal"
                    data-bs-target="#contactShortModal">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            @if (!request()->routeIs('faqs_home'))
                <div class="col-12">
                    <div class="widget round-widget bg-secondary-100 text-black" data-bs-toggle="modal"
                        data-bs-target="#faqChatModal">
                        <i class="fa-solid fa-question"></i>
                    </div>
                </div>
            @endif
        </div>
    </aside>
    @yield('content')
    @include('theme02.components.footer')

    <script src="{{ asset('theme02/assets/js/jquery.counterup.min.js') }}"></script>

    {{-- Initialize AOS --}}
    <script>
        AOS.init({
            // once: true,
            duration: 1000,
        });

        $(".counter-number").counterUp({
            delay: 10,
            time: 1000,
        });
    </script>
    @stack('scripts')
    @yield('javascript')
</body>

</html>
