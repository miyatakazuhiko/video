<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Auth;
use App\Creator;
use App\User;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    public function index(){
        return view('videos.videos');
    }
    
    public function view(Request $request){
        $videos_info = Video::all();
        return view('videos.videos_view',['video_info'=>$videos_info,]);                
    }
    

    public function video_add(Request $request){
        $videos = new Video;
        $videos->video_file =$request->video_file;
        $video_path = $request->file('video_file')->store('public/video_file');
        $videos->video_url = Storage::url($video_path);
        $videos->creator_id = $request->creator_id;
        $videos->video_name = $request->video_name;
        $videos->price = $request->price;
        $videos->thumbnail = $request->thumbnail;
        $videos->description = $request->description;
        $videos->supplement = $request->supplement;
        $videos->save();
        return redirect('/video');
    }
    
    public function video_info(Request $request){
        $video_info = Video::all();
        $creator_id = $request->user()->creator_id->creator_id;
        $video = Video::where('creator_id', $creator_id )->where('void', '0')->paginate(2);
        return view('videos.videos_info', ['video_info'=>$video_info],['video'=>$video]);
    }
    
    public function edit($video_id){
        $video_info = Video::where('video_id', $video_id)->first();
        return view('videos.videos_edit',['video'=>$video_info]);
    }
    
    public function update(Request $request){
        $video_id = $request->video_id;
        $video = Video::where('video_id', $video_id)->first();
        $video->video_name = $request->video_name;
        $video->price = $request->price;
        $video->description = $request->description;
        $video->supplement = $request->supplement;
        $video->save();
        return redirect('/video_info');
    }
    
    public function destroy(Request $request){
        $video_id = $request->video_id;
        $video_info = Video::where('video_id', $video_id)->first();
        return view('videos.videos_delete',['video_info'=>$video_info],['video_id'=>$video_id]);
    }

    public function destroy_execution(Request $request){
        $video_id = $request->video_id;
        $video = Video::where('video_id', '=', $video_id)->first();
        $video->void = $request->void;
        $video->save();
        return redirect('/video_info');   
    }
        
// 完全にメモ
    public function aaa(Request $request){
        $user = $request->user();
        $user->creator_id->video_id;
        return view('aaa', ['user' => $user]);
    }    
}
