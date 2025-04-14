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
                                <li class="breadcrumb-item"><a href="{{ route('main_home') }}"><i
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
                <div class="row mb-3 mb-md-4">
                    <div class="col-xl"></div>
                    <div class="col-xl-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Apply Filters
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-lg-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Search & Filter Events</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3 g-lg-4">
                                    <div class="col-12">
                                        <div class="">
                                            <h5 class="text-center">Popular States</h5>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="swiper statesEventSwiper">
                                            <div class="swiper-wrapper">
                                                @for ($i = 0; $i < 10; $i++)
                                                    <div class="swiper-slide">
                                                        <a href="?state=state_name{{ $i }}">
                                                            <div class="row g-3">
                                                                <div class="col-12 text-center">
                                                                    <img src="https://placehold.co/64x64" alt="State Icon">
                                                                </div>
                                                                <div class="col-12 text-center">
                                                                    <p>Maharashtra</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                        @push('scripts')
                                            <script>
                                                new Swiper('.statesEventSwiper', {
                                                    loop: true,
                                                    spaceBetween: 10,
                                                    slidesPerView: 6,
                                                    pagination: {
                                                        el: ".swiper-pagination",
                                                    },
                                                });
                                            </script>
                                        @endpush
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <p class="text-center">All States in India</p>
                                        </div>
                                        <div class="" style="height: 200px; overflow-y:scroll">
                                            <div class="row m-0">
                                                @for ($i = 0; $i < 200; $i++)
                                                    <div class="col-xl-3 col-lg-4 col-12">
                                                        <a href="?state=state_name{{ $i }}"
                                                            class="nav-link"><small>Lorem ipsum dolor
                                                                sit.</small></a>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="event-style-one">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html"><img
                                            src="https://i3.ytimg.com/vi/wVYuqFrUEOM/hqdefault.jpg" alt="Image Not Found"
                                            class="w-100"></a>
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
                                                    <a href="">Lorem ipsum dolor sit amet.</a>
                                                </h4>
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
