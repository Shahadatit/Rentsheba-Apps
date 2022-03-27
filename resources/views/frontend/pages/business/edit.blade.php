@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba post listing</title> @endsection

@section('content')


    <!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Edit Listing</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Edit Listing</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Sliders Section-->

		<!--Add posts-section-->
		<section class="sptb">
			<div class="container">
				<div class="row ">
                    <form action="{{route('update-listing', $company->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
					<div class="col-lg-8 col-md-12">
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Company Information</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Company Name</label>
									<input type="text" name='company_name' value="{{$company->company_name}}" class="form-control" placeholder="Company Name @error('company_name') is-invalid @enderror" maxlength="30">
									@error('company_name')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Country</label>
									<select name="country" class="form-control form-select select2-show-search">
										<option value="0">Select Country</option>
                                        @foreach( $countrys as $country )
										<option value="{{$country->id}}" @if($country->id == $company->cuntry) selected @endif>{{$country->name}}</option>
                                        @endforeach
									</select>
								</div>
								
								<div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Website</label>
                                                <input type="text" name='website' value="{{$company->website}}" class="form-control" placeholder="Website">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Phone</label>
                                                <input type="text" name='com_mobile' value="{{$company->com_mobile}}" class="form-control @error('com_mobile') is-invalid @enderror" placeholder="Phone">
												@error('com_mobile')
													<div class="text-danger">{{ $message }}</div>
												@enderror
                                            </div>
                                        </div>
                                    </div>
									
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Address</label>
									<input type="text" name='c_address' value="{{$company->c_address}}" class="form-control @error('c_address') is-invalid @enderror" placeholder="Address">
									@error('c_address')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">District</label>
                                                <input type="text" name='c_district' value="{{$company->c_district}}" class="form-control @error('c_district') is-invalid @enderror" placeholder="District">
												@error('c_district')
													<div class="text-danger">{{ $message }}</div>
												@enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Zip Code</label>
                                                <input type="text" name='c_zipcode' value="{{$company->c_zipcode}}" class="form-control @error('c_zipcode') is-invalid @enderror" placeholder="Zip code">
												@error('c_zipcode')
													<div class="text-danger">{{ $message }}</div>
												@enderror
                                            </div>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Business Information</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Main Title</label>
									<input type="text" name='main_title' value="{{$company->main_title}}" class="form-control @error('main_title') is-invalid @enderror" placeholder="Main title" maxlength="42">
									@error('main_title')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Category</label>
									<select name="cat_id" class="form-control form-select select2-show-search">
										<option value="0">Select Category</option>
                                        @foreach($categorys as $category)
											@foreach( App\Models\Category::orderby('name','asc')->where('is_parent', $category->id)->get() as $sCut)
										<option value="{{$sCut->id}}" @if($sCut->id == $company->cat_id) selected @endif>{{$sCut->name}}</option>
                                        @endforeach
                                        @endforeach
									</select>
									</select>
								</div>
								
								
								
								<div class="form-group">
									<label class="form-label text-dark">Description</label>
									<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="6" placeholder="text here.." maxlength="301">{{$company->description}}</textarea>
									@error('description')
										<div class="text-danger">{{ $message }}</div>
									@enderror
								</div>
                                <div class="form-group">
									<label class="form-label text-dark">Search Keywords</label>
									<input type="text" name='tags' value="{{$company->tags}}" class="form-control" placeholder="Keyword">
								</div>
								<div class="form-group">
                                    <!-- cover image upload code start -->
									<label class="form-label text-dark">Image Upload</label>
									<div class="dropify-wrapper" style="height: 194px;">
                                        <div class="dropify-message">
                                            <span class="file-icon"> 
                                                <p>Drag and drop a file here or click</p>
                                            </span>
                                            <p class="dropify-error">Ooops, something wrong appended.</p>
                                        </div>
                                        <div class="dropify-loader">

                                        </div>
                                        <div class="dropify-errors-container">
                                            <ul></ul>
                                        </div>
                                        <input type="file" name="cover_photo" class="dropify " data-height="180">
                                        <button type="button" class="dropify-clear">Remove</button>
                                        <div class="dropify-preview">
                                            <span class="dropify-render"></span>
                                            <div class="dropify-infos">
                                                <div class="dropify-infos-inner">
                                                    <p class="dropify-filename">
                                                        <span class="dropify-filename-inner">

                                                        </span>
                                                    </p>
                                                    <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
                                    <span>Image Size : (800px / 400px)</span>
                                    <!-- cover image upload end code -->
								</div>
							</div>
						</div>
						<div class="card ">
							<div class="card-header">
								<h3 class="card-title">Personal Information</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Name</label>
											<input type="text" name="o_name" value="{{$company->o_name}}" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Email</label>
											<input type="email" name='o_email' disabled value="{{Auth::user()->email}}" class="form-control" placeholder="Email Address">
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="form-group mb-0">
											<label class="form-label">Phone Number</label>
											<input type="number" name='o_phone' value="{{$company->o_phone}}" class="form-control @error('o_phone') is-invalid @enderror" placeholder="Number">
											@error('o_phone')
												<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Social Media Information</h3>
							</div>
							<div class="card-body">
								<div class="input-group mb-4">
									<div class="input-group-text">
										<div class="input-group-text w-7 p-0 border-0 bg-transparent">
											<i class="fa fa-facebook tx-16 lh-0 op-6 text-center mx-auto"></i>
										</div>
									</div><!-- input-group-text -->
									<input name='facebook' class="form-control" value="{{$company->facebook}}" placeholder="Facebook URL" type="text">
								</div>
								<div class="input-group mb-4">
									<div class="input-group-text">
										<div class="input-group-text w-7 p-0 border-0 bg-transparent">
											<i class="fa fa-instagram tx-16 lh-0 op-6 text-center mx-auto"></i>
										</div>
									</div><!-- input-group-text -->
									<input name='instagram' value="{{$company->instagram}}" class="form-control" placeholder="Instagram URL" type="text">
								</div>
								<div class="input-group mb-4">
									<div class="input-group-text">
										<div class="input-group-text w-7 p-0 border-0 bg-transparent">
											<i class="fa fa-linkedin-square tx-16 lh-0 op-6 text-center mx-auto"></i>
										</div>
									</div>
									<input name='linkedin' value="{{$company->linkedin}}" class="form-control" placeholder="Linkedin URL" type="text">
								</div>
								<div class="input-group mb-4">
									<div class="input-group-text">
										<div class="input-group-text w-7 p-0 border-0 bg-transparent">
											<i class="fa fa-pinterest-p tx-16 lh-0 op-6 text-center mx-auto"></i>
										</div>
									</div>
									<input name='pinterest' value="{{$company->pinterest}}" class="form-control" placeholder="Pinterest URL" type="text">
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Package</h3>
							</div>
							<div class="card-body">
								<div class="control-group form-group">
									<label class="form-label text-dark">Ad Post Package</label>
									<div class="d-md-flex ad-post-details">
										<label class="custom-control custom-radio mb-2 me-4">
											<input type="radio" class="custom-control-input" name="packeg1" value="1" checked="">
											<span class="custom-control-label"><a class="text-muted">Free</a></span>
										</label>
										<label class="custom-control custom-radio  mb-2 me-4">
											<input type="radio" class="custom-control-input" name="radios1" value="option2" >
											<span class="custom-control-label"><a class="text-muted">60 days / 20$</a></span>
										</label>
										<label class="custom-control custom-radio  mb-2 me-4">
											<input type="radio" class="custom-control-input" name="radios1" value="option3" >
											<span class="custom-control-label"><a class="text-muted">6months / 50$</a></span>
										</label>
										<label class="custom-control custom-radio  mb-2">
											<input type="radio" class="custom-control-input" name="radios1" value="option4" >
											<span class="custom-control-label"><a class="text-muted">1 year / 80$</a></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class="float-end mb-5 mb-lg-0">
                            <input type="hidden" name='user_id' value="{{Auth::user()->id}}">
							<button type='submit'  class="btn btn-primary btn-lg">Save & Publish</button>
						</div>
					</div>
                    </form>
					<div class="col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Terms And Conditions</h3>
							</div>
							<div class="card-body p-0">
								<ul class="list-unstyled widget-spec mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium listings are active for depend on package.
									</li>
									<li class="ms-5 mb-0">
										<a href="tips.html"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Benefits Of Premium Ad</h3>
							</div>
							<div class="card-body p-0">
								<ul class="list-unstyled widget-spec mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium listings Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium listings are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium listings will be Show in Google results
									</li>
								</ul>
							</div>
						</div>
						<div class="card mb-0 overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Safety Tips For Buyers</h3>
							</div>
							<div class="card-body p-0">
								<ul class="list-unstyled widget-spec  mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
									</li>
									<li class="ms-5 mb-0">
										<a href="tips.html"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Add posts-section-->

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

