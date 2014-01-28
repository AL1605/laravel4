@extends('layouts.master') <!--Test DB::select-->

@section('content')

<h1>DB::select</h1>

@foreach($data as $value)
	<div style="border: 1px solid; padding: 10px;">
		<b>{{ $value->category_name }}</b><br />
		{{ $value->name }}<br />
		<a href="{{ URL::to('update', $value->id) }}">Update</a> 
		| 
		<a href="{{ URL::to('delete', $value->id) }}">Delete</a>
	</div>
@endforeach

@stop