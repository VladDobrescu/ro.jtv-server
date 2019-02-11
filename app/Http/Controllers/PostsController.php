<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

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
        $posts = DB::table('posts')->latest()->paginate(9);

        return response()->json($posts);
    }

    /*
    Return single post with param $slug
    */
    public function single($slug){
        $single = DB::table('posts')->where('slug', $slug)->first();
        $author = DB::table('users')->where('id', $single->author_id)->first();

        $single->{"auth_name"} = $author->name;
        dd($single);

        return response()->json($single);
    }

}
