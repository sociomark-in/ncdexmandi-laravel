@extends('theme02.core.pages')
@section('content')
    <main>
        <div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
            style="background-image: url(https://ncdexmandi.com/wp-content/themes/mandi/assets/desktop/images/homePageBg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="page-title mb-3 mb-lg-4">
                            <h1>Contact Us</h1>
                        </div>
                        <nav aria-label="">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a
                                        href="{{  route('main_home') }}"><i
                                            class="fas fa-home"></i>&nbsp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="default-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-12"></div>
                    <div class="col-xl-4 offset-xl-1 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <x-forms type="contact-short"></x-forms>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
