@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba digital marketing agency</title> @endsection

@section('content')
 <!--Sliders Section-->
 <section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Forgot Password</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Forgot Password</li>
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
							<div class="wrapper wrapper2 p-4">







                                <div class="mb-4 text-sm text-gray-600 text-dark">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4 text-dark" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-dark" :errors="$errors" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <label for="email" >Email</label>

                                        <input id="email"  type="email" name="email" value="{{old('email')}}" required autofocus />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <button type='submit' class='btn btn-secondary btn-block' >Email Password Reset Link</button>
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
