@extends('layout')
@section('content')
<div class="container">
	<div class="center">
		<h1>Add Restaurant</h1>
		</div>
<form action="store" method="post">
	@csrf
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputName1" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
    <input type="address" name="address" class="form-control" id="exampleInputAddress1" placeholder="Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@stop