@extends('layouts.master') <!-- Test Textpassword -->

@section('content')

	{{ Form::label('password', 'Password : ') }}
	
	{{ Form::password('password') }}
	
@stop

