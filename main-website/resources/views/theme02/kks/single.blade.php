@extends('theme02.core.pages')
@php
    $states = [
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Maharashtra',
        'Madhya Pradesh',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Tripura',
        'Telangana',
        'Uttar Pradesh',
        'Uttarakhand',
        'West Bengal',
        'Andaman & Nicobar (UT)',
        'Chandigarh (UT)',
        'Dadra & Nagar Haveli and Daman & Diu (UT)',
        'Delhi [National Capital Territory (NCT)]',
        'Jammu & Kashmir (UT)',
        'Ladakh (UT)',
        'Lakshadweep (UT)',
        'Puducherry (UT)',
    ];
@endphp
@section('content')
    <main>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row mb-4 justify-content-end">
                    <div class="col-auto">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#contactPersonModal" class="btn btn-secondary btn-icon">NCDEX Contact Person Details&nbsp;<i class="fa-solid fa-arrow-right icon-append"></i></a>
                    </div>
                </div>
                <div class="event-style-two">
                    <div class="row justify-content-center g-3 g-md-4">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-auto">
                                    <a href=""><i class="fa-regular fa-user"></i>&nbsp;&nbsp;Lorem, ipsum dolor.</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-regular fa-calendar"></i>&nbsp;&nbsp;{{ date("F j, Y") }}
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h1 class="page-title text-primary">DD Kisan 22 December 2024: Transforming Agriculture through
                                the
                                Digital
                                Agriculture Mission</h1>
                        </div>
                        <div class="col-12">
                            <ul class="nav social-share align-items-center gap-2">
                                <li class="nav-item me-3">Share:</li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="#"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="#"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link social-icon" href="#"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-12">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia nostrum quo
                                nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa ipsam esse
                                earum
                                numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi veritatis
                                doloremque omnis.
                            </p>

                        </div>
                        <div class="col-lg-6 col-12">
                            <table class="table table-sm table-striped">
                                <tbody>
                                    <tr>
                                        <th>Name of FPO</th>
                                        <td class="clipped-content line-1">Lorem ipsum
                                            dolor, sit amet consectetur adipisicing elit.
                                            Officiis, molestiae?</td>
                                    </tr>
                                    <tr>
                                        <th>Establishment</th>
                                        <td>{{ date('F j, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Turnover</th>
                                        <td>300B+</td>
                                    </tr>
                                    <tr>
                                        <th>Commodities</th>
                                        <td>300B+</td>
                                    </tr>
                                    <tr>
                                        <th>Members</th>
                                        <td>300B+</td>
                                    </tr>
                                    <tr>
                                        <th>Locations</th>
                                        <td>300</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-content">
                                        <h2 class="title-icon">
                                            <i class="fa-solid fa-star icon icon-prepend"></i>
                                            About [Name of FPO]
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h3>Lorem, ipsum dolor. Section Heading</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia
                                        nostrum quo
                                        nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa
                                        ipsam esse
                                        earum
                                        numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                        perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi
                                        veritatis
                                        doloremque omnis.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia
                                        nostrum quo
                                        nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa
                                        ipsam esse
                                        earum
                                        numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                        perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi
                                        veritatis
                                        doloremque omnis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-12">
                            <lite-youtube videoid="QOj9Bx7SrkI">
                                <a class="lite-youtube-fallback w-100" href="https://www.youtube.com/watch?v=QOj9Bx7SrkI">DD
                                    Kisan
                                    22 December 2024: Transforming Agriculture through the Digital
                                    Agriculture Mission</a>
                            </lite-youtube>
                        </div>
                        <div class="col-12">
                            <h3>Lorem, ipsum dolor. Section Heading</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nemo non mollitia nostrum quo
                                nobis, est atque, corrupti alias obcaecati harum architecto nesciunt quod culpa ipsam esse
                                earum
                                numquam sequi necessitatibus consectetur ipsum? Non illo minus officiis, illum earum
                                perspiciatis. Animi perferendis praesentium eveniet placeat cupiditate! Nisi veritatis
                                doloremque omnis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="contactPersonModal" tabindex="-1" aria-labelledby="contactPersonModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="contactPersonModalLabel">NCDEX Contact Persoin for [FPO]</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p><strong>Contact Details:</strong></p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi error quos quasi reprehenderit fugiat iusto, porro tenetur maxime laudantium unde.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-star icon icon-prepend"></i>
                                Key Moments of FPO
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="row g-3">
                                    @for ($i = 0; $i < 8; $i++)
                                        <div class="col-xxl-3 col-xl-4 col-6">
                                            <a href="https://placehold.co/1500x1000/png" class="d-block rounded-overflow">
                                                <picture>
                                                    <source srcset="https://placehold.co/300x150/png" type="image/png">
                                                    <img src="https://placehold.co/300x150/png" alt="" class="w-100">
                                                </picture>
                                            </a>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="" class="btn btn-primary">View Full Gallery of Moments</a>
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
                        <div class="text-content">
                            <h2 class="title-icon">
                                <i class="fa-solid fa-star icon icon-prepend"></i>
                                View Similar FPOs
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper featuredFPOSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <div class="event-style-two">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-6 col-12">
                                                    <div class="thumb">
                                                        <a href="{{ route('fpo_single', ['episode' => rand()]) }}"><img
                                                                src="https://i3.ytimg.com/vi/QOj9Bx7SrkI/sddefault.jpg"
                                                                alt="Image Not Found" class="w-100"></a>
                                                        <div class="date">
                                                            <strong>22</strong>
                                                            <span>December 2024</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-6 col-12">
                                                    <div class="event-details">
                                                        <div class="py-0 py-md-4">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <a
                                                                        href="{{ route('fpo_single', ['episode' => rand()]) }}">
                                                                        <h3 class="clipped-content line-1">
                                                                            DD Kisan 22 December 2024: Transforming
                                                                            Agriculture
                                                                            through the Digital Agriculture Mission
                                                                        </h3>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <table class="table table-sm table-striped">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>Name of FPO</th>
                                                                                <td class="clipped-content line-1">Lorem
                                                                                    ipsum
                                                                                    dolor, sit amet consectetur adipisicing
                                                                                    elit.
                                                                                    Officiis, molestiae?</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Establishment</th>
                                                                                <td>{{ date('F j, Y') }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Turnover</th>
                                                                                <td>300B+</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Commodities</th>
                                                                                <td>300B+</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Members</th>
                                                                                <td>300B+</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Locations</th>
                                                                                <td>300</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <p class="clipped-content line-4">
                                                                        The Digital Agriculture Mission of the Government of
                                                                        India is a new technological initiative to bring
                                                                        about a
                                                                        transformation in the agriculture sector. How are
                                                                        farmers getting technological help through this
                                                                        mission?
                                                                        Watch this special report of Mandi.com
                                                                    </p>
                                                                    <ul class="nav social-share align-items-center gap-2">
                                                                        <li class="nav-item me-3">Share:</li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link social-icon"
                                                                                href="#"><i
                                                                                    class="fa-brands fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link social-icon"
                                                                                href="#"><i
                                                                                    class="fa-brands fa-linkedin-in"></i></a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link social-icon"
                                                                                href="#"><i
                                                                                    class="fa-brands fa-whatsapp"></i></a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link social-icon"
                                                                                href="#"><i
                                                                                    class="fa-brands fa-instagram"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        @push('scripts')
                            <script>
                                new Swiper('.featuredFPOSwiper', {
                                    loop: true,
                                    spaceBetween: 10,
                                    pagination: {
                                        el: ".swiper-pagination",
                                    },
                                });
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
