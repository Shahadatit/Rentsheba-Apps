@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba business details</title> @endsection

@section('content')


		<!--Sliders Section-->
		<div class="pattern-img" >
			<div  class=" relative sptb-12 pattern2 bg-background banner-1 cover-image sptb-2 sptb-tab bg-background2" data-bs-image-src="{{asset('image/' . $company->cover_photo)}}">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white ">
									<h1 class="mb-2"><span class="font-weight-semibold">{{$company->main_title}} - Rentsheba</span></h1>
									<div class="mx-auto mb-2 mt-3 d-flex banner-ratings">
										<div class="rating-star sm my-rating-5" data-rating="4.5">
										</div>
										<a class="text-white" href="javascript:void(0)">{{$company->review()}} reviews</a>
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
											<li class="me-5"><a href="javascript:void(0)" class="icons"><i class="icon icon-eye text-muted me-1"></i> {{$company->views}} views</a></li>
										</ul>
										<div class="d-flex me-5">
										
											<div class="rating-star sm my-rating-5" data-rating="4.5">
											</div> {{$company->review()}} Reviews
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
								<img src="{{asset('image/' . $company->cover_photo)}}" alt="img">
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
											Posted By <a class="mb-0 font-weight-bold">{{$company->users->name}}</a> / {{$company->created_at->format('d M, Y')}}
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
								@foreach($comments as $comment)
								<div class="d-sm-flex p-5 mt-1 border sub-review-section">
									<div class="d-flex me-3">
										<a href="javascript:void(0)"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('image/' . $comment->user->profile)}}"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">{{$comment->user->name}}
										<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ms-2">
											@if($comment->star == 1)
											Poor Rating
											@elseif($comment->star == 2)
											2
											@elseif($comment->star == 3)
											3
											@elseif($comment->star == 4)
											4
											@elseif($comment->star == 5)
											5
											@endif 
										<i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><i class="fa fa-calendar"></i> {{$comment->created_at->format('d M, Y')}}  <i class=" ms-3 fa fa-clock-o"></i> {{$comment->created_at->diffForHumans()}}  </small>
                                        <p class="font-13  mb-2 mt-2">{{$comment->comment}}</p>
										<a href="javascript:void(0)" class="me-2 mt-1"><span class="badge badge-secondary">Helpful</span></a>
										<a href="javascript:void0" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-light">Comment</span></a>
										<a href="javascript:void0" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#report"><span  class="badge badge-light">Report</span></a>
										<div class="btn-group btn-group-sm mb-1 ms-auto float-sm-end mt-1">
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-up"></i></button>
											<button class="btn btn-light" type="button"><i class="fa fa-thumbs-down"></i></button>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<!--/Comments-->

						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Add a Review</h3>
							</div>
							<div class="card-body">
								@if(session()->has('success'))
								<div class="alert alert-success text-center">
									{{session()->get('success')}}
								</div>
								@endif
								
								<h4>Review</h4>
								<form action="{{route('companycomment.store')}}" method="POST">
									@csrf
									<div class="mt-2">
										<div class="form-group">
											<textarea class="form-control" name="comment" maxlength="100" rows="6" placeholder="Write Review"></textarea>
										</div>
										<div class="form-group">
											<select name="star" class='form-control' id="">
												<option value="5">Select Review</option>
												<option value="1"> Ratings &#9733; </option>
												<option value="2"> Ratings &#9733; &#9733; </option>
												<option value="3"> Ratings &#9733; &#9733; &#9733;</option>
												<option value="4"> Ratings &#9733; &#9733; &#9733; &#9733;</option>
												<option value="5"> Ratings &#9733; &#9733; &#9733; &#9733; &#9733;</option>
											</select>
										</div>
										<input type="hidden" name="company_id" value="{{$company->id}}">
										<button type="submit" class="btn btn-secondary">Send Reply</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card mb-5 overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Populer Service</h3>
							</div>
							<div class="card-body p-0">
								<ul class="vertical-scroll">
									@foreach($adminPost as $item)
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="{{asset('image/'. $item->image)}}" alt="image" class="avatar brround  me-2">
												<a href="{{route('blog-details', $item->slug)}}" class="time-title p-0 leading-normal mt-2">{{$item->name}}<i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> {{App\Models\Comment::where('post_id' , $item->id)->count()}}</span></a>
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="icon icon-eye text-muted me-1"></i> {{$item->views}}</span></a>
											</div>
										</div>
									</li>
									@endforeach
									
								</ul>
							</div>
						</div>
						<div class="card overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">This Company Owner</h3>
								
							</div>
							<div class="card-body item-user">
								<div class="profile-details">
									<div class="profile-pic mb-0 mx-5">
										@if($company->user_id)
										<img src="{{asset('image/')}}/{{$company->users->profile}}" class="brround w-150 h-150" alt="user">
										@else
										<img src="{{asset('frontend/img/whiteimage.jpg')}}" class="brround w-150 h-150" alt="user">
										@endif
									</div>
								</div>
								<div class="text-center mt-2">
									<a href="userprofile.html" class="text-dark text-center"><h4 class="mt-0 mb-0 font-weight-semibold">@if($company->user_id) {{$company->users->name}} @endif</h4></a>
									<span class="text-muted">Member Since - {{$company->users->created_at->format('d M, Y')}}</span>
									<div>
										<!-- <small class="text-muted">Listing Id <b>365241</b></small> -->
									</div>
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
											<h6><span class="font-weight-semibold"><i class="fa fa-map me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-body"> {{$company->users->address}} , {{$company->users->cuntryFunc->name}}</a></h6>
											<h6><span class="font-weight-semibold"><i class="fa fa-envelope me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-body">{{$company->users->email}}</a></h6>
											<h6><span class="font-weight-semibold"><i class="fa fa-phone me-3 mb-2"></i></span><a href="javascript:void(0)" class="text-secondary"> {{$company->users->phone}}</a></h6>
											<h6><span class="font-weight-semibold"><i class="fa fa-link me-3 "></i></span><a href="javascript:void(0)" class="text-secondary">{{$company->website}}</a></h6>
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