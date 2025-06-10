@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Reports</h1>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reports</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row g-3 g-xl-5" id="gallery">
                    @for ($i = 0; $i < 25; $i++)
                        <a href="https://placehold.co/900x1600" class="col-xl-3 col-lg-4 col-6">
                            <img src="https://placehold.co/450x800" alt="" class="w-100 rounded-overflow">
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
                                Reports Archives
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-2">
                            @for ($i = date('Y'); $i > 2000; $i--)
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
