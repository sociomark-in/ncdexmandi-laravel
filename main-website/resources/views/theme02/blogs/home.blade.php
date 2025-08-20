@extends('theme02.core.pages')
@section('content')
    <main>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="mb-3 mb-md-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <nav aria-label="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('main_home') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Blogs</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h1 class="title-icon">
                                    <i class="fa-solid fa-pen icon icon-prepend"></i>
                                    Blogs Center
                                </h1>
                                <p> (150-200 Characters)
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt laborum, iste
                                    velit perspiciatis voluptatum temporibus voluptate eligendi architecto mollitia non
                                    itaque quas consectetur nulla. Quis omnis incidunt amet nihil.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
