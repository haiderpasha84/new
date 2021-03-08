@extends('layout.company')
@section('content1')

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="th-sm">ID</th>
        <th class="th-sm">NAME</th>
        <th class="th-sm">EMAIL</th>
        <th class="th-sm">REASON</th>
        <th class="th-sm">STATUS</th>
    </tr>
    </thead>
    <tbody>
   
    @foreach($requests as $request)
    @if($requests->user_id == auth()->id())
    <tr>
        <td>{{$request->id}}</td>
        <td>{{$request->fullname}}</td>
        <td>{{$request->email}}</td>
        <td>{{$request->title}}</td>
        <td>{{$request->state}}</td>
        <td></td>
    </tr>
    @endif
    @endforeach
    
    </tbody>
</table>



@endsection