@extends('layouts.app')

@section('content')
    <div class="banner-area about">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About Us</h2>
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active"> About</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="single-about">
                        <div class="about-img">
                            <img src="assets/images/about-img.png" alt="about" />
                        </div>
                        <div class="about-contnet">
                            <h2>Edvi National Children School & Center</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                Risus commodo viverra maecenas accumsan lacus vel facilisis.typesetting. Remaining
                                essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="about-btn">
                            <a href="about.html" class="box-btn">Know More</a>
                            <a href="https://www.youtube.com/watch?v=_ysd-zHamjk" class="video-pop">
                                <span class="video"> <i class="fa fa-play"></i> </span> Quick View at Edvi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="about-content-right">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control about-search" placeholder="Search..." />
                            </div>
                            <button type="submit" class="search-btn"> <i class="flaticon-search"></i></button>
                        </form>
                        <p class="visit">Visit More</p>
                        <ul class="about-list">
                            <li>
                                <a href="single-news.html"> <i class="flaticon-next"></i>Classes</a>
                            </li>
                            <li>
                                <a href="single-news.html"> <i class="flaticon-next"></i>Admission</a>
                            </li>
                            <li>
                                <a href="single-news.html"> <i class="flaticon-next"></i>Special Courses</a>
                            </li>
                            <li>
                                <a href="single-news.html"> <i class="flaticon-next"></i>Events</a>
                            </li>
                            <li>
                                <a href="single-news.html"> <i class="flaticon-next"></i>News</a>
                            </li>
                            <li>
                                <a href="single-news.html"> <i class="flaticon-next"></i>Teachers</a>
                            </li>
                        </ul>
                        <div class="consultation-area">
                            <h2>Get Free Consultation</h2>
                            <form class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Full name" />
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Phone" />
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Message" class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="box-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


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
                            <p>
                                At MyNursingExams, we empower future nurses by providing comprehensive, interactive, and effective study resources. Our expert-curated content, personalized study plans, and 24/7 support ensure you succeed in your nursing exams with confidence.
                                Join us and become part of a community dedicated to excellence in nursing education. Together, we'll achieve your goals, one exam at a time.
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
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about all your service" class="box-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
