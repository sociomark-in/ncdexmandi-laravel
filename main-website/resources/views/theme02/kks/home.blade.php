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
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Kheti Ke Sikandar</h1>
                        </div>
                        <nav aria-label="">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Kheti Ke Sikandar FPOs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="mb-3 mb-md-4">
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
                                    <li class="breadcrumb-item active">Kheti Ke Sikandar</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-lg-auto col-12">
                                    <p class="mb-0">Find FPOs in:</p>
                                    <button class="btn btn-transparent btn-icon px-0" data-bs-toggle="modal"
                                        data-bs-target="#searchPageModal">
                                        <h3>
                                            {{ $state_filter ?? 'All Locations' }}&nbsp;<i
                                                class="fa-solid fa-chevron-down icon-append"></i>
                                        </h3>
                                    </button>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="dropdown">
                                        <div class="btn btn-icon btn-search" data-bs-toggle="modal" data-bs-target="#searchPageModal">
                                            <i class="fa-solid fa-filter icon-prepend"></i><span class="ms-2">Filter By</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-star icon icon-prepend"></i>
                                    FPOs of The Month
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="swiper featuredFPOSwiper">
                                <div class="swiper-wrapper">
                                    @for ($i = 0; $i < 10; $i++)
                                        <div class="swiper-slide">
                                            <div class="event-style-two">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-12">
                                                        <div class="thumb">
                                                            <a href="{{ route('fpo_single', ['episode' => rand()]) }}"><img
                                                                    src="https://i3.ytimg.com/vi/QOj9Bx7SrkI/sddefault.jpg"
                                                                    alt="Image Not Found" class="w-100"></a>
                                                            <div class="date">
                                                                <strong>22</strong>
                                                                <span>December 2024</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-6 col-12">
                                                        <div class="event-details">
                                                            <div class="py-0 py-md-4">
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <a href="{{ route('fpo_single', ['episode' => rand()]) }}">
                                                                            <h3 class="clipped-content line-1">
                                                                                DD Kisan 22 December 2024: Transforming Agriculture through the Digital Agriculture Mission
                                                                            </h3>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <table class="table table-sm table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>Name of FPO</th>
                                                                                    <td class="clipped-content line-1">Lorem ipsum
                                                                                        dolor, sit amet consectetur adipisicing elit.
                                                                                        Officiis, molestiae?</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Establishment</th>
                                                                                    <td>{{ date('F j, Y') }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Turnover</th>
                                                                                    <td>300B+</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Commodities</th>
                                                                                    <td>300B+</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Members</th>
                                                                                    <td>300B+</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Locations</th>
                                                                                    <td>300</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-lg-6 col-12">
                                                                        <p class="clipped-content line-4">
                                                                            The Digital Agriculture Mission of the Government of India is a new technological initiative to bring about a transformation in the agriculture sector. How are farmers getting technological help through this mission? Watch this special report of Mandi.com
                                                                        </p>
                                                                        <ul class="nav social-share align-items-center gap-2">
                                                                            <li class="nav-item me-3">Share:</li>
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
                                                                                        class="fa-brands fa-whatsapp"></i></a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link social-icon" href="#"><i
                                                                                        class="fa-brands fa-instagram"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            @push('scripts')
                                <script>
                                    new Swiper('.featuredFPOSwiper', {
                                        loop: true,
                                        spaceBetween: 10,
                                        pagination: {
                                            el: ".swiper-pagination",
                                        },
                                    });
                                </script>
                            @endpush
                        </div>
                    </div>
                </div>

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
                <div class="row g-3 mb-3">
                    @for ($i = 0; $i < 1; $i++)
                        <div class="col-12">
                            <div class="event-style-two">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12">
                                        <div class="thumb">
                                            <a href="{{ route('fpo_single', ['episode' => rand()]) }}"><img
                                                    src="https://i3.ytimg.com/vi/QOj9Bx7SrkI/sddefault.jpg"
                                                    alt="Image Not Found" class="w-100"></a>
                                            <div class="date">
                                                <strong>22</strong>
                                                <span>December 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-6 col-12">
                                        <div class="event-details">
                                            <div class="py-0 py-md-4">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <a href="{{ route('fpo_single', ['episode' => rand()]) }}">
                                                            <h3 class="clipped-content line-1">
                                                                DD Kisan 22 December 2024: Transforming Agriculture through the Digital Agriculture Mission
                                                            </h3>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <table class="table table-sm table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Name of FPO</th>
                                                                    <td class="clipped-content line-1">Lorem ipsum
                                                                        dolor, sit amet consectetur adipisicing elit.
                                                                        Officiis, molestiae?</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Establishment</th>
                                                                    <td>{{ date('F j, Y') }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Turnover</th>
                                                                    <td>300B+</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Commodities</th>
                                                                    <td>300B+</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Members</th>
                                                                    <td>300B+</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Locations</th>
                                                                    <td>300</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <p class="clipped-content line-4">
                                                            The Digital Agriculture Mission of the Government of India is a new technological initiative to bring about a transformation in the agriculture sector. How are farmers getting technological help through this mission? Watch this special report of Mandi.com
                                                        </p>
                                                        <ul class="nav social-share align-items-center gap-2">
                                                            <li class="nav-item me-3">Share:</li>
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
                                                                        class="fa-brands fa-whatsapp"></i></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link social-icon" href="#"><i
                                                                        class="fa-brands fa-instagram"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="">
                    <hr>
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
                                                <a href="?state={{ $states[$i] }}" class="nav-link"><small>{{ $states[$i] }}</small></a>
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
                                Past Episodes
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-2">
                            @for ($i = new DateTime("2025-05-01"); $i >= new DateTime("2024-01-01"); $i->modify('-2 month'))
                                <div class="col-xl-3 col-6">
                                    <a href="">{{ $i->format('F Y')}}</a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
