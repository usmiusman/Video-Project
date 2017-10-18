@extends('layouts.auth')

@section('title', 'User Login')

@section('content')

    <!-- New Start -->

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">DV</h1>

            </div>
                <div class="ibox-content">
                    <h2 class="font-bold">Forgot password ?</h2>

                    <p>
                        Enter your email address and your password will be reset and emailed to you.
                    </p>

                    @if (session()->has('message'))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Success ..! </strong> {{ Session::get('success') }}
                            </div>
                        @elseif(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                <strong>Error ..! </strong> {{ Session::get('error') }}
                            </div>
                        @elseif(count($errors) > 0)
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4 class="text-center"><strong>Error ..! </strong> You have Something Error.</h4>
                                <ul class="text-center">
                                    @foreach($errors->all() as $error)
                                        <li><p style="color: red">{!! $error !!}</p></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <div class="row">

                        <div class="col-lg-12">
                            {!! Form::open(['route'=>'user-forget-password-submit']) !!}
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required="">
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>
                                <a href="{{ action('UserAuthController@getLogin') }}"><small>Back to login</small></a>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            <p class="m-t"> <small><strong>Copyright</strong> Dynamic Video&copy; 2014-2017</small> </p>
        </div>
    </div>

    <!-- New End -->

@endsection