@extends('layouts.master') <!-- การใช้งาน Form -->

@section('content')
	{{ Form::open(array('url'=>'testPost')) }}
	{{ form::close() }}
	
@stop

