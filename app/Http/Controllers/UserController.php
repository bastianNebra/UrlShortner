<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
//use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profil(){
        return view('profil.userprofil',array('user'=>Auth::user()));
    }

    public function profilUpdate(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');

            //dd($avatar);

            $filename = time() .'.'. $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $user=Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profil.userprofil',array('user'=>Auth::user()));

    }


}
