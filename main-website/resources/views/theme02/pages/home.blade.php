@extends('theme02.core.pages')
@section('content')
    <main>
        <section class="nospacing">

        </section>
        <section class="nospacing">
            <div class="container">
                <div class="row g-3 g-md-4">
                    <div class="col-xl-9 col-12">
                        <div class="swiper bannerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(min-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/webp">
                                        <source media="(min-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/jpeg">
                                        <source media="(max-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/webp">
                                        <source media="(max-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/jpeg">
                                        <img src="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            alt="A placeholder image" class="w-100">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(min-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/webp">
                                        <source media="(min-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/jpeg">
                                        <source media="(max-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/webp">
                                        <source media="(max-width: 1200px)"
                                            srcset="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            type="image/jpeg">
                                        <img src="https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg"
                                            alt="A placeholder image" class="w-100">
                                    </picture>
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
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="text-content">
                            <div class="row gap-3">
                                <div class="col-12">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#contactShortModal">Contact Us</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{ route('main_about') }}">About NCDEX Mandi</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{ route('episodes_home') }}">Kheti Ke Sikandar</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{ route('main_events') }}">Upcoming Events</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <ul class="list-group">
                                        @for ($i = 0; $i < 6; $i++)
                                            <li class="list-group-item">
                                                <a href="">Useful Link</a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-content">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h2 class="section-title">About NCDEX Mandi</h2>
                                    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas excepturi
                                        ratione quaerat rerum explicabo earum repudiandae, dolores veritatis sed. Fugit
                                        inventore molestiae consequatur veniam iure quas nisi animi in rerum tenetur
                                        vitae
                                        doloremque, maiores voluptatibus ab officiis nam nesciunt cumque corporis modi,
                                        itaque unde, quaerat cupiditate illo quam! Consectetur nostrum ratione eos
                                        voluptatem error aliquid cumque quod velit, omnis, consequatur unde beatae non
                                        aut
                                        nam molestias tempora vel dolore placeat ipsam nulla accusamus sequi natus!
                                        Earum,
                                        aliquid fugit! Perferendis quae quaerat, aperiam iste deleniti est? Debitis ut
                                        est
                                        cumque, provident possimus vel sapiente fugit, suscipit voluptatem maxime
                                        cupiditate
                                        modi.</p>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('main_about') }}" class="btn btn-primary">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="contactShortModal" tabindex="-1" aria-labelledby="contactShortModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="contactShortModalLabel">Contact Form</h1>
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
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="section-title">Latest News</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="swiper newsSwiper">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < 1; $i++)
                                            <div class="swiper-slide">
                                                <div class="event-style-one">
                                                    <div class="thumb">
                                                        <a href="blog-single-with-sidebar.html"><img
                                                                src="https://i3.ytimg.com/vi/7tk9oSJKK1w/hqdefault.jpg"
                                                                alt="Image Not Found" class="w-100"></a>
                                                        <div class="date">
                                                            <strong>7</strong>
                                                            <span>April, 2025</span>
                                                        </div>
                                                    </div>
                                                    <div class="event-details">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <a href="" class="clipped-content line-1">
                                                                        <h4>
                                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, porro!
                                                                        </h4>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p class="clipped-content line-2">
                                                                        Lorem ipsum dolor sit, amet consectetur dolor sit elit. Cum alias ut in dolor quae itaque tenetur laborum? Id, deleniti fuga?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <script>
                                    new Swiper('.newsSwiper', {
                                        loop: true,
                                        spaceBetween: 20,
                                        autoplay: {
                                            enabled: true,
                                            delay: 1000
                                        },
                                        pagination: {
                                            el: ".swiper-pagination",
                                        },
                                    });
                                </script>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-12">
                        <div class="row g-3 g-md-4">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="col-12" data-aos="fade-left" data-aos-delay="{{ 100 * $i }}">
                                    <a class="clipped-content line-2" href="">
                                        <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum nisi delectus
                                            ex ullam esse iure, dolorem, voluptate quo temporibus alias, deleniti labore
                                            perspiciatis? Fugit, repellat. Cupiditate similique ullam repellat voluptate?
                                        </h4>
                                    </a>
                                </div>
                            @endfor
                            <div class="col-12 pt-3">
                                <a href="" class="btn btn-primary">View All News Articles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="text-content">
                            <h2 class="section-title">Kheti Ke Sikandar</h2>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="swiper eventSwiper">
                                        <div class="swiper-wrapper">
                                            @for ($i = 0; $i < 1; $i++)
                                                <div class="swiper-slide">
                                                    <div class="event-style-one">
                                                        <div class="thumb">
                                                            <a href="blog-single-with-sidebar.html"><img
                                                                    src="https://i3.ytimg.com/vi/7tk9oSJKK1w/hqdefault.jpg"
                                                                    alt="Image Not Found" class="w-100"></a>
                                                            <div class="date">
                                                                <strong>7</strong>
                                                                <span>April, 2025</span>
                                                            </div>
                                                        </div>
                                                        <div class="event-details">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="">
                                                                            <h4>
                                                                                Lorem ipsum dolor sit amet
                                                                                dolor
                                                                                sit.
                                                                            </h4>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p>
                                                                            Lorem ipsum dolor sit, amet consectetur
                                                                            adipisicing elit. Libero, vel!
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <script>
                                        new Swiper('.eventSwiper', {
                                            loop: true,
                                            spaceBetween: 20,
                                            autoplay: {
                                                enabled: true,
                                                delay: 1000
                                            },
                                            pagination: {
                                                el: ".swiper-pagination",
                                            },
                                        });
                                    </script>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('episodes_home') }}" class="btn btn-primary">View More Case
                                        Studies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="text-content">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h2 class="section-title">Markets</h2>
                                    <div class="row g-3">
                                        @for ($i = 0; $i < 4; $i++)
                                            <div class="col-6">
                                                <div class="card" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="{{ 100 * $i }}">
                                                    <div class="card-body">
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
                                            <div class="col-6">
                                                <div class="card" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="{{ 100 * $i + 100 }}">
                                                    <div class="card-body">
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
                                            <div class="col-6">
                                                <div class="card" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="{{ 100 * $i + 100 }}">
                                                    <div class="card-body">
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
                                        @endfor

                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="" class="btn btn-primary">View Complete Market</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="text-content">
                            <h2 class="section-title">Upcoming Events</h2>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="swiper eventSwiper">
                                        <div class="swiper-wrapper mb-3 mb-md-4">
                                            <div class="swiper-slide">
                                                <div class="event-style-one">
                                                    <div class="thumb">
                                                        <a href="blog-single-with-sidebar.html"><img
                                                                src="https://i3.ytimg.com/vi/wVYuqFrUEOM/hqdefault.jpg"
                                                                alt="Image Not Found" class="w-100"></a>
                                                        <div class="date">
                                                            <strong>7</strong>
                                                            <span>April, 2025</span>
                                                        </div>
                                                    </div>
                                                    <div class="event-details">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <a href="">
                                                                        <h4>
                                                                            Lorem ipsum dolor sit amet
                                                                            dolor
                                                                            sit.
                                                                        </h4>
                                                                    </a>
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
                                    <div class="swiper-pagination"></div>
                                </div>
                                <script>
                                    new Swiper('.eventSwiper', {
                                        loop: true,
                                        spaceBetween: 20,
                                        autoplay: {
                                            enabled: true,
                                            duration: 1000
                                        },
                                        pagination: {
                                            el: ".swiper-pagination",
                                        },
                                    });
                                </script>
                            </div>
                            <div class="col-12">
                                <a href="{{ route('main_events') }}" target="_blank" class="btn btn-primary">View More
                                    Events</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
