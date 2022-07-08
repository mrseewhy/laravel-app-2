<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function contact () {
        return "this is the contact page";
    }

    public function services (){
        return "this is services page";
    }
}
