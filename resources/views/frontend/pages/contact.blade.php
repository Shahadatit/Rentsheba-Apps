@extends('frontend.layout.template')

@section('title') <title> Website Design and Web Development Service </title> @endsection

@section('content')


<!--Breadcrumb-->
<div>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Contact Us</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Contact-->
		<div class="sptb bg-white">
			<div class="container">
				<div class="row">
				    <div class="col-lg-7 col-xl-7 col-md-12 d-block mx-auto">
						<div class="single-page">
							<div class="col-lg-12 col-md-12 mx-auto d-block">
								<div class="wrapper wrapper2">
									<div class="card mb-0 overflow-hidden">
										<div class="card-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="name1" placeholder="Your Name" required>
												</div>
												<div class="form-group">
													<input type="email" class="form-control" id="email" placeholder="Email Address" required>
												</div>
												<div class="form-group">
													<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message" required></textarea>
												</div>
												<button type="submit" class="btn btn-primary btn-block">Send Message</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

		<!--Contact-->
		<div class="sptb">
			<div class="container">
				<div class="row text-white">
					<div class="col-lg-4 mb-5 mb-lg-0">
						<div class="support-service bg-secondary br-7 mb-4 mb-xl-0">
							<i class="fa fa-phone"></i>
							<h6>01627669222</h6>
							<P>Free Support!</P>
						</div>
					</div>
					<div class="col-lg-4 mb-5 mb-lg-0">
						<div class="support-service bg-primary br-7 mb-4 mb-xl-0">
							<i class="fa fa-clock-o"></i>
							<h6>6.00 - 22.00 (Every Day)</h6>
							<p>Working Hours!</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="support-service bg-info br-7">
							<i class="fa fa-envelope-o"></i>
							<h6>rentsheba@gmail.com</h6>
							<p>Support us!</p>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection