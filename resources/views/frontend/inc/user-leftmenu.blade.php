					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">My Dashboard</h3>
							</div>
							<div class="card-body text-center item-user">
								<div class="profile-pic">
									<div class="profile-pic-img">
										<span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="online"></span>
										@if(Auth::user()->profile)
										<img src="{{asset('image/')}}/{{Auth::user()->profile}}" style='width:5rem;height:5rem;' class="brround" alt="user">
										@else
										<img src="{{asset('frontend/img/avater_profile.jpg')}}" style='width:5rem;height:5rem;' class="brround" alt="user">
										@endif
									</div>
									<a href="{{route('user-dashboard', Auth::user()->id)}}" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{Auth::user()->name}} @if(Auth::user()->last_name) {{Auth::user()->last_name}} @endif</h4></a>
								</div>
							</div>
							<aside class="app-sidebar doc-sidebar my-dash">
								<div class="app-sidebar__user clearfix">
									<ul class="side-menu">
										<li>
											<a class="side-menu__item" href="{{route('user-dashboard',Auth::user()->id)}}"><i class="side-menu__icon icon icon-home fs-20"></i><span class="side-menu__label ms-2">My Profile</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="{{route('customer.edit',Auth::user()->id)}}"><i class="typcn typcn-edit fs-20"></i><span class="side-menu__label ms-2">Edit Profile</span></a>
										</li>
									
										<li class="slide">
											<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="typcn typcn-folder fs-20"></i><span class="side-menu__label ms-2">Managed Listings</span><i class="angle fa fa-angle-right"></i></a>
											
										</li>
										<li>
											<a class="side-menu__item" href="#"><i class="typcn typcn-credit-card fs-20"></i><span class="side-menu__label ms-2">Payments</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="#"><i class="typcn typcn-shopping-cart fs-20"></i><span class="side-menu__label ms-2">Orders</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="#"><i class="typcn typcn-flag-outline fs-20"></i><span class="side-menu__label ms-2">Safety Tips</span></a>
										</li>
										<li>
											<a class="side-menu__item" href="#"><i class="typcn typcn-cog-outline fs-20"></i><span class="side-menu__label ms-2">Settings </span></a>
										</li>
										<li>
										<form method="POST" action="{{ route('logout') }}">
											@csrf
											<a class="side-menu__item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="typcn typcn-power-outline fs-20"></i><span class="side-menu__label ms-2">Logout</span></a>
										</form>
										</li>
									</ul>
								</div>
							</aside>
						</div>
						<div class="card my-select">
							<div class="card-header">
								<h3 class="card-title">Search Listings</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control keywords-input" id="text" placeholder="What are you looking for?">
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control form-select select2-show-search">
										<option value="1" selected="">All Categories</option>
										@foreach(App\Models\Category::where('status',1)->get() as $cate)
										<option value="2">{{$cate->name}}</option>
										@endforeach
										
									</select>
								</div>
								<div class="">
									<a href="javascript:void(0)" class="btn btn-block btn-secondary">Search</a>
								</div>
							</div>
						</div>
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Safety Tips For Buyers</h3>
							</div>
							<div class="card-body p-0">
								<ul class="list-unstyled widget-spec  mb-0">
									<li class="">
										<i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
									</li>
									<li class="">
										<i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
									</li>
									<li class="">
										<i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
									</li>
									<li class="ms-5 mb-0">
										<a href="tips.html"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
					</div>