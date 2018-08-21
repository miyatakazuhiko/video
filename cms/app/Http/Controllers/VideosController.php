<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller
{
    public function index(Request $request){
        $videos_info = Video::all();
        return view('videos.videos',[
            'video_info'=>$videos_info,
            ]);                
    }

    public function video_add(Request $request){
        $videos = new Video;
        $videos->video_file =$request->video_file;
        $video_path = $request->file('video_file')->store('public/video_file');
        $videos->video_url = Storage::url($video_path);
        $videos->video_name = $request->video_name;
        $videos->price = $request->price;
        $videos->thumbnail = $request->thumbnail;
        $videos->description = $request->description;
        $videos->supplement = $request->supplement;
        $videos->save();
        return redirect('/video');
    }
}
