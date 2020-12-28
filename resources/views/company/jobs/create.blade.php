@extends('layout.company')
@section('content1')
<!-- <h1>Create Jobs</h1> -->
<!-- @if(Session::has('JobCreatedMessage'))

<div class="alert alert-success"><h4>{{Session::get('JobCreatedMessage')}}</h4></div>

@endif -->

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script>
$(document).ready(function () {
  $('.date').datetimepicker({
    format: 'MM/DD/YYYY',
    locale: 'en'
  });
</script> -->
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
<form method="post" action="{{route('companyjob.store')}}" enctype="multipart/form-data" class="user">
    @csrf 
    <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" name="jname">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Job Type" name="jtype">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Job Address" name="jaddress">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="Job Salary Minimum" name="jsalary_min">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Job Salary Maximum" name="jsalary_max">
                  </div>
                </div>
                <div class="form-group">
                   <!-- <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Job Description" name="jdescription">  -->
                  <textarea class="form-control form-control-user" name="jdescription" placeholder="Job Description"> </textarea>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" class="form-control-file form-control-user" id="exampleInputPassword" placeholder="Select any image for the job" name="jimage">
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Date" name="jdeadline">
                  </div>
                    </div>
                    <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Experience" name="jexperience">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Job Requirements" name="jrequirements">
                  </div>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Create   Job
                </button>
                <hr>
                


</form>

@endsection