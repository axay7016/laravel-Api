<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function viewPost(){
        $data = Post::get();
        return $data;
    }

    public function addPost(Request $req){
        $title = $req->title;
        $description = $req->description;
        $data = Post::insert([
            'title'=>$title,
            'description'=>$description
        ]);
        return ["message"=>"add succesfull"];
    }

    public function deleetPost($id){
        $data = Post::where('id','=',$id)->delete();
        return ["data"=>$data,"message"=>"delete succesfull"];
    }
}
