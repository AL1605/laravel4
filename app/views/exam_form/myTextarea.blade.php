@extends('layouts.master') <!-- Test Textarea -->

@section('content')

	{{ Form::label('address', 'Address : ') }}
	
	{{ Form::textArea('address') }}
	
@stop

