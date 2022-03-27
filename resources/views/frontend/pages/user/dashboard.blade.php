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
					<!--User Profile-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body pattern-1">
                                    <div class="wideget-user">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="wideget-user-desc text-center">
                                                    <div class="wideget-user-img">
                                                        @if(Auth::user()->profile)
                                                        <img class="brround" src="{{asset('image/')}}/{{Auth::user()->profile}}" style='max-width:150px;' alt="img">
                                                        @else
                                                        <img class="brround" src="{{asset('frontend/img/avater_profile.jpg')}}" style='max-width:150px;' alt="img">
                                                        @endif
                                                    </div>
                                                    <div class="user-wrap wideget-user-info">
                                                        <a href="javascript:void(0)" class="text-white"><h4 class="font-weight-semibold">{{Auth::user()->name}} @if(Auth::user()->last_name) {{Auth::user()->last_name}} @endif</h4></a>
                                                        <div class="wideget-user-rating">
                                                            <a href="javascript:void(0)"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-star text-warning"></i></a>
                                                            <a href="javascript:void(0)"><i class="fa fa-star-o text-warning me-1"></i></a> <span class="text-white">5 (3876 Reviews)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 text-center">
                                                <div class="wideget-user-info ">
                                                    <div class="wideget-user-icons mt-2">
                                                        <a href="javascript:void(0)" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                                        <a href="javascript:void(0)" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                                        <a href="javascript:void(0)" class="google-bg"><i class="fa fa-google"></i></a>
                                                        <a href="javascript:void(0)" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wideget-user-tab wideget-user-tab3">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li class=""><a href="#tab-5" class="active" data-bs-toggle="tab">Profile</a></li>
                                            <li><a href="#tab-6" data-bs-toggle="tab" class="">Edit Profile</a></li>
                                            <li><a href="#tab-7" data-bs-toggle="tab" class="">My Listings</a></li>
                                            <li><a href="#tab-8" data-bs-toggle="tab" class="">Featured Listings</a></li>
                                            <li><a href="#tab-9" data-bs-toggle="tab" class="">Published Listings</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="br-4 mb-0 overflow-hidden br-ts-0 bg-white">
                                <div class="card-body">
                                    <div class="border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-5">
                                                <div class="profile-log-switch">
                                                    <div class="media-heading">
                                                        <h3 class="card-title mb-3 font-weight-semibold">Personal Details</h3>
                                                    </div>
                                                    <ul class="usertab-list mb-0">
                                                        <li><a href="javascript:void(0)" class="text-dark"><span style='min-width:100px; display:inline-block' class="font-weight-semibold">Full Name  </span> : {{Auth::user()->name}}</a></li>
                                                        <li><a href="javascript:void(0)" class="text-dark"><span style='min-width:100px; display:inline-block' class="font-weight-semibold">Address  </span> : {{Auth::user()->address}}</a></li>
                                                        <li><a href="javascript:void(0)" class="text-dark"><span style='min-width:100px; display:inline-block' class="font-weight-semibold">Email </span> : {{Auth::user()->email}}</a></li>
                                                        <li><a href="javascript:void(0)" class="text-dark"><span style='min-width:100px; display:inline-block' class="font-weight-semibold">Cuntry </span> :
                                                        @if(!empty(Auth::user()->cuntry))
                                                            {{Auth::user()->cuntryFunc->name}} 
                                                        @else 
                                                            -N/a-
                                                        @endif</a></li>
                                                        
                                                        <li><a href="javascript:void(0)" class="text-dark"><span style='min-width:100px; display:inline-block' class="font-weight-semibold">Phone  </span> :  @if(!empty(Auth::user()->phone)) {{Auth::user()->phone}}  @else  -N/a- @endif </a></li>
                                                        <li><a href="javascript:void(0)" class="text-dark"><span style='min-width:100px; display:inline-block' class="font-weight-semibold">Phone  </span> :  @if(!empty(Auth::user()->zip_code)) {{Auth::user()->zip_code}}  @else  -N/a- @endif </a></li>
                                                    
                                                        


                                                       
                                                    </ul>
                                                    <div class="mt-5 profie-img">
                                                        <div class="">
                                                            <div class="media-heading">
                                                                <h3 class="card-title mb-3 font-weight-semibold">Biography</h3>
                                                            </div>
                                                            <p> @if(!empty(Auth::user()->description)) {{Auth::user()->description}} @else -N/A- @endif</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-6">
                                                <form action="{{route('user.update', Auth::user()->id)}}" method='POST' enctype='multipart/form-data'>
                                                    @csrf 
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" name='name' value="{{Auth::user()->name}}" class="form-control" placeholder="First Name">
                                                                @error('name')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" name='last_name' value="{{Auth::user()->last_name}}" class="form-control" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Email address</label>
                                                                <input type="email" value="{{Auth::user()->email}}"  class="form-control desable" disabled  placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Phone Number</label>
                                                                <input type="number" name='phone' value="{{Auth::user()->phone}}" class="form-control" placeholder="Number">
                                                                @error('phone')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Address</label>
                                                                <input type="text" name='address' value="{{Auth::user()->address}}" class="form-control" placeholder="Home Address">
                                                                @error('address')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">City</label>
                                                                <input type="text" name='city' value="{{Auth::user()->city}}" class="form-control" placeholder="City">
                                                                @error('city')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Postal Code</label>
                                                                <input type="number" name='zip_code' value="{{Auth::user()->zip_code}}"  class="form-control" placeholder="ZIP Code">
                                                                @error('zip_code')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Country</label>
                                                                <select name='cuntry' class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
                                                                    <optgroup label="Categories">
                                                                        <option>--Select--</option>
                                                                        @foreach( $cuntrys as $cuntry)
                                                                        <option value="{{$cuntry->id}}" @if($cuntry->id == Auth::user()->cuntry) selected @endif>{{$cuntry->name}}</option>
                                                                        @endforeach
                                                                        
                                                                    </optgroup>
                                                                </select>
                                                                @error('cuntry')
                                                                    <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">About Me</label>
                                                                <textarea rows="5" name='description' class="form-control" placeholder="Enter About your description" maxlength="160">{{Auth::user()->description}}</textarea>
                                                                @error('description')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Upload Image</label>
                                                                <div class="form-file">
                                                                    <input class="form-control example-file-input-custom" type="file" id="formFile" name="image">
                                                                    @error('image')
                                                                        <p class="text-danger">{{$message}}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-secondary">Update Profile</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane userprof-tab" id="tab-7">
                                                @foreach( $business as $item)
                                                <div class="card overflow-hidden card-absolute">
                                                    <div class="edit-buttons-absolute">
                                                        <a class="btn btn-success btn-sm text-white" href="{{route('edit-listing' , $item->id)}}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        
                                                        <a class="btn btn-secondary btn-sm text-white" href="{{route('company-details', $item->slug)}}" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                    <div class="d-md-flex">
                                                        <div class="item-card9-img">
                                                            <div class="item-card9-imgs">
                                                                <a href="business.html"></a>
                                                                <img src="{{asset('image/' . $item->cover_photo)}}" alt="img" class="cover-image">
                                                            </div>
                                                            <div class="item-cardreview-absolute">
                                                                <div class="d-flex">
                                                                    <div class="rating-star sm my-rating-5" data-rating="4.5">
                                                                    </div>
                                                                    <span class="ms-2 font-weight-semibold">(124)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border-0 mb-0">
                                                            <div class="card-body py-4">
                                                                <div class="item-card9">
                                                                    <div class="d-flex">
                                                                        <a href="business.html">{{$item->categorys->name}}</a>
                                                                    </div>
                                                                    <a href="business.html" class="text-dark"><h4 class="font-weight-semibold mt-0">{{$item->main_title}}<i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
                                                                    <div class="item-card2-desc mt-3">
                                                                        <div class="item-card2-desc-cost">
                                                                            <h6 class="text-dark font-weight-normal mb-0 mt-0"><i class="fa fa-map-marker me-1"></i> {{$item->c_address}}</h6>
                                                                            <h6 class="text-dark font-weight-normal mb-0 mt-2"><i class="fa fa-phone me-1"></i> <a href="tel:{{$item->com_mobile}}"> {{$item->com_mobile}}</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer py-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-1"><i class="fa fa-clock-o"></i> Every day <b>9am-10pm</b></a>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-2"><i class="fa fa-heart-o"></i> Add to favorities</a>
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-0"><i class="fa fa-eye"></i> 254</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                            </div>
                                            <div class="tab-pane userprof-tab" id="tab-8">
                                                comming Soon
                                                <!-- <div class="card overflow-hidden card-absolute">
                                                    <div class="arrow-ribbon bg-success">Featured</div>
                                                    <div class="edit-buttons-absolute">
                                                        <a class="btn btn-success btn-sm text-white" href="edit-list.html" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a class="btn btn-secondary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                    <div class="d-md-flex">
                                                        <div class="item-card9-img">
                                                            <div class="item-card9-imgs">
                                                                <a href="business.html"></a>
                                                                <img src="../assets/images/products/h4.png" alt="img" class="cover-image">
                                                            </div>
                                                            <div class="item-cardreview-absolute">
                                                                <div class="d-flex">
                                                                    <div class="rating-star sm my-rating-5" data-rating="4.5">
                                                                    </div>
                                                                    <span class="ms-2 font-weight-semibold">(124)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border-0 mb-0">
                                                            <div class="card-body py-4">
                                                                <div class="item-card9">
                                                                    <div class="d-flex">
                                                                        <a href="business.html">RealEstate</a>
                                                                    </div>
                                                                    <a href="business.html" class="text-dark"><h4 class="font-weight-semibold mt-0">BHK RealEstates Consultancy <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
                                                                    <div class="item-card2-desc mt-3">
                                                                        <div class="item-card2-desc-cost">
                                                                            <h6 class="text-dark font-weight-normal mb-0 mt-0"><i class="fa fa-map-marker me-1"></i> New York, NY 10012, US-52014</h6>
                                                                            <h6 class="text-dark font-weight-normal mb-0 mt-2"><i class="fa fa-phone me-1"></i> <a href="javascript:void(0)"> 140 256-654-6859</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer py-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-1"><i class="fa fa-clock-o"></i> Every day <b>9am-10pm</b></a>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-2"><i class="fa fa-heart-o"></i> Add to favorities</a>
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-0"><i class="fa fa-eye"></i> 254</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                
                                            </div>
                                            <div class="tab-pane userprof-tab" id="tab-9">
                                                <!-- <div class="card overflow-hidden card-absolute">
                                                    <div class="arrow-ribbon bg-secondary">Published</div>
                                                    <div class="edit-buttons-absolute">
                                                        <a class="btn btn-success btn-sm text-white" href="edit-list.html" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                        <a class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a class="btn btn-secondary btn-sm text-white" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                    <div class="d-md-flex">
                                                        <div class="item-card9-img">
                                                            <div class="item-card9-imgs">
                                                                <a href="business.html"></a>
                                                                <img src="../assets/images/products/h4.png" alt="img" class="cover-image">
                                                            </div>
                                                            <div class="item-cardreview-absolute">
                                                                <div class="d-flex">
                                                                    <div class="rating-star sm my-rating-5" data-rating="4.5">
                                                                    </div>
                                                                    <span class="ms-2 font-weight-semibold">(124)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card border-0 mb-0">
                                                            <div class="card-body py-4">
                                                                <div class="item-card9">
                                                                    <div class="d-flex">
                                                                        <a href="business.html">RealEstate</a>
                                                                    </div>
                                                                    <a href="business.html" class="text-dark"><h4 class="font-weight-semibold mt-0">BHK RealEstates Consultancy <i class="ion-checkmark-circled text-success ms-1"></i></h4></a>
                                                                    <div class="item-card2-desc mt-3">
                                                                        <div class="item-card2-desc-cost">
                                                                            <h6 class="text-dark font-weight-normal mb-0 mt-0"><i class="fa fa-map-marker me-1"></i> New York, NY 10012, US-52014</h6>
                                                                            <h6 class="text-dark font-weight-normal mb-0 mt-2"><i class="fa fa-phone me-1"></i> <a href="javascript:void(0)"> 140 256-654-6859</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer py-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-1"><i class="fa fa-clock-o"></i> Every day <b>9am-10pm</b></a>
                                                                    </div>
                                                                    <div class="col col-auto">
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-2"><i class="fa fa-heart-o"></i> Add to favorities</a>
                                                                        <a href="javascript:void(0)" class="mt-1 mb-1 me-0"><i class="fa fa-eye"></i> 254</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                Comming Soon
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

					</div>
				</div>
			</div>
		</section>
		<!--/User Dashboard-->



@endsection