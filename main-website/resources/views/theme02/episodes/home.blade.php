@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Kheti Ke Sikandar Episodes</h1>
                        </div>
                        <nav aria-label="">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a
                                        href="{{  route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">All Episodes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row mb-3 mb-md-4">
                    <div class="col-xl">
                        <div class="">
                            <div class="text-content">
                                <h2 class="section-title">All Episodes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="dropdown">
                            <div class="btn btn-icon btn-search" data-bs-toggle="modal" data-bs-target="#searchPageModal"><i
                                class="fa-solid fa-magnifying-glass icon-prepend"></i><span class="ms-2">Search</span>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="searchPageModal" tabindex="-1" aria-labelledby="searchPageModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-lg-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="searchPageModalLabel">Select an FPO or State</h1>
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
                                                        <div class="col-xxl-5 col-xl-6">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Lorem, ipsum.</th>
                                                                        <td>300B+ Views</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Lorem, ipsum.</th>
                                                                        <td>300B+ Views</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Lorem, ipsum.</th>
                                                                        <td>300B+ Views</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Lorem, ipsum.</th>
                                                                        <td>300B+ Views</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-xxl-7 col-xl-6 col-12">
                                                            <p class="clipped-content line-3">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Vero
                                                                vel repudiandae id temporibus eius aliquam cum doloremque
                                                                ipsum
                                                                at, molestiae, quis dolorem aperiam fugit quia quas? At
                                                                dolorem
                                                                repudiandae inventore ipsum, illum optio nemo autem aliquid
                                                                tempore quos dicta quas, amet officia possimus magnam
                                                                perferendis facilis sunt ducimus laboriosam. Totam.
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
                                                                            class="fa-brands fa-x-twitter"></i></a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link social-icon" href="#"><i
                                                                            class="fa-brands fa-facebook-f"></i></a>
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
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="section-title">Episodes Archives</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-2">
                            @for ($i = date("Y"); $i > 2000; $i--)
                            <div class="col-xl-3 col-6">
                                <a href="">{{ $i }}</a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
