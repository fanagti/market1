<x-layout>
	<!--? New Arrival Start -->
	<div class="new-arrival">
	<div class="container">
		<!-- Section tittle -->
		<div class="row justify-content-center">
			<div class="col-xl-7 col-lg-8 col-md-10">
				<div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
					<h2>new<br>arrival</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($products as $product)
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
				<div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="popular-img">
						<img src="/assets/img/gallery/arrival1.png" alt="">
						<div class="favorit-items">
							<!-- <span class="flaticon-heart"></span> -->
							<img src="/assets/img/gallery/favorit-card.png" alt="">
						</div>
					</div>
					<div class="popular-caption">
						<h3><a href="product_details.html">{{ $product->name }}</a></h3>
						<div class="rating mb-10">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<span>Rp.{{ number_format($product->price) }}</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	<!-- Button -->
	<div class="row justify-content-center">
	<div class="room-btn">
		<a href="catagori.html" class="border-btn">Browse More</a>
	</div>
	</div>
	</div>
	</div>
	<!--? New Arrival End -->


	<!--? Services Area Start -->
	<div class="categories-area section-padding40 gray-bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
					<div class="cat-icon">
						<img src="/assets/img/icon/services1.svg" alt="">
					</div>
					<div class="cat-cap">
						<h5>Fast & Free Delivery</h5>
						<p>Free delivery on all orders</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
					<div class="cat-icon">
						<img src="/assets/img/icon/services2.svg" alt="">
					</div>
					<div class="cat-cap">
						<h5>Fast & Free Delivery</h5>
						<p>Free delivery on all orders</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
					<div class="cat-icon">
						<img src="/assets/img/icon/services3.svg" alt="">
					</div>
					<div class="cat-cap">
						<h5>Fast & Free Delivery</h5>
						<p>Free delivery on all orders</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<div class="cat-icon">
						<img src="/assets/img/icon/services4.svg" alt="">
					</div>
					<div class="cat-cap">
						<h5>Fast & Free Delivery</h5>
						<p>Free delivery on all orders</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--? Services Area End -->

</x-layout>