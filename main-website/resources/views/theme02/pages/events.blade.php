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
        'Andaman & Nicobar (UT)',
        'Chandigarh (UT)',
        'Dadra & Nagar Haveli and Daman & Diu (UT)',
        'Delhi [National Capital Territory (NCT)]',
        'Jammu & Kashmir (UT)',
        'Ladakh (UT)',
        'Lakshadweep (UT)',
        'Puducherry (UT)',
    ];
@endphp
@section('content')
    <main>
        <section class="nospacing d-none">
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
                        {{--
                        @if (is_null($state_filter))
                            <div class="col-12">
                                <div class="swiper statesMainEventSwiper">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < count($states); $i++)
                                            <div class="swiper-slide">
                                                <a class="thumbnail-style-01" href="?state={{$states[$i]}}">
                                                    <div class="row g-3 justify-content-center">
                                                        <div class="col-auto text-center">
                                                            <div class="icon">
                                                                <img src="{{ asset('theme02/assets/icons/state.png') }}" alt="State Icon" >
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <p>{{$states[$i]}}</p>
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
                        @endif --}}
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
                                <div class="col-lg-auto col-12">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Filter By Year
                                        </a>

                                        <ul class="dropdown-menu">
                                            @for ($i = date('Y'); $i > 2020; $i--)
                                                <li><a class="dropdown-item" href="#">{{ $i }}</a></li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="default-spacing pb-0 pt-3 pt-md-4">
            <div class="container">
                <div class="row g-3 mb-3">
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam natus, pariatur explicabo omnis
                            eius maiores quas nihil sed similique illo nam impedit veniam eum error ad! Ab quibusdam iste a
                            quam perspiciatis itaque nemo excepturi eveniet assumenda. Doloremque culpa, eligendi dolore
                            voluptatem dolor magnam nesciunt velit, distinctio, aperiam aliquam mollitia!
                        </p>
                    </div>
                </div>
                <div class="row g-3 flex-row-reverse">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-question icon icon-prepend"></i>
                                        Want to Get Featured?
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
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card card-bordered border-primary">
                            <div class="card-body">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <h2>Global Events</h2>
                                    </div>
                                    <div class="col-12">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, error.</p>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla quod
                                            eligendi delectus accusantium placeat vitae sit laudantium non a illum.
                                        </p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, error.</p>
                                    </div>
                                    <div class="col-12">
                                        <a href="" class="btn btn-primary btn-icon">View More&nbsp;<i class="fa-solid fa-arrow-right icon-append"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card card-bordered border-secondary">
                            <div class="card-body">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <h2>Mandi Events</h2>
                                    </div>
                                    <div class="col-12">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, error.</p>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla quod
                                            eligendi delectus accusantium placeat vitae sit laudantium non a illum.
                                        </p>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, error.</p>
                                    </div>
                                    <div class="col-12">
                                        <a href="" class="btn btn-secondary btn-icon">View More&nbsp;<i class="fa-solid fa-arrow-right icon-append"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3 flex-row-reverse">
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
        </section>

        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row mb-3 mb-md-4">
                    <div class="col-xl-12">
                        <div class="">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-calendar icon icon-prepend"></i>
                                    Previous Events
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    @for ($i = 0; $i < 3; $i++)
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
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-clock-rotate-left icon icon-prepend"></i>
                                        Past Events
                                    </h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-2">
                                    @for ($i = new DateTime('2025-05-01'); $i >= new DateTime('2024-01-01'); $i->modify('-2 month'))
                                        <div class="col-xl-3 col-6">
                                            <a href="">{{ $i->format('F Y') }}</a>
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
