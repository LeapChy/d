@extends('lyout.master')
@section('title')
    user index
@endsection
@section('content')
   
    <h3> index user</h3>
    <table class= "table table-hover">
        <tr>
            <th>No</th>
            <th>Name </th>
        </tr>
    @foreach ($user as $k=>$v)
        <tr>
            <td>{{$k+1}}</td>
            <td>{{$v}}</td>
        </tr>
    @endforeach
    </table>
    </div>
@endsection
@section('more')
    <h3> somthing more </h3>
@endsection
   
