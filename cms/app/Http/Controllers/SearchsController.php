<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use Auth;
use App\Creator;
use App\User;
use Illuminate\Support\Facades\Storage;

class SearchsController extends Controller
{

    
    public function index(){
        $search = 0;
        return view('searchs.searchs', ['search'=>$search]);
    }
    
    
    public function creator(Request $request){
        $search = 1;
        $creator = [];
        $creator_name = $request->creator_name;
        if(strlen($creator_name)>0){
            $space = str_replace("　", " ", $creator_name);
            $space = preg_replace('/\s+/', ' ', $space);
            $space = trim($space);
            $array = explode(" ", $space);
            
            //この書き方はor検索 AND検索にすべきか
            //現在の状況だと違う単語で同じモノが検索ヒットされたら
            for($i=0; $i<count($array); $i++){
                    $search_creator = Creator::where('creator_name', 'like', '%'.$array[$i].'%')->get();
                    for($p=0; $p<count($search_creator); $p++){
                        array_push($creator, $search_creator[$p]);
                    }
            }
        }
        return view('searchs.searchs', ['creator'=>$creator, 'search'=>$search, 'creator_name'=>$creator_name]);
    }    
    
    
    public function video(Request $request){
        $search = 2;
        $video = [];
        $video_name = $request->video_name;
        if(strlen($video_name)>0){
            $space = str_replace("　", " ", $video_name);
            $space = preg_replace('/\s+/', ' ', $space);
            $space = trim($space);
            $array = explode(" ", $space);
            for($i=0; $i<count($array); $i++){
                    $search_video = Video::where('video_name', 'like', '%'.$array[$i].'%')->get();
                    for($p=0; $p<count($search_video); $p++){
                        array_push($video, $search_video[$p]);
                    }
            }
        }
        return view('searchs.searchs', ['video'=>$video, 'search'=>$search, 'video_name'=>$video_name]);
    }
    
}