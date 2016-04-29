@extends('app')

@section('content')
	<h1>Articles</h1>
<hr/>
	@foreach ($articles as $article)
		<article>
	<a href = "{{ action('ArticlesController@show', [$article->id]) }}">{{  $article->title }} </a>
	     <h2>{{ $article->title  }}</h2>
		<div class="body">{{  $article->body }}</div>
		</article>
	@endforeach

@stop
