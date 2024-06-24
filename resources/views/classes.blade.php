@extends('layouts.app')

@section('content')
    <div class="banner-area classes">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Classes</h2>
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">Classes</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="class-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img1.png" alt="ragular" />
                            <h2>Palative Care Classes</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Our dedicated team will take your online classes, this involves taking care of everything remotely from class discussion posts, essays, any other assignments.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more how you handle your online classes for palative care" class="border-btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img2.png" alt="ragular" />
                            <h2>Planetary Health for Nurses</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Our dedicated team will take your online classes, this involves taking care of everything remotely from class discussion posts, essays, any other assignments.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more how you handle your online classes for Planetary Health" class="border-btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img3.png" alt="ragular" />
                            <h2>Oncology Nursing</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Our dedicated team will take your online classes, this involves taking care of everything remotely from class discussion posts, essays, any other assignments.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more how you handle your online classes for Oncology" class="border-btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img10.png" alt="ragular" />
                            <h2>Nursing 301: Nursing Informatics</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Our dedicated team will take your online classes, this involves taking care of everything remotely from class discussion posts, essays, any other assignments.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more how you handle your online classes for Nursing Informatics" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img11.png" alt="ragular" />
                            <h2>Public Health Classes</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Our dedicated team will take your online classes, this involves taking care of everything remotely from class discussion posts, essays, any other assignments.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more how you handle your online classes for Public Healthcare" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img12.png" alt="ragular" />
                            <h2>Perioperative Fluid Therapy</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Our dedicated team will take your online classes, this involves taking care of everything remotely from class discussion posts, essays, any other assignments.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more how you handle your online classes for Periorative classes" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="classes.html"><i
                                    class="flaticon-left-arrow"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="classes.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="classes.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="classes.html">3</a></li>
                        <li class="page-item"><a class="page-link" href="classes.html"><i class="flaticon-next"></i></a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
