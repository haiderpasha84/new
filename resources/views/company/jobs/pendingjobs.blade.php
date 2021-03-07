@extends('layout.company')
@section('content1')


@foreach(Auth::user()->jobrequests as $request)   
    {{($request->id)}}
@endforeach




@endsection