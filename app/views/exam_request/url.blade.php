@extends('layouts.master') <!-- การใช้งาน Request URL -->

@section('content')

<h1>Request::url()</h1>

{{ Request::url() }}

@stop