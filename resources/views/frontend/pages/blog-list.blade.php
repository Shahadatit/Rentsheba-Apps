@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba post listing</title> @endsection

@section('content')

		
		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Blog-Grid</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Blog-Grid</li>
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
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="javascript:void(0)"></a>
										<img src="../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
										<div class="item7-card-text">
											<span class="badge badge-success">Restaurant</span>
										</div>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-03-2019</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="fa fa-comment-o text-muted me-2"></i>4 Comments</a>
											</div>
										</div>
										<a href="blog-details-right.html" class="text-dark"><h4 class="font-weight-semibold">Excepteur  occaecat cupidatat</h4></a>
										<p>Lorem ipsum dolor sit amet, quis exercitationem into enim ad minima veniam, quis nostrum itationem </p>
										<a href="blog-details-right.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="item-card2-img">
										<div id="image-slider" class="carousel car-slide" data-bs-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img src="../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
												</div>
												<div class="carousel-item">
													<img src="../assets/images/products/products/j1.jpg" alt="img" class="cover-image">
												</div>
												<div class="carousel-item">
													<img src="../assets/images/products/products/h1.jpg" alt="img" class="cover-image">
												</div>
												<div class="carousel-item">
													<img src="../assets/images/products/products/h2.jpg" alt="img" class="cover-image">
												</div>
												<div class="carousel-item">
													<img src="../assets/images/products/products/h3.jpg" alt="img" class="cover-image">
												</div>
											</div>
											<a class="carousel-control-prev start-0" href="#image-slider" role="button" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next end-0" href="#image-slider" role="button" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
										<div class="item7-card-text">
											<span class="badge badge-info">Jobs</span>
										</div>
										<div class="item-card2-icons">
											<span class="br-2 p-1 px-2 br-2 bg-dark-transparent text-white"><i class="fa fa-picture-o"></i> 2</span>
										</div>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
											</div>
										</div>
										<a href="blog-details-center.html" class="text-dark"><h4 class="font-weight-semibold">Sed ut perspiciatis unde omnis</h4></a>
										<p>Lorem ipsum dolor sit amet, quis exercitationem into enim ad minima veniam, quis nostrum itationem </p>
										<a href="blog-details-center.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="youtube-video">
										<iframe height="218" src="https://www.youtube.com/embed/AodRcbUg8Jk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-19-2019</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="fa fa-comment-o text-muted me-2"></i>8 Comments</a>
											</div>
										</div>
										<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">At vero eos et accusamus iusto</h4></a>
										<p>Lorem ipsum dolor sit amet, quis exercitationem into enim ad minima veniam, quis nostrum itationem </p>
										<a href="blog-details.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="javascript:void(0)"></a>
										<img src="../assets/images/products/products/h3.jpg" alt="img" class="cover-image">
										<div class="item7-card-text">
											<span class="badge badge-info">Real Estate</span>
										</div>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-13-2019</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="fa fa-comment-o text-muted me-2"></i>7 Comments</a>
											</div>
										</div>
										<a href="blog-details-right.html" class="text-dark"><h4 class="font-weight-semibold"> Nam libero tempore, cum soluta </h4></a>
										<p>Lorem ipsum dolor sit amet, quis exercitationem into enim ad minima veniam, quis nostrum itationem </p>
										<a href="blog-details-right.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="youtube-video">
										<iframe  height="218" src="https://www.youtube.com/embed/AodRcbUg8Jk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Dec-10-2019</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="fa fa-comment-o text-muted me-2"></i>1 Comments</a>
											</div>
										</div>
										<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Certain circumstances the claims</h4></a>
										<p>Lorem ipsum dolor sit amet, quis exercitationem into enim ad minima veniam, quis nostrum itationem </p>
										<a href="blog-details.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="item7-card-img">
										<a href="javascript:void(0)"></a>
										<img src="../assets/images/products/products/pe1.jpg" alt="img" class="cover-image">
										<div class="item7-card-text">
											<span class="badge badge-info">Pets & Animals</span>
										</div>
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-flex mb-2">
											<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-01-2019</a>
											<div class="ms-auto">
												<a class="me-0" href="javascript:void(0)"><i class="fa fa-comment-o text-muted me-2"></i>5 Comments</a>
											</div>
										</div>
										<a href="blog-details-right.html" class="text-dark"><h4 class="font-weight-semibold">Itaque earum rerum sapiente</h4></a>
										<p>Lorem ipsum dolor sit amet, quis exercitationem into enim ad minima veniam, quis nostrum itationem </p>
										<a href="blog-details-right.html" class="btn btn-secondary btn-sm">Read More</a>
									</div>
								</div>
							</div>
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
						<div class="card mb-0 overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Blog Authors</h3>
							</div>
							<div class="card-body p-0">
								<ul class="vertical-scroll">
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/female/18.jpg" alt="image" class="avatar brround  me-2">
												<a href="javascript:void(0)" class="time-title p-0 leading-normal mt-2">Boris	Nash <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 16</span></a>
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/female/10.jpg" alt="image" class="avatar brround  me-2">
												<a href="javascript:void(0)" class="time-title p-0 leading-normal mt-2">Lorean Mccants <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 43</span></a>
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/male/18.jpg" alt="image" class="avatar brround  me-2">
												<a href="javascript:void(0)" class="time-title p-0 leading-normal mt-2">Dewitt Hennessey <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 34</span></a>
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/male/8.jpg" alt="image" class="avatar brround  me-2">
												<a href="javascript:void(0)" class="time-title p-0 leading-normal mt-2">Archie Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 12</span></a>
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/female/21.jpg" alt="image" class="avatar brround  me-2">
												<a href="javascript:void(0)" class="time-title p-0 leading-normal mt-2">Barbra Flegle <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 21</span></a>
												<a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
		<!--Add listing-->

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