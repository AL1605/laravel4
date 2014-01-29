@extends('layouts.master') <!--Test error messages-->

@section('content')

{{ Form::open() }}

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

	{{ Form::label('Name : ') }}
	{{ Form::text('name') }}<br />

	{{ Form::label('Price : ') }}
	{{ Form::text('price') }}<br />

	{{ Form::submit('Save') }}

{{ Form::close() }}

@stop