@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>About NCDEX Mandi</h1>
                        </div>
                        <nav aria-label="">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">About NCDEX Mandi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <h2 class="section-title">About NCDEX Mandi</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas excepturi
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas excepturi
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
                </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <h2 class="section-title">About NCDEX IPFT</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas excepturi
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
                </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <h2 class="section-title">Our Team</h2>
                    </div>
                    <div class="col-12">
                        <div class="swiper TeamSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <a href="">
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <img src="{{ asset('theme02/assets/person.png') }}" alt=""
                                                class="w-100">
                                                </div>
                                                <div class="col-12">
                                                    <h4>Lorem, ipsum dolor.</h4>
                                                    <p>Lorem ipsum, dolor sit amet consectetur.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                            @push('scripts')
                            <script>
                                new Swiper('.TeamSwiper', {
                                    slidesPerView: 4,
                                    spaceBetween: 30,
                                })
                            </script>
                            @endpush
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <h2 class="section-title">Our FPO Partners</h2>
                    </div>
                    <div class="col-12">
                        <div class="swiper FPOSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <a href="">
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <img src="{{ asset('theme02/assets/person.png') }}" alt=""
                                                class="w-100">
                                                </div>
                                                <div class="col-12">
                                                    <h5>Lorem, ipsum dolor.</h5>
                                                    <p>Lorem ipsum, dolor sit amet consectetur.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endfor
                                </div>
                                @push('scripts')
                                <script>
                                    new Swiper('.FPOSwiper', {
                                        slidesPerView: 6,
                                        spaceBetween: 30,
                                    })
                                    </script>
                            @endpush
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="" class="btn btn-primary">View All FPO Partners</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
