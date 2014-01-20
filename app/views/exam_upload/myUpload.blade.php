@extends('layouts.master') <!-- Test Upload -->

@section('content')

<h1>Upload Example</h1>

{{ HTML::image($myImg) }} <!-- ดึงรูปจาก folder -->

<hr />

{{ Form::open(array('url' => 'myUpload', 'files' => true)) }}

{{ Form::file('img') }}

{{ Form::submit('Upload !') }}

{{ Form::close() }}

@stop