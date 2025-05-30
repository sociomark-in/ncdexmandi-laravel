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
                        <h2 class="title-icon">
                            <i class="fa-solid fa-info icon icon-prepend"></i>
                            About NCDEX Mandi
                        </h2>
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
                        <h2 class="title-icon">
                            <i class="fa-solid fa-info icon icon-prepend"></i>
                            About NCDEX IPFT
                        </h2>
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
                        <h2 class="title-icon">
                            <i class="fa-solid fa-users icon icon-prepend"></i>
                            Our Team
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="swiper TeamSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <div class="row g-3 g-md-4 align-items-center">
                                            <div class="col-xl-4 col-12">
                                                <div class="rounded-overflow">
                                                    <div class="frame-01 frame">
                                                        <img src="{{ asset('mandi-uploads/team/member.jpg') }}" alt="" onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                                            class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <h4>Lorem, ipsum dolor.</h4>
                                                <p class="text-clipped" style="--clamp-lines:2">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Magnam et ipsam necessitatibus quibusdam
                                                    repudiandae. Provident facilis hic aperiam ea a.</p>
                                                {{-- <a href="{{ route('member_single', ['name' => 'single']) }}"
                                                    class="btn btn-sm btn-primary">View Details</a> --}}
                                                <a data-bs-toggle="modal" data-bs-target="#teamModal"
                                                    class="btn btn-sm btn-primary">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <!-- Modal -->
                            @push('scripts')
                            <script>
                                    new Swiper('.TeamSwiper', {
                                        slidesPerView: 2.2,
                                        spaceBetween: 50,
                                        loop: true,
                                        autoplay:{
                                            delay: 3000,
                                        }
                                    })
                                </script>
                            @endpush
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing d-none">
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
                                        <div class="row g-3 g-md-4 align-items-center">
                                            <div class="col-xl-4 col-12">
                                                <div class="rounded-overflow">
                                                    <div class="frame frame-01">
                                                        <img src="{{ asset('mandi-uploads/partners/farmer.jpg') }}" alt="" onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                                            class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <h4>Lorem, ipsum dolor.</h4>
                                                <p class="text-clipped" style="--clamp-lines:2">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Magnam et ipsam necessitatibus quibusdam
                                                    repudiandae. Provident facilis hic aperiam ea a.</p>
                                                {{-- <a href="{{ route('member_single', ['name' => 'single']) }}"
                                                    class="btn btn-sm btn-primary">View Details</a> --}}
                                                <a data-bs-toggle="modal" data-bs-target="#teamModal"
                                                    class="btn btn-sm btn-primary">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                                @push('scripts')
                                <script>
                                    new Swiper('.FPOSwiper', {
                                        slidesPerView: 2.2,
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
