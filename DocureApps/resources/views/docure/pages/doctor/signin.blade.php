@extends('docure.layouts.app')
@section('main-content')
<div class="content" style="min-height: 188px;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{url('assets/img/login-banner.png')}}" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Doctor Register <a href="{{url('login/patient')}}">Not a Doctor?</a></h3>
										</div>
										@include('validate')
										
										<!-- Register Form -->
										<form action="{{ url('doctor/register')}}" Method="Post">
											@csrf
											<div class="form-group form-focus">
												<input name="name" type="text" class="form-control floating">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input name="email" type="text" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input name="password" type="password" class="form-control floating">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="text-right">
												<a href="{{'/login'}}" class="forgot-link">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
								
						</div>
					</div>

				</div>

			</div>
@endsection