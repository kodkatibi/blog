<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function index()
    {
        return view('manage.dashboard');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('main.index');
    }
}
