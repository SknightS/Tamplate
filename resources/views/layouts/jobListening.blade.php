@extends('main')
@section('head')
    <style>
        .slidecontainer {
            width: 100%;
        }
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            /*background: #d3d3d3;*/
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4CAF50;
            cursor: pointer;
        }
        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4CAF50;
            cursor: pointer;
        }

        .ul{
            list-unstyled: flex no-column items-center pagination
        }

    </style>
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

                {{--<div class="latest-updates-widget-wrapper jobs-widget">--}}
                    {{--<h6>Latest updates</h6>--}}
                    {{--<div class="latest-update flex no-column no-wrap">--}}
                        {{--<div class="left-side-inner">--}}
                            {{--<img src="images/avatar11.jpg" alt="avatar" class="img-responsive">--}}
                        {{--</div> <!-- end .left-side -->--}}
                        {{--<div class="right-side-inner">--}}
                            {{--<h5><span>James Patel</span>has got a job!</h5>--}}
                            {{--<h5><span>Web Designer</span>for Banana Inc. in<a href="#0">Art/Design</a></h5>--}}
                        {{--</div> <!-- end .right-side -->--}}
                    {{--</div> <!-- end .latest-update -->--}}

                    {{--<div class="latest-update flex no-column no-wrap">--}}
                        {{--<div class="left-side-inner">--}}
                            {{--<img src="images/avatar12.jpg" alt="avatar" class="img-responsive">--}}
                        {{--</div> <!-- end .left-side -->--}}
                        {{--<div class="right-side-inner">--}}
                            {{--<h5><span>Alice Phillips</span>has got a job!</h5>--}}
                            {{--<h5><span>Web Designer</span>for Banana Inc. in<a href="#0">Art/Design</a></h5>--}}
                        {{--</div> <!-- end .right-side -->--}}
                    {{--</div> <!-- end .latest-update -->--}}

                    {{--<div class="latest-update flex no-column no-wrap">--}}
                        {{--<div class="left-side-inner">--}}
                            {{--<img src="images/company-logo11.jpg" alt="company-logo" class="img-responsive">--}}
                        {{--</div> <!-- end .left-side -->--}}
                        {{--<div class="right-side-inner">--}}
                            {{--<h5><span>Evotweet</span>has got a job!</h5>--}}
                            {{--<h5><a href="#0">Front-end developer</a>needed in<a href="#0">Technologies</a></h5>--}}
                        {{--</div> <!-- end .right-side -->--}}
                    {{--</div> <!-- end .latest-update -->--}}

                    {{--<div class="latest-update flex no-column no-wrap">--}}
                        {{--<div class="left-side-inner">--}}
                            {{--<img src="images/avatar13.jpg" alt="avatar" class="img-responsive">--}}
                        {{--</div> <!-- end .left-side -->--}}
                        {{--<div class="right-side-inner">--}}
                            {{--<h5><span>Wayne Welch</span>has got a job!</h5>--}}
                            {{--<h5><span>Software Engineer</span>for Apple Inc. in<a href="#0">Technologies</a></h5>--}}
                        {{--</div> <!-- end .right-side -->--}}
                    {{--</div> <!-- end .latest-update -->--}}

                    {{--<div class="latest-update flex no-column no-wrap">--}}
                        {{--<div class="left-side-inner">--}}
                            {{--<img src="images/company-logo12.jpg" alt="company-logo" class="img-responsive">--}}
                        {{--</div> <!-- end .left-side -->--}}
                        {{--<div class="right-side-inner">--}}
                            {{--<h5><span>Prymb Creative Studio</span>has got a job!</h5>--}}
                            {{--<h5><a href="#0">We're looking for an Art Director</a>in<a href="#0">Tecnologies</a></h5>--}}
                        {{--</div> <!-- end .right-side -->--}}
                    {{--</div> <!-- end .latest-update -->--}}

                {{--</div> <!-- end .latest-updates-widget-wrapper -->--}}

            </div> <!-- end .left-side -->

            <div class="center-content-wrapper">

                <div class="sort-by-wrapper on-listing-page flex space-between items-center no-wrap">
                    <div class="left-side-inner">
                        <h6>showing
                            <span>{{($alljob->currentpage()-1)*$alljob->perpage()+1}}
                                - {{(($alljob->currentpage()-1)*$alljob->perpage())+$alljob->count()}}
                                </span>of
                            <span>{{$alljob->total()}}</span>Jobs</h6>
                    </div> <!-- end .left-side -->
                    <div class="right-side-inner">
                        <div class="sort-by dropdown flex no-wrap no-column items-center">
                            <h6>sort by</h6>
                            <button class="button dropdown-toggle" type="button" id="sort-by" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Default
                                <i class="ion-ios-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sort-by">
                                <li><a href="#">Featured</a></li>
                                <li><a href="#">Top candidates</a></li>
                                <li><a href="#">Price, high to low</a></li>
                                <li><a href="#">Alphabetically, A-Z</a></li>
                                <li><a href="#">Alphabetically, Z-A</a></li>
                                <li><a href="#">Best sellers</a></li>
                            </ul> <!-- end .dropdown-menu -->
                        </div> <!-- end .sort-by-drop-down -->
                    </div> <!-- end .right-side -->
                </div> <!-- end .sort-by-wrapper -->

                @foreach($alljob as $aj)
                <div class="bookmarked-jobs-list-wrapper on-listing-page">
                    <div class="bookmarked-job-wrapper">
                        <div class="bookmarked-job flex no-wrap no-column ">
                            <div class="job-company-icon">
                                <img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
                            </div> <!-- end .job-icon -->
                            <div class="bookmarked-job-info">
                                <h4 class="dark flex no-column">{{$aj->jobName}}</h4>
                                <h5>{{$aj->cname}}</h5>
                                <p>{{$aj->pdes}}</p>
                                <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                                    <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                        {{--<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">--}}
                                            {{--<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>--}}
                                            {{--<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>--}}
                                            {{--<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>--}}
                                        {{--</ul> <!-- end .candidates-avatar -->--}}
                                        <h6 class="bookmarked-job-category">{{$aj->typeName}}</h6>
                                        <h6 class="candidate-location">{{$aj->address}}</h6>
                                        <h6 class="hourly-rate">{{$aj->job_amount}}<span>/Hour</span></h6>
                                    </div> <!-- end .bookmarked-job-meta -->
                                    <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                        {{--<i class="ion-ios-heart wishlist-icon"></i>--}}
                                        <a href="#0" class="button">more detail</a>
                                    </div> <!-- end .right-side-bookmarked-job-meta -->
                                </div> <!-- end .bookmarked-job-info-bottom -->
                            </div> <!-- end .bookmarked-job-info -->
                        </div> <!-- end .bookmarked-job -->
                    </div> <!-- end .bookmarked-job-wrapper -->

                </div> <!-- end .bookmarked-jobs-list-wrapper -->
                @endforeach

                <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center pagination">
                    @if($alljob->currentPage()!= 1)
                        <a data-id="{{$alljob->previousPageUrl()}}" href="{{$alljob->previousPageUrl()}}" class="button pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a>
                    @endif
                    <ul class="list-unstyled flex no-column items-center pagination">
                        @for($i=$alljob->perPage(); $i <= $alljob->total();$i=($i+$alljob->perPage()))
                            <li ><a href="{{$alljob->url($i)}}">{{$i}}</a></li>
                        @endfor
                    </ul>
                    @if($alljob->lastPage()!=$alljob->currentPage())
                        <a data-id="{{$alljob->nextPageUrl()}}"href="{{$alljob->nextPageUrl()}}"  class="button pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a>
                    @endif

                </div>

                {{--<div align="center" class="jjobpress-custom-pager list-unstyled flex space-center no-column items-center ">--}}
                {{--{{ $alljob->links() }}--}}
                {{--</div>--}}
                {{--<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">--}}
                    {{--<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>--}}
                    {{--<ul class="list-unstyled flex no-column items-center">--}}
                        {{--<li><a href="#0">1</a></li>--}}
                        {{--<li><a href="#0">2</a></li>--}}
                        {{--<li><a href="#0">3</a></li>--}}
                        {{--<li><a href="#0">4</a></li>--}}
                        {{--<li><a href="#0">5</a></li>--}}
                    {{--</ul>--}}
                    {{--<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>--}}
                {{--</div> <!-- end .jobpress-custom-pager -->--}}

            </div> <!-- end .center-content -->

            <div class="right-side">

                <div class="job-categories-widget jobs-widget">
                    <h6>Categories</h6>
                    <ul class="job-categories list-unstyled">
                        @foreach($jobtypename as $jpn)
                        <li class="job-status checkbox flex space-between items-center no-column no-wrap">
                            <input id="{{$jpn->id}}" type="checkbox">
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


    @endsection