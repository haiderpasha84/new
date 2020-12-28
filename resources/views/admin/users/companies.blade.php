<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/4.0.0/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->


    @extends('layout.admin')
@section('content2')

    


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
              <h6 class="m-0 font-weight-bold text-primary">All Companies Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>User ID</th>
                    
                      <th>User Name</th>

                      <th>User Email</th>
                     
                      <th>User Created At</th>
                      <th>Delete</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>User ID</th>
                    
                      <th>User Name</th>

                      
                      <th>User Email</th>
                      
                      <th>User Created At</th>
                      
                      <th>Delete</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td><a href="#">{{$user->email}}</a></td>
                     
                      <td>{{$user->created_at}}</td>
                      <td> 
                      <form action="{{route('user.destroy', $user->id)}}" method="post">
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
                
                </div>
                </div>
              </div>
            </div>
          </div>





@endsection

@section('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('adminjs/demo/datatables-demo.js')}}"></script>
