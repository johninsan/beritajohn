@extends('user/app')

@section('bg-img',Storage::disk('local')->url($posts->image))
    @section('head')
        <link rel="stylesheet" href="{{asset('user/css/prism.css')}}">
        @endsection
@section('title',$posts->title)
@section('sub-heading',$posts->subtitle)
@section('main-content')
    <!-- Post Content -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=122003418430460";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Created At {{$posts->created_at}}</small>
                        @foreach($posts->categories as $category)
                        <a href="{{route('category',$category->slug)}}"><small class="pull-right" style="margin-right: 20px">
                            {{$category->name}}
                        </small></a>
                            @endforeach
                    {!!htmlspecialchars_decode($posts->body)!!}
                    {{--tag clouds--}}
                    <h3>Tag:</h3>
                    @foreach($posts->tags as $tag)
                        <a href="{{route('tag',$tag->slug)}}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid grey;padding: 5px;">
                            {{$tag->name}}
                            </small></a>
                    @endforeach
                </div>
                <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
            </div>
        </div>
    </article>

    <hr>
    @endsection
@section('footer')
    <script src="{{asset('user/js/prism.js')}}"></script>
    @endsection