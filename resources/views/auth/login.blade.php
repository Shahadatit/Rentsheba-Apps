@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba digital marketing agency</title> @endsection

@section('content')


        <!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Login</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Login</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Sliders Section-->

		<!--Login-Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
								<div class="card-body">
								@if(session()->has('success'))
									<div class="alert alert-info ">
										{{ session()->get('success') }}
									</div>
								@endif
								
									<h3>Login</h3>
									<div class="text-center">
										<div class="btn-list d-flex">
											<a href="#" class="btn btn-google btn-block"><i class="fa fa-google fa-1x me-2"></i> Google</a>
											<a href="#" class="btn btn-twitter"><i class="fa fa-twitter fa-1x"></i></a>
											<a href="#" class="btn btn-facebook"><i class="fa fa-facebook fa-1x"></i></a>
										</div>
									</div>
								</div>
								<hr class="divider">
								
                                 <!-- Session Status -->
                                    <x-auth-session-status class="mb-4 text-dark" :status="session('status')" />
                                    <x-auth-validation-errors class="mb-4 text-dark" :errors="$errors" />
								<form method="POST" action="{{ route('login') }}" id="login" class="card-body" tabindex="500">
                                    @csrf
									<div class="mail">
									
                                        <input id="email" type="email" name="email" value="{{old('email')}}" required autofocus />
										<label>Mail or Username</label>
									</div>
									<div class="passwd">
										
                                        <input id="password" type="password" name="password" required autocomplete="current-password" />
										<label>Password</label>
									</div>
									<div class="submit">
                                        <button type='submit'  class="btn btn-secondary btn-block">Loing</button>
										
									</div>
									<p class="mb-2"><a href="{{ route('password.request') }}" >Forgot Password</a></p>
									<p class="text-dark mb-0">Don't have account?<a href="{{route('register')}}" class="text-secondary ms-1">Sign UP</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

		

@endsection
