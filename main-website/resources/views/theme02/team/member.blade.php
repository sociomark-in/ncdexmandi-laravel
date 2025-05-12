@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Lorem, ipsum dolor.</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item"><a href="{{ route('main_home') }}"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Team</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Lorem, ipsum dolor.</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
                        <div class="row g-3 g-md-4">
                            <div class="col-12">
                                <div class="rounded-overflow">
                                    <img src="{{ asset('mandi-uploads/team/member.jpg') }}" alt="" onerror="this.onerror=null;this.src='https://placehold.co/150x200';" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nisi eveniet accusamus est architecto id pariatur nam quasi quos porro?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, a. Ad voluptates debitis molestias quidem nemo porro quia reprehenderit minus quibusdam magni inventore, incidunt autem iusto. Vitae aut unde doloribus eos nam totam deleniti nemo laudantium nisi voluptates! Similique temporibus delectus, maiores velit eius minus modi repellat quae voluptatum optio assumenda porro deleniti iure blanditiis quod vel, minima praesentium consequuntur sed, nostrum omnis nemo dolorem ratione! Exercitationem, maxime excepturi voluptatem fugit quaerat facilis enim officia animi veritatis accusamus earum et.
                                </p>
                            </div>
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Lorem, ipsum dolor.</th>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, dolor!</td>
                                    </tr>
                                    <tr>
                                        <th>Lorem, ipsum dolor.</th>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, dolor!</td>
                                    </tr>
                                    <tr>
                                        <th>Lorem, ipsum dolor.</th>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, dolor!</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque veritatis quam mollitia consectetur sequi quasi, repudiandae sint deserunt at delectus non quo magnam exercitationem error nemo nostrum minus perspiciatis obcaecati, qui necessitatibus. Nihil cupiditate sint soluta facere excepturi velit commodi ipsam adipisci eum amet, iusto quibusdam, corporis animi voluptates libero deserunt necessitatibus sed saepe aliquam dolorum doloremque molestiae. Rem animi recusandae voluptatem, sit reprehenderit explicabo ratione illo quibusdam veniam dolore obcaecati sed pariatur dignissimos dolores hic laborum praesentium placeat voluptatibus officiis qui voluptas odio accusantium blanditiis asperiores! Laudantium, voluptatum? Nemo sed pariatur fugit, totam optio magni tenetur rem. Delectus, aut!
                                </p>
                            </div>
                            <div class="col-12">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque veritatis quam mollitia consectetur sequi quasi, repudiandae sint deserunt at delectus non quo magnam exercitationem error nemo nostrum minus perspiciatis obcaecati, qui necessitatibus. Nihil cupiditate sint soluta facere excepturi velit commodi ipsam adipisci eum amet, iusto quibusdam, corporis animi voluptates libero deserunt necessitatibus sed saepe aliquam dolorum doloremque molestiae. Rem animi recusandae voluptatem, sit reprehenderit explicabo ratione illo quibusdam veniam dolore obcaecati sed pariatur dignissimos dolores hic laborum praesentium placeat voluptatibus officiis qui voluptas odio accusantium blanditiis asperiores! Laudantium, voluptatum? Nemo sed pariatur fugit, totam optio magni tenetur rem. Delectus, aut!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <h2 class="section-title">View Other Team Members</h2>
                    </div>
                    <div class="col-12">
                        <div class="swiper TeamSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <div class="row g-3 g-md-4 align-items-center">
                                            <div class="col-xl-4 col-12">
                                                <div class="rounded-overflow">
                                                    <img src="{{ asset('mandi-uploads/team/member.jpg') }}" alt="" onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                                        class="w-100">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-12">
                                                <h4>Lorem, ipsum dolor.</h4>
                                                <p class="text-clipped" style="--clamp-lines:2">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Magnam et ipsam necessitatibus quibusdam
                                                    repudiandae. Provident facilis hic aperiam ea a.</p>
                                                <a href="{{ route('member_single', ['name' => 'single']) }}"
                                                    class="btn btn-sm btn-primary">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            @push('scripts')
                            <script>
                                    new Swiper('.TeamSwiper', {
                                        slidesPerView: 2,
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
    </main>
@endsection
