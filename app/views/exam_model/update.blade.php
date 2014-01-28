@extends('layouts.master') <!--Test Update-->

@section('content')

<h1>Update</h1>

{{ Form::model($model) }}

{{ Form::label('category_id', 'Category : ') }}
{{ Form::select('category_id', $categoryOptions, $categorySelected) }}<br />

{{ Form::label('name : ') }}
{{ Form::text('name') }}<br />

{{ Form::label('price : ') }}
{{ Form::text('price') }}<br />

{{ Form::submit('Update !') }}

{{ Form::close() }}

@stop