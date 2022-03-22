@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba post listing</title> @endsection

@section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Blog-Details</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Blog-Details</li>
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
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="card">
							<div class="card-body">
								<a href="javascript:void(0)" class="text-dark"><h3 class="font-weight-semibold text-capitalize">Sed ut perspiciatis unde omnis iste</h3></a>
								<div class="youtube-video">
									<iframe  height="400" src="https://www.youtube.com/embed/AodRcbUg8Jk"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="javascript:void(0)"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2019</a>
									<a href="javascript:void(0)"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
									<div class="ms-auto">
										<a href="javascript:void(0)" class="me-0"><i class="fa fa-comment-o text-muted me-2"></i>12 Comments</a>
									</div>
								</div>

								<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure. </p>
								<p>but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>
								<h4 class="mt-6 mb-3">Blog Images</h4>
								<div class="row">
									<div class="col-lg-3 col-sm-6">
										<img src="../assets/images/products/products/ed1.jpg" alt="image" class="mt-3 br-7">
									</div>
									<div class="col-lg-3 col-sm-6">
										<img src="../assets/images/products/products/ed2.jpg" alt="image" class="mt-3 br-7">
									</div>
									<div class="col-lg-3 col-sm-6">
										<img src="../assets/images/products/products/ed3.jpg" alt="image" class="mt-3 br-7">
									</div>
									<div class="col-lg-3 col-sm-6">
										<img src="../assets/images/products/products/ed4.jpg" alt="image" class="mt-3 br-7">
									</div>
								</div>
							</div>
						</div>

						<!--Comments-->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">3 Comments</h3>
							</div>
							<div class="card-body">
								<div class="d-sm-flex mt-0 p-5 sub-review-section border border-bottom-0 br-bs-0 br-be-0">
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
								<h3 class="card-title">Add a Comment</h3>
							</div>
							<div class="card-body">
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

					<!--Rightside Content-->
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