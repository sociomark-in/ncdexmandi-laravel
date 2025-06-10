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
                                    <li class="breadcrumb-item active">Frequently Asked Questions</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h1 class="title-icon">
                                    <i class="fa-solid fa-question icon icon-prepend"></i>
                                    Frequently Asked Questions
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing py-md-5 py-4 bg-secondary-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper faqCategoriesSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="swiper-slide">
                                        <div class="card border-2 border-primary">
                                            <div class="card-body">
                                                <h4 class="mb-2 mb-md-3">Know [Category Name]</h4>
                                                <p class="clipped-content line-3 text-black-70">(15-20 Words) Lorem ipsum
                                                    dolor sit amet consectetur adipisicing elit. Ut ipsam pariatur ab
                                                    aspernatur amet dicta necessitatibus placeat obcaecati modi aut atque
                                                    nam nisi numquam laborum laudantium veritatis, soluta id explicabo.</p>
                                                <a href="" class="text-primary">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <script>
                            new Swiper('.faqCategoriesSwiper', {
                                loop: true,
                                slidesPerView: 4,
                                spaceBetween: 30,
                                pagination: {
                                    el: ".swiper-pagination",
                                },
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <h2 class="title-icon">
                                                <i class="fa-solid fa-question icon icon-prepend"></i>
                                                Lorem ipsum dolor sit. FAQ
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet labore
                                                deserunt
                                                ratione porro fugit nam earum blanditiis adipisci aperiam doloremque
                                                nesciunt
                                                praesentium cum quasi perferendis minus, natus repellat et fugiat?
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body bg-light">
                                                    <form action="" method="get">
                                                        <div class="row justify-content-between">
                                                            <div class="col-xl"><input type="text"
                                                                    placeholder="Search All FAQs" class="form-control">
                                                            </div>
                                                            <div class="col-xl-auto">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Ask Your Query
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="accordion accordion-spaced" id="faqAccordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            FAQ Item #1
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        data-bs-parent="#faqAccordion">
                                                        <div class="accordion-body">
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                                Quam, suscipit incidunt, nostrum iste corporis cum et sed
                                                                beatae nam, ad labore? Provident consequuntur illum cumque.
                                                                Vero qui dolor soluta sit.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                                Quam, suscipit incidunt, nostrum iste corporis cum et sed
                                                                beatae nam, ad labore? Provident consequuntur illum cumque.
                                                                Vero qui dolor soluta sit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @for ($i = 2; $i < 10; $i++)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $i }}"
                                                                aria-expanded="false"
                                                                aria-controls="collapse{{ $i }}">
                                                                FAQ Item #{{ $i }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $i }}"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <p>
                                                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                    elit.
                                                                    Quam, suscipit incidunt, nostrum iste corporis cum et
                                                                    sed
                                                                    beatae nam, ad labore? Provident consequuntur illum
                                                                    cumque.
                                                                    Vero qui dolor soluta sit.
                                                                </p>
                                                                <p>
                                                                    Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                    elit.
                                                                    Quam, suscipit incidunt, nostrum iste corporis cum et
                                                                    sed
                                                                    beatae nam, ad labore? Provident consequuntur illum
                                                                    cumque.
                                                                    Vero qui dolor soluta sit.
                                                                </p>
                                                            </div>
                                                        </div>
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
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-question icon icon-prepend"></i>
                                    Not FAQ Ask More
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolorum.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            @csrf
                                            <x-forms type="faq-100"></x-forms>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
