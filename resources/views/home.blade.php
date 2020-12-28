@extends('layout.index')

@section('home')
  <!-- Content -->
  <div class="page-content">
		<!-- Section Banner -->
		<div class="dez-bnr-inr dez-bnr-inr-md" style="background-image:url(images/main-slider/building.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry align-m ">
					<div class="find-job-bx">
						<a href="#"><p class="site-button button-sm">Find Jobs, Employment & Career Opportunities</p></a>
						<h2 style="color:white;">Search The Jobs You Want!</h2>
						<!-- <br/> <span class="text-primary">50,000</span> Open Jobs. -->
						<form class="dezPlaceAni" action="{{ route('search') }}" method="GET" role="search">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="form-group">
										<label>Job Title, Keywords, or Phrase</label>
										<div class="input-group">
											<input type="text" class="typeahead form-control" placeholder="">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-search"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<label>City, State or ZIP</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="">
											<div class="input-group-append">
											  <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-group">
										<select>
											<option>Select Sector</option>
											<option>Construction</option>
											<option>Corodinator</option>
											<option>Employer</option>
											<option>Financial Career</option>
											<option>Information Technology</option>
											<option>Marketing</option>
											<option>Quality check</option>
											<option>Real Estate</option>
											<option>Sales</option>
											<option>Supporting</option>
											<option>Teaching</option> 
										</select>
									</div>
								</div>
								<div class="col-lg-2 col-md-6">
									<button type="submit" class="site-button btn-block">Find Job</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
		<!-- Section Banner END -->
        <!-- About Us -->
		<div class="section-full job-categories content-inner-2 bg-white" style="background-image:url(../images/pattern/pic1.html);">
			<div class="container">
				<div class="section-head d-flex head-counter clearfix">
					<div class="mr-auto">
						<h2 class="m-b5">Popular Categories</h2>
						<h6 class="fw3">20+ Catetories work wating for you</h6>
					</div>
					<div class="head-counter-bx">
						<h2 class="m-b5 counter">1800</h2>
						<h6 class="fw3">Jobs Posted</h6>
					</div>
					
				</div>
				
				<div class="row sp10">
					@foreach($categories as $category)
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="icon-bx-wraper">
							<div class="icon-content">
								<div class="icon-md text-primary m-b20">{{$category->name}}</div>
								<a href="#" class="dez-tilte">{{$category->name}}</a>
								<p class="m-a0"></p>
								<div class="rotate-icon">{{$category->name}}</div> 
							</div>
						</div>			
					</div>
					@endforeach	
				</div>		
			</div>
		</div>
		<!-- About Us END -->
		<!-- Call To Action -->
		<div class="section-full content-inner bg-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 section-head text-center">
						<h2 class="m-b5">Featured Cities</h2>
						<h6 class="fw4 m-b0">20+ Featured Cities Added Jobs</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic1.jpg)">
							<div class="city-info">
								<h5>Iraq</h5>
								<span>765 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic2.jpg)">
							<div class="city-info">
								<h5>Argentina</h5>
								<span>352 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic3.jpg)">
							<div class="city-info">
								<h5>Indonesia</h5>
								<span>893 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic4.jpg)">
							<div class="city-info">
								<h5>Gambia</h5>
								<span>502 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic5.jpg)">
							<div class="city-info">
								<h5>India</h5>
								<span>765 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic6.jpg)">
							<div class="city-info">
								<h5>Thailand</h5>
								<span>352 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic7.jpg)">
							<div class="city-info">
								<h5>Banjul</h5>
								<span>893 Jobs</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-md-6 m-b30">
						<div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic8.jpg)">
							<div class="city-info">
								<h5>Spain</h5>
								<span>502 Jobs</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
		<!-- Our Job -->
		<div class="section-full bg-white content-inner-2">
			<div class="container">
				<div class="d-flex job-title-bx section-head">
					<div class="mr-auto">
						<h2 class="m-b5">Recent Jobs</h2>
						<h6 class="fw4 m-b0">20+ Recently Added Jobs</h5>
					</div>
					<div class="align-self-end">
						<a href="{{route('browsejob')}}" class="site-button button-sm">Browse All Jobs <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<ul class="post-job-bx">
							<li>
							
						@foreach ($jobs as $job)
						@if($job->jstatus==1)
								<a href="{{route('jobdetail', $job->id)}}">
									<div class="d-flex m-b30">
										<div class="job-post-company">
											<span><img src="{{asset('storage/'.$job->jimage)}}" alt=""></span>
										</div>
										<div class="job-post-info">
											<h4>{{ $job->jname }}</h4>
											<ul>
												<li><i class="fa fa-map-marker"></i> {{ $job -> jaddress }}</li>
												<li><i class="fa fa-bookmark-o"></i> {{ $job->jtype }}</li>
												<li><i class="fa fa-clock-o"></i>{{ $job->created_at->diffForHumans() }}</li>
											</ul>
										</div>
									</div>
									<div class="d-flex">
										<div class="job-time mr-auto">
											<span>{{ $job->jtype }}</span>
										</div>
										<div class="salary-bx">
											<span>Rs{{ $job->jsalary_min }} - Rs {{ $job->jsalary_max }}</span>
										</div>
									</div>
									<span class="post-like fa fa-heart-o"></span>
								</a>
							</li>
						
						
						@endif
						@endforeach

						
							
						</ul>
						<div class="m-t30">
							<div class="d-flex">
								<!-- <a class="site-button button-sm mr-auto" href="#"><i class="ti-arrow-left"></i> Prev</a>
								<a class="site-button button-sm" href="#">Next <i class="ti-arrow-right"></i></a> -->
								<div class="mx-auto">
								{{$jobs->links()}}
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="sticky-top">
							<!-- <div class="candidates-are-sys m-b30">
								<div class="candidates-bx">
									<div class="testimonial-pic radius"><img src="images/testimonials/pic3.jpg" alt="" width="100" height="100"></div>
									<div class="testimonial-text">
										<p>I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">Richard Anderson</strong> <span class="testimonial-position">Nevada, USA</span> </div>
								</div>
							</div> -->
							<div class="quote-bx">
								<div class="quote-info">
									<h4>Make a Difference with Your Online Resume!</h4>
									<p>Your resume in minutes with JobVac resume assistant is ready!</p>
									<a href="{{route('register')}}" class="site-button">Create an Account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Our Job END -->	
		<!-- Call To Action -->
		<div class="section-full p-tb70 overlay-black-dark text-white text-center bg-img-fix" style="background-image: url(images/background/bg4.jpg);">
			<div class="container">
				<div class="section-head text-center text-white">
					<h2 class="m-b5">Testimonials</h2>
					<h5 class="fw4">Few words from candidates</h5>
				</div>
				<div class="blog-carousel-center owl-carousel owl-none">
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic1.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong> 
								<span class="testimonial-position">Student</span> 
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic2.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong> 
								<span class="testimonial-position">Student</span> 
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-5">
							<div class="testimonial-text">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
							</div>
							<div class="testimonial-detail clearfix">
								<div class="testimonial-pic radius shadow">
									<img src="images/testimonials/pic3.jpg" width="100" height="100" alt="">
								</div>
								<strong class="testimonial-name">David Matin</strong> 
								<span class="testimonial-position">Student</span> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call To Action END -->
		<!-- Our Latest Blog -->
		
		<!-- Our Latest Blog -->
    </div>



@endsection
