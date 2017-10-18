@extends('layouts.home')

@section('title', 'Exam category')

@section('content')

<!--Main Content Wrap Start-->
<div class="gt_main_content_wrap">
    <!--About Us Wrap Start-->
    <section class="gt_about_bg">
        <div class="container">
            <div class="row">

                <div class="panel panel-default panel_custom_1">
                    <div class="panel-heading">Latest Updates</div>
                    <div class="panel-body">
                        <!-- Start -->
                        <table id="myTable" class="listing_front_tbl">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($uservideos as $uservideo)
                               <tr>
                                
                                <td>Project '{{ $uservideo->title }}' has been completed</td>
                                <td>URL <a href="{{ $uservideo->url }}">{{ $uservideo->url }}</a></td>
                                <td>{{ $uservideo->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <!-- End -->
                </div>
            </div>


        </div>
    </div>
</section>
<!--About Us Wrap End-->

</div>
<!--Main Content Wrap End-->


@endsection
