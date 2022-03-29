@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba post listing</title> @endsection

@section('content')

	

		<!--Breadcrumb-->
		<section class="">
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="{{asset('image/' . $post->image)}}">
				<div class="header-text mb-0 " >
					<div class="container  banner-height">
						<div class="text-center text-white">
							<h1 class="">Blog-Details</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Blog-Details</li>
							</ol>
						</div>
						<div class="row">
						<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
							<div class="search-background px-4 ">
								<div class="form row row-sm">
								<!-- Banner Seaarch  -->
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="card">
							<div class="card-body">
								<a href="javascript:void(0)" class="text-dark"><h3 class="font-weight-semibold text-capitalize">{{$post->name}}</h3></a>
								<div class="youtube-video">
									<img src="{{asset('image/' . $post->image)}}" alt="">
									<!-- <iframe  height="400" src="https://www.youtube.com/embed/AodRcbUg8Jk"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								</div>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
									<a href="javascript:void(0)"><i class="fa fa-tags text-muted me-2"></i>{{$post->categoryFunction->name}}</a>
									<div class="ms-auto">
										<a href="javascript:void(0)" class="me-0"><i class="fa fa-comment-o text-muted me-2"></i> {{$comments->count()}} Comments | <i class="icon icon-eye text-muted me-1"></i> {{$post->views}} Views</a>
									</div>
								</div>

								<p>{!! $post->discription !!}</p>
								<p>{{$post->sort_description}}</p>
								
								
							</div>
						</div>

						<!--Comments-->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">{{$comments->count()}} Comments</h3>
							</div>
							<div class="card-body">
								@foreach($comments as $comment)
								<div class="d-sm-flex mt-0 p-5 sub-review-section border border-bottom-0 br-bs-0 br-be-0">
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
										<small class="text-muted"><i class="fa fa-calendar"></i> {{$comment->created_at->format('d M, Y')}}  <i class=" ms-3 fa fa-clock-o"></i> {{$comment->created_at->diffForHumans()}} </small>
                                        <p class="font-13  mb-2 mt-2">{{$comment->comment}} </p>
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
								<h3 class="card-title">Add a Comment</h3>
							</div>
								
							<form action="{{route('comment.store')}}" method="POST">
								@csrf 
								<div class="card-body">
									@if(session()->has('success'))
										<div class="alert alert-success text-center" style='border-radius:0px'>
											{{ session()->get('success') }}
										</div>
									@endif
									<div class="mt-2">
										<div class="form-group">
											<textarea class="form-control" name="comment" rows="6" maxlength="100" placeholder="Write Review"></textarea>
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
										<input type="hidden" name='post_id' value="{{$post->id}}">
										<button type="submit" class="btn btn-secondary">Send Reply</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<!--Rightside Content-->
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
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body p-0">
								<div class="list-catergory">
									<div class="item-list">
										<ul class="list-group mb-0">
											<li class="list-group-item">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-building bg-secondary text-secondary"></i> Real Estate
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">14</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-bed bg-success text-success"></i> Hostel & Travels
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">63</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-heartbeat bg-info text-info"></i> Health & Fitness
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-cutlery bg-warning text-warning"></i> Restaurant
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-laptop bg-danger text-danger"></i> Computer
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-mobile bg-blue text-blue"></i> Mobile
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
												</a>
											</li>
											<li class="list-group-item border-bottom-0">
												<a href="javascript:void(0)" class="text-dark">
													<i class="fa fa-pencil-square  bg-primary text-pink"></i> Education
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Popular Tags</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="javascript:void(0)">RealEstate</a></li>
										<li><a href="javascript:void(0)">AutoMobiles</a></li>
										<li><a href="javascript:void(0)">Events</a></li>
										<li><a href="javascript:void(0)">Health& Beauty</a></li>
										<li><a href="javascript:void(0)">Services</a></li>
										<li><a href="javascript:void(0)">Restaurant</a></li>
										<li><a href="javascript:void(0)">Events</a></li>
										<li><a href="javascript:void(0)">Jobs</a></li>
										<li><a href="javascript:void(0)">Automobiles</a></li>
										<li><a href="javascript:void(0)">Computer</a></li>
										<li><a href="javascript:void(0)" class="mb-0">Electronics</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
					<!--/Rightside Content-->
				</div>
			</div>
		</section>
		<!--/Add listing-->

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