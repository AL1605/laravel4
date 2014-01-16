@extends('layouts.master') <!-- Test Drop-Down List -->

@section('content')

	{{ Form::label('ddl', 'DDL = Dropdown List') }} <br>
	
	{{ Form::select('ddl', $options) }}
	
@stop

