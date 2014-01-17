@extends('layouts.master') <!-- การใช้งาน Request path -->

@section('content')

<h1>Request::path()</h1>

{{ Request::path() }}

@stop