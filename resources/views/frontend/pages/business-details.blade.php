@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba business details</title> @endsection

@section('content')


		<!--Sliders Section-->
		<div class="pattern-img">
			<div class="relative sptb-12 pattern2 bg-background">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white ">
									<h1 class="mb-2"><span class="font-weight-semibold">{{$company->main_title}} - Rentsheba</span></h1>
									<div class="mx-auto mb-2 mt-3 d-flex banner-ratings">
										<div class="rating-star sm my-rating-5" data-rating="4.5">
										</div>
										<a class="text-white" href="javascript:void(0)">4 reviews</a>
									</div>
									<ul class="social-icons mb-4 ms-auto">
										<li>
											<a class="social-icon" target="blank" href="{{$company->facebook}}"><i class="fa fa-facebook"></i></a>
										</li>
										
										<li>
											<a class="social-icon" target="blank" href="{{$company->instagram}}"><i class="fa fa-instagram"></i></a>
										</li>
									
										<li>
											<a class="social-icon" target="blank" href="{{$company->linkedin}}"><i class="fa fa-linkedin"></i></a>
										</li>
										
									</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
				<div class="details-absolute">
					<div class="d-sm-flex container">
						<div><a href="javascript:void(0)" class="text-white d-inline-block me-4 "><i class="icon icon-location-pin text-white me-2"></i>{{$company->c_address}} , {{$company->c_district}} , @if($company->cuntry) {{$company->cuntrys->name}} @endif</a></div>
						<div class="ms-auto"><a href="tel:{{$company->com_mobile}}" class="text-white d-inline-block mt-2 mt-sm-0 fs-18"><i class="icon icon-phone text-white me-2 fs-14"></i>{{$company->com_mobile}}</a></div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sliders Section-->

		<!--BreadCrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Business</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{$company->categorys->name}}</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/BreadCrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">

						<!--Business Overview-->
						<div class="card overflow-hidden">
							<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">featured</span></div>
							<div class="card-body">
								<div class="item-det mb-4">
									<a href="javascript:void(0)" class="text-dark"><h3>{{$company->main_title}}</h3></a>
									<div class=" d-md-flex">
										<ul class="d-md-flex mb-0">
											<li class="me-5"><a href="javascript:void(0)" class="icons"><i class="icon icon-briefcase text-muted me-1"></i> {{$company->categorys->name}}</a></li>
											<li class="me-5"><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i> @if($company->cuntry){{$company->cuntrys->name}}@endif</a></li>
											<li class="me-5"><a href="javascript:void(0)" class="icons"><i class="icon icon-calendar text-muted me-1"></i> @if($company->created_at) {{$company->created_at->format('d M, Y')}} @endif</a></li>
											<li class="me-5"><a href="javascript:void(0)" class="icons"><i class="icon icon-eye text-muted me-1"></i> 765</a></li>
										</ul>
										<div class="d-flex me-5">
											<div class="rating-star sm my-rating-5" data-rating="4.5">
											</div> 4.0
										</div>
										<div class="d-flex">
											<div class="me-2">
												<div class="">
													<i class="fa fa-heart text-danger"></i>
												</div>
											</div> 135
										</div>
									</div>
								</div>
								<div class="product-slider carousel-slide-1">
								<img src="{{asset('image/' . $company->logo)}}" alt="img">
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Overview</h3>
							</div>
							<div class="card-body">
								<div class="mb-0">
									<p>{{$company->description}}</p>
									
								</div>
								<h4 class="card-title mt-5 mb-3">Contact Info</h4>
								<div class="item-user mt-3">
									<div class="row">
										<div class="col-md-6">
											<h6 class="font-weight-normal"><span><i class="fa fa-map me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-body"> {{$company->c_address}}, {{$company->c_district}}</a></h6>
											<h6 class="font-weight-normal"><span><i class="fa fa-envelope me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-body">{{$company->o_email}}</a></h6>
										</div>
										<div class="col-md-6">
											<h6 class="font-weight-normal"><span><i class="fa fa-phone me-3  mb-2"></i></span><a href="tel:{{$company->com_mobile}}" class="text-secondary"> {{$company->com_mobile}}</a></h6>
											<h6 class="font-weight-normal"><span><i class="fa fa-link me-3 "></i></span><a href="{{$company->website}}" target="_blank" class="text-secondary">{{$company->website}}</a></h6>
										</div>
									</div>
								</div>
								<h4 class="card-title mt-5 mb-4">More Business Info</h4>
								<div class="table-responsive">
									<table class="table mb-0 table-bordered-0">
										<tbody>
											
											<tr>
												<td class="font-weight-semibold px-0">Company Name</td>
												<td class="px-0">{{$company->company_name}}</td>
											</tr>
											<tr>
												<td class="font-weight-semibold px-0">Services</td>
												<td class="px-0">{{$company->categorys->name}}</td>
											</tr>
											<tr>
												<td class="font-weight-semibold px-0">Facebook</td>
												<td class="px-0"><a href="{{$company->facebook}}" target="blank">{{$company->facebook}}</a></td>
											</tr>
											<tr>
												<td class="font-weight-semibold px-0">Linkedin</td>
												<td class="px-0"><a href="{{$company->linkedin}}" target="blank">{{$company->linkedin}}</a></td>
											</tr>
											<tr>
												<td class="font-weight-semibold px-0">Packeg</td>
												<td class="px-0">
													@if( $company->packeg == 1)
													<span class='badge badge-info'>Free</span>
													@elseif( $company->packeg == 2)
													@else
													@endif
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="pt-4 pb-4 px-5 border-top border-top">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">Business ID : #8256358</a>
										</div>
										<div class="col col-auto">
											Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2019
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer bg-white">
								<div class="icons">
									<a href="javascript:void(0)" class="btn btn-info icons"><i class="icon icon-share me-1"></i> Share Ad</a>
									<a href="javascript:void(0)" class="btn btn-pink icons"><i class="icon icon-heart  me-1"></i> 678</a>
									<a href="javascript:void(0)" class="btn btn-primary icons"><i class="icon icon-printer  me-1"></i> Print</a>
									<a href="javascript:void(0)" class="btn btn-danger icons mb-1 mt-1" data-bs-toggle="modal" data-bs-target="#report"><i class="icon icon-exclamation me-1"></i> Report Abuse</a>
								</div>
							</div>
						</div>
						<!--/Business Overview-->

						<h3 class="mt-5 mb-4 fs-20">Related Posts</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->
							@foreach($adminPosts as $item)
							<div class="item">
								<div class="card">
									
									<div class="item-card7-imgs">
										<a href="{{route('blog-details', $item->slug)}}"></a>
										<img src="{{asset('image/' . $item->image)}}" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="business.html" class="text-white"> {{$item->categoryFunction->name}}</a>
									</div>
									<div class="item-card7-icons">
										<a href="javascript:void(0)" class="item-card7-icons-l"> <i class="fa fa-pencil"></i></a>
										<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
									</div>
									<div class="card-body">
										<div class="mb-1 mt-0 d-flex">
											<div class="rating-star sm my-rating-5" data-rating="4.5">
											</div>
											<a class="text-white" href="javascript:void(0)">4 reviews</a>
										</div>
										<div class="item-card7-desc">
											<a href="{{route('blog-details', $item->slug)}}" class="text-dark"><h4 class="font-weight-semibold">{{$item->name}} <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
										</div>
										<div class="item-card7-text">
										{{substr(strip_tags($item->sort_description),0,130)}}...
										</div>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
						<!--/Related Posts-->

						<!--Comments-->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Rating And Reviews</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-4">
											<div class="badge badge-default mb-2">5 <i class="fa fa-star"></i></div>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-success w-100">9,232</div>
											</div>
										</div>
										<div class="mb-4">
											<div class="badge badge-default mb-2">4 <i class="fa fa-star"></i></div>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-info w-80">8,125</div>
											</div>
										</div>
										<div class="mb-4">
											<div class="badge badge-default mb-2">3 <i class="fa fa-star"></i></div>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-secondary w-60">6,263</div>
											</div>
										</div>
										<div class="mb-4">
											<div class="badge badge-default mb-2">2 <i class="fa fa-star"></i></div>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-primary w-30">3,463</div>
											</div>
										</div>
										<div class="mb-5">
											<div class="badge badge-default mb-2">1 <i class="fa fa-star"></i></div>
											<div class="progress progress-md mb-4 h-4">
												<div class="progress-bar bg-orange w-20">1,456</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<h4>3 Reviews</h4>
								<div class="d-sm-flex mt-3 p-5 sub-review-section border border-bottom-0 br-bs-0 br-be-0">
                                    <div class="d-flex me-3">
                                        <a href="javascript:void(0)"><img class="media-object brround avatar-md" alt="64x64" src="../assets/images/faces/male/1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
											<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
											<span class="fs-14 ms-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ms-3 fa fa-clock-o"></i> 13.00  <i class=" ms-3 fa fa-map-marker"></i> Brezil</small>
                                        <p class="font-13  mb-2 mt-2">
                                           Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="javascript:void(0)" class="me-2 mt-1"><span class="badge badge-secondary">Helpful</span></a>
										<a href="javascript:void0" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-light">Comment</span></a>
										<a href="javascript:void0" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#report"><span  class="badge badge-light">Report</span></a>
										<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-end mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
								<div class="d-sm-flex p-5 sub-review-section border subsection-color br-ts-0 br-te-0">
									<div class="d-flex me-3">
										<a href="javascript:void(0)"><img class="media-object brround avatar-md" alt="64x64" src="../assets/images/faces/female/2.jpg"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
										<p class="font-13  mb-2 mt-2">
											Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris   commodo consequat.
										</p>
										<a href="javascript:void0" data-bs-toggle="modal" data-bs-target="#Comment" class="mt-1"><span class="badge badge-default">Comment</span></a>
										<div class="btn-group btn-group-sm mb-1 ms-auto float-end mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
								<div class="d-sm-flex p-5 mt-4 border sub-review-section">
									<div class="d-flex me-3">
										<a href="javascript:void(0)"><img class="media-object brround avatar-md" alt="64x64" src="../assets/images/faces/male/3.jpg"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Edward
										<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ms-2"> 4 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ms-3 fa fa-clock-o"></i> 16.35  <i class=" ms-3 fa fa-map-marker"></i> UK</small>
                                        <p class="font-13  mb-2 mt-2">
                                           Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="javascript:void(0)" class="me-2 mt-1"><span class="badge badge-secondary">Helpful</span></a>
										<a href="javascript:void0" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-light">Comment</span></a>
										<a href="javascript:void0" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#report"><span  class="badge badge-light">Report</span></a>
										<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-end mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/Comments-->

						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Add a Review</h3>
							</div>
							<div class="card-body">
								<p class="mb-0">Add Your Rating for the Business</p>
								<div class="mb-4 mt-0 d-flex">
									<div class="rating-star sm my-rating-5" data-rating="4.5">
									</div>
								</div>
								<h4>Review</h4>
								<div class="mt-2">
									<div class="form-group">
										<input type="text" class="form-control" id="name1" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Email Address">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
									</div>
									<a href="javascript:void(0)" class="btn btn-secondary">Send Reply</a>
								</div>
							</div>
						</div>
					</div>

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Company User</h3>
							</div>
							<div class="card-body item-user">
								<div class="profile-details">
									<div class="profile-pic mb-0 mx-5">
										<img src="../assets/images/other/logo.png" class="brround w-150 h-150" alt="user">
									</div>
								</div>
								<div class="text-center mt-2">
									<a href="userprofile.html" class="text-dark text-center"><h4 class="mt-0 mb-0 font-weight-semibold">Robert McLean</h4></a>
									<span class="text-muted">Member Since November 2008</span>
									<div><small class="text-muted">Listing Id <b>365241</b></small></div>
								</div>
							</div>
							<div class="profile-user-tabs">
								<div class="tab-menu-heading border-0 p-0">
									<div class="tabs-menu1">
										<ul class="nav">
											<li class=""><a href="#tab-contact" class="active" data-bs-toggle="tab">Contat</a></li>
											<li><a href="#tab-timings" data-bs-toggle="tab">Timings</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tab-content border-0 bg-white">
								<div class="tab-pane active" id="tab-contact">
									<div class="card-body item-user">
										<h4 class="mb-4">Contact Info</h4>
										<div>
											<h6><span class="font-weight-semibold"><i class="fa fa-map me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-body"> Mp-214, New York, NY 10012, US-52014</a></h6>
											<h6><span class="font-weight-semibold"><i class="fa fa-envelope me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-body">spruko123@gmail.com</a></h6>
											<h6><span class="font-weight-semibold"><i class="fa fa-phone me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-secondary"> 0-235-657-24587</a></h6>
											<h6><span class="font-weight-semibold"><i class="fa fa-link me-3 "></i></span><a href="javascript:void(0)" class="text-secondary">https://spruko.com/</a></h6>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-timings">
									<div class="table-responsive card-body">
										<table class="table table-bordered border-top mb-0">
											<tbody>
												<tr>
													<td>Monday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
												<tr>
													<td>Tuesday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
												<tr>
													<td>Wednesday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
												<tr>
													<td>Thursday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
												<tr>
													<td>Friday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
												<tr>
													<td>Saturday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
												<tr>
													<td>Sunday</td>
													<td class="font-weight-semibold">9.00am-9.00pm</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<div class="">
										<a href="javascript:void(0)" class="btn btn-info mt-1 mb-1"><i class="fa fa-envelope"></i> Chat</a>
										<a href="javascript:void(0)" class="btn btn-secondary mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
										<a href="javascript:void(0)" class="btn btn-light mt-1 mb-1"><i class="fa fa-eye"></i>All Listings</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Listing location</h3>
							</div>
							<div class="card-body">
								<div class="map-header">
									<div class="map-header-layer" id="map2"></div>
								</div>
								<div class="item-user mt-5">
									<div>
										<h6><span class="font-weight-semibold"><i class="fa fa-map me-3 mb-0"></i></span><a href="javascript:void(0)" class="text-body"> Mp-214, New York, NY 10012, US-52014</a></h6>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a class="btn btn-secondary" href="#Map-modal" data-bs-toggle="modal" data-bs-target="#Map-modal">Get Direction</a>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Keywords</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="javascript:void(0)">Study</a></li>
										<li><a href="javascript:void(0)">Education</a></li>
										<li><a href="javascript:void(0)">Coaching</a></li>
										<li><a href="javascript:void(0)">Coaching</a></li>
										<li><a href="javascript:void(0)">University</a></li>
										<li><a href="javascript:void(0)">Classes</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Listing Owner</h3>
							</div>
							<div class="card-body item-user">
								<div class="profile-details">
									<div class="profile-pic mb-0 mx-5">
										<img src="../assets/images/faces/female/13.jpg" class="brround border avatar-xxl" alt="user">
									</div>
								</div>
								<div class="text-center mt-2 product-filter-desc">
									<a href="userprofile.html" class="text-dark text-center"><h4 class="mt-0 mb-0 font-weight-semibold">Lilly Jones </h4></a>
									<span class="text-muted">Listing Owner</span>
									<div class="item-user-icons mt-3">
										<a href="javascript:void(0)" class="bg-light mt-0"><i class="fa fa-facebook"></i></a>
										<a href="javascript:void(0)" class="bg-light"><i class="fa fa-twitter"></i></a>
										<a href="javascript:void(0)" class="bg-light"><i class="fa fa-google"></i></a>
										<a href="javascript:void(0)" class="bg-light"><i class="fa fa-dribbble"></i></a>
										<a href="javascript:void(0)" class="bg-light"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<div class="card-footer text-center">
								<div class="">
									<a href="javascript:void(0)" class="btn btn-secondary mt-1 mb-1 me-2" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-phone"></i> Contact Me</a>
									<a href="personal-blog.html" class="btn btn-light mt-1 mb-1"><i class="fa fa-eye"></i> See All Posts</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Details Shares Thorugh</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-filter-icons text-center">
									<a href="javascript:void(0)" class="facebook-bg"><i class="fa fa-facebook"></i></a>
									<a href="javascript:void(0)" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0)" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="javascript:void(0)" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
									<a href="javascript:void(0)" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Search Listings</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control keywords-input" id="search-text" placeholder="What are you looking for?">
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control form-select select2-show-search">
										<option value="1" selected>Select Category</option>
										<option value="2">RealEstate</option>
										<option value="3">Restaurant</option>
										<option value="4">Beauty</option>
										<option value="5">Jobs</option>
										<option value="6">Services</option>
										<option value="7">AutoMobile</option>
										<option value="8">Education</option>
										<option value="9">Electronics</option>
										<option value="10">Pets & Animals</option>
										<option value="11">Computer</option>
										<option value="12">Mobile</option>
										<option value="13">Events</option>
										<option value="14">Travel</option>
										<option value="15">Clothing</option>
									</select>
								</div>
								<div >
									<a href="javascript:void(0)" class="btn  btn-block btn-secondary">Search</a>
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Recent Business Posts</h3>
							</div>
							<div class="card-body">
								<div id="myCarousel4" class="owl-carousel testimonial-owl-carousel2">
									<!-- Wrapper for carousel items -->
									<div class="item">
										<div class="card mb-0">
											<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Negotiable</span></div>
											<div class="item-card7-imgs">
												<a href="business.html"></a>
												<img src="../assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="business.html" class="text-white"> Education</a>
											</div>
											<div class="item-card7-icons">
												<a href="javascript:void(0)" class="item-card7-icons-l"> <i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="card-body">
												<div class="mb-1 mt-0 d-flex">
													<div class="rating-star sm my-rating-5" data-rating="4.5">
													</div>
													<a class="text-white" href="javascript:void(0)">4 reviews</a>
												</div>
												<div class="item-card7-desc">
													<a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Record Writing <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
												</div>
												<div class="item-card7-text">
													<ul class="icon-card mb-0 mt-2">
														<li ><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  USA</a></li>
														<li><a href="javascript:void(0)" class="icons"><i class="icon icon-event text-muted me-1"></i> 2 hours ago</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-user text-muted me-1"></i> Clara Pixley</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-phone text-muted me-1"></i> 785 485 965</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="card mb-0">
											<div class="ribbon ribbon-top-left text-secondary"><span class="bg-secondary">featured</span></div>
											<div class="item-card7-imgs">
												<a href="business.html"></a>
												<img src="../assets/images/products/products/ed2.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="business.html" class="text-white">Education </a>
											</div>
											<div class="item-card7-icons">
												<a href="javascript:void(0)" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="card-body">
												<div class="mb-1 mt-0 d-flex">
													<div class="rating-star sm my-rating-5" data-rating="4.5">
													</div>
													<a class="text-white" href="javascript:void(0)">14 reviews</a>
												</div>
												<div class="item-card7-desc">
													<a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Pg University <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
												</div>
												<div class="item-card7-text">
													<ul class="icon-card mb-0 mt-2">
														<li ><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Los Angles</a></li>
														<li><a href="javascript:void(0)" class="icons"><i class="icon icon-event text-muted me-1"></i> 5 hours ago</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-phone text-muted me-1"></i> 567 987 608</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="card mb-0">
											<div class="item-card7-imgs">
												<a href="business.html"></a>
												<img src="../assets/images/products/products/ed3.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="business.html" class="text-white">Education</a>
											</div>
											<div class="item-card7-icons">
												<a href="javascript:void(0)" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="card-body">
												<div class="mb-1 mt-0 d-flex">
													<div class="rating-star sm my-rating-5" data-rating="4.5">
													</div>
													<a class="text-white" href="javascript:void(0)">25 reviews</a>
												</div>
												<div class="item-card7-desc">
													<a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Ug University</h4></a>
												</div>
												<div class="item-card7-text">
													<ul class="icon-card mb-0 mt-2">
														<li ><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Los Angles</a></li>
														<li><a href="javascript:void(0)" class="icons"><i class="icon icon-event text-muted me-1"></i> 4 hours ago</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-user text-muted me-1"></i> Julio Gutirrez</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-phone text-muted me-1"></i> 758 458 758</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="card mb-0">
											<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Collection</span></div>
											<div class="item-card7-imgs">
												<a href="business.html"></a>
												<img src="../assets/images/products/products/ed4.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="business.html" class="text-white"> Coaching</a>
											</div>
											<div class="item-card7-icons">
												<a href="javascript:void(0)" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="card-body">
												<div class="mb-1 mt-0 d-flex">
													<div class="rating-star sm my-rating-5" data-rating="4.5">
													</div>
													<a class="text-white" href="javascript:void(0)">4 reviews</a>
												</div>
												<div class="item-card7-desc">
													<a href="rbusiness.html" class="text-dark"><h4 class="font-weight-semibold">Best Institutions <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
												</div>
												<div class="item-card7-text">
													<ul class="icon-card mb-0 mt-2">
														<li ><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Spain</a></li>
														<li><a href="javascript:void(0)" class="icons"><i class="icon icon-event text-muted me-1"></i> 12 hours ago</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-user text-muted me-1"></i> Clara Pixley</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-phone text-muted me-1"></i> 745 854 857</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="card mb-0">
											<div class="item-card7-imgs">
												<a href="business.html"></a>
												<img src="../assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="business.html" class="text-white"> Training</a>
											</div>
											<div class="item-card7-icons">
												<a href="javascript:void(0)" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="card-body">
												<div class="mb-1 mt-0 d-flex">
													<div class="rating-star sm my-rating-5" data-rating="4.5">
													</div>
													<a class="text-white" href="javascript:void(0)">No reviews</a>
												</div>
												<div class="item-card7-desc">
													<a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Care Brohzm</h4></a>
												</div>
												<div class="item-card7-text">
													<ul class="icon-card mb-0 mt-2">
														<li ><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  China</a></li>
														<li><a href="javascript:void(0)" class="icons"><i class="icon icon-event text-muted me-1"></i> 1 Day ago</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-user text-muted me-1"></i> Nicol Bretz</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-phone text-muted me-1"></i> 485 965 854</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="card mb-0">
											<div class="item-card7-imgs">
												<a href="business.html"></a>
												<img src="../assets/images/products/products/ed2.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="business.html" class="text-white"> Education</a>
											</div>
											<div class="item-card7-icons">
												<a href="javascript:void(0)" class="item-card7-icons-l"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="item-card7-icons-r"><i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="card-body">
												<div class="mb-1 mt-0 d-flex">
													<div class="rating-star sm my-rating-5" data-rating="4.5">
													</div>
													<a class="text-white" href="javascript:void(0)">34 reviews</a>
												</div>
												<div class="item-card7-desc">
													<a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Digital Marketing Training <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
												</div>
												<div class="item-card7-text">
													<ul class="icon-card mb-0 mt-2">
														<li ><a href="javascript:void(0)" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>  Canada</a></li>
														<li><a href="javascript:void(0)" class="icons"><i class="icon icon-event text-muted me-1"></i> 2 days ago</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-user text-muted me-1"></i> Sally Peake</a></li>
														<li class="mb-0"><a href="javascript:void(0)" class="icons"><i class="icon icon-phone text-muted me-1"></i>859 654 857</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>

		<!-- Newsletter-->
		<section class="sptb border-top bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Subscribe To Our Newsletter</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-lg-10 col-xl-8 col-md-12 mx-auto d-block text-center">
						<div class="input-group sub-input mt-0">
							<input type="text" class="form-control input-lg " placeholder="Enter your Email">
							<div class="input-group-text p-0 border-0 bg-transparent">
								<button type="button" class="btn btn-secondary btn-lg br-te-3 br-be-3 br-ts-0 br-bs-0 px-5">
									Subscribe
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Newsletter-->

@endsection