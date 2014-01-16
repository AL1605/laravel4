@extends('layouts.master') <!-- Test Textfield -->

@section('content')

	{{ Form::label('name', 'Name : ') }}
	
	{{ Form::text('name') }}
	
@stop

