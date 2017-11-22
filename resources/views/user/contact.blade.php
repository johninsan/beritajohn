@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('head')

@endsection
@section('title','BJohn')
@section('sub-heading','Make Word Control The World')
@section('main-content')
    <!--start-account-->
    <div class="account">
        <div class="container">
            <div class="account-bottom">
                <div class="col-md-12">
                    <form id="contact">
                        <div class="account-top heading">
                            <h3>Contact</h3>
                        </div>
                        <div class="col-md-12" style="background-color:aliceblue ; height:100px; padding-top:10px;">
                            <div class="col-md-6 text-center">
                                <p>Jalan Mandar Raya No.13</p>
                                <p>Depok City</p>
                                <p>Indonesia</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <p style="padding-top:15px;">Phone : +62 857 3380 6629</p>
                                <p>Email : <a href="mailto:johninsan@gmail.com">johninsan@gmail.com</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--end-account-->
@endsection
@section('footer')

@endsection