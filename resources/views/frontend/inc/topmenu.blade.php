<!--Topbar-->
<div class="header-main">
		<div class="top-bar p-3">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-sm-4 col-7">
						<div class="top-bar-left d-flex">
							<div class="clearfix">
								<ul class="socials d-lg-none">
									<li>
										<a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
									</li>
									<li>
										<a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
									</li>
								</ul>
								<div class="header-search-logo d-none d-lg-block ">
									<a href="{{url('/')}}" class="d-flex logo-height logo-svg header-logo">
										<svg style="enable-background:new 0 0 512 512;" version="1.1"
											viewbox="0 0 512 512" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
											<g>
												<g>
													<g>
														<path
															d="M268.673,266.152c10.947-1.477,18.624-11.549,17.146-22.495c-1.478-10.947-11.55-18.62-22.495-17.146 c-2.41,0.325-4.875,0.49-7.325,0.49c-29.775,0-54-24.225-54-54c0-29.775,24.225-54,54-54c29.775,0,54,24.225,54,54 c0,2.949-0.238,5.903-0.707,8.781c-1.777,10.902,5.62,21.181,16.521,22.958c10.914,1.776,21.181-5.62,22.958-16.521 c0.816-5,1.229-10.12,1.229-15.219c0-51.832-42.168-94-94-94c-51.832,0-94,42.168-94,94c0,51.832,42.168,94,94,94 C260.233,267,264.498,266.714,268.673,266.152z">
														</path>
														<path
															d="M438.765,396.608c-15.385-8.07-36.508-14.869-62.782-20.208c-10.83-2.197-21.382,4.794-23.582,15.617 c-2.199,10.824,4.793,21.383,15.617,23.582c40.529,8.235,57.145,18.119,61.938,22.912c-3.531,3.538-15.338,12.42-50.025,20.77 C345.858,467.483,301.847,472,256,472s-89.858-4.517-123.93-12.719c-34.688-8.35-46.494-17.231-50.025-20.77 c4.793-4.793,21.408-14.677,61.938-22.912c10.824-2.199,17.816-12.758,15.617-23.582c-2.199-10.824-12.759-17.813-23.582-15.617 c-26.274,5.339-47.397,12.138-62.782,20.208C51.846,407.828,41,421.938,41,438.544c0,24.814,24.166,44.021,71.826,57.087 C151.331,506.187,202.178,512,256,512s104.669-5.813,143.174-16.369C446.834,482.565,471,463.358,471,438.544 C471,421.938,460.154,407.828,438.765,396.608z">
														</path>
														<path
															d="M239.094,422.686C242.759,428.484,249.141,432,256,432s13.241-3.516,16.906-9.315 c18.337-29.01,42.204-54.457,65.286-79.064c45.101-48.082,91.737-97.802,91.808-171.645 c-0.054-46.29-18.244-89.628-51.221-122.032C346.002,17.737,302.397,0,256,0c-46.369,0-89.818,17.76-122.343,50.008 C101.044,82.344,83.054,125.661,83,172.02c0.071,73.92,46.48,123.728,91.361,171.897 C197.205,368.434,220.826,393.785,239.094,422.686z M256,40c73.804,0,133.916,59.226,134,131.981 c-0.055,57.999-37.558,97.98-80.982,144.275c-17.974,19.163-36.399,38.805-53.006,60.732 c-16.449-21.772-34.641-41.296-52.385-60.34c-43.233-46.399-80.57-86.472-80.627-144.625C123.085,97.991,181.506,40,256,40z">
														</path>
													</g>
												</g>
											</g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
											<g></g>
										</svg>
										<h2 class="font-weight-semibold mb-0 fs-26 text-dark mt-1 pe-5">Rentsheba</h2>
									</a>
								</div>
							</div>
							<div class="clearfix">
								<ul class="contact border-start">
									<li class="me-5 d-lg-none">
										<a href="javascript:void(0)" class="callnumber text-dark"><span><i class="fa fa-phone me-1"></i>:
												+425 345 8765</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 col-sm-8 col-5">
						<div class="top-bar-right">
							<ul class="custom ">
								@if(Auth::check())
								<li class="dropdown">
									<a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><i
											class="fa fa-home me-1"></i><span> My Dashboard</span></a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<a href="{{route('user-dashboard')}}" class="dropdown-item">
											<i class="dropdown-icon icon icon-user"></i> My Profile
										</a>
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="dropdown-icon icon icon-speech"></i> Inbox
										</a>
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="dropdown-icon icon icon-bell"></i> Notifications
										</a>
										<a href="#" class="dropdown-item">
											<i class="dropdown-icon  icon icon-settings"></i> Account Settings
										</a>
										<form method="POST" action="{{ route('logout') }}">
                            			@csrf
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
											<i class="dropdown-icon icon icon-power"></i> Log out
										</a>
										</form>
									</div>
								</li>
								@else
								<li>
									<a href="{{route('register')}}" class="text-dark"><i class="fa fa-user me-1"></i>
										<span>Register</span></a>
								</li>
								<li>
									<a href="{{route('login')}}" class="text-dark"><i class="fa fa-sign-in me-1"></i>
										<span>Login</span></a>
								</li>
								@endif
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Header -->
		<div class="sticky">
			<div class="horizontal-header clearfix ">
				<div class="container">
					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
					<span class="smllogo"><a href="{{url('/')}}" class="d-flex logo-height logo-svg">
							<svg style="enable-background:new 0 0 512 512;" version="1.1" viewbox="0 0 512 512" x="0px"
								xmlns="http://www.w3.org/2000/svg" y="0px">
								<g>
									<g>
										<g>
											<path
												d="M268.673,266.152c10.947-1.477,18.624-11.549,17.146-22.495c-1.478-10.947-11.55-18.62-22.495-17.146 c-2.41,0.325-4.875,0.49-7.325,0.49c-29.775,0-54-24.225-54-54c0-29.775,24.225-54,54-54c29.775,0,54,24.225,54,54 c0,2.949-0.238,5.903-0.707,8.781c-1.777,10.902,5.62,21.181,16.521,22.958c10.914,1.776,21.181-5.62,22.958-16.521 c0.816-5,1.229-10.12,1.229-15.219c0-51.832-42.168-94-94-94c-51.832,0-94,42.168-94,94c0,51.832,42.168,94,94,94 C260.233,267,264.498,266.714,268.673,266.152z">
											</path>
											<path
												d="M438.765,396.608c-15.385-8.07-36.508-14.869-62.782-20.208c-10.83-2.197-21.382,4.794-23.582,15.617 c-2.199,10.824,4.793,21.383,15.617,23.582c40.529,8.235,57.145,18.119,61.938,22.912c-3.531,3.538-15.338,12.42-50.025,20.77 C345.858,467.483,301.847,472,256,472s-89.858-4.517-123.93-12.719c-34.688-8.35-46.494-17.231-50.025-20.77 c4.793-4.793,21.408-14.677,61.938-22.912c10.824-2.199,17.816-12.758,15.617-23.582c-2.199-10.824-12.759-17.813-23.582-15.617 c-26.274,5.339-47.397,12.138-62.782,20.208C51.846,407.828,41,421.938,41,438.544c0,24.814,24.166,44.021,71.826,57.087 C151.331,506.187,202.178,512,256,512s104.669-5.813,143.174-16.369C446.834,482.565,471,463.358,471,438.544 C471,421.938,460.154,407.828,438.765,396.608z">
											</path>
											<path
												d="M239.094,422.686C242.759,428.484,249.141,432,256,432s13.241-3.516,16.906-9.315 c18.337-29.01,42.204-54.457,65.286-79.064c45.101-48.082,91.737-97.802,91.808-171.645 c-0.054-46.29-18.244-89.628-51.221-122.032C346.002,17.737,302.397,0,256,0c-46.369,0-89.818,17.76-122.343,50.008 C101.044,82.344,83.054,125.661,83,172.02c0.071,73.92,46.48,123.728,91.361,171.897 C197.205,368.434,220.826,393.785,239.094,422.686z M256,40c73.804,0,133.916,59.226,134,131.981 c-0.055,57.999-37.558,97.98-80.982,144.275c-17.974,19.163-36.399,38.805-53.006,60.732 c-16.449-21.772-34.641-41.296-52.385-60.34c-43.233-46.399-80.57-86.472-80.627-144.625C123.085,97.991,181.506,40,256,40z">
											</path>
										</g>
									</g>
								</g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
								<g></g>
							</svg><span class="font-weight-semibold mb-0 fs-26 text-dark">RENTSHEBA</span></a>
					</span>
					<a href="{{route('add-listing')}}" class="callusbtn"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<!-- /Mobile Header -->

		<div class="horizontal-main bg-dark-transparent clearfix">
			<div class=" header-style horizontal-mainwrapper container clearfix">
				<!--Nav-->
				<nav class="horizontalMenu clearfix d-md-flex">
					<ul class="horizontalMenu-list">
						<li><a href="{{url('/')}}">Home </a></li>
						<li><a href="javascript:void(0)">Domain <span class="fa fa-caret-down m-0"></span></a>
							<ul class="sub-menu">
								<li><a href="{{route('domain.name.search')}}"> Domain Registration </a></li>
						
							</ul>
						</li>
						<li><a href="javascript:void(0)">Hosting <span class="fa fa-caret-down m-0"></span></a>
							<ul class="sub-menu">
								<li><a href="{{route('web.hosting')}}">Web Hosting</a></li>
								<li><a href="{{route('wordpress.hosting')}}">WordPress Hosting</a></li>
								<li><a href="{{route('vps.hosting')}}">VPS Hosting</a></li>
							</ul>
						</li>
						<li><a href="javascript:void(0)">Web Service <span class="fa fa-caret-down m-0"></span></a>
							<ul class="sub-menu">
								<li><a href="{{route('web-design')}}">Web Design</a></li>
								<li><a href="{{route('web-development')}}">Web Development</a></li>
								<li><a href="{{route('local.seo.service')}}">Local SEO Service</a></li>
							</ul>
						</li>
						<li><a href="{{route('ambulnace-service')}}">Ambulance<span class="fa fa-caret-down m-0"></span></a>
							<ul class="sub-menu">
								<li><a href="{{route('ac-ambulnace')}}">Ac Ambulance</a></li>
								<li><a href="{{route('non-ac-ambulnace')}}">Non Ac Ambulance</a></li>
								<li><a href="{{route('freezing-ambulnace')}}">Freezing Ac Ambulance</a></li>
								<li><a href="{{route('icu-ambulnace')}}">ICU Ambulance service</a></li>
							</ul>
						</li>
						
						
						<li class="d-lg-none mt-5 pb-5 mt-lg-0">
							<span><a class="btn btn-orange" href="ad-list.html">Add Listing</a></span>
						</li>
					</ul>
					<ul class="mb-0">
						<li class="mt-2 d-none d-lg-flex">
							@php  $companyCoutn = App\Models\User::businessCount() @endphp
							@if( $companyCoutn > 0)
								
								<span><a class="btn btn-secondary ad-post" ><i
										class=" text-white"></i> {{Auth::user()->name}} {{Auth::user()->last_name}}</a></span>
							@else
							<span><a class="btn btn-secondary ad-post" href="{{route('add-listing')}}"><i
										class="fa fa-plus text-white"></i> Add Listing</a></span>
							@endif
							
						</li>
					</ul>
				</nav>
				<!--Nav-->
			</div>
			<div class="body-progress-container">
				<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="myBar"></div>
			</div>
		</div>
	</div>
