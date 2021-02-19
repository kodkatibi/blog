<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function allArticle()
    {

        return ArticleResource::collection(Article::with('author', 'rating')->get());
    }
}
