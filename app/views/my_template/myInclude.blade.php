@extends('layouts.master') <!-- การใช้ Include ใน Template -->

<h1>From include</h1>
@include('hello')

@section('content')
	<h1>This is Content.</h1>
	
@stop

