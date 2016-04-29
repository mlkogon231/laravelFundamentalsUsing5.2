@extends('app')

@section('content')
	<h1>Strains</h1>
<hr/>
	@foreach ($strains as $strain)
		<article>
	<a href = "{{ action('StrainsController@show', [$strain->id]) }}">{{  $strain->strain }} </a>
	     <h2>{{ $strain->strain  }}</h2>
		<div class="body">{{  $strain->type }}</div>
		</article>
	@endforeach

@stop
