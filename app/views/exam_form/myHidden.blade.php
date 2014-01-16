@extends('layouts.master') <!-- Test Hiddenfield -->

@section('content')

	{{ Form::hidden('id', '1234') }}
	
@stop

