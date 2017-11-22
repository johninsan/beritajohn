<?php

namespace App\Http\Controllers\User;

use App\Model\user\like;
use App\Model\User\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post(post $posts)
    {
        return view('user.post',compact('posts'));
    }

    public function getAllPosts()
    {
       return $post = post::with('likes')->where('status',1)->orderBy('created_at','DESC')->paginate(5);
    }

    public function saveLike(request $request){
        $likecheck = like::where(['user_id' => Auth::id(),'post_id' => $request->id])->first();
        if ($likecheck){
            like::where(['user_id' => Auth::id(),'post_id' => $request->id])->delete();
            return 'deleted';
        }else{
            $like =  new like;
            $like -> user_id =  Auth::id();
            $like -> post_id =  $request -> id;
            $like -> save();
        }
    }
}
