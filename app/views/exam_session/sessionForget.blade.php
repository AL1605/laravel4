@extends('layouts.master') <!-- Test Session forget -->

@section('content')

<h1>Request::forget()</h1>

myName = {{ Session::get('myName') }}

@stop