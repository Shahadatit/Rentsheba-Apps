
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
									<h3>Login</h3>
									
								</div>
								<hr class="divider">


                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <!-- Email Address -->
                                    <div class='email'>
                                        <label for="email" >Email</label>

                                        <input id="email"  type="email" name="email" value="{{old('email', $request->email)}}" required autofocus />
                                    </div>

                                    <!-- Password -->
                                    <div class="password">
                                        <label for="password">Password</label>

                                        <input id="password"  type="password" name="password" required />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="password_confirmation">
                                        <label for="password_confirmation" >Confirm Password</label>

                                        <input id="password_confirmation" 
                                                            type="password"
                                                            name="password_confirmation" required />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <button type='submit'  class="btn btn-secondary btn-block">Reset Password</button>
                                    </div>
                                </form>



                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

		

@endsection

