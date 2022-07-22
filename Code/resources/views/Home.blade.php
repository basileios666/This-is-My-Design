@extends('layouts.Master')

@section('title', 'Home')

@section('content')
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <h1>UniHub</h1>
                            <h3>We cut out the middleman and let you sell and buy all your textbooks directly to other
                                students.</h3>
                            <div class="hero-btns">
                                <a href="#caregories" class="boxed-btn">Start shopping</a>
                                <a href="#goals" class="bordered-btn">About UniHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- Universites (Categories) section -->
    <div class="product-section mt-150 mb-150" id="caregories">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h1>Universities</h1>
                        <h2>Chose your university</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/choice"><img src="assets/img/JU.png" alt="Jordan university logo"></a>
                        </div>
                        <br>
                        <a href="/choice">
                            <h4>Jordan university</h4>
                        </a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/choice"><img src="assets/img/techno.png" alt="JUST university logo"></a>
                        </div>
                        <br>
                        <a href="/choice">
                            <h4>JUST university</h4>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/choice"><img src="assets/img/yarmouk.png" alt="Yarmouk university logo"></a>
                        </div>
                        <br>
                        <a href="/choice">
                            <h4>Yarmouk university</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Universites (Categories) section -->

    <!-- banner -->
    <section class="shop-banner">
        <div class="container">
            <h3 style="font-size: 100px">Sign up now for free ...</h3>
            <br>
            <a href="/" class="cart-btn btn-lg">Sign up</a>
        </div>
    </section>
    <!-- end banner -->

    <!-- My goals -->
    <div class="latest-news pt-150 pb-150" id="goals">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h1>My goals</h1>
                    </div>
                </div>
            </div>
            <br> <br> <br> <br>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="/About">
                            <div class="latest-news-bg news-bg-1"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="/About">Sell Textbooks</a></h3>

                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2022</span>
                            </p>

                            <p class="excerpt">There’s no point keeping those old textbooks around to gather dust. Sell your
                                textbooks to students who need them and make some extra cash to spend on the finer things in
                                life. Oh, the possibilities…</p>
                            <a href="/About" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="/About">
                            <div class="latest-news-bg news-bg-2"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="/About">Cheap College Textbooks</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2022</span>
                            </p>
                            <p class="excerpt">There’s no point keeping those old textbooks around to gather dust. Sell your
                                textbooks to students who need them and make some extra cash to spend on the finer things in
                                life. Oh, the possibilities…</p>
                            <a href="/About" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-latest-news">
                        <a href="/About">
                            <div class="latest-news-bg news-bg-3"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="/About">Directly at your College</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2022</span>
                            </p>
                            <p class="excerpt">There’s no point keeping those old textbooks around to gather dust. Sell your
                                textbooks to students who need them and make some extra cash to spend on the finer things in
                                life. Oh, the possibilities…</p>
                            <a href="/About" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end My goals -->
@endsection
