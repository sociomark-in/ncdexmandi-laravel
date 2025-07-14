@extends('theme02.core.pages')
@php
    $states = [
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Maharashtra',
        'Madhya Pradesh',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Tripura',
        'Telangana',
        'Uttar Pradesh',
        'Uttarakhand',
        'West Bengal',
        'Andaman & Nicobar',
        'Chandigarh',
        'Dadra & Nagar Haveli',
        'Daman & Diu',
        'Delhi NCT',
        'Jammu & Kashmir',
        'Ladakh',
        'Lakshadweep',
        'Puducherry',
    ];
@endphp
@section('content')
    <main>
        <section class="nospacing">
            <div class="">
                <div class="row g-3 g-md-4">
                    <div class="col-12">
                        <div class="swiper bannerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <img src="https://placehold.co/1600x500"
                                                alt="A placeholder image" class="w-100"
                                                onerror="this.onerror=null;this.src='https://placehold.co/1600x500';">
                                        </picture>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <img src="https://placehold.co/1600x500"
                                                alt="A placeholder image" class="w-100"
                                                onerror="this.onerror=null;this.src='https://placehold.co/1900x700';">
                                        </picture>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <img src="https://placehold.co/1600x500"
                                                alt="A placeholder image" class="w-100"
                                                onerror="this.onerror=null;this.src='https://placehold.co/1900x700';">
                                        </picture>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="https://placehold.co/1600x500"
                                                type="image/jpeg">
                                            <img src="https://placehold.co/1600x500"
                                                alt="A placeholder image" class="w-100"
                                                onerror="this.onerror=null;this.src='https://placehold.co/1900x700';">
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
                        <div class="col-12">
                            <nav aria-label="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('main_home') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Kheti Ke Sikandar</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h1 class="title-icon">
                                    <i class="fa-solid fa-question icon icon-prepend"></i>
                                    Kheti Ke Sikandar
                                </h1>
                                <p>
                                    Description in minimum 50 words so as to explain what is Kheti Ke Sikandar & FPO of the
                                    Month. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                                    molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,
                                    risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget
                                    condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim
                                    egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl,
                                    eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet
                                    lacinia. Aliquam in elementum tellus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pt-md-unset pt-5 bg-secondary-70 bg-watermark">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-star icon icon-prepend"></i>
                                FPO of The Month Archives
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper featuredFPOSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="swiper-slide">
                                        <a href="" class="d-block text-black">
                                            <div class="youtube-card">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="thumb">
                                                            <img src="https://placehold.co/600x400" class="w-100"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="content">
                                                            <h5 class="clipped-content line-2">Lorem ipsum dolor sit amet
                                                                consectetur adipisicing elit.
                                                                Perferendis eaque unde tenetur!</h5>
                                                            <p class="clipped-content line-2">Lorem ipsum dolor sit amet
                                                                consectetur adipisicing elit.
                                                                Ratione praesentium deleniti pariatur.</p>
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto">
                                                                    <p>
                                                                        <i class="fa-solid fa-location-dot"></i>&nbsp;<?= date('F, Y') ?>
                                                                    </p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p>
                                                                        <i class="fa-solid fa-calendar-days"></i>&nbsp;<?= "Location" ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        @push('scripts')
                            <script>
                                new Swiper('.featuredFPOSwiper', {
                                    slidesPerView: 2.8,
                                    spaceBetween: 40,
                                    navigation: {
                                        nextEl: ".swiper-button-next",
                                        prevEl: ".swiper-button-prev",
                                    },
                                });
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="">
                    <div class="row g-3">
                        @if (is_null($state_filter))
                            <div class="col-12">
                                <div class="swiper statesMainEventSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Maharashtra">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Maharashtra</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Madhya Pradesh">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Madhya Pradesh</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Rajasthan">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Rajasthan</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Gujarat">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Gujarat</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Karnataka">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Karnataka</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Telangana">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Telangana</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @push('scripts')
                                    <script>
                                        new Swiper('.statesMainEventSwiper', {
                                            loop: true,
                                            spaceBetween: 10,
                                            slidesPerView: 2,
                                            pagination: {
                                                el: ".swiper-pagination",
                                            },
                                            breakpoints: {
                                                640: {
                                                    slidesPerView: 4,
                                                    spaceBetween: 20,
                                                },
                                                768: {
                                                    slidesPerView: 5,
                                                    spaceBetween: 20,
                                                },
                                                1024: {
                                                    slidesPerView: 6,
                                                    spaceBetween: 30,
                                                },
                                            },
                                        });
                                    </script>
                                @endpush
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body bg-light">
                                    <form action="" method="get">
                                        <div class="row justify-content-between">
                                            <div class="col-xl col-lg-4"><input type="text"
                                                    placeholder="Search All Episodes by Title" class="form-control"></div>
                                            <div class="col-xl-2">
                                                <select name="" id="" class="form-select">
                                                    <option value="">Select A Comodity</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-2">
                                                <select name="" id="" class="form-select">
                                                    <option value="">Select A State</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-auto">
                                                <button type="submit" class="btn btn-primary">
                                                    Apply Filters
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-none">
                            <div class="row justify-content-between">
                                <div class="col-12">
                                    <p class="mb-0">Find FPOs in:</p>
                                    <button class="btn btn-transparent btn-icon px-0" data-bs-toggle="modal"
                                        data-bs-target="#searchPageModal">
                                        <h3>
                                            {{ $state_filter ?? 'All Locations' }}&nbsp;<i
                                                class="fa-solid fa-chevron-down icon-append"></i>
                                        </h3>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row mb-3 mb-md-4">
                    <div class="col-xl">
                        <div class="">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-calendar icon icon-prepend"></i>
                                    All Episodes
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 g-md-4">
                    @for ($i = 0; $i < 12; $i++)
                    <div class="col-xl-6 col-12">
                        <a href="" class="d-block text-black">
                            <div class="youtube-card">
                                <div class="row g-3 align-items-center">
                                    <div class="col-xl-5 col-12">
                                        <div class="thumb">
                                            <img src="https://placehold.co/600x400" class="w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg col-12">
                                        <div class="content">
                                            <h5 class="clipped-content line-2">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit.
                                                Perferendis eaque unde tenetur!</h5>
                                            <p class="clipped-content line-2">Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit.
                                                Ratione praesentium deleniti pariatur.</p>
                                            <div class="row justify-content-between">
                                                <div class="col-auto">
                                                    <p>
                                                        <i class="fa-solid fa-location-dot"></i>&nbsp;<?= date('F, Y') ?>
                                                    </p>
                                                </div>
                                                <div class="col-auto">
                                                    <p>
                                                        <i class="fa-solid fa-calendar-days"></i>&nbsp;<?= "Location" ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
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
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Maharashtra">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Maharashtra</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Madhya Pradesh">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Madhya Pradesh</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Rajasthan">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Rajasthan</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Gujarat">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Gujarat</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Karnataka">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Karnataka</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a class="thumbnail-style-01" href="?state=Telangana">
                                                <div class="row g-3 justify-content-center">
                                                    <div class="col-auto text-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('theme02/assets/icons/state.png') }}"
                                                                alt="State Icon" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <p>Telangana</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
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
                                    <p class="text-center">All States & UTs in India</p>
                                </div>
                                <div class="" style="height: 200px; overflow-y:scroll">
                                    <div class="row m-0">
                                        @for ($i = 0; $i < count($states); $i++)
                                            <div class="col-xl-3 col-lg-4 col-12">
                                                <a href="?state={{ $states[$i] }}"
                                                    class="nav-link"><small>{{ $states[$i] }}</small></a>
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
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-clock-rotate-left icon icon-prepend"></i>
                                Episodes Archive
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-2">
                            @for ($i = date('Y'); $i > 2000; $i--)
                                <div class="col-xl-3 col-6">
                                    <a href="">{{ $i }} - {{ $i - 5 }}</a>
                                </div>
                                @php
                                    $i -= 5;
                                @endphp
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
