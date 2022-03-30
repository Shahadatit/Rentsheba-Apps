@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba  listing</title> @endsection

@section('content')

	<!--Sliders Section-->
	<div>
		<div class="cover-image sptb-1 bg-background" data-bs-image-src="{{asset('frontend/img/businesbanner3.png')}}">
			<div class="header-text1 mb-0">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
							<div class="text-center text-white ">
								<h1 class=""><span class="font-weight-bold"></span> Search Your targeted Serivce</h1>
							</div>
							<form action="{{url('/search')}}" method="GET">
								<div class="search-background px-4 py-3 mt-4">
									<div class="form row row-sm">
										<div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
											<input type="text" name="search" value="{{request('search')}}" class="form-control input-lg border-white" id="text"
												placeholder="Search Products">
										</div>
										<div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0 border-white">
											<select id="cat" name="category" class="form-control select2-show-search w-100"
												data-placeholder="Select">
												<optgroup label="Categories">
													<option value="ALL" {{ request('category') == "ALL" ? 'selected' : ""}} >Select</option>
													@foreach(App\Models\Category::where('is_parent',0)->get() as $pCat)
													@foreach(App\Models\Category::where('is_parent',$pCat->id)->get() as $cCat)
													<option value="{{$cCat->id}}" {{request('category') == $cCat->id ? 'selected' : ""}}>{{$cCat->name}}</option>
													@endforeach
													@endforeach
												</optgroup>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<button type="submit" class="btn btn-lg btn-block btn-secondary">Search</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /header-text -->
		</div>
	</div>
	<!--/Sliders Section-->

	<!--Breadcrumb-->
	<div class="bg-white border-bottom">
		<div class="container">
			<div class="page-header">
				<h4 class="page-title">Business list</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Business list</li>
				</ol>
			</div>
		</div>
	</div>
	<!--/Breadcrumb-->

	<!--Add listing-->
	<section class="sptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-9 col-md-12">
					<!--Add lists-->
					<div class=" mb-lg-0">
						<div class="">
							<div class="item2-gl business-list-01">
								<div class="">
									<div class="bg-white p-5 item2-gl-nav d-md-flex">
										<h6 class="mb-0 mt-3">Showing 9 to {{App\Models\Company::companyCount()}} entries</h6>
										<ul class="nav item2-gl-menu ms-auto mt-1">
											<li class=""><a href="#tab-11" class="active show" data-bs-toggle="tab"
													title="List style"><i class="fa fa-list"></i></a></li>
											<li><a href="#tab-12" data-bs-toggle="tab" class="" title="Grid"><i
														class="fa fa-th"></i></a></li>
										</ul>
										<div class="d-sm-flex">
											<label class="me-2 mt-2 mb-sm-1 sort-label">Sort By</label>
											
										</div>
									</div>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="tab-11">
										@foreach( $companys as $item)
										<div class="card overflow-hidden">
											
											<div class="d-md-flex">
												<div class="item-card9-img">
													<div class="item-card9-imgs">
														<a href="{{route('company-details' , $item->slug)}}"></a>
														<img src="{{asset('image/' . $item->cover_photo)}}" alt="img"
															class="cover-image">
													</div>
													<div class="item-card9-icons">
														<a href="javascript:void(0)" class="item-card9-icons1 wishlist"> <i
																class="fa fa fa-heart-o"></i></a>
													</div>
													<div class="item-cardreview-absolute bg-secondary">{{$item->categorys->name}}</div>
												</div>
												<div class="card border-0 mb-0">
													<div class="card-body h-100">
														<div class="item-card9">
															<a href="{{route('company-details' , $item->slug)}}" class="text-dark">
																<h4 class="font-weight-semibold mt-1 mb-1">{{$item->main_title}} 
																	@if($item->packeg == 1)
																	<i class="fa fa-exclamation-circle text-warning ms-1"
																		data-bs-toggle="tooltip" data-bs-placement="top"
																		title=""
																		data-bs-original-title="Not Verified"></i>
																	@elseif($item->packeg == 2)
																	<i class="ion-checkmark-circled text-success ms-1"
																		data-bs-toggle="tooltip" data-bs-placement="top"
																		title="" data-bs-original-title="Verified"></i>
																	@endif
																</h4>
															</a>
															<div class="d-flex me-5">
																<div class="rating-star sm my-rating-5"
																	data-rating="4.5">
																</div>
																<a class="fs-13 leading-tight mt-1" href="javascript:void(0)">13
																	Reviews</a>
															</div>
															<div class="mt-2 mb-2">
																<a href="javascript:void(0)" class="mt-1 mb-1 me-3 text-dark"><i
																		class="fa fa-globe me-1"></i> {{$item->cuntrys->name}}</a>
																<a href="javascript:void(0)" class="mt-1 mb-1 me-1 text-muted"><i
																		class="fa fa-map-marker me-1"></i> {{$item->c_address}}, {{$item->c_district}}</a>
															</div>
															<p class="mb-0 leading-tight"><span
																	class="font-weight-semibold text-dark"> Timings :
																</span> 10am - 10pm</p>
														</div>
													</div>
													<div class="card-footer pt-2 pb-2">
														<div class="item-card9-footer d-sm-flex">
															<div class="item-card9-cost">
																<div
																	class="text-dark font-weight-normal mb-0 mt-0 item-card2-desc">
																	<a class="" href="mailto:{{$item->o_email}}" data-bs-toggle="modal"
																		data-bs-target="#contact"><i
																			class="fa fa-envelope"></i></a>
																	<a class="" href="tel:{{$item->com_mobile}}" data-bs-toggle="tooltip"
																		data-bs-placement="top" title=""
																		data-bs-original-title="{{$item->com_mobile}}"><i
																			class="fa fa-phone"></i></a>
																	<a class="" href="{{$item->website}}" target="black"
																		data-bs-toggle="tooltip" data-bs-placement="top"
																		title=""
																		data-bs-original-title="{{$item->website}}" target="black"><i
																			class="fa fa-globe"></i></a>
																	<a class="" href="javascript:void(0)"><i
																			class="fa fa-share-alt"></i></a>
																</div>
															</div>
															<div class="ms-auto mt-3 mt-sm-0">
																<div
																	class="text-dark font-weight-normal mb-0 mt-0 item-card2-desc">
																	<a href="javascript:void(0)"><i class="fa fa-map-signs"></i> Get
																		Directions</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
										
									</div>
									<div class="tab-pane" id="tab-12">
										<div class="row">
											@foreach($companys as $item)
											<div class="col-lg-6 col-md-6 col-xl-6">
												<div class="card overflow-hidden">
													@if( $item->packeg == 2)
												<div class="power-ribbon power-ribbon-top-left text-warning"><span
															class="bg-warning"><i class="fa fa-bolt"></i></span></div>
															@endif
													<div class="h-100">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="{{route('company-details' , $item->slug)}}"></a>
																<img src="{{asset('image/' . $item->logo)}}"
																	alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 wishlist"> <i
																		class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-cardreview-absolute bg-secondary">
																{{$item->categorys->name}}</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body">
																<div class="item-card9">
																	<a href="{{route('company-details' , $item->slug)}}" class="text-dark">
																		<h4 class="font-weight-semibold mt-1 mb-1">{{substr(strip_tags($item->main_title),0,38)}}...
																			@if($item->packeg == 1)
																			<i class="fa fa-exclamation-circle text-warning ms-1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title=""
																				data-bs-original-title="Not Verified"></i>
																			@elseif($item->packeg == 2)
																			<i class="ion-checkmark-circled text-success ms-1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title=""
																				data-bs-original-title="Verified"></i>
																			@endif
																		
																		</h4>
																	</a>
																	<div class="d-flex me-5">
																		<div class="rating-star sm my-rating-5"
																			data-rating="4.5">
																		</div>
																		<a class="fs-13 leading-tight mt-1" href="javascript:void(0)">13
																			Reviews</a>
																	</div>
																	<div class="mt-2 mb-2">
																		<a href="javascript:void(0)" class="mt-1 mb-1 me-3 text-dark"><i
																				class="fa fa-globe me-1"></i>{{$item->cuntrys->name}}</a>
																		<a href="javascript:void(0)" class="mt-1 mb-1 me-1 text-muted"><i
																				class="fa fa-map-marker me-1"></i>
																				{{$item->c_address}}, {{$item->c_district}}</a>
																	</div>
																	<p class="mb-0 leading-tight"><span
																			class="font-weight-semibold text-dark">
																			Timings : </span> 10am - 10pm</p>
																</div>
															</div>
															<div class="card-footer pt-2 pb-2">
																<div class="item-card9-footer d-sm-flex">
																	<div class="item-card9-cost">
																		<div
																			class="text-dark font-weight-normal mb-0 mt-0 item-card2-desc">
																			<a class="" href="{{$item->o_email}}" data-bs-toggle="modal"
																				data-bs-target="#contact"><i
																					class="fa fa-envelope"></i></a>
																			<a class="" href="tel:{{$item->com_mobile}}"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title=""
																				data-bs-original-title="{{$item->com_mobile}}"><i
																					class="fa fa-phone"></i></a>
																			<a class="" href="{{$item->website}}"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title=""
																				data-bs-original-title="{{$item->website}}" target="blank"><i
																					class="fa fa-globe"></i></a>
																			<a class="" href="javascript:void(0)"><i
																					class="fa fa-share-alt"></i></a>
																		</div>
																	</div>
																	<div class="ms-auto mt-3 mt-sm-0">
																		<div
																			class="text-dark font-weight-normal mb-0 mt-0 item-card2-desc">
																			<a href="javascript:void(0)"><i class="fa fa-map-signs"></i>
																				Get Directions</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
											
											
										</div>
									</div>
								</div>
							</div>
							<div class="center-block text-center">
								<ul class="pagination mb-5">
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
					</div>
					<!--/Add lists-->
				</div>

				<!--Right Side Content-->
				<div class="col-xl-3 col-lg-3 col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="input-group">
								<input type="text" class="form-control br-ts-3 br-bs-3" placeholder="Search">
								<div class="input-group-text p-0 border-0">
									<button type="button" class="btn btn-secondary br-te-3 br-be-3">
										Search
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card mb-0">
						<div class="card-header">
							<h3 class="card-title">Categories</h3>
						</div>
						<div class="card-body">
							<div class="" id="container">
								<div class="filter-product-checkboxs">
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox1"
											value="option1">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Computer<span
													class="label label-primary float-end">14</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox2"
											value="option2">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Services<span
													class="label label-primary float-end">22</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox3"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Jobs<span
													class="label label-primary float-end">78</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox4"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">RealEstates<span
													class="label label-primary float-end">35</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox5"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Clothing<span
													class="label label-primary float-end">23</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox6"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Home & Garden<span
													class="label label-primary float-end">14</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Beauty & Spa<span
													class="label label-primary float-end">45</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Restaurant<span
													class="label label-primary float-end">34</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Travel<span
													class="label label-primary float-end">12</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Event<span
													class="label label-primary float-end">18</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Health & fitness<span
													class="label label-primary float-end">02</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Electronics<span
													class="label label-primary float-end">15</span></a>
										</span>
									</label>
									<label class="custom-control form-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7"
											value="option3">
										<span class="custom-control-label">
											<a href="javascript:void(0)" class="text-dark">Mobile<span
													class="label label-primary float-end">32</span></a>
										</span>
									</label>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!--/Right Side Content-->
			</div>
		</div>
	</section>
	<!--/Add Listings-->

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