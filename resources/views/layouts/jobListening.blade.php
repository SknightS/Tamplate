@extends('main')
@section('head')

@endsection
@section('content')
<!-- Breadcrumb Bar -->
<div class="section breadcrumb-bar solid-blue-bg">
    <div class="inner">
        <div class="container-fluid">
            <p class="breadcrumb-menu">
                <a href="index.php"><i class="ion-ios-home"></i></a>
                <i class="ion-ios-arrow-right arrow-right"></i>
                <a href="#0">Job listing - list view</a>
            </p> <!-- end .breabdcrumb-menu -->
            <h2 class="breadcrumb-title">Showing all jobs</h2>
        </div> <!-- end .container-fluid -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Job Listings Section -->
<div class="section jobs-listing-section">
    <div class="container-fluid">
        <div class="jobs-listing-wrapper flex no-wrap">

            <div class="left-side">

                <div class="statistics-widget-wrapper jobs-widget">
                    <h6>Overall statistics</h6>
                    <div class="statistics-widget flex no-column no-wrap">
                        <div class="left-side-inner">
                            <h2 class="dark">683,207</h2>
                            <h5>Created Resumes</h5>
                        </div> <!-- end .left-side -->
                        <div class="right-side-inner">
                            <button type="button" class="button button-sm grey">+583 this week</button>
                        </div> <!-- end .right-side -->
                    </div> <!-- end .statisstics-widget -->

                    <div class="statistics-widget flex no-column no-wrap">
                        <div class="left-side-inner">
                            <h2 class="dark">129, 245</h2>
                            <h5>Posted Jobs</h5>
                        </div> <!-- end .left-side -->
                        <div class="right-side-inner">
                            <button type="button" class="button button-sm grey">+364 this week</button>
                        </div> <!-- end .right-side -->
                    </div> <!-- end .statisstics-widget -->

                </div> <!-- end .statistics-widget-wrapper -->


                <div class="divider"></div>


            </div> <!-- end .left-side -->

            <div class="center-content-wrapper">

                <div id="allJobInfoData">

                </div>

            </div> <!-- end .center-content -->

            <div class="right-side">

                <div class="job-categories-widget jobs-widget">
                    <h6>Categories</h6>
                    <ul class="job-categories list-unstyled">
                        @foreach($jobtypename as $jpn)
                        <li class="job-status checkbox flex space-between items-center no-column no-wrap">
                            <input id="{{$jpn->id}}" name="jobCategory" type="checkbox">
                            <label for="{{$jpn->id}}">{{$jpn->typeName}}
                                @foreach($jobcountt as $jc)
                                    @if($jc->fkjobTypeId == $jpn->id)
                                    <span> @if(empty($jc->total_post)){
                                        {{"0 Jobs"}}
                                        }
                                        @else
                                        {{$jc->total_post." Jobs"}}
                                        @endif
                                    </span>
                                    @endif

                                @endforeach
                            </label>
                            {{--<span><i class="ion-android-add"></i></span>--}}
                        </li>
                        @endforeach


                    </ul> <!-- end .job-categories -->
                </div> <!-- end .job-categories-widget -->

                <div class="job-status-widget jobs-widget">
                    <h6>Categories</h6>
                    <ul class="job-status-wrapper list-unstyled">
                        <li class="job-status checkbox">
                            <input id="job-status-checkbox1" type="checkbox">
                            <label for="job-status-checkbox1">Full Time<span>4,286 Jobs</span></label>
                        </li>

                        <li class="job-status checkbox">
                            <input id="job-status-checkbox2" type="checkbox">
                            <label for="job-status-checkbox2">Part time<span>6,883 Jobs</span></label>
                        </li>
                        <li class="job-status checkbox">
                            <input id="job-status-checkbox3" type="checkbox">
                            <label for="job-status-checkbox3">Freelancer<span>1,724 Jobs</span></label>
                        </li>

                        <li class="job-status checkbox">
                            <input id="job-status-checkbox4" type="checkbox">
                            <label for="job-status-checkbox4">Internship<span>876 Jobs</span></label>
                        </li>
                    </ul> <!-- end .job-status-wrapper -->
                </div> <!-- end .job-status-widget -->

                <div class="job-locations-widget jobs-widget">
                    <h6>Locations</h6>
                    <ul class="job-locations list-unstyled">
                        <li class="job-category checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox1" type="checkbox">
                            <label for="job-locations-checkbox1">New York<span>7,286 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>

                        <li class="checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox2" type="checkbox" checked="">
                            <label for="job-locations-checkbox2">San Francisco<span>452 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>

                        <li class="checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox3" type="checkbox">
                            <label for="job-locations-checkbox3">San Diego<span>1,867 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>

                        <li class="checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox4" type="checkbox">
                            <label for="job-locations-checkbox4">Los Angeles<span>3,094 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>

                        <li class="checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox5" type="checkbox">
                            <label for="job-locations-checkbox5">Chicago<span>2,955 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>

                        <li class="checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox6" type="checkbox">
                            <label for="job-locations-checkbox6">Houston<span>470 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>

                        <li class="checkbox flex space-between items-center no-column no-wrap">
                            <input id="job-locations-checkbox7" type="checkbox">
                            <label for="job-locations-checkbox7">New Orleans<span>4,536 Jobs</span></label>
                            <span><i class="ion-android-add"></i></span>
                        </li>
                    </ul> <!-- end .job-locations -->
                </div> <!-- end .job-locations-widget -->

                <div class="cta-job-widget">
                    <h5 class="dark">Need a job?</h5>
                    <h3 class="dark">Join our community and search for a better job</h3>
                    <a href="#0">Get started now <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                </div> <!-- end .cta-job-widget -->

            </div> <!-- end .right-side -->

        </div> <!-- end .jobs-listing-wrapper -->
    </div> <!-- end .container-fluid -->
</div> <!-- end .section -->

@endsection
@section('foot-js')

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function allJobInfo() {
            var jobType=selecteds;
                $.ajax({
                    type: 'POST',
                    url: "{!! route('jobListening.data') !!}",
                    cache: false,
                    data: {_token: "{{csrf_token()}}",typeId:jobType},
                    success: function (data) {
                        $("#allJobInfoData").html(data);

                    }
                });


        }

        $(document).ready(function()
        {
            $(':checkbox:checked').prop('checked',false);
            allJobInfo();
            $(document).on('click', '.pagination a',function(event)
            {
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                event.preventDefault();
                var myurl = $(this).attr('href');
                var page=$(this).attr('href').split('page=')[1];
                getData(page);
            });
        });
        function getData(page){
            var jobType=selecteds;
            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    data: {typeId:jobType},
                    datatype: "html",
                    // beforeSend: function()
                    // {
                    //     you can show your loader
                    // }
                })
                .done(function(data)
                {
                    $("#allJobInfoData").html(data);
                    location.hash = page;
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }
        selecteds=[];

        $( "input[name=jobCategory]" ).click(function() {
            btn=$(this).attr('id');

            var index = selecteds.indexOf(btn.toString());
            if (index == -1){
                selecteds.push(btn);
            }else {
                selecteds.splice(index, 1);
            }
            allJobInfo();
        });

    </script>



@endsection