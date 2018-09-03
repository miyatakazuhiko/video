<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Creator;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MypagesController extends Controller
{
    public function index(Request $request){    
        $user = Auth::user()->id;
        $user_info = User::where('id',$user)->get();
        $creator_id = $request->user()->creator_id->creator_id;
        $creator_info = Creator::where('creator_id', $creator_id )->get();
        return view('mypages.mypages', ['user_info'=>$user_info, 'creator_info'=>$creator_info]);
    }
    
    public function user(Request $request){
        $user = Auth::user()->id;
        $user_info = User::where('id',$user)->first();
        return view('mypages.mypages_user', ['user_info'=>$user_info]);
    }
    
    public function user_edit(Request $request){
        $user_id = Auth::user()->id;
        $user_info = User::where('id', $id)->first();
        return view('videos.videos_edit',['video'=>$video_info]);
    }
       
}
        