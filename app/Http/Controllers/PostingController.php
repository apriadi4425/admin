<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function add_view(){
        $data = array(
            'title' => 'Home'
        );
        return view('content/add',$data);
    }
}
