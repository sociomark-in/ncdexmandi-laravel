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
        <section class="nospacing d-none">
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="swiper bannerSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <img src="{{ asset('https://placehold.co/1920x700') }}"
                                                alt="A placeholder image" class="w-100">
                                        </picture>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="" target="_blank" title="External Page Link, Opens in New Tab">
                                        <picture>
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(min-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/webp">
                                            <source media="(max-width: 1200px)"
                                                srcset="{{ asset('https://placehold.co/1920x700') }}" type="image/jpeg">
                                            <img src="{{ asset('mandi-uploads/banners/banner_2.jpg') }}"
                                                alt="A placeholder image" class="w-100">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <script>
                            new Swiper('.bannerSwiper', {
                                loop: true,
                                autoplay: {
                                    enabled: true,
                                    delay: 5000
                                },
                                navigation: {
                                    nextEl: ".swiper-button-next",
                                    prevEl: ".swiper-button-prev",
                                },
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>
        <section class="default-spacing pb-0">
            <div class="container">
                <div class="mb-3 mb-md-4">
                    <div class="row g-3">
                        @if (is_null($state_filter))
                            <div class="col-12">
                                <div class="swiper statesMainEventSwiper">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < count($states); $i++)
                                            <div class="swiper-slide">
                                                <a class="thumbnail-style-01" href="?state={{$states[$i]}}">
                                                    <div class="row g-3 justify-content-center">
                                                        <div class="col-auto text-center">
                                                            <div class="icon">
                                                                <img src="{{ asset('theme02/assets/icons/state.png') }}" alt="State Icon" >
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <p>{{$states[$i]}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                @push('scripts')
                                    <script>
                                        new Swiper('.statesMainEventSwiper', {
                                            loop: true,
                                            spaceBetween: 10,
                                            slidesPerView: 6,
                                            pagination: {
                                                el: ".swiper-pagination",
                                            },
                                        });
                                    </script>
                                @endpush
                            </div>
                        @endif
                        <div class="col-12">
                            <nav aria-label="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('main_home') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Events</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-lg-auto col-12">
                                    <p class="mb-0">Find Events in:</p>
                                    <button class="btn btn-transparent btn-icon px-0" data-bs-toggle="modal"
                                        data-bs-target="#searchPageModal">
                                        <h3>
                                            {{ $state_filter ?? 'All Locations' }}&nbsp;<i
                                                class="fa-solid fa-chevron-down icon-append"></i>
                                        </h3>
                                    </button>
                                </div>
                                <div class="col-lg-auto col-12"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-star icon icon-prepend"></i>
                                    Upcoming Events
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="event-style-two">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-12">
                                        <div class="thumb">
                                            <a href="blog-single-with-sidebar.html"><img
                                                    src="https://i3.ytimg.com/vi/QOj9Bx7SrkI/hqdefault.jpg"
                                                    alt="Image Not Found" class="w-100"></a>
                                            <div class="date">
                                                <strong>7</strong>
                                                <span>April, 2025</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-6 col-12">
                                        <div class="event-details">
                                            <div class="col-12">
                                                <div class="py-0 py-md-4">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <a href="">
                                                                <h3>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Repudiandae iste veniam ipsam suscipit, alias eaque.
                                                                </h3>
                                                            </a>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="clipped-content line-3">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                                                        elit.
                                                                        Vero
                                                                        vel repudiandae id temporibus eius aliquam cum
                                                                        doloremque
                                                                        ipsum
                                                                        at, molestiae, quis dolorem aperiam fugit quia quas?
                                                                        At
                                                                        dolorem
                                                                        repudiandae inventore ipsum, illum optio nemo autem
                                                                        aliquid
                                                                        tempore quos dicta quas, amet officia possimus
                                                                        magnam
                                                                        perferendis facilis sunt ducimus laboriosam. Totam.
                                                                    </p>
                                                                </div>
                                                                <div class="col">
                                                                    <p>
                                                                        <strong>Date:</strong><br>
                                                                        <span>April 02, 2025</span>
                                                                    </p>
                                                                </div>
                                                                <div class="col">
                                                                    <p>
                                                                        <strong>Time:</strong><br>
                                                                        <span>12:30 PM.</span>
                                                                    </p>
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

                <div class="row mb-3 mb-md-4">
                    <div class="col-xl">
                        <div class="">
                            <div class="text-content">
                                <h2 class="title-icon">
                                    <i class="fa-solid fa-calendar icon icon-prepend"></i>
                                    Previous Events
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="dropdown">
                            <div class="btn btn-icon btn-search" data-bs-toggle="modal"
                                data-bs-target="#searchPageModal">
                                <i class="fa-solid fa-filter icon-prepend"></i><span class="ms-2">Filter By</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="event-style-one">
                                <div class="thumb">
                                    <a href="blog-single-with-sidebar.html"><img
                                            src="https://i3.ytimg.com/vi/wVYuqFrUEOM/hqdefault.jpg" alt="Image Not Found"
                                            class="w-100"></a>
                                    <div class="date">
                                        <strong>7</strong>
                                        <span>April, 2025</span>
                                    </div>
                                </div>
                                <div class="event-details">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>
                                                    <a href="">Lorem ipsum dolor sit amet.</a>
                                                </h4>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    <strong>Date:</strong><br>
                                                    <span>April 02, 2025</span>
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p>
                                                    <strong>Time:</strong><br>
                                                    <span>12:30 PM.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="searchPageModal" tabindex="-1" aria-labelledby="searchPageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="searchPageModalLabel">Select an FPO or State</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3 g-lg-4">
                            <div class="col-12">
                                <div class="">
                                    <h5 class="text-center">Popular States</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="swiper statesEventSwiper">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < count($states); $i++)
                                            <div class="swiper-slide">
                                                <a href="?state={{$states[$i]}}">
                                                    <div class="row g-3">
                                                        <div class="col-12 text-center">
                                                            <img src="https://placehold.co/64x64" alt="State Icon">
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <p>{{$states[$i]}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                @push('scripts')
                                    <script>
                                        new Swiper('.statesEventSwiper', {
                                            loop: true,
                                            spaceBetween: 10,
                                            slidesPerView: 6,
                                            pagination: {
                                                el: ".swiper-pagination",
                                            },
                                        });
                                    </script>
                                @endpush
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <p class="text-center">All States in India</p>
                                </div>
                                <div class="" style="height: 200px; overflow-y:scroll">
                                    <div class="row m-0">
                                        @for ($i = 0; $i < 200; $i++)
                                            <div class="col-xl-3 col-lg-4 col-12">
                                                <a href="?state=Maharashtra" class="nav-link"><small>Lorem ipsum dolor
                                                        sit.</small></a>
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
        <section class="default-spacing">
            <div class="container">
                <div class="row g-3 flex-row-reverse">
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-question icon icon-prepend"></i>
                                        Want to Get Featured?
                                    </h2>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, perspiciatis.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            @csrf
                                            <x-forms type="event-enquiry"></x-forms>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="text-content">
                                    <h2 class="title-icon">
                                        <i class="fa-solid fa-clock-rotate-left icon icon-prepend"></i>
                                        Past Events
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
                </div>
            </div>
        </section>
    </main>
@endsection


<form action="https://health.ayushakti.com/treatments/book_appointment" method="post" class="row g-3" id="popupForm" novalidate="novalidate">
    <div class="col-md-12 text-center">
        <div class="d-flex justify-content-end text-center">
<!-- <h1 class="modal-title fs-5" id="staticBackdropLabel">Welcome To Ayushakti</h1> -->
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
        <!-- <h5> <b>Your gateway to Heal  Naturally includes </b> </h5> -->
        <p class="text-black">Your gateway to Heal Chronic Health Problems Naturally includes</p>
        <p class="text-black">First Consultation - Video/Pulse Reading @ Rs. 300/-</p>
        <p class="text-black">Meal Wise Diet Plan + Home Remedies @ Rs. 1000/- </p>
        <p class="text-black">Second Follow up consultation @ Rs.200/-</p>
        <h4><b>Total = <strike>1500/-</strike></b></h4>
        <h3 style="color:blue"><b>Only at Rs 400/-</b></h3>

    </div>
    <div class="col-md-6">
        <label for="validationDefault01" class="form-label">First name*</label>
        <input type="text" placeholder="Enter name" class="form-control b" name="name" required="">

    </div>
    <div class="col-md-6">
        <label for="validationDefault03" class="form-label">Email*</label>
        <input type="email" placeholder="Enter email" class="form-control b" name="email" required="">
    </div>
    <div class="col-md-12">
        <label for="validationDefault04" class="form-label">Mobile Number*</label>
        <input type="number" placeholder="Enter contact no." class="form-control b" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="contact" required="">
    </div>
    <div class="col-md-12">

<div class="form-group country">
   <input type="hidden" name="country" id="country" value="india">
<!-- <select class="form-control b" id="country" name="country" required>
   <option value="">Select country</option>

   <option value="india">India</option>
</select> -->
</div>
</div>

<div class="col-md-12">
<div class="form-group clinic1" style="">
   <select class="form-control b" name="city" id="cities">
       <option value="">Select City</option>
       <option value="Mumbai">Mumbai</option>
       <option value="Navi Mumbai">Navi Mumbai</option>
       <option value="Delhi">Delhi</option>
       <option value="Nashik">Nashik</option>
       <option value="Thane">Thane</option>
       <option value="Aurangabad">Aurangabad</option>
       <option value="Ahmednagar">Ahmednagar</option>
       <option value="Sangli">Sangli</option>
       <option value="Pune">Pune</option>
       <option value="Gujarat">Surat(Gujarat)</option>
       <!-- <option value="online_consultation">Online Consultation</option> -->
   </select>
</div>
</div>

<div class="col-md-12" id="center7"></div>

    <div class="col-md-12">
        <div class="form-group mb-3">
            <input type="date" name="date" required="" min="2025-05-22" class="form-control b" id="date">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group time mb-3">
            <select class="form-control" name="time">
                <option value="">Select Time</option>
                <option value="11:00 am">11:00 AM</option>
                <option value="11:30 am">11:30 AM</option>
                <option value="12:00 pm">12:00 PM</option>
                <option value="12:30 pm">12:30 PM</option>
                <option value="01:00 pm">01:00 PM</option>
                <option value="01:30 pm">01:30 PM</option>
                <option value="02:00 pm">02:00 PM</option>
                <option value="02:30 pm">02:30 PM</option>
                <option value="03:00 pm">03:00 PM</option>
                <option value="03:30 pm">03:30 PM</option>
                <option value="04:00 pm">04:00 PM</option>
                <option value="04:30 pm">04:30 PM</option>
                <option value="05:00 pm">05:00 PM</option>
                <option value="05:30 pm">05:30 PM</option>
                <option value="06:00 pm">06:00 PM</option>
                <option value="06:30 pm">06:30 PM</option>
                <option value="07:00 pm">07:00 PM</option>
                <option value="07:30 pm">07:30 PM</option>
            </select>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <p class="mb_10 text-yellow" style="font-size: 11px;">
            <span class="text-danger">*</span> By clicking on button you are agree with T&amp;C
        </p>
    </div>
    <input type="hidden" name="source" value="Website">
    <input type="hidden" name="medium" value="Treatment Page">
    <input type="hidden" name="treatment" value="">
    <input type="hidden" name="url" value="https://health.ayushakti.com/">
    <input type="hidden" name="type" value="">
    <div class="col-12">
        <button class="btn" type="submit">Book Appointment</button>
    </div>
</form>