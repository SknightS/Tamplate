@extends('employee.employeDashboard')
@section('emp-contant')
    {{--<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">--}}
    <style>
        .ui-autocomplete-input {
            border: none;
            font-size: 14px;
            width: 300px;
            height: 24px;
            margin-bottom: 5px;
            padding-top: 2px;
            border: 1px solid #DDD !important;
            padding-top: 0px !important;
            z-index: 1511;
            position: relative;
        }
        .ui-menu .ui-menu-item a {
            font-size: 12px;
        }
        .ui-autocomplete {
            position: absolute;
            top: 0;
            left: 2px;
            z-index: 1510 !important;
            float: left;
            display: none;
            min-width: 160px;
            width: 160px;
            padding: 8px 0;
            margin: 8px 0 0 0;
            list-style: none;
            background-color: #ffffff;
            border-color: #ccc;
            border-color: rgba(0, 0, 0, 0.2);
            border-style: solid;
            border-width: 1px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
            *border-right-width: 2px;
            *border-bottom-width: 2px;
        }
        .ui-menu-item > a.ui-corner-all {
            display: block;
            padding: 3px 15px;
            clear: both;
            font-weight: normal;
            line-height: 18px;
            color: #555555;
            white-space: nowrap;
            text-decoration: none;
        }
        .ui-state-hover, .ui-state-active {
            color: #ffffff;
            text-decoration: none;
            background-color: #0088cc;
            border-radius: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            background-image: none;
        }
    </style>
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
                <h4 class="dark">{{$candidateInfo->name}}<span><a style="cursor: pointer" onclick="editCandidate()"><i class="ion-edit"></i></a></span></h4>
                {{--<h4 class="dark">{{$candidateInfo->name}}<span><a style="cursor: pointer" data-toggle="modal" data-target="#myModal"><i class="ion-edit"></i></a></span></h4>--}}
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
                    {{--<h5 class="dark">Social Media<span><a style="cursor: pointer" onclick="addCandidateSocialMedia()"><i class="ion-plus"></i></a></span></h5>--}}
                    <ul class="list-unstyled social-icons flex no-column">
                        @foreach($socialLink as $socialLinks)
                            <li><a href="{{$socialLinks->link}}">{{$socialLinks->name}}</a>
                                {{--<span><a id="editSocialMedia" style="cursor: pointer;color: black" onclick="editSocialMedia()"><i class="ion-edit"></i></a></span>--}}
                            </li>
                        @endforeach
                        {{--<li><a href="#0"><i class="ion-social-facebook"></i></a></li>--}}
                        {{--<li><a href="#0"><i class="ion-social-instagram"></i></a></li>--}}
                    </ul> <!-- end .social-icons -->
                </div>
            </div> <!-- end .profile-meta -->
        </div> <!-- end .profile-info -->

        <div class="divider"></div>

        <div class="profile-about profile-section">
            <h3 class="dark profile-title">About me<span><a style="cursor: pointer" onclick="editCandidateAboutMe()"><i class="ion-edit"></i></a></span></h3>
            <p>{{$candidateInfo->aboutme}}</p>
        </div> <!-- end .profile-about -->

        <div class="divider"></div>

        <div id="workExperience" class="profile-experience-wrapper profile-section">
            <h3 class="dark profile-title">Work experience<span><a style="cursor: pointer"  onclick="addCandidateWorkExperience()"><i class="ion-plus"></i></a></span></h3>
            @foreach($workExperience as $workingExp)
                <div class="profile-experience flex space-between no-wrap no-column">
                    <div class="profile-experience-left">
                        <h5 class="profile-designation dark">{{$workingExp->postName}}<span><a data-panel-id="{{$workingExp->workExperienceId}}" onclick="editCandidateWorkExperience(this)" style="cursor: pointer;"><i  class="ion-edit"></i></a><a class="deleteIcon" data-panel-id="{{$workingExp->workExperienceId}}"onclick="deleteWorkExperince(this)" style="cursor: pointer;" onclick=""><i class="ion-android-delete"></i></a></span></h5>
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
            <h3 class="dark profile-title">Education<span><a style="cursor: pointer" onclick="addCandidateEducation()"><i class="ion-plus"></i></a></span></h3>
            @foreach($education as $edu)
                <div class="profile-education">
                    <h5 class="dark">{{$edu->schoolName}}&nbsp;<span><a style="cursor: pointer;" data-panel-id="{{$edu->educationId}}" onclick="editCandidateEducation(this)"><i class="ion-edit"></i></a><a  style="cursor: pointer;" data-panel-id="{{$edu->educationId}}" onclick="deleteEducation(this)"><i class="ion-android-delete"></i></a></span></h5>
                    <p>{{$edu->degreeName}}</p>
                    <p class="ultra-light">{{$edu->startDate}} - @if($edu->currentlyRunning=='0'){{$edu->endDate}}@else{{"Currenty Running"}}@endif</p>
                </div> <!-- end .profile-education -->
                <div class="spacer-md"></div>
            @endforeach

        </div> <!-- end .profile-education-wrapper -->

        <div class="divider"></div>

        <div id="Skill" class="profile-skills-wrapper profile-section">
            <h3 class="dark profile-title">Summary skill<span><a style="cursor: pointer" onclick="addCandidateSkill()"><i class="ion-plus"></i></a></span></h3>
            @foreach($skill as $personalSkill)
                <div class="progress-wrapper flex space-between items-center no-wrap">
                    <h6 class="progress-skill">{{$personalSkill->skillName}}</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$personalSkill->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$personalSkill->percentage}}%;">
                        </div> <!-- end .progress-bar -->
                    </div> <!-- end .progress -->
                    <h6 class="percentage"><span class="countTo" data-from="0" data-to="{{$personalSkill->percentage}}">{{$personalSkill->percentage}}</span>%</h6>
                    <span><a style="cursor: pointer;" data-panel-id="{{$personalSkill->id}}" onclick="editSkill(this)"><i class="ion-edit"></i></a><a  style="cursor: pointer;" data-panel-id="{{$personalSkill->id}}" onclick="deleteSkill(this)"><i class="ion-android-delete"></i></a></span>
                </div> <!-- end .progress-wrapper -->

                <div class="spacer-xs"></div>
            @endforeach

            {{--<input type="text" id="test">--}}
        </div> <!-- end .profile-skills-wrapper -->

        <div class="divider"></div>

        <div id="FreeTime" class="profile-skills-wrapper profile-section">
            <h3 class="dark profile-title">Free Time<span><a style="cursor: pointer" onclick="addCandidateFreeTime()"><i class="ion-plus"></i></a></span></h3>

            <div class="table table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($FreeTimeInfo as $FreeTime)
                        <tr>
                            <td>{{$FreeTime->day}}</td>
                            <td>{{date('h:m A',strtotime($FreeTime->startTime))}}</td>
                            <td>{{date('h:m A',strtotime($FreeTime->endTime))}}</td>
                            <td><a style="cursor: pointer;" data-panel-id="{{$FreeTime->id}}" onclick="editFreeTime(this)"><i class="ion-edit"></i></a><a  style="cursor: pointer;" data-panel-id="{{$FreeTime->id}}" onclick="deleteFreeTime(this)"><i class="ion-android-delete"></i></a></td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>





            <div class="spacer-xs"></div>


        </div> <!-- end .profile-skills-wrapper -->

    </div> <!-- end .profile-wrapper -->

