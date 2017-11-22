@extends('user/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')
<meta name="csrf-token" content="{{csrf_token()}}" >
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
.list-group{
	overflow-y: scroll;
	height: 200px;
}
</style>
@endsection
@section('title','Welcome')
@section('sub-heading','Thanks Believing Us')
@section('main-content')
<!-- Post Content -->
<article>
	<div class="container">
		<div class="row">
			Welcome
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
</div>
</article>

<hr>
@endsection
@section('footer')

@endsection