@extends('theme02.core.pages')
@section('title', 'Page Not Found!')
@section('content')
    <main>
        <section class="default-spacing">
            <div class="container h-100">
                <div class="row height-50 g-3 g-md-4 align-items-center justify-content-center">
                    <div class="col-12">
                        <h1 class="text-center">The page you're looking for can't be found.</h1>
                    </div>
                    <div class="col-xl-8 col-12">
                        <form action="search" method="get" class="mb-3">
                            @csrf
                            <div class="row g-2">
                                <div class="col-md col-12">
                                    <input type="text" placeholder="Search in {{ env('APP_NAME')}}" class="form-control">
                                </div>
                                <div class="col-md-auto col-21">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-auto"><a href="{{ route('main_home') }}" class="btn btn-secondary">Return to
                                    Home</a></div>
                            <div class="col-auto">or</div>
                            <div class="col-auto"><a href="">See Our Sitemap > </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
