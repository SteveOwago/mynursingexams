@extends('layouts.app')

@section('content')
    <div class="banner-area classes">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Exams & Tests</h2>
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">Exams</p>
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
                            <h2>Nursing Pre-Admission Exam (PAX)</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                The PAX is one of the most commonly used nursing school entrance exams.
                                It is designed for registered nurses (RN) and licensed practical nurses (LPN) who are pursuing a nursing certificate,
                                associate degree in nursing (ADN), or bachelor of science in nursing (BSN).
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about Nursing Pre-Admission Exam (PAX)" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img2.png" alt="ragular" />
                            <h2>Nursing Entrance Exam (NEX)</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                NEX is a nursing school admission exam designed for LPN and RN programs.
                                The exam is divided into three sections: verbal (58 questions), math (45 questions), and science (60 questions), with each section taking about an hour to complete.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about Nursing Entrance Exam (NEX)" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img3.png" alt="ragular" />
                            <h2>Kaplan Nursing School Admission Test</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                This test has four sections of 91 multiple-choice questions. It evaluates test-takers writing, reading, math, science, and critical thinking skills.
                                The Kaplan nursing school admission test takes about three hours to complete.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about Nursing Entrance Exam (NEX)" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img10.png" alt="ragular" />
                            <h2>Health Education Systems, Inc. Admissions Assessment (HESI A2)</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                HESI exam questions draw on high school-level knowledge, placing extra emphasis on science topics.
                                The HESI exam also includes sections on learning styles and personality.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about HESI A2" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img11.png" alt="ragular" />
                            <h2>PSB Practical Nursing Examination</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                Designed by the Psychological Services Bureau (PSB), this nursing entrance exam was developed for those pursuing a nursing career.
                                According to PSB, the Aptitude for Practical Nursing Examination addresses prerequisite knowledge for practical or vocational nursing careers.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about PSB test" class="border-btn">Know More</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-ragular-course">
                        <div class="course-img">
                            <img src="assets/images/courses/img12.png" alt="ragular" />
                            <h2>PSB Nursing School Aptitude Examination</h2>
                        </div>
                        <div class="course-content">
                            <p>
                                The academic aptitude section features 30 questions in three parts: verbal, arithmetic, and nonverbal. Mometrix describes the nonverbal section as a type of IQ test requiring test-takers to find the relationships and differences between objects.
                            </p>
                            <a href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I wanna know more about PSB Registered Nursing School Aptitude Examination" class="border-btn">Know More</a>

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
