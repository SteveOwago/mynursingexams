<div class="navbar-area">
    <div class="mobile-nav">
        <a href="{{route('welcome')}}" class="logo">
            <img src="{{asset('assets/images/logo3.png')}}" class="main-logo" alt="logo" />
            <img src="{{asset('assets/images/logo4.png')}}" class="white-logo" alt="logo" />
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    <img src="{{asset('assets/images/logo3.png')}}" class="main-logo" alt="logo" />
                    <img src="{{asset('assets/images/logo4.png')}}" class="white-logo" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a href="{{route('welcome')}}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#{{route('about')}}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#{{route('classes')}}" class="nav-link">Classes</a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="classes.html" class="nav-link">Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="special-class.html" class="nav-link">Special Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="single-class.html" class="nav-link">Classes Details</a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a href="#{{route('exams')}}" class="nav-link">Exams</a>
                        </li>
                        <li class="nav-item">
                            <a href="#{{route('contact')}}" class="nav-link">Contact </a>
                        </li>
                        <li class="nav-item">
                            <a href="#{{route('faq')}}" class="nav-link">FAQs</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
