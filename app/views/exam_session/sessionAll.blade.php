@extends('layouts.master') <!-- Test Session all -->

@section('content')

<h1>Request::all()</h1>

@foreach(Session::all() as $key => $value)

	<div>{{ $key }} = {{ print_r($value) }}</div>

@endforeach

@stop