@extends('layouts.app')

@section('content')
                     
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Login</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Login</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner-2 shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Login Your Account</h3>
					</div>
				</div>
                <div>
					<div class="max-w500 m-auto m-b30">
						<div class="p-a30 border-1 seth">
							<div class="tab-content nav">
                            <form method="POST" action="{{ route('login') }}" class="tab-pane active col-12 p-a0" id="login">
                            @csrf
								
									<h4 class="font-weight-700">LOGIN</h4>
									<p class="font-weight-600">If you have an account with us, please log in.</p>
									<div class="form-group">

										<label class="font-weight-700">{{ __('E-Mail Address') }} *</label>
                                        <input name="email" id="email"  class="form-control" placeholder="Your Email Id" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
									<div class="form-group">
										<label class="font-weight-700">{{ __('Password') }} *</label>
                                        <input id="password" name="password"  class="form-control " placeholder="Type Password" type="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                        <!-- remember me -->
                        <div class="form-group">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                       
									<div class="text-left">
                                        <button class="site-button m-r5 button-lg">{{ __('Login') }}</button>
                                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <i class="fa fa-unlock-alt"></i>   {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                        
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>

@endsection
