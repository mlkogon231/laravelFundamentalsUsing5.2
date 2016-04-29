@extends('app')

@section('content')
	<h1>{{  $strain->strain  }}</h1>
	<article>
		{{ $strain->type }}
	</article>

@stop
