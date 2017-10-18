@extends('layouts.layout')

@section('title', 'Question Edit')

@section('content')

    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{ route('dashboard') }}">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Manage Question</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit Question</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Edit Question
            <small> under Exam Category</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-pencil-square"></i> Sub Category Edit</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($question,['route'=>['question_update',$question->id],'method'=>'PUT']) !!}

                        <div class="form-group">
                            <label for="exampleInputName2"><h4>Exam Question : </h4></label>
                            <select name="question_cat_name" id="" class="form-control" required>
                                <option value="">Select One</option>
                                @foreach($qcat as $c)
                                    @if($c->id == $question->question_cat_name)
                                        <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                                    @else
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName2"><h4>Question : </h4></label>
                            <input type="text" class="form-control" id="exampleInputName2" name="question" value="{{ $question->question }}" placeholder="Question" required>
                        </div>

                        <div class="row">
                            <div class="form-group">

                                <div class="col-md-10">
                                    <label for="exampleInputEmail2"><h4>First Option :</h4></label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" name="first_option" value="{{ $question->first_option }}" placeholder="First Option" required>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><h4>Answer</h4></label>
                                    <div class="radio" style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="answer" id="" value="first" @php if($question->answer == "first"){ echo "checked";} @endphp >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">

                                <div class="col-md-10">
                                    <label for="exampleInputEmail2"><h4>Second Option :</h4></label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" name="second_option" value="{{ $question->second_option }}" placeholder="Second Option" required>
                                </div>
                                <div class="col-md-2">
                                    <label for=""><h4>Answer</h4></label>
                                    <div class="radio" style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="answer" id="" value="second" @php if($question->answer == "second"){ echo "checked";} @endphp >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">

                                <div class="col-md-10">
                                    <label for="exampleInputEmail2"><h4>Third Option :</h4></label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" name="third_option" value="{{ $question->third_option }}" placeholder="Third Option">
                                </div>
                                <div class="col-md-2">
                                    <label for=""><h4>Answer</h4></label>
                                    <div class="radio" style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="answer" id="" value="third" @php if($question->answer == "third"){ echo "checked";} @endphp >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">

                                <div class="col-md-10">
                                    <label for="exampleInputEmail2"><h4>Fourth Option :</h4></label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" name="fourth_option" value="{{ $question->fourth_option }}" placeholder="Fourth Option">
                                </div>
                                <div class="col-md-2">
                                    <label for=""><h4>Answer</h4></label>
                                    <div class="radio" style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="answer" id="" value="fourth" @php if($question->answer == "fourth"){ echo "checked";} @endphp >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">

                                <div class="col-md-10">
                                    <label for="exampleInputEmail2"><h4>Fifth Option :</h4></label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" name="fifth_option" value="{{ $question->fifth_option }}" placeholder="Fifth Option">
                                </div>
                                <div class="col-md-2">
                                    <label for=""><h4>Answer</h4></label>
                                    <div class="radio" style="margin-top: -5px!important; margin-right: 30px!important;">
                                        <label>
                                            <input type="radio" class="form-control" name="answer" id="" value="fifth" @php if($question->answer == "fifth"){ echo "checked";} @endphp >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 margin-top-20">
                                <a href="{{ route('question.index') }}" class="btn btn-success btn-block btn-lg"><i class="fa fa-eye"></i> View All Question</a>
                            </div>
                            <div class="col-sm-6  margin-top-20">
                                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i> Update Question</button>
                            </div>
                        </div>



                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- END CONTENT BODY -->

    <script type="text/javascript">

    </script>

@endsection