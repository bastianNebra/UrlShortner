<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlControllerList extends Controller
{
    //View List aufrufen
    public function index(){
        $urlslist = Url::all();
        return view('urls/list',$urlslist)->with(["urls"=>$urlslist]);;
    }
}
