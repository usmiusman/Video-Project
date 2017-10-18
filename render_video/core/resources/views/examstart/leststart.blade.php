@extends('layouts.home')

@section('title', 'Exam category')

@section('content')


    <style>

        #abir {
            position: fixed;
            bottom: 100px;
            right: 100px;
            border-radius: 25px;
            background: #000000;
            padding: 20px;
            font-size: 20px;
            overflow: hidden;

        }
    </style>


    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Exam Running</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Exam Running</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--About Us Wrap Start-->
        <section class="gt_about_bg">
            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-md-offset-4">
                        <div class="text-center">
                            <h4 class="title text-center">Exam : {{ $singleexam->name }}</h4>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="text-center">

                            <strong style="color: red;"> YOU HAVE TO FINISH EXAM AND SUBMIT WITHIN THIS TIME. OTHERWISE
                                YOUR EXAM WILL NOT BE EVALUATED </strong>


                        </div>
                    </div>
                </div>


                <div id="abir" style="color: red; text-align: center;"><b>TIME LEFT</b><br>
                    <b id="note"></b>
                </div>

                <hr>
                {{ Form::open() }}
                @foreach($question as $q)
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4 class="text-center">Question : {{ $q->question }}</h4>
                            <hr>

                            <div class="question" style="overflow: hidden;margin-top: 10px">
                                <div class="col-md-6 col-md-offset-2">
                                    <label for="exampleInputEmail2"><h5>(a) : {{ $q->first_option }}</h5></label>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio"
                                         style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="{{ $q->id }}" id=""
                                                   value="first">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="question" style="overflow: hidden;margin-top: 10px">
                                <div class="col-md-6 col-md-offset-2">
                                    <label for="exampleInputEmail2"><h5>(b) : {{ $q->second_option }}</h5></label>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio"
                                         style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="{{ $q->id }}" id=""
                                                   value="second">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @if($q->third_option != NULL)
                                <div class="question" style="overflow: hidden;margin-top: 10px">
                                    <div class="col-md-6 col-md-offset-2">
                                        <label for="exampleInputEmail2"><h5>(c) : {{ $q->third_option }}</h5></label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="radio"
                                             style="margin-top: -5px!important; margin-right: 30px!important;">
                                            <label>
                                                <input type="radio" class="form-control" name="{{ $q->id }}" id=""
                                                       value="third">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($q->fourth_option != null)
                                <div class="question" style="overflow: hidden;margin-top: 10px">
                                    <div class="col-md-6 col-md-offset-2">
                                        <label for="exampleInputEmail2"><h5>(d) : {{ $q->fourth_option }}</h5></label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="radio"
                                             style="margin-top: -5px!important; margin-right: 30px!important;">
                                            <label>
                                                <input type="radio" class="form-control" name="{{ $q->id }}" id=""
                                                       value="fourth">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($q->fifth_option)
                                <div class="question" style="overflow: hidden;margin-top: 10px">
                                    <div class="col-md-6 col-md-offset-2">
                                        <label for="exampleInputEmail2"><h5>(e) : {{ $q->fifth_option }}</h5></label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="radio"
                                             style="margin-top: -5px!important; margin-right: 30px!important;">
                                            <label>
                                                <input type="radio" class="form-control" name="{{ $q->id }}" id=""
                                                       value="fifth">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="apply" style="text-align: center; margin-bottom: 10px">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Finish Exam</button>

                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
        <!--About Us Wrap End-->

    </div>
    <!--Main Content Wrap End-->



@endsection



@section('scripts')

    <script src="{{ asset('js/jquery.countdown.js') }}"></script>

    <script>

        $(function () {
            var etm = {{$tmleft}};
            var note = $('#note'),

                    ts = (new Date()).getTime() + etm * 1000;

            $('#countdown').countdown({
                timestamp: ts,
                callback: function (days, hours, minutes, seconds) {

                    var message = "";
                    message += minutes + " MINUTE" + ( minutes == 1 ? '' : 'S' ) + " <br />";
                    message += seconds + " SECOND" + ( seconds == 1 ? '' : 'S' ) + " <br />";


                    note.html(message);
                }
            });

        });


    </script>

@endsection


