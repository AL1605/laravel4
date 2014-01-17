@extends('layouts.master') <!-- การใช้งาน input all-->

@section('content')

<h1>Request::all()</h1>

{{ Form::open(array('url' => 'inputAll')) }}

{{ Form::label('name', 'Name : ') }}
{{ Form::text('name') }}<br />

{{ Form::label('email', 'Email : ') }}
{{ Form::text('email') }}<br />

{{ Form::submit('Post !') }}<br />

{{ Form::close() }}

@if(!empty($input['name']) AND !empty($input['email']))
	Name = {{ $input['name'] }}<br />
	Email = {{ $input['email'] }}
@endif

@stop