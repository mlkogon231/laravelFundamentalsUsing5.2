<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
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

	public function store(CreateArticleRequest $request) {
		Article::create($request->all());
		return redirect('articles');
	}

}
