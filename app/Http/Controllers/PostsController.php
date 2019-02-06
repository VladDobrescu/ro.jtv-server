<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /*
    Return 3 most recent posts
    Sorts by date
    */
    public function breaking(){
        $posts = DB::table('posts')->latest()->paginate(3);

        return response()->json($posts);
    }

    /*
    Return 9 most recent posts
    Sorts by date
    */
    public function allPosts(){
        $posts = DB::table('posts')->paginate(9);

        return response()->json($posts);
    }

    /*
    Return single post with param $slug
    */
    public function single($slug){
        $single = DB::table('posts')->where('slug', $slug)->first();

        return response()->json($single);
    }

}
