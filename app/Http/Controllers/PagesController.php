<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blogs()
    {
        //$title = "Blogs page";
        return view('pages.blogs');
    }
    public function servises()
    {
       /* $data = array(
            $title => "Services page",
            'servises'=>['Our services','Enginering']
        );*/
        return view('pages.servises');
    }
}
