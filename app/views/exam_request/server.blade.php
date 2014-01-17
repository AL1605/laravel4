@extends('layouts.master') <!-- การใช้งาน Request server -->

@section('content')

<h1>Request::server()</h1>

IP Address = {{ Request::server('REMOTE_ADDR') }}

@stop