<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function index()
    {
        $allArticles=Article::all()->count();
        $publishedArticles=Article::whereStatus('PUBLISHED')->count();
        $pendedArticles=Article::whereStatus('PENDING')->count();
        $data=array(
            'allArticles'=>$allArticles,
            'publishedArticles'=>$publishedArticles,
            'pendedArticles'=>$pendedArticles,
        );
        return view('manage.dashboard',$data);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('main.index');
    }
}
