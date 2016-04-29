@extends('app')

@section('content')

<h3>Names of my family</h3>
@if (count($people))
	<ul>
		@foreach ($people as $person)
			<li>{{ $person }}</li>
		@endforeach
@endif
@stop
