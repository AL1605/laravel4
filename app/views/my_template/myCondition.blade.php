@extends('layouts.master') <!-- การใช้เงื่อนไข ใน Template -->

@section('content')
	@if(1 == 1)
		<h1 style="color: green;">
			It's True.
		</h1>
	@else
		<h1>
			It's False.
		</h1>
	@endif
	
@stop

