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
    
    public function user_edit(Request $request){
        $user = Auth::user()->id;
        $user_info = User::where('id',$user)->first();
        return view('mypages.mypages_user_edit', ['user_info'=>$user_info]);
    }
    
    public function user_update(Request $request){
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->tel = $request->tel;
        $user->organization = $request->organization;
        $user->save();
        return redirect('/mypage');
    }

    public function creator_edit(Request $request){
        $creator_id = $request->user()->creator_id->creator_id;
        $creator = Creator::where('creator_id', $creator_id)->first();
        $creator_info = Creator::where('creator_id', $creator_id)->first();
        return view('mypages.mypages_creator_edit', ['creator_info'=>$creator_info]);
    }

    public function creator_update(Request $request){
        $creator_id = $request->user()->creator_id->creator_id;
        $creator = Creator::where('creator_id', $creator_id)->first();
        $creator->creator_name = $request->creator_name;
        $creator->birthday = $request->birthday;
        $creator->gender = $request->gender;
        $creator->twitter = $request->twitter;
        $creator->instagram = $request->instagram;
        $creator->save();
        return redirect('/mypage');
    }
    
}
        