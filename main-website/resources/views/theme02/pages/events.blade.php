@extends('theme02.core.pages')
@section('content')
    <main>
        <section class="nospacing">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="swiper bannerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <img src="{{ asset('https://placehold.co/1920x700') }}"
                                                alt="A placeholder image" class="w-100">
                                        </picture>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <img src="{{ asset('mandi-uploads/banners/banner_2.jpg') }}"
                                                alt="A placeholder image" class="w-100">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <script>
                            new Swiper('.bannerSwiper', {
                                loop: true,
                                autoplay: {
                                    enabled: true,
                                    delay: 5000
                                },
                                navigation: {
                                    nextEl: ".swiper-button-next",
                                    prevEl: ".swiper-button-prev",
                                },
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="mb-3 mb-md-4">
                    <div class="row g-3">
                        @if (is_null($state_filter))
                            <div class="col-12">
                                <div class="swiper statesMainEventSwiper">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < 10; $i++)
                                            <div class="swiper-slide">
                                                <a class="thumbnail-style-01" href="?state=Maharashtra">
                                                    <div class="row g-3 justify-content-center">
                                                        <div class="col-auto text-center">
                                                            <div class="icon">
                                                                <img src="https://placehold.co/64x64" alt="State Icon">
                                                            </div>
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
                                        new Swiper('.statesMainEventSwiper', {
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
                        @endif
                        <div class="col-12">
                            <nav aria-label="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('main_home') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Events</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-lg-auto col-12">
                                    <p class="mb-0">Find Events in:</p>
                                    <button class="btn btn-transparent btn-icon px-0" data-bs-toggle="modal"
                                        data-bs-target="#searchPageModal">
                                        <h3>
                                            {{ $state_filter ?? 'All Locations' }}&nbsp;<i
                                                class="fa-solid fa-chevron-down icon-append"></i>
                                        </h3>
                                    </button>
                                </div>
                                <div class="col-lg-auto col-12"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-star icon icon-prepend"></i>
                                    Upcoming Events
                                </h2>
                            </div>
                        </div>
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
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="clipped-content line-3">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                                                        elit.
                                                                        Vero
                                                                        vel repudiandae id temporibus eius aliquam cum
                                                                        doloremque
                                                                        ipsum
                                                                        at, molestiae, quis dolorem aperiam fugit quia quas?
                                                                        At
                                                                        dolorem
                                                                        repudiandae inventore ipsum, illum optio nemo autem
                                                                        aliquid
                                                                        tempore quos dicta quas, amet officia possimus
                                                                        magnam
                                                                        perferendis facilis sunt ducimus laboriosam. Totam.
                                                                    </p>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mb-md-4">
                    <div class="col-xl">
                        <div class="">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-calendar icon icon-prepend"></i>
                                    All Events
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="dropdown">
                            <div class="btn btn-icon btn-search" data-bs-toggle="modal"
                                data-bs-target="#searchPageModal">
                                <i class="fa-solid fa-filter icon-prepend"></i><span
                                    class="ms-2">Filter By</span>
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
        <!-- Modal -->
        <div class="modal fade" id="searchPageModal" tabindex="-1" aria-labelledby="searchPageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="searchPageModalLabel">Select an FPO or State</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <a href="?state=Maharashtra">
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
                                                <a href="?state=Maharashtra" class="nav-link"><small>Lorem ipsum dolor
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
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3 flex-row-reverse">
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-question icon icon-prepend"></i>
                                        Hosting an Event?
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, perspiciatis.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            @csrf
                                            <x-forms type="event-enquiry"></x-forms>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-clock-rotate-left icon icon-prepend"></i>
                                        Event Archives
                                    </h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-2">
                                    @for ($i = date('Y'); $i > 2000; $i--)
                                        <div class="col-xl-3 col-6">
                                            <a href="">{{ $i }}</a>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
