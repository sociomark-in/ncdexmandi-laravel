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
        <section class="default-spacing py-md-5 py-4 bg-secondary-70 bg-watermark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper faqCategoriesSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border-2 border-primary">
                                        <div class="card-body">
                                            <h4 class="mb-2 mb-md-3">General Queries</h4>
                                            <p class="clipped-content line-3 text-black-70">(50 - 60 Characters) Lorem ipsum
                                                dolor sit amet consectetur adipisicing elit. Ut ipsam pariatur ab
                                                aspernatur amet dicta necessitatibus placeat obcaecati modi aut atque
                                                nam nisi numquam laborum laudantium veritatis, soluta id explicabo.</p>
                                            <a href="{{ route('faqs_home') }}?filter_category=general"
                                                class="text-primary">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-2 border-primary">
                                        <div class="card-body">
                                            <h4 class="mb-2 mb-md-3">Getting Started</h4>
                                            <p class="clipped-content line-3 text-black-70">(50 - 60 Characters) Lorem ipsum
                                                dolor sit amet consectetur adipisicing elit. Ut ipsam pariatur ab
                                                aspernatur amet dicta necessitatibus placeat obcaecati modi aut atque
                                                nam nisi numquam laborum laudantium veritatis, soluta id explicabo.</p>
                                            <a href="{{ route('faqs_home') }}?filter_category=introductory"
                                                class="text-primary">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-2 border-primary">
                                        <div class="card-body">
                                            <h4 class="mb-2 mb-md-3">Margins, Premiums</h4>
                                            <p class="clipped-content line-3 text-black-70">(50 - 60 Characters) Lorem ipsum
                                                dolor sit amet consectetur adipisicing elit. Ut ipsam pariatur ab
                                                aspernatur amet dicta necessitatibus placeat obcaecati modi aut atque
                                                nam nisi numquam laborum laudantium veritatis, soluta id explicabo.</p>
                                            <a href="{{ route('faqs_home') }}?filter_category=margins"
                                                class="text-primary">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-2 border-primary">
                                        <div class="card-body">
                                            <h4 class="mb-2 mb-md-3">Risk Management</h4>
                                            <p class="clipped-content line-3 text-black-70">(50 - 60 Characters) Lorem ipsum
                                                dolor sit amet consectetur adipisicing elit. Ut ipsam pariatur ab
                                                aspernatur amet dicta necessitatibus placeat obcaecati modi aut atque
                                                nam nisi numquam laborum laudantium veritatis, soluta id explicabo.</p>
                                            <a href="{{ route('faqs_home') }}?filter_category=rm" class="text-primary">Know
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            new Swiper('.faqCategoriesSwiper', {
                                loop: true,
                                slidesPerView: 3,
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
        <section class="default-spacing">
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
                                            <div class="row g-1">
                                                <div class="col-12">
                                                    <p>Most Searched Queries</p>
                                                    @for ($i = 0; $i < 15; $i++)
                                                        <span class="badge bg-light text-black">Lorem ipsum dolor
                                                            sit.</span>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <form action="" method="get">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body bg-light">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-xl"><input type="text"
                                                                            placeholder="Search All FAQs"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary">
                                                            Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-3">
                                                <div class="col-xl-8 col-12">
                                                    <div class="row g-3 mt-3">
                                                        <div class="col-12">
                                                            <h2>General Queries</h2>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="accordion accordion-spaced" id="faqAccordion">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button class="accordion-button" type="button"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseOne"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            How to register our FPO?
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseOne"
                                                                        class="accordion-collapse collapse show"
                                                                        data-bs-parent="#faqAccordion">
                                                                        <div class="accordion-body">
                                                                            <div class="">
                                                                                <p>
                                                                                    You can register your FPO as a company
                                                                                    through
                                                                                    SFAC or NABARD support. You will need
                                                                                    following
                                                                                    documents
                                                                                </p>
                                                                                <ul>
                                                                                    <li>PAN & Aadhaar of board members</li>
                                                                                    <li>Farmer ID proofs</li>
                                                                                    <li>Bank account</li>
                                                                                    <li>Minimum 10 members (farmers)</li>
                                                                                    <li>FPO Registration Portal (SFAC.com)
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row align-items-md-center">
                                                                                        <div class="col-xl-4">
                                                                                            Was it helpful?
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <form action=""
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <div class="row">
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultYes0">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultYes0">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-up"></i>
                                                                                                                Yes
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultNo0">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultNo0">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-down"></i>
                                                                                                                No
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @for ($i = 2; $i < 10; $i++)
                                                                    <div class="accordion-item d-none">
                                                                        <h2 class="accordion-header">
                                                                            <button class="accordion-button collapsed"
                                                                                type="button" data-bs-toggle="collapse"
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
                                                                                    Lorem ipsum dolor sit, amet consectetur
                                                                                    adipisicing
                                                                                    elit.
                                                                                    Quam, suscipit incidunt, nostrum iste
                                                                                    corporis
                                                                                    cum et
                                                                                    sed
                                                                                    beatae nam, ad labore? Provident
                                                                                    consequuntur
                                                                                    illum
                                                                                    cumque.
                                                                                    Vero qui dolor soluta sit.
                                                                                </p>
                                                                                <p>
                                                                                    Lorem ipsum dolor sit, amet consectetur
                                                                                    adipisicing
                                                                                    elit.
                                                                                    Quam, suscipit incidunt, nostrum iste
                                                                                    corporis
                                                                                    cum et
                                                                                    sed
                                                                                    beatae nam, ad labore? Provident
                                                                                    consequuntur
                                                                                    illum
                                                                                    cumque.
                                                                                    Vero qui dolor soluta sit.
                                                                                </p>
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        <div
                                                                                            class="row align-items-md-center">
                                                                                            <div class="col-xl-4">
                                                                                                Was it helpful?
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <form action=""
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-3">
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="radioDefault"
                                                                                                                    id="radioDefaultYes{{ $i }}">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="radioDefaultYes{{ $i }}">
                                                                                                                    <i
                                                                                                                        class="fa-solid fa-thumbs-up"></i>
                                                                                                                    Yes
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-3">
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="radioDefault"
                                                                                                                    id="radioDefaultNo{{ $i }}">
                                                                                                                <label
                                                                                                                    class="form-check-label"
                                                                                                                    for="radioDefaultNo{{ $i }}">
                                                                                                                    <i
                                                                                                                        class="fa-solid fa-thumbs-down"></i>
                                                                                                                    No
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button class="accordion-button collapsed"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapse0"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse0">
                                                                            Can an FPO sell its produce on NCDEX?
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapse0"
                                                                        class="accordion-collapse collapse"
                                                                        data-bs-parent="#faqAccordion">
                                                                        <div class="accordion-body">
                                                                            <div class="">
                                                                                <p>
                                                                                    Yes! FPOs can trade on the National
                                                                                    Commodity
                                                                                    and Derivatives Exchange (NCDEX) through
                                                                                    a
                                                                                    registered aggregator or member. This
                                                                                    helps you
                                                                                    get better prices and avoid middlemen.
                                                                                </p>
                                                                                <p>Steps to follow:</p>
                                                                                <ul>
                                                                                    <li>You will need the following
                                                                                        documents</li>
                                                                                    <li>PAN, Aadhar of directors</li>
                                                                                    <li>GST certificate</li>
                                                                                    <li>Board resolution</li>
                                                                                    <li>Bank statement (6 months)</li>
                                                                                    <li>ITRs & MoA</li>
                                                                                </ul>
                                                                                <p>Then the FPO must open two accounts</p>
                                                                                <ul>
                                                                                    <li>Trading account with a member broker
                                                                                    </li>
                                                                                    <li>Repository account with a registered
                                                                                        Repository Participant (e.g., NERL)
                                                                                    </li>
                                                                                    <li>And must submit PAN, Aadhaar, ITRs,
                                                                                        Board
                                                                                        Resolution, bank statements, and a
                                                                                        director's list.</li>
                                                                                    <li>Ensure quality testing and deposit
                                                                                        goods in
                                                                                        the NCDEX-approved warehouse</li>
                                                                                    <li>Decide the price and quantity, and
                                                                                        take a
                                                                                        sell position (Futures or Options)
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row align-items-md-center">
                                                                                        <div class="col-xl-4">
                                                                                            Was it helpful?
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <form action=""
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <div class="row">
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultYes{{ $i }}">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultYes{{ $i }}">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-up"></i>
                                                                                                                Yes
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultNo{{ $i }}">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultNo{{ $i }}">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-down"></i>
                                                                                                                No
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button class="accordion-button collapsed"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapse1"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse1">
                                                                            What crops can we sell on commodity exchanges?
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapse1"
                                                                        class="accordion-collapse collapse"
                                                                        data-bs-parent="#faqAccordion">
                                                                        <div class="accordion-body">
                                                                            <div class="">
                                                                                <p>
                                                                                    You can sell crops like:
                                                                                    Cottonseed Cake
                                                                                    <a href="">View Full Commodity
                                                                                        List</a>
                                                                                </p>
                                                                            </div>

                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row align-items-md-center">
                                                                                        <div class="col-xl-4">
                                                                                            Was it helpful?
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <form action=""
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <div class="row">
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultYes{{ $i }}">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultYes{{ $i }}">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-up"></i>
                                                                                                                Yes
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultNo{{ $i }}">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultNo{{ $i }}">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-down"></i>
                                                                                                                No
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button class="accordion-button collapsed"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapse2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2">
                                                                            What if I don’t find my question here?
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapse2"
                                                                        class="accordion-collapse collapse"
                                                                        data-bs-parent="#faqAccordion">
                                                                        <div class="accordion-body">
                                                                            <div class="">
                                                                                <p>Click the "Ask a Question" button below.
                                                                                    Our team will reply within 48 hours.</p>
                                                                                <p>You can also call the helpdesk: <a
                                                                                        href="tel:1800-266-2339">1800-266-2339</a>
                                                                                    Or write to: <a
                                                                                        href="mailto:askus@ncdex.com">askus@ncdex.com</a>
                                                                                </p>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <div class="row align-items-md-center">
                                                                                        <div class="col-xl-4">
                                                                                            Was it helpful?
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <form action=""
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <div class="row">
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultYes{{ $i }}">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultYes{{ $i }}">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-up"></i>
                                                                                                                Yes
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                type="radio"
                                                                                                                name="radioDefault"
                                                                                                                id="radioDefaultNo{{ $i }}">
                                                                                                            <label
                                                                                                                class="form-check-label"
                                                                                                                for="radioDefaultNo{{ $i }}">
                                                                                                                <i
                                                                                                                    class="fa-solid fa-thumbs-down"></i>
                                                                                                                No
                                                                                                            </label>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-12">
                                                    <div class="row g-3">
                                                        <div class="col-12 d-none">
                                                            <h2 class="title-icon mb-3">
                                                                <i class="fa-solid fa-filter icon icon-prepend"></i>
                                                                Filter All FAQs
                                                            </h2>
                                                        </div>
                                                        <div class="col-12 d-none">
                                                            <form action="" method="get">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row g-3">
                                                                            <div class="col-12">
                                                                                <label for=""
                                                                                    class="form-label">Select A
                                                                                    Category</label>
                                                                                <select name="" id=""
                                                                                    class="form-select">
                                                                                    @for ($i = 0; $i < 10; $i++)
                                                                                        <option
                                                                                            value="Option {{ $i }}">
                                                                                            Option {{ $i }}
                                                                                        </option>
                                                                                    @endfor
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label for=""
                                                                                    class="form-label">Select A
                                                                                    State</label>
                                                                                <select name="" id=""
                                                                                    class="form-select">
                                                                                    @for ($i = 0; $i < 10; $i++)
                                                                                        <option
                                                                                            value="Option {{ $i }}">
                                                                                            Option {{ $i }}
                                                                                        </option>
                                                                                    @endfor
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label for=""
                                                                                    class="form-label">Select An
                                                                                    FPO</label>
                                                                                <select name="" id=""
                                                                                    class="form-select">
                                                                                    @for ($i = 0; $i < 10; $i++)
                                                                                        <option
                                                                                            value="Option {{ $i }}">
                                                                                            Option {{ $i }}
                                                                                        </option>
                                                                                    @endfor
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary btn-icon"><i
                                                                                        class="fa-solid fa-check icon-prepend"></i>Apply
                                                                                    Filters</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card border-2 border-primary rounded-overflow">
                                                                <div class="card-body">
                                                                    <p>Didn’t find what you were looking for?</p>
                                                                    <h3>Ask Here</h3>
                                                                    <form action="" method="post">
                                                                        @csrf
                                                                        <div class="row g-2">
                                                                            <div class="col-12">
                                                                                <textarea name="" id="" cols="30" rows="10" class="form-control"
                                                                                    placeholder="Your Query: Maximum 100 Characters"></textarea>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="row g-2">
                                                                                    <div class="col-auto">
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary btn-icon"><i
                                                                                                class="fa-solid fa-check icon-prepend"></i>Ask
                                                                                            Your Query</button>
                                                                                    </div>
                                                                                    <div class="col-auto">
                                                                                        <button type="reset"
                                                                                            class="btn btn-secondary btn-icon"><i
                                                                                                class="fa-solid fa-xmark icon-prepend"></i>Reset</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    </main>
@endsection
