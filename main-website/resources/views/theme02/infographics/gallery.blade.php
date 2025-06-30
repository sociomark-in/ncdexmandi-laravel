@extends('theme02.core.pages')
@push('libraries')
    <!-- Plugin: LightGallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css"
        integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
        integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js"
        integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"
        integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js"
        integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Plugin: LightGallery -->
@endpush
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Gallery</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3" id="gallery">
                    @for ($i = 0; $i < 25; $i++)
                        <a href="https://placehold.co/1500x1000" class="col-xl-3 col-lg-4 col-6">
                            <img src="https://placehold.co/300x200" alt="" class="w-100 rounded-overflow">
                        </a>
                    @endfor
                </div>
            </div>
            @push('scripts')
                <script>
                    var gallery = lightGallery(document.getElementById('gallery'), {
                        thumbnail: true,
                        plugins: [lgZoom, lgThumbnail],
                        speed: 500,
                    });
                </script>
            @endpush
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-clock-rotate-left icon icon-prepend"></i>
                                Gallery Archives
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-2">
                            @for ($i = date('Y'); $i > 2000; $i--)
                                <div class="col-xl-3 col-6">
                                    <a href="">{{ $i }} - {{ $i - 5 }}</a>
                                </div>
                                @php
                                    $i -= 5;
                                @endphp
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