@endsection

@section('foot-js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <script>
        $( function() {
            var availableTags = [
                "Altstadt",
                "Altstadt",
                "Bahnhofsviertel",
                "Bergen-Enkheim",
                "Bergen-Enkheim",
                "Berkersheim",];
            $( "#test" ).autocomplete({
                source: availableTags
            });
        } );
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            @if(Session::has('success_msg'))
            $.alert({
                title: 'Success!',
                type: 'green',
                content: '{{Session::get('success_msg')}}',
                buttons: {
                    tryAgain: {
                        text: 'Ok',
                        btnClass: 'btn-green',
                        action: function () {
                        }
                    }
                }
            });
            @endif
        });
        function editCandidate() {
            var id= '{{$candidateInfo->candidateId}}';
            var name = '{{$candidateInfo->name}}';
            var professionTitle = '{{$candidateInfo->professionTitle}}';
            var phone = '{{$candidateInfo->phone}}';
            var email = '{{$candidateInfo->email}}';
            var addressId = '{{$candidateInfo->address_addressId}}';

            $.ajax({
                type: "POST",
                url: '{{route('employee.showInfo')}}',
                data: {name:name,profession:professionTitle,phone:phone,email:email,id:id,address:addressId},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Candidate Info!");
                    $('#myModal').modal({show:true});

                },
            });
        }
        function editCandidateAboutMe() {
            var id= '{{$candidateInfo->candidateId}}';
            $.ajax({
                type: "POST",
                url: '{{route('employee.editCandidateAboutMe')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Candidate Info!: About Me");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function deleteWorkExperince(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To delete this Work-Experience?',
                icon: 'fa fa-warning',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function(){
                            var id = $(x).data('panel-id');
                            $.ajax({
                                type: "POST",
                                url: '{{route('employee.deleteWorkExperience')}}',
                                data: {id: id},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Work-Experience Deleted successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    $('#workExperience').load(document.URL +  ' #workExperience');
                                                }
                                            }
                                        }
                                    });
                                },
                            });
                        }
                    },
                    No: function () {
                    },
                }
            });
        }
        function deleteEducation(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To delete this Education?',
                icon: 'fa fa-warning',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function(){
                            var id = $(x).data('panel-id');
                            $.ajax({
                                type: "POST",
                                url: '{{route('employee.deleteEducation')}}',
                                data: {id: id},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Education Deleted successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    $('#Education').load(document.URL +  ' #Education');
                                                }
                                            }
                                        }
                                    });
                                },
                            });
                        }
                    },
                    No: function () {
                    },
                }
            });
        }
        function addCandidateWorkExperience() {
            var id= '{{$candidateInfo->candidateId}}';
            $.ajax({
                type: "POST",
                url: '{{route('employee.addCandidateWorkExperience')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Add-Candidate Info! : Work-Experience");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function editCandidateWorkExperience(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employee.editCandidateWorkExperience')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Candidate Info! : Work-Experience");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function addCandidateEducation() {
            var id= '{{$candidateInfo->candidateId}}';
            $.ajax({
                type: "POST",
                url: '{{route('employee.addEducation')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Add-Candidate Info! : Education");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function editCandidateEducation(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employee.editCandidateEducation')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Candidate Info! : Education");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function addCandidateSkill() {
            var id= '{{$candidateInfo->candidateId}}';
            $.ajax({
                type: "POST",
                url: '{{route('employee.addCandidateSkill')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Add-Candidate Info! : Skill");
                    $('#myModal').modal({show:true});
                    //  console.log(data);
                },
            });
        }
        function editSkill(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employee.editSkill')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Candidate Info! : Skill");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function deleteSkill(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To delete this Skill?',
                icon: 'fa fa-warning',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function(){
                            var id = $(x).data('panel-id');
                            $.ajax({
                                type: "POST",
                                url: '{{route('employee.deleteSkill')}}',
                                data: {id: id},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Skill Deleted successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    $('#Skill').load(document.URL +  ' #Skill');
                                                }
                                            }
                                        }
                                    });
                                },
                            });
                        }
                    },
                    No: function () {
                    },
                }
            });
        }
        function addCandidateFreeTime() {
            var id= '{{$candidateInfo->candidateId}}';
            $.ajax({
                type: "POST",
                url: '{{route('employee.addCandidateFreeTime')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Add-Candidate Info! : Free Time");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function editFreeTime(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employee.editFreeTime')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Candidate Info! : Free Time");
                    $('#myModal').modal({show:true});
                },
            });
        }
        function deleteFreeTime(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To delete this Free Time?',
                icon: 'fa fa-warning',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function(){
                            var id = $(x).data('panel-id');
                            $.ajax({
                                type: "POST",
                                url: '{{route('employee.deleteFreeTime')}}',
                                data: {id: id},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Free Time Deleted successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    $('#FreeTime').load(document.URL +  ' #FreeTime');
                                                }
                                            }
                                        }
                                    });
                                },
                            });
                        }
                    },
                    No: function () {
                    },
                }
            });
        }
    </script>
@endsection