@extends('layouts.master') <!-- Test cookie forever -->

@section('content')

<h1>Cookie::forever</h1>

Cookie = {{ Cookie::get('myCookie') }}

@stop