@extends('layouts.Master')

@section('title', 'About')

@section('content')

<!-- breadcrumb-section -->
{{-- <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>About Us</h1>
                </div>
            </div>
        </div> --}}
    {{-- </div>
</div> --}}
<!-- end breadcrumb section -->

<!-- section -->
<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>About UniHub</h3>
                    <h6>Rising textbook prices undermine a university’s ability to educate its students. In the Jordan, textbooks have assumed a new role. Rather than acting as key learning tools, textbooks have become prohibitive barriers for students’ academic careers.</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- featured section -->
<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h1 class="pb-3 about-problem">The Problem</h1>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="content">
                                    <h3>Direct exchange</h3>
                                    <p> exists wherein there is no consumer control. Professors choose expensive.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Cheab Price</h3>
                                    <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="content">
                                    <h3>Find your need fast</h3>
                                    <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Make friends</h3>
                                    <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end featured section -->

<!-- Solution-section -->
<div class="testimonail-section mt-80 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h1>My Solution</h1>
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/money.jpg" alt="">
                        </div>

                        <div class="client-meta">
                            <h3>Price</h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/time.jpg" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Time</h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/Cut.jpg" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Cut the middle man</h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Solution section -->

@endsection
