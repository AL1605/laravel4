@extends('layouts.master') <!-- Test Filefield -->

@section('content')

	{{ Form::label('img', 'Upload : ') }}
	{{ Form::file('img') }}
	
@stop

