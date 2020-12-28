@extends('layout.admin')
@section('content1')
<h1>Edit Jobs</h1>
<!-- @if(Session::has('EditMessage'))

<div class="alert alert-success"><h4>{{Session::get('EditMessage')}}</h4></div>

@endif -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<h1> Create Job  </h1>
<form method="post" action="{{route('job.update', $job->id)}}" enctype="multipart/form-data" class="user">
    @csrf 
    @method('PATCH')
    <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" name="jname" value="{{$job->jname}}">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Job Type" name="jtype" value="{{$job->jtype}}">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Job Address" name="jaddress" value="{{$job->jaddress}}">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="Job Salary Minimum" name="jsalary_min"value="{{$job->jsalary_min}}">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Job Salary Maximum" name="jsalary_max" value="{{$job->jsalary_max}}">
                  </div>
                </div>
                <div class="form-group">
                   <!-- <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Job Description" name="jdescription">  -->
                  <textarea class="form-control form-control-user" name="jdescription" placeholder="Job Description">{{$job->jdescription}}</textarea>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div><img height="69px;" src="{{asset('storage/'.$job->jimage)}}" alt=""></div>
                    <input type="file" class="form-control-file form-control-user" id="exampleInputPassword" placeholder="Select any image for the job" name="jimage">
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Date" name="jdeadline" value="{{$job->jdeadline}}">
                  </div>
                    </div>
                    <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Experience" name="jexperience" value="{{$job->jexperience}}">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Job Requirements" name="jrequirements" value="{{$job->jrequirements}}">
                  </div>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Edit   Job
                </button>
                <hr>
                


</form>

@endsection