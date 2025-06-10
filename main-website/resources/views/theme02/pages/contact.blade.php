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
                                    <li class="breadcrumb-item active">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h1 class="title-icon">
                                    <i class="fa-solid fa-question icon icon-prepend"></i>
                                    Contact Us
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="accordion" id="addressAccordion">
                    <div class="row g-3">
                        <div class="col-12">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-home icon icon-prepend"></i>
                                Locations Addresses
                            </h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet labore
                                deserunt
                                ratione porro fugit nam earum blanditiis adipisci aperiam doloremque
                                nesciunt
                                praesentium cum quasi perferendis minus, natus repellat et fugiat?
                            </p>
                        </div>
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                            aria-controls="collapse{{ $i }}">
                                            <h4 class="mb-0">Center Address #{{ $i }}</h4>
                                        </button>
                                    </div>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                                        data-bs-parent="#addressAccordion">
                                        <div class="accordion-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, <br>
                                                Ad maiores quaerat illum neque, <br>
                                                Debitis quisquam laboriosam libero consequuntur, <br>
                                                [City], [State]
                                            </p>
                                            <p>
                                                Contact No: <a href=""><strong>+91 998 799 8998</strong></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-12">
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
                                            <div class="accordion accordion-spaced" id="faqAccordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Accordion Item #1
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
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Accordion Item #2
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
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
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Accordion Item #3
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
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
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="" class="btn btn-primary btn-icon">View More FAQs&nbsp;<i
                                                    class="fa-solid fa-arrow-right icon-append"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-lg-6 col-12">
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
                                            <x-forms type="contact-short"></x-forms>
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
