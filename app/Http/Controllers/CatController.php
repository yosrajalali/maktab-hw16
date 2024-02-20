<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    //
    public  function  index($title, $id, $cat)
    {
//        dd($title, $id,$cat);
        return view('cat.index',compact('title', 'id', 'cat'));
    }

}
