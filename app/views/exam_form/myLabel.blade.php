@extends('layouts.master') <!-- Test Label -->

@section('content')
	{{
		Form::label(
			'myLabel', 'My Label !!!', array('style'=>'color:red; font-size:30px')
		)
	}}
	
@stop

