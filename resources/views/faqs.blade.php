@extends('layouts.app')

@section('content')
    <div class="banner-area faq">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>FAQ</h2>
                        <ul>
                            <li>
                                <a href="{{route('welcome')}}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">FAQ</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 faq-content">
                    <div class="faq-accordion">
                        <div class="section-tittle text-center">
                            <h2>Frequently Ask Questions</h2>
                        </div>
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> What Online Exams do you offer?
                                </a>
                                <p class="accordion-content show">
                                    Our team of experts help our clients with different tests. These tests range from entrance exams to detailed course tests from time to time. Reach us about any of your tests using the whatsapp button below.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i>How do you do your exams sessions?
                                </a>
                                <p class="accordion-content">
                                    At MyNursingExams we ensure you are in the loop of all the ongoing processes.
                                    We use the highly undetecteble software system to enhance privacy to our clients.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> What is our success rate?
                                </a>
                                <p class="accordion-content">
                                    We have a proven track record of producing quality and helping our students pass thier tests. We have helped over 1000 students worldwide.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> How can I book on your services?
                                </a>
                                <p class="accordion-content">
                                    Bookings to our services is done on our <a href="{{route('bookings')}}" target="_blank" rel="noopener noreferrer">bookings page</a> accessible from the home page
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> What happens after booking a class or exams?
                                </a>
                                <p class="accordion-content">
                                    One of our team members will reach out to help plan and agree on the timings and other details.
                                </p>
                            </li>
                            {{-- <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> How do I accept the offer of admission?
                                </a>
                                <p class="accordion-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
