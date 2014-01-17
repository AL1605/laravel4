@extends('layouts.master') <!-- Test Session flush -->

@section('content')

<h1>Request::flush()</h1>

@foreach(Session::all() as $key => $value)

	<div>{{ $key }} = {{ print_r($value) }}</div>

@endforeach

@stop