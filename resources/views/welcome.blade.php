@extends('layouts.app')

@section('content')
    <section class="slider-area">
        <div class="home-slider owl-carousel owl-theme">
            <div class="single-slider single-slider-bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 text-center">
                                    <div class="slider-tittle one">
                                        <h1>
                                            Pass on Your <span>Nursing Exam & Tests</span>
                                        </h1>
                                        <p>
                                            We provide exceptional and top-notch examination services through our highly undetectable remote softwares.
                                            A proven success record over the last 7 year has enabled to transform nursing students to achieve their dreams.
                                            Want to know more reach out using the button below
                                        </p>
                                    </div>
                                    <div class="slider-btn bnt1 text-center">
                                        <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I need some help with my online exams" target="_blank" class="box-btn">Contact Us</a>
                                        <a href="{{ route('exams')}}" class="border-btn">View Exams</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider single-slider-bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 text-center">
                                    <div class="slider-tittle two">
                                        <h1>
                                            Pass on your Online Classes <span>on Canvas & Cengage</span>
                                        </h1>
                                        <p>
                                            You want to win against time and achieve success in your online classes? Our dedicated team of experts ensures success in your online classes
                                            We will handle your online course and gurantee success
                                        </p>
                                    </div>
                                    <div class="slider-btn bnt2">
                                        <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I need some help with my online class" class="box-btn">Contact Us</a>
                                        <a href="{{route('classes')}}" class="border-btn">View Classes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <div class="service-content">
                            <h2>Operation Hours</h2>
                            <p>24/7 . All Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="service-content">
                            <h2>Operational Mode</h2>
                            <p>Remote Software Access</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single-service text-center sst-10">
                        <div class="service-icon">
                            <i class="flaticon-telephone"></i>
                        </div>
                        <div class="service-content">
                            <h2>Phone</h2>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I need some help with my online exams" target="_blank">+1 (352) 399 3575</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shape-ellips">
        <img src="assets/images/shape.png" alt="shape" />
    </div>

    <section class="home-ragular-course pb-100">
        <div class="container">
            <div class="section-tittle text-center">
                <h2>Our Common Exams & Tests</h2>
                <p>
                    We handle successfully a wide series of exams and tests remotely.
                    Some of these exams are HESI, TEAS,NLN PAX and ACT & SAT Exams,MCAT, MCAT - Orthopedic, GRE and Dental Admission Test (DAT)
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img1.png" alt="ragular" />
                            <h2>TEAS Exams</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                As a prospective medical or nursing student, you're embarking on a journey that demands dedication,
                                compassion, and a strong foundation in essential academic skills. The Test of Essential Academic Skills (TEAS) is a pivotal step in this journey.

                            </p>
                            <a href="#single-class.html" class="border-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sst-10">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img3.png" alt="ragular" />
                            <h2>NCLEX exam</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                The NCLEX uses computerized adaptive testing (CAT), which tailors the difficulty of questions to each candidate's ability level.
                                The NCLEX is a critical for nurses, ensuring they meet the standards necessary to provide competent care to patients in a healthcare setting.
                            </p>
                            <a href="#single-class.html" class="border-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img2.png" alt="ragular" />
                            <h2>HESI Exams</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                The Health Education Systems, Inc. (HESI) exam assesses a range of academic skills and knowledge areas crucial for success in nursing programs.
                                HESI exam is a pivotal step in this becoming a professional and certified Health practitioner.
                            </p>
                            <a href="#single-class.html" class="border-btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="choose-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div class="home-choose-img">
                        <img src="assets/images/choose1.png" alt="choose" style="border-radius:10%;" />
                    </div>
                </div>
                <div class="col-lg-6 home-choose">
                    <div class="home-choose-content">
                        <div class="section-tittle">
                            <h2>Why Choose MyNursingExams?</h2>
                            <p>
                                Becomming a nurse is not a walk in the park, We provide support along the way to ensure success in your career.
                                Our dedicated team provide a wholistic approach in ensuring one is fully equiped and passes their classes and exams.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 col-md-5">
                                <ul class="choose-list-left">
                                    <li><i class="flaticon-check-mark"></i>Top Rated Experts</li>
                                    <li> <i class="flaticon-check-mark"></i>24/7 Support</li>
                                    <li><i class="flaticon-check-mark"></i>Helpful & Kindnesss</li>
                                    <li><i class="flaticon-check-mark"></i>Proven Success</li>
                                    <li><i class="flaticon-check-mark"></i>Access to exclusive content</li>
                                </ul>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-7">
                                <div class="choose-list-home">
                                    <ul>
                                        <li> <i class="flaticon-check-mark"></i>Guaranteed Results</li>
                                        <li> <i class="flaticon-check-mark"></i>Access, Accountablility and Transparency</li>
                                        <li> <i class="flaticon-check-mark"></i>Visibility as we take and handle classes
                                        </li>
                                        <li><i class="flaticon-check-mark"></i>In person interaction with our experts</li>
                                        <li><i class="flaticon-check-mark"></i>Progress Checkup at each step</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="{{ route('about')}}" class="box-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-admission">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-addmission">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="admission-circle">
                                    <h2>Bookings <span> on Going</span></h2>
                                    <div class="admission-shape1">
                                        <img src="assets/images/admission/shape1.png" alt="shape" />
                                    </div>
                                    <div class="admission-shape2">
                                        <img src="assets/images/admission/shape2.png" alt="shape" />
                                    </div>
                                    <div class="admission-shape3">
                                        <img src="assets/images/admission/shape3.png" alt="shape" />
                                    </div>
                                    <div class="admission-shape4">
                                        <img src="assets/images/admission/shape4.png" alt="shape" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="admission-content">
                                    <h2>Book An Online Class or Exam Schedule</h2>
                                    <p>For your planning, book a slot or schedule a time convinient for you based on your schedule.</p>
                                    <p>Bookings are ongoing. This provides an avenue to get in touch with you and talk more on the planning and ensuring all teams are well prepared and set up for action.</p>
                                    {{-- <ul class="admission-list">
                                        <li>
                                            <p id="days">21</p>
                                            <span>Days</span>
                                        </li>
                                        <li>
                                            <p id="hours">15</p>
                                            <span>Hours</span>
                                        </li>
                                        <li>
                                            <p id="minutes">10</p>
                                            <span>Minute</span>
                                        </li>
                                        <li>
                                            <p id="seconds">50</p>
                                            <span>Seconds</span>
                                        </li>
                                    </ul> --}}
                                    <a href="{{ route('bookings')}}" class="box-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <span class="loon">
                            <img src="assets/images/admission/shape5.png" alt="shape" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-special-course">
        <div class="container-fluid">
            <div class="section-tittle text-center">
                <h2>Our Sample Exams & Classes</h2>
                <p>
                    Classes and Exams is one of the major methods used to guage one's kowledge in an area of study or profession.
                    Our dedicated experts are here to help out.
                </p>
            </div>
            <div class="home-course-slider owl-carousel owl-theme">
                <div class="single-home-special-course">
                    <div class="course-img">
                        <img src="assets/images/courses/img4.png" alt="course" />
                        <div class="course-content">
                            <h2>Teas Exams</h2>
                            <p>
                                TEAS exam evaluates essential skills in four key areas: Reading, Mathematics, Science, and English Language.
                            </p>
                            <a href="#single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="single-home-special-course">
                    <div class="course-img">
                        <img src="assets/images/courses/img5.png" alt="course" />
                        <div class="course-content">
                            <h2>Foreinsic Nursing Classes</h2>
                            <p>
                                Forensic nursing is a specialized field where nursing and the legal system intersect.
                            </p>
                            <a href="#single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="single-home-special-course">
                    <div class="course-img">
                        <img src="assets/images/courses/img6.png" alt="course" />
                        <div class="course-content">
                            <h2>Palliative Care</h2>
                            <p>
                                A specialized medical care approach aimed at improving the quality of life for patients with serious, life-limiting illnesses.
                            </p>
                            <a href="#single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="single-home-special-course">
                    <div class="course-img">
                        <img src="assets/images/courses/img7.png" alt="course" />
                        <div class="course-content">
                            <h2>HESI Exams</h2>
                            <p>
                                The Health Education Systems, Inc. (HESI) exam assesses a range of academic skills and knowledge areas crucial for success in nursing and healthcare programs.
                            </p>
                            <a href="#single-class.html" class="box-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="course-slider-area">
        <div class="container">
            <div class="course-slider owl-carousel owl-theme">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="course-slider-img">
                            <img src="assets/images/courses/slider-img.png" alt="course" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="course-slider-content">
                            <h2>Cultural Program 01 April 2024</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus commodo viverra maecenas accumsan lacus vel facilisis suspendisse ultrices
                                gravida.
                            </p>
                            <div class="course-slider-btn">
                                <a href="contact.html" class="box-btn">Registation Now</a>
                                <a href="events.html" class="border-btn">See More Events</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="course-slider-img">
                            <img src="assets/images/courses/slider-img2.png" alt="course" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="course-slider-content">
                            <h2>Annual Program 01 April 2024</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus commodo viverra maecenas accumsan lacus vel facilisis suspendisse ultrices
                                gravida.
                            </p>
                            <div class="course-slider-btn">
                                <a href="contact.html" class="box-btn">Registation Now</a>
                                <a href="events.html" class="border-btn">See More Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <span class="left-shape">
        <img src="assets/images/left-shape.png" alt="shape" />
    </span>

    <section class="home-news pb-100 pt-100">
        <div class="container">
            <div class="section-tittle text-center">
                <h2>Our Daily News Update</h2>
                <p>
                    A college course is a class offered by a college or university. These courses are usually part of a
                    program leading.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-home-news">
                        <a href="single-news.html">
                            <img src="assets/images/news/img1.png" alt="news" />
                        </a>
                        <div class="single-home-content">
                            <h2>Soccer completed successfully</h2>
                            <p class="calender">
                                <i class="flaticon-calendar"></i> 01 April, 2024
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page.
                            </p>
                            <a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-home-news">
                        <a href="single-news.html">
                            <img src="assets/images/news/img2.png" alt="news" />
                        </a>
                        <div class="single-home-content">
                            <h2>Top Resuslt Holder 2024</h2>
                            <p class="calender">
                                <i class="flaticon-calendar"></i> 01 April, 2024
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page.
                            </p>
                            <a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sst-10">
                    <div class="single-home-news">
                        <a href="single-news.html">
                            <img src="assets/images/news/img3.png" alt="news" />
                        </a>
                        <div class="single-home-content">
                            <h2>Leaning About Virus COVID-19</h2>
                            <p class="calender">
                                <i class="flaticon-calendar"></i> 01 April, 2024
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page.
                            </p>
                            <a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-teachers-area">
        <div class="container">
            <div class="section-tittle text-center">
                <h2>Honorable Teachers</h2>
                <p>
                    A college course is a class offered by a college or university. These courses are usually part of a
                    program leading.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-home-teacher">
                        <div class="teacher-img">
                            <a href="single-teacher.html">
                                <img src="assets/images/teachers/img9.png" alt="teacher" /></a>
                        </div>
                        <div class="teachers-content">
                            <h2>John Doe</h2>
                            <p>Assistant Teacher</p>
                        </div>
                        <div class="teacher-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/login/" target="_blank"><i
                                            class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/i/flow/login" target="_blank"><i
                                            class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="flaticon-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="about.html"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-home-teacher">
                        <div class="teacher-img">
                            <a href="single-teacher.html">
                                <img src="assets/images/teachers/img8.png" alt="teacher" /></a>
                        </div>
                        <div class="teachers-content">
                            <h2>Evana Doe</h2>
                            <p>Teacher</p>
                        </div>
                        <div class="teacher-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/login/" target="_blank"><i
                                            class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/i/flow/login" target="_blank"><i
                                            class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="flaticon-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="about.html"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-home-teacher">
                        <div class="teacher-img">
                            <a href="single-teacher.html">
                                <img src="assets/images/teachers/img3.png" alt="teacher" /></a>
                        </div>
                        <div class="teachers-content">
                            <h2>Smith Doe</h2>
                            <p>English Teacher</p>
                        </div>
                        <div class="teacher-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/login/" target="_blank"><i
                                            class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/i/flow/login" target="_blank"><i
                                            class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="flaticon-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="about.html"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-home-teacher">
                        <div class="teacher-img">
                            <a href="single-teacher.html">
                                <img src="assets/images/teachers/img12.png" alt="teacher" /></a>
                        </div>
                        <div class="teachers-content">
                            <h2>Marida Doe</h2>
                            <p>Cultuaral Advisor</p>
                        </div>
                        <div class="teacher-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/login/" target="_blank"><i
                                            class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/i/flow/login" target="_blank"><i
                                            class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="flaticon-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="about.html"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-contact-area pb-100 pt-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div class="contact-img">
                        <img src="assets/images/contact.png" alt="contact" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-contact-content">
                        <h2>What Do You Want to Know?</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            required data-error="Please enter your name" placeholder="Your Name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            required data-error="Please enter your email" placeholder="Your Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject" placeholder="Your Subject" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                            data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn box-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
