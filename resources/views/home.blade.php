@extends('layout')
@section('content')
<div>
	<h1>Home page</h1>
	<form action="logout" method="post">
		@csrf
		<input type="submit" name="logout" value="logout">
	</form>
</div>
@stop