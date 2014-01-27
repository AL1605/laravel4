@extends('layouts.master') <!--Test Create-->

@section('content')

<h1>Create</h1>

{{ Form::open() }}

{{ Form::label('category_id', 'Category') }}
{{ Form::select('catagory_id', $categoryOption) }}<br />

{{ Form::label('name') }}
{{ Form::text('name') }}<br />

{{ Form::label('price') }}
{{ Form::text('price') }}<br />

{{ Form::submit('Insert !') }}

{{ Form::close() }}

@stop