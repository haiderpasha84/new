<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/logonew.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Job Vac </title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/templete.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{URL::asset('css/skin/skin-1.css')}}">
	<link rel="stylesheet" href="{{URL::asset('plugins/datepicker/css/bootstrap-datetimepicker.min.css')}}"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/revolution/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/revolution/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/revolution/revolution/css/navigation.css')}}">
	<!-- Revolution Navigation Style -->

</head>
<body id="bg">
<!-- <div id="loading-area"></div> -->
<div class="page-wraper">
	<!-- header -->
    <header class="site-header mo-left header fullwidth">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="/home"><img src="images/logonew.png" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
						

						<!-- @if(!Auth::check())
							<a href="/login" class="site-button"><i class="fa fa-lock"></i> login</a>
							<a href="/register" class="site-button"><i class="fa fa-user"></i> Sign Up</a>
							<a href="/com" class="site-button"><i class="fa fa-user"></i> Join As A Company</a>
						@else
						<a class="site-button" href="{{ url('/logout') }}">Logout</a>
						@endif							 -->
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse " id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
							<li class="active">
								<a href="{{route('home')}}">Home </a>

							</li>
							<li>
								<a href="{{route('browsejob')}}">Browse Jobs </a>
							</li>
							<li>
								<a href="{{route('contactus')}}">Contact Us </a>

							</li>
							<li style="text-align: right;padding-right: 50px;">
							@if(!Auth::check())
							<a href="/login" class="site-button" style="color:white;"><i class="fa fa-lock" style="color:white;" ></i> login</a>
							<a href="/register" class="site-button"style="color:white;" ><i class="fa fa-user" style="color:white;"></i> Sign Up</a>
							<a href="/com" class="site-button" style="color:white;"><i class="fa fa-user" style="color:white;"></i> Join As A Company</a>
							@else
							<a class="site-button" style="color:white;" href="{{ url('/logout') }}" >Logout</a>
							@endif
							</li>

						</ul>	
							
								
                    </div>	
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END --> 
																	@yield('home')
																	@yield('browsejob')
																	@yield('jobdetail')
																	@yield('contactus')
																	@yield('content')
																	@yield('resume')
	<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <img src="images/logonew.png" width="180" class="m-b15" alt=""/>
							<p class="text-capitalize m-b20">Job Vac provides you a platform to start your career and helps you finding a dream job for you.</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="#" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                            <ul class="list-2 list-line">
                                <li><a href="#">Privacy & Seurty</a></li>
                                <li><a href="#">Terms of Serice</a></li>

                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Find Jobs</h5>
                            <ul class="list-2 w10 list-line">
                                <!-- <li><a href="#">US Jobs</a></li>
                                <li><a href="#">Canada Jobs</a></li> -->

                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="/home">Credits To Job Vac</a></span></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->

<!-- PAROLLER -->


</body>

</html>