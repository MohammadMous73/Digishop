<?php

namespace App\Http\Controllers\App;


use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::firstWhere('slug',$slug);

        return view('app.pages.post.show',compact('post'));
    }
}
