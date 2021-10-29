<!DOCTYPE html>
<html lang="en">

<?php include './stylesheet.php'; ?>

<body id="body">
	<?php include './header.php'; ?>

	<div class="hero-slider">
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/dinare/slider-1.jpeg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/dinare/slider-2.jpeg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-left">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item th-fullpage hero-area" style="background-image: url(images/dinare/slider-3.jpeg);">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-right">
						<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="product-category section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title text-center">
						<h2>Our Products</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="category-box">
						<a href="./mask.php">
							<img src="images/dinare/product-1.png" alt="" />
							<div class="content">
								<h3>Body Mask</h3>
							</div>
						</a>
					</div>

				</div>
				<div class="col-md-6">
					<div class="category-box">
						<a href="./lotion.php">
							<img src="images/dinare/product-2.png" alt="" />
							<div class="content">
								<h3>Body Lotion</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="products section">
		<div class="container">
			<div class="row">
				<div class="title text-center">
					<h2>Trendy Products</h2>
				</div>
			</div>
			<div class="row product-list">



				<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">

							<img class="img-responsive" src="images/shop/products/product-1.png" alt="product-img" />
							<div class="preview-meta">
								<ul>
									<li>
										<span data-toggle="modal" data-target="#product-modal1">
											<i class="tf-ion-ios-search-strong"></i>
										</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="product-content">
							<h4><a href="product-single.html">Body Lotion</a></h4>
							<p class="price">Rp. 78.000</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<img class="img-responsive" src="images/shop/products/product-2.png" alt="product-img" />
							<div class="preview-meta">
								<ul>
									<li>
										<span data-toggle="modal" data-target="#product-modal2">
											<i class="tf-ion-ios-search-strong"></i>
										</span>
								</ul>
							</div>
						</div>
						<div class="product-content">
							<h4><a href="product-single.html">Body Mask</a></h4>
							<p class="price">Rp. 82.000</p>
						</div>
					</div>
				</div>


				<!-- Modal -->
				<div class="modal product-modal fade" id="product-modal1">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="tf-ion-close"></i>
					</button>
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-8 col-sm-6 col-xs-12">
										<div class="modal-image">
											<img class="img-responsive" src="images/dinare/product-lotion.jpeg" alt="product-img" />
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="product-short-details">
											<h2 class="product-title">Body Lotion</h2>
											<p class="product-price">Rp. 78.000</p>
											<p class="product-short-description">
												Dinare Body Lotion dengan kandungan 4 hi-grade active agents untuk memutihkan,
												mencerahkan, merawat, menutrisi, dan melindungi kulit apapun jenis dan skin-tone
												kamu kapanpun kamu butuhkan. Show your Glow!
											</p>
											<a href="./lotion.php" class="btn btn-transparent">View Product Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.modal -->
				<div class="modal product-modal fade" id="product-modal2">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="tf-ion-close"></i>
					</button>
					<div class="modal-dialog " role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-8 col-sm-6 col-xs-12">
										<div class="modal-image">
											<img class="img-responsive" src="images/dinare/product-mask.jpeg" alt="product-img" />
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="product-short-details">
											<h2 class="product-title">Body Mask</h2>
											<p class="product-price">Rp. 82.000</p>
											<p class="product-short-description">
												Dinare Body Mask dengan kandungan 4 hi-grade active agents untuk memutihkan,
												mencerahkan, membersihkan, dan memberikan perawatan lebih untuk kulit kamu,
												baik sesaat setelah mandi ataupun sebelum kamu istirahat di malam hari. Works best
												with Dinare Body Lotion!
											</p>
											<a href="./mask.php" class="btn btn-transparent">View Product Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.modal -->

			</div>

		</div>
	</section>


	<!--
Start Call To Action
==================================== -->



	<?php include './footer.php'; ?>


</body>

</html>