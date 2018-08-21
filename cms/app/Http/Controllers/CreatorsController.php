<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creator;
use App\User;


class CreatorsController extends Controller
{
    public function index(Request $request){
        $creator_info = Creator::all();
        $user_info = User::all();
        return view('users.creators',['creator_info'=>$creator_info],['user_info'=>$user_info]);
    }
    
    public function creators_add(Request $request){
        $creators = new Creator;
        $creators->creator_name = $request->creator_name;
        $creators->birthday = $request->birthday;
        $creators->gender = $request->gender;
        $creators->twitter = $request->twitter;
        $creators->instagram = $request->instagram;
        $creators->save();
        return redirect('/creators');
    }
    
    
}
