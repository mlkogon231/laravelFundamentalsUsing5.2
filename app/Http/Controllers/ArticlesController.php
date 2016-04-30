<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use App\Article;

class ArticlesController extends Controller
{
	protected $articles;

   	public function index(){
		$articles = Article::latest('published_at')->published()->get();
		return view('articles.index', compact('articles'));
	}

	public function show($id) {
		$article = Article::findorFail($id);



		return view ('articles.show', compact('article'));
	}

	public function create() {
		return view ('articles.create');
	}

	public function store(ArticleRequest $request) {
		Article::create($request->all());
		return redirect('articles');
	}

	public function edit($id){
		$article = Article::findorFail($id);
		return view('articles.edit', compact('article'));
	}
	public function update($id, ArticleRequest $request){
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles');
	}

}
