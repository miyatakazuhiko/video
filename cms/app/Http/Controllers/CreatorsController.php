<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creator;
use Auth;
use App\User;
use App\Video;


class CreatorsController extends Controller
{
    public function index(Request $request){
        $creator_info = Creator::all();
        $user_info = User::all();
        $creator_id = Creator::where('creator_id',Auth::user()->creator_id->creator_id);
            return view('users.creators',['creator_info'=>$creator_info, 'user_info'=>$user_info, 'creator_id'=>$creator_id]);
    }
    
    public function creators_add(Request $request){
        $creators = new Creator;
        $creators->user_id = $request->user_id;
        $creators->creator_name = $request->creator_name;
        $creators->birthday = $request->birthday;
        $creators->gender = $request->gender;
        $creators->twitter = $request->twitter;
        $creators->instagram = $request->instagram;
        $creators->save();
        return redirect('/creators');
    }
    
}
