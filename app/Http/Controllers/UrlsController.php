<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class UrlsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){
        $url = Url::findOrFail($id);
        return redirect($url->url,301);
    }
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('urls.create');
    }

    public function store(){

        $url = Input::get('url');
        $link = Url::where('url',$url)->first();

        if (!$link) {
            $link = Url::create(['url'=>$url]);
           // $this->validate($link,['url'=>'required|url']);            
        }

        //$link = Url::firstOrCreate(['url'=>$url]); cette peut egalement etre plus utile pour la verification de données déja enregistrer;
        
        return view("urls/success")->with(["url"=>$link]);
    }
}
