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
                        <p>
                            NCDEXMANDI.COM is India’s leading agri-knowledge platform, powered by NCDEX IPFT (Investor Protection Fund Trust). Launched under an MoU with Prasar Bharati, with NCDEX as a knowledge partner back in 2015, it features a weekly show on DD Kisan (Sundays at 8:00 AM, repeat at 5:00 PM), simplifying commodity markets for farmers and sharing real FPO success stories. The program also covers <strong>price discovery, post-harvest practices, agri-marketing systems</strong>, and the role of e-markets and financial infrastructure in boosting farm income. Complex concepts like <strong>derivatives</strong>, <strong>hedging</strong>, and <strong>market dynamics</strong> are made accessible through expert-led, farmer-friendly conversations - all designed to build an informed, resilient rural economy.
                        </p>
                        <p>
                            With a reach of <strong>20,000+ farmers across 21+ states</strong>, this website offers expert insights, <strong>market awareness</strong>, and access to key <strong></strong>—including <strong>investor education programs, national agri-events</strong>, and more.
                        </p>
                        <p>
                            Join our growing community on YouTube, Facebook, LinkedIn, and WhatsApp
                        </p>
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
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-users icon icon-prepend"></i>
                                    Our Team
                                </h2>
                            </div>
                            <div class="col-12">
                                <div class="swiper teamSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="speaker-style-two rounded-overflow">
                                                <div class="">
                                                    <div class="">
                                                        <div class="media-content">
                                                            <img src="{{ asset('mandi-uploads/team/member.jpg') }}"
                                                                alt=""
                                                                onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                                                class="w-100">
                                                        </div>
                                                        <div class="text-content">
                                                            <h3>Anupam Alok</h3>
                                                            <p>Lead News Editor | Storyteller</p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="large-desc">
                                                            <div class="row h-100 align-content-lg-between">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <h3>Anupam Alok</h3>
                                                                        <p>Lead News Editor | Storyteller</p>
                                                                    </div>
                                                                    <p class="">
                                                                        (200-250 Characters) Lorem ipsum dolor sit amet
                                                                        consectetur
                                                                        adipisicing elit.
                                                                        Fugit, tenetur eos. Repellat veritatis quo velit
                                                                        ipsam
                                                                        officia, incidunt molestias possimus a corporis
                                                                        quisquam
                                                                        quae aliquid excepturi id expedita illo
                                                                        similique.
                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <a data-bs-toggle="modal"
                                                                        data-bs-target="#teamModal"
                                                                        class="btn btn-sm btn-primary">Meet the
                                                                        Storyteller</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @for ($i = 0; $i < 3; $i++)
                                            <div class="swiper-slide">
                                                <div class="speaker-style-two rounded-overflow">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="media-content">
                                                                <img src="https://placehold.co/290x360" class="w-100"
                                                                    alt="">
                                                            </div>
                                                            <div class="text-content">
                                                                <h3>Anupam Alok</h3>
                                                                <p>Lead News Editor | Storyteller</p>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="large-desc">
                                                                <div class="row h-100 align-content-lg-between">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <h3>Anupam Alok</h3>
                                                                            <p>Lead News Editor | Storyteller</p>
                                                                        </div>
                                                                        <p class="">
                                                                            (200-250 Characters) Lorem ipsum dolor sit amet
                                                                            consectetur
                                                                            adipisicing elit.
                                                                            Fugit, tenetur eos. Repellat veritatis quo velit
                                                                            ipsam
                                                                            officia, incidunt molestias possimus a corporis
                                                                            quisquam
                                                                            quae aliquid excepturi id expedita illo
                                                                            similique.
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <a data-bs-toggle="modal"
                                                                            data-bs-target="#teamModal"
                                                                            class="btn btn-sm btn-primary">Meet the
                                                                            Storyteller</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <!-- Modal -->
                                    @push('scripts')
                                        <script>
                                            new Swiper('.teamSwiper', {
                                                slidesPerView: 2,
                                                spaceBetween: 50,
                                                // loop: true,
                                                autoplay: {
                                                    delay: 3000,
                                                },
                                                breakpoints: {
                                                    640: {
                                                        slidesPerView: 3,
                                                        spaceBetween: 20,
                                                    },
                                                    768: {
                                                        slidesPerView: 3,
                                                        spaceBetween: 40,
                                                    },
                                                    1024: {
                                                        slidesPerView: 4,
                                                        spaceBetween: 50,
                                                    },
                                                },
                                            })
                                        </script>
                                    @endpush
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5" id="teamModalLabel">Name: Anupam Alok</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3 g-md-4">
                                <div class="col-xl-3 col-12">
                                    <div class="rounded-overflow">
                                        <img src="{{ asset('mandi-uploads/team/member.jpg') }}" alt=""
                                            onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                            class="w-100">
                                    </div>
                                </div>
                                <div class="offset-xl-1 col-xl-8 col-12">
                                    <div class="mb-3">
                                        <h4>Anupam Alok</h4>
                                        <p>Lead News Editor | Storyteller</p>
                                    </div>
                                    <div class="">
                                        <p>
                                            With 18+ years in journalism—from Amar Ujala, Pabhat Khabar and News Nation to
                                            Deutsche Welle— <strong>Anupam Alok</strong> has reported some of India’s most
                                            defining moments.
                                            Reporting the 2016 surgical strike news, working 72 hours non-stop during the
                                            Mumbai
                                            attacks, and running the evening desk solo for a month during the COVID-19
                                            lockdown
                                            has been defining moments of his career.
                                        </p>
                                        <p>
                                            A Political Science and Law graduate turned journalist, Anupam has led content
                                            across TV, radio, digital, and print with one core belief: <strong>clarity,
                                                simplicity and
                                                accuracy above all</strong> .
                                        </p>
                                        <p>
                                            His show Ankh Kaan Khol Ke won back-to-back <strong>Exchange4Media News
                                                Broadcasting Awards
                                                (<abbr
                                                    title="Exchange4Media News Broadcasting Awards">ENBA</abbr>)</strong>
                                            in 2021 and 2022, topping TRP charts, while Lakh Take Ki Baat led the 7 PM
                                            slot nationwide. Off-duty, he unwinds with family on road trips—but in the
                                            newsroom,
                                            it’s all about <strong>discipline, speed, and trust in the story</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- <a href="{{ route('member_single', ['name' => 'single']) }}"
                                class="btn btn-sm btn-primary">View Details</a> --}}
                            <button type="button" class="btn btn-lg btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
