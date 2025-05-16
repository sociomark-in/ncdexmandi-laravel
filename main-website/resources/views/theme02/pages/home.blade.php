@extends('theme02.core.pages')
@section('content')
    <main>
        <section class="nospacing">
            <div class="container-fluid">
                <div class="row g-3 g-md-4">
                    <div class="col-xl-9 col-12">
                        <div class="swiper bannerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_1.jpg') }}"
                                                type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_1.jpg') }}"
                                                type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_1.jpg') }}"
                                                type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_1.jpg') }}"
                                                type="image/jpeg">
                                            <img src="{{ asset('mandi-uploads/banners/banner_1.jpg') }}"
                                                alt="A placeholder image" class="w-100">
                                        </picture>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_2.jpg') }}"
                                                type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_2.jpg') }}"
                                                type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_2.jpg') }}"
                                                type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('mandi-uploads/banners/banner_2.jpg') }}"
                                                type="image/jpeg">
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
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="text-content">
                            <div class="row gap-3">
                                <div class="col-12">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#contactShortModal">Ask
                                                Your Query</a>
                                        </li>
                                        @for ($i = 0; $i < 11; $i++)
                                            <li class="list-group-item">
                                                <a href="">Useful Link</a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="row g-3 gy-lg-5">
                            <div class="col-12">
                                <div class="text-content">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <h2 class="section-title">About NCDEX Mandi</h2>
                                            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Repellat
                                                quas excepturi
                                                ratione quaerat rerum explicabo earum repudiandae, dolores veritatis sed.
                                                Fugit
                                                inventore molestiae consequatur veniam iure quas nisi animi in rerum tenetur
                                                vitae
                                                doloremque, maiores voluptatibus ab officiis nam nesciunt cumque corporis
                                                modi,
                                                itaque unde, quaerat cupiditate illo quam! Consectetur nostrum ratione eos
                                                voluptatem error aliquid cumque quod velit, omnis, consequatur unde beatae
                                                non
                                                aut
                                                nam molestias tempora vel dolore placeat ipsam nulla accusamus sequi natus!
                                                Earum,
                                                aliquid fugit! Perferendis quae quaerat, aperiam iste deleniti est? Debitis
                                                ut
                                                est
                                                cumque, provident possimus vel sapiente fugit, suscipit voluptatem maxime
                                                cupiditate
                                                modi.</p>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{ route('main_about') }}" class="btn btn-primary">Know More</a>
                                            <button class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#contactShortModal">Contact Us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-content">
                                    <div class="card-stack colored row g-3 g-md-4">
                                        @php
                                            $pointers = [
                                                'States' => 200,
                                                'FPOs Onboard' => 200,
                                                'Farmer Base' => 200,
                                                'Commodities Traded' => 23,
                                                'Y-o-Y Growth Volume (%)' => 200,
                                            ];
                                            $i = 0;
                                        @endphp
                                        @foreach ($pointers as $key => $value)
                                            @if ($i % 2 == 0)
                                                <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-up"
                                                    data-aos-delay="{{ 100 * $i }}">
                                                    <a href="">
                                                        <div class="data-card style-green">
                                                            <div class="card-body">
                                                                <div class="text text-center">
                                                                    <h3>{{ $value }}+</h3>
                                                                    <p>{{ $key }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-up"
                                                    data-aos-delay="{{ 100 * $i }}">
                                                    <a href="">
                                                        <div class="data-card style-yellow">
                                                            <div class="card-body">
                                                                <div class="text text-center">
                                                                    <h3>{{ $value }}+</h3>
                                                                    <p>{{ $key }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                            @php
                                                $i ++;
                                            @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-title">Our FPO Partners</h2>
                            </div>
                            <div class="col-12">
                                <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
                                <script src="{{ asset('theme02/assets/json/india_state.geojson') }}"></script>
                                <div id="india-map" style="width: 800px; height: 900px;"></div>
                                <script type="text/javascript">
                                    var chartDom = document.getElementById('india-map');
                                    var myChart = echarts.init(chartDom);
                                    var option;
                                    myChart.showLoading();
                                    myChart.on('click', function(params) {
                                        if (params.componentType === 'series') {
                                            // Get the data associated with the clicked data point
                                            const data = params.data;

                                            // Assuming your data object has a 'url' property
                                            if (data && data.url) {
                                                window.open(data.url + "?state=" + data.name, '_blank'); // Open the URL in a new tab
                                            } else {
                                                console.log('No URL associated with this data point.');
                                            }
                                        }
                                    });
                                    $.get("{{ asset('theme02/assets/json/india_state.geojson') }}", function(india_states) {
                                        myChart.hideLoading();
                                        // Register the India map data
                                        echarts.registerMap('India', india_states); // Assuming india_states is loaded from the JSON
                                        option = {
                                            title: {
                                                text: 'NCDEX FPO Partners (2024-25)',
                                                subtext: 'Data from www.ncdex.com',
                                                sublink: 'http://www.ncdex.com',
                                                left: 'right'
                                            },
                                            tooltip: {
                                                trigger: 'item',
                                                showDelay: 0,
                                                transitionDuration: 0.2
                                            },
                                            visualMap: {
                                                left: 'right',
                                                min: 50,
                                                max: 500,
                                                inRange: {
                                                    color: [
                                                        '#19641e',
                                                        '#f7c35f',
                                                    ]
                                                },
                                                text: ['High', 'Low'],
                                                calculable: true
                                            },
                                            series: [{
                                                name: 'Population Map',
                                                type: 'map',
                                                map: 'India',
                                                roam: 'move',
                                                // roam: true, // Enable zooming and panning
                                                itemStyle: {
                                                    areaColor: '#eee',
                                                    borderColor: '#333'
                                                },
                                                label: {
                                                    show: true,
                                                    fontSize: 12
                                                },
                                                nameProperty: 'NAME_1',
                                                data: [
                                                    // You can add data here to visualize on the map.
                                                    // The 'name' property should match the state name in your GeoJSON data.
                                                    {
                                                        name: 'Maharashtra',
                                                        value: 100,
                                                        url: "{{ route('main_events') }}"
                                                    },
                                                    {
                                                        name: 'Karnataka',
                                                        value: 500,
                                                        url: "{{ route('main_events') }}"
                                                    },
                                                    // Add data for other states as needed
                                                ]
                                            }]
                                        };
                                        myChart.setOption(option);
                                    });
                                    // Handle resizing of the chart
                                    window.addEventListener('resize', myChart.resize);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Latest News --}}
        <section class="default-spacing pb-0 d-none">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="section-title">Latest News</h2>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
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
                                                                            Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit. Quia, porro!
                                                                        </h4>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p class="clipped-content line-2">
                                                                        Lorem ipsum dolor sit, amet consectetur dolor sit
                                                                        elit. Cum alias ut in dolor quae itaque tenetur
                                                                        laborum? Id, deleniti fuga?
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
                    <div class="col-xxl-9 col-xl-8 col-lg-6 col-12">
                        <div class="row">
                            <div class="col-xl-6">
                                <ul class="list-group news-group">
                                    @for ($i = 0; $i < 5; $i++)
                                        <li class="list-group-item news-text">
                                            <a href="" data-aos="fade-left" data-aos-delay="{{ 100 * $i }}">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img src="https://placehold.co/140x80" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p class="clipped-content line-2 mb-0">
                                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorum nisi
                                                            delectus
                                                            ex ullam esse iure, dolorem, voluptate quo temporibus alias,
                                                            deleniti labore
                                                            perspiciatis? Fugit, repellat. Cupiditate similique ullam
                                                            repellat
                                                            voluptate?
                                                        </p>
                                                    </div>
                                                </div>

                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="col-xl-6">
                                <ul class="list-group news-group">
                                    @for ($i = 0; $i < 5; $i++)
                                        <li class="list-group-item news-text">
                                            <a href="" data-aos="fade-left" data-aos-delay="{{ 100 * $i }}">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img src="https://placehold.co/140x80" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <p class="clipped-content line-2 mb-0">
                                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Dolorum nisi
                                                            delectus
                                                            ex ullam esse iure, dolorem, voluptate quo temporibus alias,
                                                            deleniti labore
                                                            perspiciatis? Fugit, repellat. Cupiditate similique ullam
                                                            repellat
                                                            voluptate?
                                                        </p>
                                                    </div>
                                                </div>

                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="col-12 pt-3">
                                <a href="" class="btn btn-primary">View All News Articles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Kheti Ke Sikandar --}}
        <section class="default-spacing pb-0">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
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
                    <div class="col-xl-6 col-12">
                        <div class="text-content">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h2 class="section-title">Markets</h2>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem
                                                ducimus veniam aspernatur. Consequatur excepturi nihil nostrum natus placeat
                                                consectetur obcaecati.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore aspernatur
                                                consectetur molestiae neque eos earum, ratione nobis praesentium debitis,
                                                delectus, quibusdam mollitia ipsam ducimus? Aliquam nam officiis harum
                                                tempora officia.
                                            </p>
                                        </div>
                                        @for ($i = 0; $i < 4; $i++)
                                            <div class="col-xxl-4 col-6">
                                                <div class="card" data-aos="zoom-in" data-aos-duration="400"
                                                    data-aos-delay="{{ 100 * $i }}">
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
                                            <div class="col-xxl-4 col-6">
                                                <div class="card" data-aos="zoom-in" data-aos-duration="400"
                                                    data-aos-delay="{{ 100 * $i + 100 }}">
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
                                            <div class="col-xxl-4 col-6">
                                                <div class="card" data-aos="zoom-in" data-aos-duration="400"
                                                    data-aos-delay="{{ 100 * $i + 100 }}">
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
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
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
        {{-- <section class="default-spacing">
            <div class="container-fluid">
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
                                        slidesPerView: 7,
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
        </section> --}}
        {{-- Our Team --}}
        <section class="default-spacing">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <h2 class="section-title">Our Team</h2>
                            </div>
                            <div class="col-12">
                                <div class="swiper TeamSwiper">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < 3; $i++)
                                            <div class="swiper-slide">
                                                <div class="row g-3 g-md-4 align-items-center">
                                                    <div class="col-xl-4 col-12">
                                                        <div class="rounded-overflow">
                                                            <div class="frame frame-01">
                                                                <img src="{{ asset('mandi-uploads/team/member.jpg') }}"
                                                                    alt=""
                                                                    onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                                                    class="w-100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-12">
                                                        <h4>Lorem, ipsum dolor.</h4>
                                                        <p class="text-clipped" style="--clamp-lines:2">Lorem ipsum dolor
                                                            sit amet
                                                            consectetur adipisicing elit. Magnam et ipsam necessitatibus
                                                            quibusdam
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
                                                slidesPerView: 3,
                                                spaceBetween: 50,
                                                // loop: true,
                                                autoplay: {
                                                    delay: 3000,
                                                }
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
                            <h3 class="modal-title fs-5" id="teamModalLabel">Name: Lorem, ipsum dolor.</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3 g-md-4 align-items-center">
                                <div class="col-xl-3 col-12">
                                    <div class="rounded-overflow">
                                        <img src="{{ asset('mandi-uploads/team/member.jpg') }}" alt=""
                                            onerror="this.onerror=null;this.src='https://placehold.co/150x200';"
                                            class="w-100">
                                    </div>
                                </div>
                                <div class="offset-xl-1 col-xl-8 col-12">
                                    <h4>Lorem, ipsum dolor.</h4>
                                    <p>Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Magnam et ipsam necessitatibus quibusdam
                                        repudiandae. Provident facilis hic aperiam ea a.</p>
                                    <p>Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Magnam et ipsam necessitatibus quibusdam
                                        repudiandae. Provident facilis hic aperiam ea a.</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('member_single', ['name' => 'single']) }}"
                                class="btn btn-sm btn-primary">View Details</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Popup Modal --}}
        <!-- Modal -->
        <div class="modal fade" id="contactShortModal" tabindex="-1" aria-labelledby="contactShortModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="contactShortModalLabel">Fill Details Below</h1>
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
                                    <label for="" class="form-label">Message</label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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
        {{-- @push('scripts')
            <script>
                $(document).ready(function() {
                    setTimeout(function() {
                        $('#contactShortModal').modal('show');
                    }, 5000); // 5000 milliseconds = 5 seconds
                });
            </script>
        @endpush --}}
        {{-- Popup Modal --}}
    </main>
@endsection
