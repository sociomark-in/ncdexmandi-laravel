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
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <a href="">
                            <div class="row">
                                <div class="col-auto">Next Episode</div>
                                <div class="col-auto"><img src="{{ asset('') }}" alt=""></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="event-style-two">
                    <div class="row justify-content-center g-3 g-md-4">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-auto">
                                    <a href=""><i class="fa-regular fa-user"></i>&nbsp;&nbsp;Lorem, ipsum dolor.</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-regular fa-calendar"></i>&nbsp;&nbsp;{{ date('F j, Y') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h1 class="page-title text-primary">Transforming Agriculture through the Digital Agriculture Mission</h1>
                        </div>
                        <div class="col-12">

                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="wrap">
                                <picture>
                                    <img src="https://placehold.co/600x400" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row g-3">
                                <div class="col-12">
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
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Establishment</th>
                                                <td>{{ date('F j, Y') }}</td>
                                            </tr>
                                            <tr>
                                                <th>Locations</th>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <th>Members</th>
                                                <td>300B+</td>
                                            </tr>
                                            <tr>
                                                <th>Commodities</th>
                                                <td>300B+</td>
                                            </tr>
                                            <tr>
                                                <th>Turnover</th>
                                                <td>300B+</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#contactPersonModal"
                                        class="btn btn-primary btn-icon w-100 d-block text-center">Contact NCDEX</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-content">
                                        <h2 class="title-icon">
                                            <i class="fa-solid fa-star icon icon-prepend"></i>
                                            About [Name of FPO]
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h3>Lorem, ipsum dolor. Section Heading</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia
                                        nostrum quo
                                        nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa
                                        ipsam esse
                                        earum
                                        numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                        perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi
                                        veritatis
                                        doloremque omnis.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia
                                        nostrum quo
                                        nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa
                                        ipsam esse
                                        earum
                                        numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                        perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi
                                        veritatis
                                        doloremque omnis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-12">
                            <lite-youtube videoid="QOj9Bx7SrkI">
                                <a class="lite-youtube-fallback w-100" href="https://www.youtube.com/watch?v=QOj9Bx7SrkI">DD
                                    Kisan
                                    22 December 2024: Transforming Agriculture through the Digital
                                    Agriculture Mission</a>
                            </lite-youtube>
                        </div>
                        <div class="col-12">
                            <h3>Lorem, ipsum dolor. Section Heading</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia nostrum quo
                                nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa ipsam esse
                                earum
                                numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi veritatis
                                doloremque omnis.
                            </p>
                        </div>
                        <div class="col-12">
                            <h3>Lorem, ipsum dolor. Section Heading</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia nostrum quo
                                nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa ipsam esse
                                earum
                                numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi veritatis
                                doloremque omnis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="contactPersonModal" tabindex="-1" aria-labelledby="contactPersonModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="contactPersonModalLabel">NCDEX Contact Persoin for [FPO]</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Contact Details:</strong></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi error quos quasi reprehenderit
                            fugiat iusto, porro tenetur maxime laudantium unde.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-star icon icon-prepend"></i>
                                Key Moments of FPO
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="row g-3">
                                    @for ($i = 0; $i < 8; $i++)
                                        <div class="col-xxl-3 col-xl-4 col-6">
                                            <a href="https://placehold.co/1500x1000/png" class="d-block rounded-overflow">
                                                <picture>
                                                    <source srcset="https://placehold.co/300x150/png" type="image/png">
                                                    <img src="https://placehold.co/300x150/png" alt=""
                                                        class="w-100">
                                                </picture>
                                            </a>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="" class="btn btn-primary">View Full Gallery of Moments</a>
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
                                FPO of The Month
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper featuredFPOSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="swiper-slide">
                                        <a href="{{ route('fpo_single', ['episode' => rand()]) }}"
                                            class="d-block text-black">
                                            <div class="youtube-card">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-lg-4 col-12">
                                                        <div class="thumb">
                                                            <img src="https://placehold.co/600x400" class="w-100"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl col-12">
                                                        <div class="content">
                                                            <h5 class="">Lorem ipsum dolor sit, amet consectetur
                                                                adipisicing elit. Deserunt, quibusdam! Accusantium deleniti
                                                                quas harum distinctio?</h5>
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto">
                                                                    <p>
                                                                        <i
                                                                            class="fa-solid fa-location-dot"></i>&nbsp;<?= date('F, Y') ?>
                                                                    </p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p>
                                                                        <i
                                                                            class="fa-solid fa-calendar-days"></i>&nbsp;<?= 'Location' ?>
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
                                    slidesPerView: 1.1,
                                    spaceBetween: 20,
                                    navigation: {
                                        nextEl: ".swiper-button-next",
                                        prevEl: ".swiper-button-prev",
                                    },
                                    breakpoints: {
                                        640: {
                                            slidesPerView: 1.5,
                                            spaceBetween: 20,
                                        },
                                        768: {
                                            slidesPerView: 1.8,
                                            spaceBetween: 20,
                                        },
                                        1024: {
                                            slidesPerView: 2.1,
                                            spaceBetween: 30,
                                        },
                                    },
                                });
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-star icon icon-prepend"></i>
                                View Other Episodes
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper otherFPOSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <a href="{{ route('fpo_single', ['episode' => rand()]) }}"
                                            class="d-block text-black">
                                            <div class="youtube-card other">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <div class="thumb">
                                                            <img src="https://placehold.co/600x400" class="w-100"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="content">
                                                            <h5 class="clipped-content line-3">Lorem ipsum dolor sit amet
                                                                consectetur adipisicing elit. Perferendis eaque unde
                                                                tenetur!</h5>
                                                            <div class="row justify-content-between">
                                                                <div class="col-auto">
                                                                    <p>
                                                                        <i
                                                                            class="fa-solid fa-location-dot"></i>&nbsp;<?= date('F, Y') ?>
                                                                    </p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p>
                                                                        <i
                                                                            class="fa-solid fa-calendar-days"></i>&nbsp;<?= 'Location' ?>
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
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        @push('scripts')
                            <script>
                                new Swiper('.otherFPOSwiper', {
                                    loop: true,
                                    slidesPerView: 4.5,
                                    spaceBetween: 30,
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
    </main>
@endsection
