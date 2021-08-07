<?php

namespace App\Http\Controllers\App;


use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('app.pages.home',compact('posts'));
    }
}
