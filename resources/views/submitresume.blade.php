@extends('layout.index')
@section('resume')
 <!-- Content -->
 <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-dark" style="background-image:url(images/banner/laptop.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Submit Resume</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Submit Resume</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
		
        <div class="content-block">
			<!-- Submit Resume -->
			<div class="section-full bg-white submit-resume content-inner-2">
				<div class="container">
					<form action="{{route('resume.store', $job->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<input type="hidden" class="form-control" name="job_id" value = "{{$job->id}}">
					</div>

						<div class="form-group">
							<label>Your name</label>
							<input type="text" class="form-control" placeholder="Your Full Name" name="fullname">
						</div>
						<div class="form-group">
							<label>Your email</label>
							<input type="email" class="form-control" placeholder="info@gmail.com" name="email">
						</div>
						<div class="form-group">
							<label>State</label>
							<select name="state">
								<option>New York</option>
								<option>London</option>
								<option>Los Angeles</option>
							</select>
						</div>
						<div class="form-group">
							<label>Professional title</label>
							<input type="text" class="form-control" placeholder="Web Designer" name="title">
						</div>
						<div class="form-group">
							<label>Location</label>
							<input type="text" class="form-control" placeholder="London"name="location">
						</div>
						<div class="form-group">
							<label>Photo (optional)</label>
							<div class="custom-file">
								<input type="file" class="site-button" id="customFile" name="photo">
							</div>
						</div>
						
						<div class="form-group">
							<label>Resume Content</label>
							<textarea class="form-control" placeholder="Your Content" name="content"></textarea>
						</div>
						<div class="form-group">
							<label>Skills</label>
							<input type="text" class="form-control" placeholder="Your Skills" name="skills">
						</div>
						<button type="submit" class="site-button">Submit</button>
					</form>
				</div>
			</div>
            <!-- Submit Resume END -->
		</div>
    </div>
    <!-- Content END-->

@endsection