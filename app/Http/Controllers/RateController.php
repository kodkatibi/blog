<?php

namespace App\Http\Controllers;

use App\Http\Requests\RateRequest;
use App\Models\Article;
use App\Models\Rate;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    public function store($slug, RateRequest $request)
    {
        $article = Article::whereSlug($slug)->first('id');
        $rate = Rate::updateOrCreate(

            ['article_id' => $article->id, 'user_id' => Auth::id()],
            ['article_id' => $article->id, 'user_id' => Auth::id(), 'point' => $request->point]

        );

        if ($rate->wasRecentlyCreated) {
            return redirect()->back()->withSuccess('Your rate has been successfully added.');
        }
        else{
            return redirect()->back()->withSuccess('Your rate has been updated successfully.');
        }
    }
}
