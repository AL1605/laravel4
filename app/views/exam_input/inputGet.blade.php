@extends('layouts.master') <!-- การใช้งาน input get -->

@section('content')

<h1>Request::get()</h1>

{{ Form::open(array('url' => 'inputGet')) }}

{{ Form::label('name', 'Name : ') }}
{{ Form::text('name') }}

{{ Form::submit('Post !') }}<br />

{{ Form::close() }}

Name = {{ $name }}

@stop