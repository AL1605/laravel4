@extends('layouts.master') <!-- Test Session put -->

@section('content')

<h1>Request::put()</h1>

Session = {{ Session::get('myName') }}

@stop