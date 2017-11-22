@extends('user/app')
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','BJohn')
@section('sub-heading','Make Word Control The World')
@section('head')
<meta name="csrf-token" content="{{csrf_token()}}" >
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>.fa-thumbs-up:hover{
    color:red;
}</style>
<style>
.list-group{
    overflow-y: scroll;
    height: 200px;
}
</style>
@endsection
@section('main-content')

<!-- Main Content -->
<div class="container">
    <div class="row" id="app">
        <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-1">
            <posts
            v-for='value in blog'
            :title = value.title
            :subtitle = value.subtitle
            :created_at = value.created_at
            :key = value.index
            :post-Id = value.id
            login = "{{Auth::check()}}"
            :likes = value.likes.length
            :slug = value.slug
            ></posts>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    {{$post->links()}}
                </li>
            </ul>
        </div>
        <div class="row" id="mess">
            <div class="col-lg-4 pull-right">
                <li class="list-group-item active">Room Chat</li>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="value in chat.message"
                    :key=value.index
                    color='success'
                    >
                        @{{value}}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Apa yang anda pikirkan?" v-model='message' @keyup.enter='send' >
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-4 pull-left">
                <h3>Popular:</h3>
                    @foreach($posts->tags as $tag)
                        <a href="{{route('tag',$tag->slug)}}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid grey;padding: 5px;">
                            {{$tag->name}}
                            </small></a>
                    @endforeach
            </div>
        </div> --}}
    </div>

    <hr>
    @endsection
    @section('footer')
    <script src="{{asset('js/app.js')}}"></script>
    @endsection