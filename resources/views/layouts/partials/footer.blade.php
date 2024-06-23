<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="footer-left">
                    <a href="{{ route('welcome')}}" class="logo"><img src="assets/images/logo3.png"
                            alt="logo" /></a>
                    <p>At MyNursingExams, we empower future nurses by providing comprehensive, interactive, and effective exam solutions. Our expert-team understands the examination dynamics in the field to ensure you succeed in your nursing exams with a guranteed success in your exam.
                        Contact us and achieve your goal to achieve excellence in nursing. Together, we'll achieve your goals, one exam at a time.
                    </p>
                    <ul class="footer-social">
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
                            <a href="https://www.google.com/" target="_blank"><i
                                    class="flaticon-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="footer-content fml-25">
                    <h2>School</h2>
                    <ul>
                        <li>
                            <a href="privecy.html"><i class="flaticon-next"></i> Support</a>
                        </li>
                        <li>
                            <a href="classes.html"><i class="flaticon-next"></i> Career</a>
                        </li>
                        <li>
                            <a href="teachers.html"><i class="flaticon-next"></i> Teachers</a>
                        </li>
                        <li>
                            <a href="teachers.html"><i class="flaticon-next"></i> Staffs</a>
                        </li>
                        <li>
                            <a href="contact.html"><i class="flaticon-next"></i> Contact</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-3 col-md-6">
                <div class="footer-content fml-15">
                    <h2>Quick Links</h2>
                    <ul>
                        <li>
                            <a href="{{route('welcome')}}"><i class="flaticon-next"></i> Home</a>
                        </li>
                        <li>
                            <a href="{{route('classes')}}"><i class="flaticon-next"></i>Our Classes</a>
                        </li>
                        <li>
                            <a href="{{route('exams')}}"><i class="flaticon-next"></i> Exams</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}"><i class="flaticon-next"></i> Why Us?</a>
                        </li>
                        <li>
                            <a href="{{route('faq')}}"><i class="flaticon-next"></i> FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-content fml-15 fml-20">
                    <h2>Find Us</h2>
                    <ul>
                        <li>
                            <a href="tel:+1(352)3993575"><i class="flaticon-next"></i> +1 (352) 399 3575</a>
                        </li>
                        <li>
                            <a href="tel:+1(352)3993575"><i class="flaticon-next"></i>+1 (352) 399 3575</a>
                        </li>
                        <li>
                            <a
                                href="mailto:info@mynursingexams.com"><i
                                    class="flaticon-next"></i> <span class="__cf_email__">[email&#160;protected]</span></a>
                        </li>
                        <li>
                            <a
                                href="mailto:info@mynursingexams.com"><i
                                    class="flaticon-next"></i> <span class="__cf_email__">[email&#160;protected]</span></a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-next"></i> 28/A Street, New York, USA
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-area">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="copy">
                    <p>© <span>MyNursingExams</span> A success-oriented company <a href="{{route('welcome')}}"
                            target="_blank">MyNursingExams</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<a href="#" class="scroll-top wow animate__animated animate__bounceInDown">
    <i class="fas fa-angle-double-up"></i>
</a>

{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

<style>
    #whatsAppLink {
        position: fixed;
        z-index: 9999;
        right: 1.3em; /* Changed from left to right */
        top: 91%;
        margin-top: -25px;
        cursor: pointer;
        min-width: 50px;
        max-width: 240px;
        color: #fff;
        text-align: center;
        padding: 12px 21px;
        margin: 0 auto 0 auto;
        background: #20B038;
        -webkit-transition: All 0.5s ease;
        -moz-transition: All 0.5s ease;
        -o-transition: All 0.5s ease;
        -ms-transition: All 0.5s ease;
        transition: All 0.5s ease;
        border-radius: 50px;
    }
    @media(max-width: 768px){
        .visible-xs{
            display: block;
        }
        .visible-lg{
            display: none;
        }
    }
    @media(min-width: 768px){
        .visible-xs{
            display: none;
        }
        .visible-lg{
            display: inline-block;
        }
    }
    strong{
        color: #13425f !important;
    }
</style>

<a class="visible-lg" id="whatsAppLink" href="https://web.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I need some help with my online exams"  target="_blank">
    <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; WhatsApp Us
</a>

<a class="visible-xs" id="whatsAppLink" href="https://api.whatsapp.com/send?phone={{env('WHATSAPP_NUMBER')}}&amp;text=Hello, I need some help with my online exams"  target="_blank">
    <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; WhatsApp Us
</a>
