@extends('layouts.master') <!--Test Validation-->

@section('content')

{{ Form::open() }}
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	
	{{ Form::label('name') }}
	{{ Form::text('name') }}<br />
	
	{{ Form::label('price') }}
	{{ Form::text('price') }}<br />
	
	{{ Form::submit('Save') }}
{{ Form::close() }}

@stop