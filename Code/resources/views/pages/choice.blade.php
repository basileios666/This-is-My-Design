@extends('layouts.Master')

@section('title', 'Choice')

@section('content')
	<!-- Choice -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row product-lists">

				<div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/shop"><img src="assets/img/Materials.jpg" alt=""></a>
						</div>
                        <a href="/shop"><h4>Materials</h4></a>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/shop"><img src="assets/img/Goods.jpg" alt=""></a>
						</div>
						<a href="/shop"><h4>Goods</h4></a>
					</div>
				</div>

			</div>
        </div>
    </div>
	<!-- end Choice -->
@endsection
