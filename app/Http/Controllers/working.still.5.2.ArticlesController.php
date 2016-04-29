<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Article;
use Request;

class ArticlesController extends Controller
{
	protected $articles;

   	public function index(){
		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	public function show($id) {
		$article = Article::findorFail($id);



		return view ('articles.show', compact('article'));
	}

	public function create() {
		return view ('articles.create');
	}

	public function store() {
		$input = Request::all();
		$input['published_at'] = Carbon::now();
		Article::create($input);
		return redirect('articles');
	}

}
