<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuideController extends Controller
{
    /*
    Return tv guide
    Sorts by interval
    */
    public function index(){
        $guides = DB::table('guide')->get();

        return response()->json($guides);
    }

}
