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
    
    public function video(Request $request){
        $search = 2;
        $video_name = $request->video_name;
        $video = Video::where('video_name', 'like', '%'.$video_name.'%')->get();
        return view('searchs.searchs', ['video'=>$video], ['search'=>$search]);
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
        // dd($array);
            
            
            //この書き方はor検索 AND検索にすべきか
            for($i=0; $i<count($array); $i++){
                    $search_creator = Creator::where('creator_name', 'like', '%'.$array[$i].'%')->get();
                    for($p=0; $p<count($search_creator); $p++){
                        array_push($creator, $search_creator[$p]);
                    }
                    
            }
        }
        dd($creator);
        // return view('searchs.searchs', ['creator'=>$creator, 'search'=>$search, 'creator_name'=>$creator_name]);
    }    
    
    
}