@extends('layouts.master') <!-- Test Checkbox -->

@section('content')

	{{ Form::checkbox('name', 'value') }} MyCheckbox
	
@stop

