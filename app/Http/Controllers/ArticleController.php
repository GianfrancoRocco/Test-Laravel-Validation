<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store(StoreArticleRequest $request)
    {
        Article::create(['title' => $request->title]);
    }
}
