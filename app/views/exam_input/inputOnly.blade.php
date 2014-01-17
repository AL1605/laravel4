@extends('layouts.master') <!-- การใช้งาน input only -->

@section('content')

<h1>Request::only()</h1>

{{ Form::open(array('url' => 'inputOnly')) }}

{{ Form::label('name', 'Name : ') }}
{{ Form::text('name') }}<br />

{{ Form::label('email', 'Email : ') }}
{{ Form::text('email') }}<br />

{{ Form::submit('Post !') }}<br />

{{ Form::close() }}

Name = {{ @$input['name'] }}<br />
Email = {{ @$input['email'] }}

@stop