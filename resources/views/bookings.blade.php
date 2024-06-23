@extends('layouts.app')

@section('content')
    <div class="banner-area admission">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Exam & Online Class Bookings</h2>
                        <ul>
                            <li>
                                <a href="index-2.html"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">Bookings</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="home-contact-area pb-100">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div class="contact-img">
                        <img src="assets/images/contact.png" alt="contact" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-contact-content">
                        <h2>Book your spot, Get Organized Early</h2>
                        @session('success')
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endsession

                        <form action="{{ route('bookings.save') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your Name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="date" name="date" id="msg_subject" class="form-control" required
                                            data-error="Please Select a Date" placeholder="Date" />
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
                                    <input type="submit" class="default-btn page-btn box-btn" value="Submit Bookings">


                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
