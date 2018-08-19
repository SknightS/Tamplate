@extends('main')

@section('content')
    <!-- Responsive Menu -->
    <div class="responsive-menu">
        <a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
        <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <!-- Breadcrumb Bar -->
    <div class="section breadcrumb-bar solid-blue-bg">
        <div class="inner">
            <div class="container">
                <div class="breadcrumb-menu flex items-center no-column">

                    @if($candidateInfo->image != null)
                        <img src="{{url('public/employeeImages/thumb/'.$candidateInfo->image)}}" alt="avatar" class="img-responsive">
                    @else
                        <img src="{{url('public/employeeImages/dummy.jpg')}}" alt="avatar" class="img-responsive">
                    @endif
                    <div class="breadcrumb-info-dashboard">
                        <h2>{{$candidateInfo->name}}</h2>
                        <h4>{{$candidateInfo->professionTitle}}</h4>
                    </div> <!-- end .candidate-info -->


                </div> <!-- end .breadcrumb-menu -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Employer Dashboard -->
    <div class="section employer-dashboard-content solid-light-grey-bg">
        <div class="inner">
            <div class="container">

                <div class="right-side-content ">

                    <div id="profile" class="tab-pane  fade in active">

                        <div class="profile-wrapper fade in active">


                            <div class="profile-badge"><h6>My resume</h6></div>
                            <div class="profile-wrapper">

                                <div class="profile-info profile-section flex no-column no-wrap">

                                    <div class="profile-picture">
                                        @if($candidateInfo->image != null)
                                            <img src="{{url('public/employeeImages/thumb/'.$candidateInfo->image)}}" height="116px" width="116px" alt="candidate-picture" class="img-responsive">
                                        @else
                                            <img src="{{url('public/employeeImages/dummy.jpg')}}" height="116px" width="116px" alt="candidate-picture" class="img-responsive">
                                        @endif
                                    </div> <!-- end .user-picture -->
                                    <div class="profile-meta">
                                        <h4 class="dark">{{$candidateInfo->name}}</h4>

                                        <p>{{$candidateInfo->professionTitle}}</p>
                                        <div class="profile-contact flex items-center no-wrap no-column">
                                            @if($employeeAddress!=null)
                                                @foreach($employeeAddress as $address)
                                                    <h6 class="contact-location">{{$address->addresscol}},<span>{{$address->city}}, {{$address->state}}</span></h6>
                                                @endforeach
                                            @else
                                                <h6 class="contact-location"><span></span></h6>
                                            @endif
                                            <h6 class="contact-phone">{{$candidateInfo->phone}}</h6>
                                            <h6 class="contact-email">{{$candidateInfo->email}}</h6>
                                        </div> <!-- end .profile-contact -->
                                        <div>

                                            <ul class="list-unstyled social-icons flex no-column">
                                                @foreach($socialLink as $socialLinks)
                                                    <li><a href="{{$socialLinks->link}}">{{$socialLinks->name}}</a>

                                                    </li>
                                                @endforeach

                                            </ul> <!-- end .social-icons -->
                                        </div>
                                    </div> <!-- end .profile-meta -->
                                </div> <!-- end .profile-info -->

                                <div class="divider"></div>

                                <div class="profile-about profile-section">
                                    <h3 class="dark profile-title">About me</h3>
                                    <p>{{$candidateInfo->aboutme}}</p>
                                </div> <!-- end .profile-about -->

                                <div class="divider"></div>

                                <div id="workExperience" class="profile-experience-wrapper profile-section">
                                    <h3 class="dark profile-title">Work experience</h3>
                                    @foreach($workExperience as $workingExp)
                                        <div class="profile-experience flex space-between no-wrap no-column">
                                            <div class="profile-experience-left">
                                                <h5 class="profile-designation dark">{{$workingExp->postName}}</h5>
                                                <h5 class="profile-company dark">{{$workingExp->comapnyName}}</h5>
                                                <p class="small ultra-light">{{$workingExp->duration}}</p>
                                                <p>{{$workingExp->description}}</p>
                                                {{--<h6 class="projects-count">4 projects</h6>--}}
                                            </div> <!-- end .profile-experience-left -->
                                            {{--<div class="profile-experience-right">--}}
                                            {{--<img src="{{url('public/images/company-logo-big01.jpg')}}" alt="company-logo" class="img-responsive">--}}
                                            {{--</div> <!-- end .profile-experience-right -->--}}
                                        </div> <!-- end .profile-experience -->
                                        <div class="spacer-md"></div>
                                    @endforeach
                                </div> <!-- end .profile-experience-wrapper -->

                                <div class="divider"></div>

                                <div id="Education" class="profile-education-wrapper profile-section">
                                    <h3 class="dark profile-title">Education</h3>
                                    @foreach($education as $edu)
                                        <div class="profile-education">
                                            <h5 class="dark">{{$edu->schoolName}}&nbsp;</h5>
                                            <p>{{$edu->degreeName}}</p>
                                            <p class="ultra-light">{{$edu->startDate}} - @if($edu->currentlyRunning=='0'){{$edu->endDate}}@else{{"Currenty Running"}}@endif</p>
                                        </div> <!-- end .profile-education -->
                                        <div class="spacer-md"></div>
                                    @endforeach

                                </div> <!-- end .profile-education-wrapper -->

                                <div class="divider"></div>

                                <div id="Skill" class="profile-skills-wrapper profile-section">
                                    <h3 class="dark profile-title">Summary skill</h3>
                                    @foreach($skill as $personalSkill)
                                        <div class="progress-wrapper flex space-between items-center no-wrap">
                                            <h6 class="progress-skill">{{$personalSkill->skillName}}</h6>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$personalSkill->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$personalSkill->percentage}}%;">
                                                </div> <!-- end .progress-bar -->
                                            </div> <!-- end .progress -->
                                            <h6 class="percentage"><span class="countTo" data-from="0" data-to="{{$personalSkill->percentage}}">{{$personalSkill->percentage}}</span>%</h6>

                                        </div> <!-- end .progress-wrapper -->

                                        <div class="spacer-xs"></div>
                                    @endforeach

                                    {{--<input type="text" id="test">--}}
                                </div> <!-- end .profile-skills-wrapper -->

                                <div class="divider"></div>

                                <div id="FreeTime" class="profile-skills-wrapper profile-section">
                                    <h3 class="dark profile-title">Free Time</h3>

                                    <div class="table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <th>Day</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>

                                            </thead>
                                            <tbody>
                                            @foreach($FreeTimeInfo as $FreeTime)
                                                <tr>
                                                    <td>{{$FreeTime->day}}</td>
                                                    <td>{{date('h:m A',strtotime($FreeTime->startTime))}}</td>
                                                    <td>{{date('h:m A',strtotime($FreeTime->endTime))}}</td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="spacer-xs"></div>

                                </div> <!-- end .profile-skills-wrapper -->


                            </div> <!-- end .profile-wrapper -->
                        </div> <!-- end .profile-info -->

                        <div class="divider"></div>

                        <!-- end .profile-wrapper -->
                    </div> <!-- end #profile-tab -->

                </div> <!-- end .right-side-content -->

            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->
@endsection