<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::with('author', 'rating');

        if (request()->segment(3)) {
            $articles->whereUser_id(Auth::id());
        }
        $data = array('articles' => $articles->get());

        return view('manage.article.index', $data);
    }

    public function detail($slug)
    {
        $article = Article::with('author', 'rating')->whereSlug($slug)->first();
        $data = array('article' => $article);

        return view('manage.article.detail', $data);
    }


    public function create()
    {
        return view('manage.article.add');
    }

    public function store(ArticleRequest $request)
    {
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
            'slug' => Str::slug($request->title . '-' . time()),

        ]);

        return redirect()->route('manage.article.index')->withSuccess('The article has been successfully added.');
    }


    public function edit($slug)
    {
        $article = Article::with('author', 'rating')->whereSlug($slug)->first();
        $data = array('article' => $article);
        return view('manage.article.edit', $data);
    }

    public function update($slug, ArticleRequest $request)
    {

        Article::whereSlug($slug)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('manage.article.index')->withSuccess('The article has been updated successfully.');
    }

    public function destroy($slug)
    {
        $article = Article::whereSlug($slug)->whereUser_id(Auth::id())->delete();
        if ($article)
            return redirect()->route('manage.article.index')->withSuccess('The article has been deleted successfully.');
        else
            return redirect()->route('manage.article.index')->withErrors('Someting went wrong.');

    }

    public function changeStatus($slug, $type = 'REJECT')
    {

        $article = Article::whereSlug($slug)->update(['status' => $type]);

        return redirect()->back()->withSuccess('The article\'s status has been updated successfully.');
    }
}
