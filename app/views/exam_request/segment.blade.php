@extends('layouts.master') <!-- การใช้งาน Request segment -->

@section('content')

<h1>Request::segment()</h1>

<div>segment1 = {{ Request::segment(1) }}</div>
<div>segment2 = {{ Request::segment(2) }}</div>
<div>segment3 = {{ Request::segment(3) }}</div>

@stop