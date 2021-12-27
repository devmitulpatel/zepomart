<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //

    public function defaultFallback($slug=null){

        if ($slug==null)abort(404);




        $content=get_static_page_content($slug);
        return view('layouts.static-page',compact(['content']));


    }
}
