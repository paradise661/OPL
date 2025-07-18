 @extends('layouts.frontend.master')
 @section('content')
     <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
         <div class="container">
             <div class="row justify-content-between align-items-center">
                 <div class="col-auto">
                     <div class="breadcumb-content">
                         <h1 class="breadcumb-title">Contact</h1>
                         <div class="breadcumb-menu-wrap">
                             <ul class="breadcumb-menu">
                                 <li><a href="/">Home</a></li>
                                 <li>Contact</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- breadcumb End -->
     <!-- Contact Area -->
     <section class="space" style="padding: 60px 0 200px 0;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 mx-auto">
                     <div class="title-area text-center">
                         <div class="sec-icon">
                             <img src="{{ asset('frontend/assets/img/icons/iconn.png') }}" alt="icon">
                         </div>
                         <h2 class="sec-title">We Are Here For You!</h2>
                         <p>If your query is relating to finding our more information about Our products then please
                             feel free to visit the following resources:
                         </p>
                     </div>
                 </div>
             </div>
             <div class="contact-wrapper">
                 <div class="row gx-0">
                     <div class="col-lg-4 contact-box" data-bg-src="assets/img/pattern/pattern-4-1.png">
                         <h3 class="contact-box__title">Head Office</h3>
                         <div class="contact-box__item">
                             <div class="contact-box__icon"><i class="far fa-location"></i></div>
                             <div class="media-body">
                                 <p class="contact-box__info">
                                     New Town Western King Street,
                                     5th Avenue, New York
                                 </p>
                             </div>
                         </div>
                         <div class="contact-box__item">
                             <div class="contact-box__icon"><i class="far fa-phone-alt"></i></div>
                             <div class="media-body">
                                 <h4 class="contact-box__label">Phone No:</h4>
                                 <p class="contact-box__info">
                                     <a href="{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                                 </p>
                             </div>
                         </div>
                         <div class="contact-box__item">
                             <div class="contact-box__icon"><i class="far fa-envelope"></i></div>
                             <div class="media-body">
                                 <h4 class="contact-box__label">Email Address:</h4>
                                 <p class="contact-box__info">
                                     <a
                                         href="mailto:{{ $setting['site_email'] ?? '' }}">{{ $setting['site_email'] ?? '' }}</a>
                                 </p>
                             </div>
                         </div>
                         {{-- <div class="contact-box__item">
                             <div class="contact-box__icon"><i class="far fa-clock"></i></div>
                             <div class="media-body">
                                 <p class="contact-box__info">
                                     <span>Mon-Fri: 10am - 3pm</span>
                                     <span>Sat-Sun: Closed</span>
                                 </p>
                             </div>
                         </div> --}}
                         <div class="social-links pt-10">
                             <span class="links-title">Social Networking:</span>
                             <ul>
                                 <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-7 form-style2">
                         <form class="ajax-contact" id="contact-form" action="{{ route('inquiry') }}" method="POST">
                             @csrf
                             <h3 class="contact-box__title">Get in touch with us</h3>
                             <p class="contact-box__text">For all enquires, please contact us and one of our delightful team
                                 will be be
                                 happy to help.</p>
                             <div class="row gx-20">
                                 <div class="col-md-6 form-group">
                                     <input class="form-control" id="name" type="text" name="name"
                                         placeholder="Your Name">
                                     <span class="text-danger">
                                         <span id="name-error"></span>
                                     </span>
                                 </div>
                                 <div class="col-md-6 form-group">
                                     <input class="form-control" id="email" type="email" name="email"
                                         placeholder="Email Address">
                                     <span class="text-danger">
                                         <span id="email-error"></span>
                                     </span>
                                 </div>
                                 <div class="col-md-12 form-group">
                                     <input class="form-control" id="tel" type="tel" name="phone"
                                         placeholder="Phone No">
                                     <span class="text-danger">
                                         <span id="phone-error"></span>
                                     </span>
                                 </div>
                                 <div class="col-12 form-group">
                                     <textarea class="form-control" id="message" name="message" placeholder="Type Your Message"></textarea>
                                     <span class="text-danger">
                                         <span id="message-error"></span>
                                     </span>
                                 </div>
                                 <div class="col-12">
                                     <button class="vs-btn style1" id="contact_submit" type="submit">Submit Message<i
                                             class="far fa-arrow-right"></i></button>
                                 </div>
                             </div>
                         </form>
                         <p class="form-messages mb-0 mt-3"></p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection
