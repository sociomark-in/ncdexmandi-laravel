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
                                <p> (150-200 Characters)
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt laborum, iste
                                    velit perspiciatis voluptatum temporibus voluptate eligendi architecto mollitia non
                                    itaque quas consectetur nulla. Quis omnis incidunt amet nihil.
                                </p>
                                <p>
                                    Description in 80-100 Characters so as to prompt a person refer the FAQs [FAQ CTA Text] →
                                    <a href="{{ route('faqs_home') }}" target="_blank">Redirect to FAQ Page</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <iframe class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.70220478185!2d72.71379059676282!3d19.082481911172504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1750062769000!5m2!1sen!2sin"
                            style="border:0; height:700px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing">
            <div class="container">
                <div class="accordion" id="addressAccordion">
                    <div class="row g-3">
                        <div class="col-xl-6 col-12">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-home icon icon-prepend"></i>
                                        Addresses
                                    </h2>
                                    <p>
                                        (100-120 Characters) Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime
                                        repudiandae similique aspernatur accusamus! Aperiam assumenda ullam, ea ipsa facere
                                        nostrum.
                                    </p>
                                </div>
                                <div class="col-012">
                                    <div class="accordion-item">
                                        <div class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <h4 class="mb-0">Center Address #1</h4>
                                            </button>
                                        </div>
                                        <div id="collapse1" class="accordion-collapse show"
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
                                @for ($i = 2; $i <= 3; $i++)
                                    <div class="col-12">
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}"
                                                    aria-expanded="false" aria-controls="collapse{{ $i }}">
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
                        <div class="col-xl-6 col-12">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-question icon icon-prepend"></i>
                                        Ask Us Your Query
                                    </h2>
                                    <p>
                                        (40-50 Characters) Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita,
                                        dolorum.
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
            </div>
        </section>
    </main>
@endsection
