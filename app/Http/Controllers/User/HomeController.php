<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User\User;
use App\Model\User\category;
use App\Model\User\post;
use App\Model\User\tag;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   /* public function chat()
    {
        return view('user.home');
    }
    public function send(request $request)
    {
        $user = User::find(Auth::id());
        event(new ChatEvent($request->message,$user));
    }*/
    public function index()
    {
        $post = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
        return view('user.home',compact('post'));
    }
    public function tag(tag $tag)
    {
        $post = $tag->posts();
        return view('user.home',compact('post'));
    }
    public function category(category $category)
    {
        $post = $category->categories();
        return view('user.home',compact('post'));
    }
    public function contact(){
        return view('user.contact');
    }
    public function about(){
        return view('user.about');
    }
}
