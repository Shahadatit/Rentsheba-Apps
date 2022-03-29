<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Bizdire - Business Directory and classifieds premium html5 CSS template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords"
		content="business directory website,online business directory website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,business directory,business directory template,business listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local business directory,local business listing,online business directory,online directory,premium,premium bootstrap templates,small business directory,classified,Premium business directory Templates,Directory & Listing HTML Template,business listing websites">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Title -->
	@yield('title')

	<!-- Bootstrap Css -->
	<link id="style" href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Dashboard Css -->
	<link href="/assets/css/style.css" rel="stylesheet" />

	<!-- Font-awesome  Css -->
	<link href="/assets/css/icons.css" rel="stylesheet" />
	<link href="/assets/css/custom.css" rel="stylesheet" />

</head>

<body>


	<!--Loader-->
	<div id="global-loader">
		<img src="{{asset('frontend/img/loader.png')}}" style="width:60px" class="loader-img floating" alt="">
	</div>

	@include('frontend.inc.topmenu')
	@yield('content')

	<!--Footer Section-->
	<section>
		<footer class="bg-dark-purple text-white">
			<div class="footer-main border-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-12">
							<h6>Categories</h6>
							<ul class="list-unstyled mb-0">
								<li>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">RealEstate</a>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">Spa</a>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">Education</a>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">Mediation</a>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">Restaurent</a>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">Backery</a>
									<a href="javascript:void(0)" class="btn footer-btn-outline btn-sm btn-pill mb-1">Automobiles</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12">
							<h6>Popular Listings</h6>
							<ul class="list-unstyled mb-0">
								<li><a href="javascript:void(0)"><i class="fa fa-angle-double-right me-2 text-secondary"></i> Educational
										college</a></li>
								<li><a href="javascript:void(0)"><i class="fa fa-angle-double-right me-2 text-secondary"></i> Free Lancer
										for Web Developer</a></li>
								<li><a href="javascript:void(0)"><i class="fa fa-angle-double-right me-2 text-secondary"></i> 2BHK Flat
										In Hyderabad</a></li>
								<li><a href="javascript:void(0)"><i class="fa fa-angle-double-right me-2 text-secondary"></i> Best
										Restaurants in Hyderabad</a></li>
							</ul>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12">
							<h6 class="mt-6 mt-xl-0">Contact</h6>
							<ul class="list-unstyled mb-0">
								<li>
									<a href="javascript:void(0)"><i class="fa fa-home me-3 text-secondary"></i> New York, NY 10012,
										US-52014</a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="fa fa-envelope me-3 fs-12 text-secondary"></i>
										info12323@example.com</a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="fa fa-phone me-3 text-secondary"></i> + 01 234 567 88, + 01
										234 567 88</a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="fa fa-print me-3 text-secondary"></i> + 01 234 567 89, + 01
										234 567 89</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12">
							<h6 class="mb-2 mt-6 mt-xl-0">Subscribe</h6>
							<div class="input-group">
								<input type="text" class="form-control br-ts-3  br-bs-3" placeholder="Email">
								<div class="input-group-text p-0 border-0">
									<button type="button" class="btn btn-secondary br-te-3 br-be-3 br-ts-0 br-bs-0 px-5">
										Subscribe
									</button>
								</div>
							</div>
							<h6 class="mb-2 mt-5">Payments</h6>
							<ul class="payments mb-0">
								<li>
									<a href="javascript:void(0)" class="payments-icon"><i class="fa fa-cc-amex"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:void(0)" class="payments-icon"><i class="fa fa-cc-visa"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:void(0)" class="payments-icon"><i class="fa fa-credit-card-alt"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:void(0)" class="payments-icon"><i class="fa fa-cc-mastercard"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:void(0)" class="payments-icon"><i class="fa fa-cc-paypal"
											aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-dark-purple text-white p-0 border-bottom">
				<div class="container">
					<div class="p-2 text-center footer-links">
						<a href="javascript:void(0)" class="btn btn-link">How It Works</a>
						<a href="javascript:void(0)" class="btn btn-link">About Us</a>
						<a href="javascript:void(0)" class="btn btn-link">Pricing</a>
						<a href="javascript:void(0)" class="btn btn-link">Listing Categories</a>
						<a href="javascript:void(0)" class="btn btn-link">Privacy Policy</a>
						<a href="javascript:void(0)" class="btn btn-link">Terms Of Conditions</a>
						<a href="javascript:void(0)" class="btn btn-link">Blog</a>
						<a href="javascript:void(0)" class="btn btn-link">Contact Us</a>
						<a href="javascript:void(0)" class="btn btn-link">Premium Ad</a>
					</div>
				</div>
			</div>
			<div class="bg-dark-purple text-white-50 p-3">
				<div class="container">
					<div class="row d-flex">
						<div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center ">
							Copyright © 2022<a href="javascript:void(0)" class="fs-14 text-secondary mx-2">Bizdire</a>. Designed by <a
								href="javascript:void(0)" class="fs-14 text-secondary">Spruko</a> All rights reserved.
						</div>
						<div class="col-lg-12 col-sm-12 text-center mb-2 mt-2">
							<ul class="social-icons mb-0">
								<li>
									<a class="social-icon" href="javascript:void0"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a class="social-icon" href="javascript:void0"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a class="social-icon" href="javascript:void0"><i class="fa fa-rss"></i></a>
								</li>
								<li>
									<a class="social-icon" href="javascript:void0"><i class="fa fa-youtube"></i></a>
								</li>
								<li>
									<a class="social-icon" href="javascript:void0"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a class="social-icon" href="javascript:void0"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	<!--Footer Section-->

	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

	<!-- JQuery js-->
	<script src="/assets/js/vendors/jquery.js"></script>
	<!-- Bootstrap js -->
	<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--JQuery Sparkline Js-->
	<script src="/assets/js/vendors/jquery.sparkline.min.js"></script>
	<!-- Circle Progress Js-->
	<script src="/assets/js/vendors/circle-progress.min.js"></script>
	<!-- Star Rating-2 Js-->
	<script src="/assets/plugins/ratings-2/jquery.star-rating.js"></script>
	<script src="/assets/plugins/ratings-2/star-rating.js"></script>
	<!--Counters -->
	<script src="/assets/plugins/counters/counterup.min.js"></script>
	<script src="/assets/plugins/counters/waypoints.min.js"></script>
	<script src="/assets/plugins/counters/numeric-counter.js"></script>
	<!--Owl Carousel js -->
	<script src="/assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="/assets/js/owl-carousel.js"></script>
	<!--Horizontal Menu-->
	<script src="/assets/plugins/horizontal/horizontal-menu/horizontal.js"></script>
	<!--JQuery TouchSwipe js-->
	<script src="/assets/js/jquery.touchSwipe.min.js"></script>
	<!--Select2 js -->
	<script src="/assets/plugins/select2/select2.full.min.js"></script>
	<script src="/assets/js/select2.js"></script>
	<!-- sticky Js-->
	<script src="/assets/js/sticky.js"></script>
	<!-- Bootstrap wizard -->
	<script src="/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
	<script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="/assets/js/wizard.js"></script>
	<!-- Cookie js -->
	<script src="/assets/plugins/cookie/jquery.ihavecookies.js"></script>
	<script src="/assets/plugins/cookie/cookie.js"></script>
	<!--Auto Complete js -->
	<script src="/assets/plugins/autocomplete/jquery.autocomplete.js"></script>
	<script src="/assets/plugins/autocomplete/autocomplete.js"></script>
	<!-- p-scroll bar Js-->
	<script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="/assets/plugins/toggle-sidebar-1/sidemenu.js"></script>
	<!-- Swipe Js-->
	<script src="/assets/js/swipe.js"></script>
	<!-- Scripts Js-->
	<script src="/assets/js/scripts2.js"></script>
	<!-- Vertical scrollbar -->
	<script src="/assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js"></script>
	<script src="/assets/plugins/vertical-scroll/vertical-scroll.js"></script>
	 <!--File-Uploads Js-->
	 <script src="/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
	<script src="/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
	<script src="/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
	<script src="/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
	<script src="/assets/plugins/fancyuploder/fancy-uploader.js"></script>
	<!-- Custom Js-->
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/js/themeColors.js"></script>
</body>

</html>