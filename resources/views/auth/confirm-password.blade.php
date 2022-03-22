@extends('frontend.layout.template')

@section('title') <title>Rentsheba | Rentsheba digital marketing agency</title> @endsection

@section('content')
 <!--Sliders Section-->
 <section>
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Confirm Password</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Confirm Password</li>
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
                                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                </div>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-dark" :errors="$errors" />

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <!-- Password -->
                                    <div>
                                        <label for="password" >Password </label>

                                        <input id="password"  type="password" name="password" required autocomplete="current-password" />
                                    </div>

                                    <div class="flex justify-end mt-4">
                                        <button class='btn btn-secondary btn-block' type='submit'>Confirm </button>
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
