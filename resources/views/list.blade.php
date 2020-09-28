@extends('layout')
@section('content')
<div class="container">
	<div class="center">
	<h1>Restaurant List</h1>
	</div>
	@if(Session::get('status'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
	<table class="table">
    <thead>
      <tr>
      	<th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($list as $resto)
    <tr>
    <td>{{$resto->id}}</td>
	<td>{{$resto->name}}</td>
	<td>{{$resto->email}}</td>
	<td>{{$resto->address}}</td>
	<td><a href="/delete/{{$resto->id}}"><i class="fa fa-trash"></i></a></td>
	<td><a href="/edit/{{$resto->id}}"><i class="fa fa-edit"></i></a></td>
	</tr>
	@endforeach
    </tbody>
  </table>
</div>
@stop