@extends('layouts.app')

@section('content')
    <section class="area-404">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 error-img">
                                <img src="{{asset('assets/images/404.svg')}}" alt="404">
                                <a href="{{route('welcome')}}" class="box-btn">Go to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
