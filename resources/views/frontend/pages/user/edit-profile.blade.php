@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba post listing</title> @endsection

@section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">My Dashboard</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

		<!--User Dashboard-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					@include('frontend.inc.user-leftmenu')
					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0 overflow-hidden">
							<div class="card-header">
								<h3 class="card-title">Edit Profile</h3>
							</div>
							<form action="{{route('user.update', Auth::user()->id)}}" method='POST' enctype='multipart/form-data'>
								@csrf 
								<div class="card-body">
									
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" name='name' value="{{Auth::user()->name}}" placeholder="First Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" name='last_name' value="{{Auth::user()->last_name}}" placeholder="Last Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" value="{{Auth::user()->email}}" disabled class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Phone Number</label>
													<input type="number" name='phone' value="{{Auth::user()->phone}}" class="form-control" placeholder="Number">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" name='address' value="{{Auth::user()->address}}" placeholder="Home Address">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" name='city' value="{{$user->city}}" class="form-control" placeholder="City">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" name="zip_code" value="{{$user->zip_code}}" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select name='cuntry' class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
														<optgroup label="Categories">
															<option>--Select--</option>
															@foreach( $countrys as $country)
															<option value="{{$country->id}}" @if( $country->id == $user->cuntry) selected @endif>{{$country->name}}</option>
															@endforeach
														</optgroup>
													</select>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">About Me</label>
													<textarea rows="5" name='description' class="form-control"  placeholder="Enter About your description" maxlength="160">{{$user->description}}</textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group mb-0">
													<label class="form-label">Upload Profile Picture</label>
													<div class="form-file">
														<input class="form-control example-file-input-custom" type="file" id="formFile" name="image">
													</div>
												</div>
											</div>
										</div>
									
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-secondary">Updated Profile</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/User Dashboard-->



@endsection