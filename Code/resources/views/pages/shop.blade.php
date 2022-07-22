@extends('layouts.Master')

@section('title', 'Shop')

@section('content')

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			{{-- <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div> --}}

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product"><img src="assets/img/products/1.jpg" alt=""></a>
						</div>
						<h3>Book</h3>
						<p class="product-price">Price: 3$ </p>
                        <p class="product-price">seller name: Osama</p>
                        <p class="product-price">seller e-mail: osama@osa.com</p>

						<a href="/single-product" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product"><img src="assets/img/products/2.jpg" alt=""></a>
						</div>
						<h3>Book</h3>
						<p class="product-price">Price: 3$ </p>
                        <p class="product-price">seller name: Osama</p>
                        <p class="product-price">seller e-mail: osama@osa.com</p>

						<a href="/single-product" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product"><img src="assets/img/products/3.jpg" alt=""></a>
						</div>
						<h3>Book</h3>
						<p class="product-price">Price: 3$ </p>
                        <p class="product-price">seller name: Osama</p>
                        <p class="product-price">seller e-mail: osama@osa.com</p>
						<a href="/single-product" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product"><img src="assets/img/products/4.png" alt=""></a>
						</div>
						<h3>Book</h3>
						<p class="product-price">Price: 3$ </p>
                        <p class="product-price">seller name: Osama</p>
                        <p class="product-price">seller e-mail: osama@osa.com</p>
						<a href="/single-product" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product"><img src="assets/img/products/5.jpg" alt=""></a>
						</div>
						<h3>Book</h3>
						<p class="product-price">Price: 3$ </p>
                        <p class="product-price">seller name: Osama</p>
                        <p class="product-price">seller e-mail: osama@osa.com</p>
						<a href="/single-product" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/single-product"><img src="assets/img/products/6.jpg" alt=""></a>
						</div>
						<h3>Book</h3>
						<p class="product-price">Price: 3$ </p>
                        <p class="product-price">seller name: Osama</p>
                        <p class="product-price">seller e-mail: osama@osa.com</p>
						<a href="/single-product" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

@endsection
