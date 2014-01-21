@extends('layouts.master') <!-- Test Model -->

@section('content')

<h1>belongsTo</h1>

@foreach($model as $value)
	<b>Category : </b>{{ $value->category->name }}<br />
	<b>Name : </b>{{ $value->name }}<br />
	<b>Price : </b>{{ $value->price }}<br />
@endforeach

@stop