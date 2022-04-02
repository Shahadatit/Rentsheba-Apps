@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba post listing</title> @endsection

@section('content')

		
		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Find Your Needed Service</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Service</li>
							</ol>
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
					<!--Add lists-->
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="row">
							@foreach($adminPosts as $item)
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="{{route('blog-details', $item->slug)}}"></a>
										@if($item->image)
										<img src="{{asset('image/'. $item->image)}}" alt="img" class="cover-image">
										@else
										<img src="/assets/images/products/products/h3.jpg" alt="img" class="cover-image">
										@endif
										
										<div class="item7-card-text">
											<span class="badge badge-info">{{$item->categoryFunction->name}}</span>
										</div>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>{{$item->created_at->format('d M, Y')}}</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="icon icon-eye text-muted me-1"></i> {{$item->views}} Views</a>
											</div>
										</div>
										<a href="{{route('blog-details', $item->slug)}}" class="text-dark"><h4 class="font-weight-semibold">{{$item->name}} </h4></a>
										<p>{{substr(strip_tags($item->sort_description),0,130)}}... </p>
										<a href="blog-details-right.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
						<div class="d-sm-flex">
							<h6 class="mb-0 mt-3">Showing 1 to 6 of 30 entries</h6>
							<ul class="pagination mb-lg-0 mb-5 ms-auto">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="javascript:void(0)">Next</a>
								</li>
							</ul>
						</div>
					</div>
					<!--/Add lists-->

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input type="text" class="form-control br-ts-3  br-bs-3" placeholder="Search">
									<div class="input-group-text p-0 border-0">
										<button type="button" class="btn btn-secondary br-te-3  br-be-3">
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card mb-5 overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Populer Service</h3>
							</div>
							<div class="card-body p-0">
								<ul class="vertical-scroll">
									@foreach($adminPosts as $item)
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
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1 mt-1">14</span>
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
										@foreach(App\Models\adminPost::all() as $item)
										<li><a href="javascript:void(0)">{{$item->focus_keyword}}</a></li>
										@endforeach
										
									</ul>
								</div>
							</div>
						</div>
						
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
		<!--Add listing-->

		

@endsection