<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/4.0.0/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->


@extends('layout.company')
@section('content1')

    <h1>All Jobs</h1>
    @if(Session::has('message'))

      <div class="alert alert-success"><h4>{{Session::get('message')}}</h4></div>
    @elseif (Session::has('JobCreatedMessage'))
    <div class="alert alert-success"><h4>{{Session::get('JobCreatedMessage')}}</h4></div>
    @elseif (Session::has('EditMessage'))
    <div class="alert alert-success"><h4>{{Session::get('EditMessage')}}</h4></div>
    @elseif (Session::has('statusmessage'))
    <div class="alert alert-success"><h4>{{Session::get('statusmessage')}}</h4></div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Jobs Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Job ID</th>
                    <th>Posted By</th>
                      <th>Job Title</th>

                      <th>Job Type</th>
                      <th>Job Image</th>
                      <th>Job Description</th>
                      <th>Job Requirements</th>
                      <th>Job Address</th>
                      <th>Job Minimum Salary</th>
                      <th>Job Maximum salary</th>
                      <th>Job Deadline</th>
                      <th>Job Experience</th>
                      <th>Job Status</th>
                      <th>Job Created At</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Job ID</th>
                      <th>Posted By</th>
                      <th>Job Title</th>
                      <th>Job Type</th>
                      <th>Job Image</th>
                      <th>Job Description</th>
                      <th>Job Requirements</th>
                      <th>Job Address</th>
                      <th>Job Minimum Salary</th>
                      <th>Job Maximum salary</th>
                      <th>Job Deadline</th>
                      <th>Job Experience</th>
                      <th>Job Status</th>
                      <th>Job Created At</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($jobs as $job)
                    <tr>
                      <td>{{$job->id}}</td>
                      <td>{{$job->user->name}}</td>
                      <td><a href="{{route('companyjob.edit', $job->id)}}">{{$job->jname}}</a></td>
                      <td>{{$job->jtype}}</td>
                      <td>
                         <img height="40px;"height="40px;" src="{{asset('storage/'.$job->jimage)}}" alt="">
                         <!-- <img height="40px;" src="{{$job->jimage}}" alt=""> -->
                          
                      </td>
                      <td>{{$job->jdescription}}</td>
                      <td>{{$job->jrequirements}}</td>
                      <td>{{$job->jaddress}}</td>
                      <td>{{$job->jsalary_min}}</td>
                      <td>{{$job->jsalary_max}}</td>
                      <td>{{$job->jdeadline}}</td>
                      <td>{{$job->jexperience}}</td>
                      
                      <td>
                      
                      <!-- <input type="checkbox" data-id="{{ $job->id }}" name="jstatus" class="js-switch" {{ $job->jstatus == 1 ? 'checked' : '' }}> -->
                      @if($job->jstatus==1)
                        <h5>Job Active</h5>
                      
                      @else
                        <h5>Not Active</h5>
                      @endif
                      
                      </td> 
                      <td>{{$job->created_at->diffForHumans()}}</td>
                      <td>
                      
                      <form action="{{route('companyjob.destroy', $job->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-user btn-block">Delete</button>
                      </form>
                      </td>
                    </tr>
                        @endforeach
                  </tbody>
                  
                </table>
                <div class="d-flex">
                <div class="mx-auto">
                {{$jobs->links()}}
                </div>
                </div>
              </div>
            </div>
          </div>


<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
    let switchery = new Switchery(html,  { size: 'small' });
});</script>

<!-- status update -->
<script>
$(document).ready(function(){

    $('.js-switch').change(function () {
        let jstatus = $(this).prop('checked') === true ? 1 : 0;
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('job.update.status') }}',
            data: {'jstatus': jstatus, 'id': id},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script>



@endsection

@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('adminjs/demo/datatables-demo.js')}}"></script>
