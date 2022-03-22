@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba digital marketing agency</title> @endsection

@section('content')

       

        <!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Register</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Register</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

		<!--Register-section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
				    <div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
								<div class="card-body">
									<h3>Register</h3>
									<div class="text-center">
										<div class="btn-list d-flex">
											<a href="https://www.google.com/gmail/" class="btn btn-google btn-block"><i class="fa fa-google fa-1x me-2"></i> Google</a>
											<a href="https://twitter.com/" class="btn btn-twitter"><i class="fa fa-twitter fa-1x"></i></a>
											<a href="https://www.facebook.com/" class="btn btn-facebook"><i class="fa fa-facebook fa-1x"></i></a>
										</div>
									</div>
								</div>
								<hr class="divider">
                                 <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-dark" :errors="$errors" />
								<form method="POST" action="{{ route('register') }}" id="Register" class="card-body" tabindex="500">
                                    @csrf 
									<div class="name">
                                        <input id="name" type="text" name="name" value="{{old('name')}}" required autofocus />
										<label>Name</label>
									</div>
									<div class="mail">
                                    <x-input id="email" type="email" name="email" value="{{old('email')}}" required />
										<label>E-mail</label>
									</div>

									<div class="passwd">
                                        <input id="password" type="password" name="password" required autocomplete="new-password" />
										<label>Password</label>
									</div>

                                    <div class="passwd">
                                        <input id="password_confirmation" type="password"  name="password_confirmation" required />
										<label>Confirm Password</label>
									</div>
									<div class="submit">
                                        <button type="submit" class="btn btn-secondary btn-block">Register</button>
									</div>
									<p class="text-dark mb-0">Already have an account?<a href="{{ route('login') }}" class="text-secondary ms-1">Login</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register-section-->

		<!--Newsletter-->
		<section class="sptb bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-6 col-md-12">
						<div class="sub-newsletter d-sm-flex">
							<i class="fa fa-envelope fs-22 me-2"></i>
							<div>
								<h3 class="mb-1">Subscribe To Our Newsletter</h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-xl-6 col-md-12 mt-4 mt-lg-0">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg" placeholder="Enter your Email">
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
