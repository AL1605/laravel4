@extends('layouts.master') <!-- Test Session push -->

@section('content')

<h1>Request::push()</h1>

@foreach(Session::get('myTime') as $time)

	<div>Now = {{ $time }}</div>

@endforeach

@stop