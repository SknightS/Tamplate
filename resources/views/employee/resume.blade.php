@extends('employee.employeDashboard')
@section('emp-contant')

    <div class="profile-badge"><h6>My resume</h6></div>
        <div class="profile-wrapper">

            <div class="profile-info profile-section flex no-column no-wrap">

                <div class="profile-picture">
                    @if($candidateInfo->image != null)
                        <img src="{{url('public/employeeImages/'.$candidateInfo->image)}}" height="116px" width="116px" alt="candidate-picture" class="img-responsive">
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
                        <h5 class="dark">Social Media<span><a style="cursor: pointer" onclick="addCandidateSocialMedia()"><i class="ion-plus"></i></a></span></h5>
                    <ul class="list-unstyled social-icons flex no-column">
                        @foreach($socialLink as $socialLinks)
                        <li><a href="{{$socialLinks->link}}">{{$socialLinks->link}}</a>
                            <span><a id="editSocialMedia" style="cursor: pointer;color: black" onclick="editSocialMedia()"><i class="ion-edit"></i></a></span>
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
                <p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleif end tempor vitae augue. Fusce eget arcu et nibh dapibus maximus consectetur in est. Sed iaculis luctus nibh sed venenatis.</p>
            </div> <!-- end .profile-about -->

            <div class="divider"></div>

<div class="profile-experience-wrapper profile-section">
    <h3 class="dark profile-title">Work experience<span><a style="cursor: pointer;display: block" id="workExperienceEdit" onclick="editCandidateWorkExperience()"><i class="ion-edit"></i></a><a style="cursor: pointer;display: none" id="WorkExperienceUpdate" onclick="updateCandidateWorkExperience()"><i class="ion-checkmark"></i></a><a style="cursor: pointer" onclick="addCandidateWorkExperience()"><i class="ion-plus"></i></a></span></h3>
    <div class="profile-experience flex space-between no-wrap no-column">
        <div class="profile-experience-left">
            <h5 class="profile-designation dark">UI/UX designer &nbsp;<span><a class="deleteIcon" style="cursor: pointer;display: none" onclick=""><b><i class="ion-android-delete"></i></b></a></span></h5>
            <h5 class="profile-company dark">Banana inc.</h5>
            <p class="small ultra-light">May 2015 - Present (1.5 years)</p>
            <p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
            <h6 class="projects-count">4 projects</h6>
        </div> <!-- end .profile-experience-left -->
        <div class="profile-experience-right">
            <img src="{{url('public/images/company-logo-big01.jpg')}}" alt="company-logo" class="img-responsive">
        </div> <!-- end .profile-experience-right -->
    </div> <!-- end .profile-experience -->
    <div class="spacer-md"></div>
    <div class="profile-experience flex space-between no-wrap no-column">
        <div class="profile-experience-left">
            <h5 class="profile-designation dark">UI Designer<span><a class="deleteIcon" style="cursor: pointer;display: none" onclick=""><b><i class="ion-android-delete"></i></b></a></span></h5>
            <h5 class="profile-company dark">Whale creative</h5>
            <p class="small ultra-light">May 2013 - May 2015 (over 2 years)</p>
            <p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
            <h6 class="projects-count">4 projects</h6>
        </div> <!-- end .profile-experience-left -->
        <div class="profile-experience-right">
            <img src="{{url('public/images/company-logo-big05.jpg')}}" alt="company-logo" class="img-responsive">
        </div> <!-- end .profile-experience-right -->
    </div> <!-- end .profile-experience -->
</div> <!-- end .profile-experience-wrapper -->

<div class="divider"></div>

<div class="profile-education-wrapper profile-section">
    <h4 class="dark profile-title">Education<span><a style="cursor: pointer;display: block" id="EducationEdit" onclick="editCandidateEducation()"><i class="ion-edit"></i></a><a style="cursor: pointer;display: none" id="EducationUpdate" onclick="updateCandidateEducation()"><i class="ion-checkmark"></i></a><a style="cursor: pointer" onclick="addCandidateEducation()"><i class="ion-plus"></i></a></span></h4>
        <div class="profile-education">
            <h5 class="dark">Massachusetts Institute of Technology&nbsp;<span><a class="deleteIconEducation" style="cursor: pointer;display: none" onclick=""><b><i class="ion-android-delete"></i></b></a></span></h5>
            <p>Bachelor of Computer Science</p>
            <p class="ultra-light">2010-2014</p>
        </div> <!-- end .profile-education -->
        <div class="spacer-md"></div>
        <div class="profile-education">
            <h5 class="dark">School of Arts & Sciences of Stanford University&nbsp;<span><a class="deleteIconEducation" style="cursor: pointer;display: none" onclick=""><b><i class="ion-android-delete"></i></b></a></span></h5>
            <p>Bachelor of Arts & Sciences</p>
            <p class="ultra-light">2008-2012</p>
        </div> <!-- end .profile-education -->
</div> <!-- end .profile-education-wrapper -->

<div class="divider"></div>

<div class="profile-skills-wrapper profile-section">
    <h3 class="dark profile-title">Summary skill<span><i class="ion-edit"></i></span></h3>
    <div class="progress-wrapper flex space-between items-center no-wrap">
        <h6 class="progress-skill">HTML</h6>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
            </div> <!-- end .progress-bar -->
        </div> <!-- end .progress -->
        <h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
    </div> <!-- end .progress-wrapper -->
    <div class="spacer-xs"></div>
    <div class="progress-wrapper flex space-between items-center no-wrap">
        <h6 class="progress-skill">WordPress</h6>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
            </div> <!-- end .progress-bar -->
        </div> <!-- end .progress -->
        <h6 class="percentage"><span class="countTo" data-from="0" data-to="80">80</span>%</h6>
    </div> <!-- end .progress-wrapper -->
    <div class="spacer-xs"></div>
    <div class="progress-wrapper flex space-between items-center no-wrap">
        <h6 class="progress-skill">PS</h6>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            </div> <!-- end .progress-bar -->
        </div> <!-- end .progress -->
        <h6 class="percentage"><span class="countTo" data-from="0" data-to="60">60</span>%</h6>
    </div> <!-- end .progress-wrapper -->
    <div class="spacer-xs"></div>
    <div class="progress-wrapper flex space-between items-center no-wrap">
        <h6 class="progress-skill">AI</h6>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
            </div> <!-- end .progress-bar -->
        </div> <!-- end .progress -->
        <h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
    </div> <!-- end .progress-wrapper -->
</div> <!-- end .profile-skills-wrapper -->

</div> <!-- end .profile-wrapper -->

    @endsection

@section('foot-js')
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <script>
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

            {{--$("#myModal").on("show.bs.modal", function(e) {--}}


                {{--var id= '{{$candidateInfo->candidateId}}';--}}
                {{--var name = '{{$candidateInfo->name}}';--}}
                {{--var professionTitle = '{{$candidateInfo->professionTitle}}';--}}
                {{--var phone = '{{$candidateInfo->phone}}';--}}
                {{--var email = '{{$candidateInfo->email}}';--}}
                {{--var addressId = '{{$candidateInfo->address_addressId}}';--}}

                {{--$.ajax({--}}
                    {{--type: "POST",--}}
                    {{--url: '{{route('employee.showInfo')}}',--}}
                    {{--data: {name:name,profession:professionTitle,phone:phone,email:email,id:id,address:addressId},--}}
                    {{--success: function(data){--}}
                       {{--$(".modal-body").html(data);--}}
                        {{--//console.log(data);--}}

                    {{--},--}}
                {{--});--}}

            {{--});--}}

        });

        function editSocialMedia() {

            var id= '{{$candidateInfo->candidateId}}';

            $.ajax({
                type: "POST",
                url: '{{route('employee.getAllSocialMedia')}}',
                data: {id:id},
                success: function(data){

                    $('.modal-body').html(data);
                    $('#myModal').modal({show:true});

                },
            });




            //$("#myModal").modal();

        }

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
                    $('#myModal').modal({show:true});

                },
            });

        }
        function addCandidateWorkExperience() {

            $.confirm({
                title: 'Candidate Info!',
                columnClass: 'large',
                closeIcon: true,
                type: 'orange',
                typeAnimated: true,
                draggable: false,
                content: '' +
                '<form id="CandidateWorkExperienceForm" action="" class="">' +
                '<div class="col-md-12">' +
                '<label>Company Name</label>' +
                '<input type="text" id="companyName" placeholder="Company Name" class="form-control" required />' +
                '</div>' +
                '<div class="form-group">' +
                '<div class="col-md-6">' +
                '<label >Post Name</label>' +
                '<input type="text" id="postName" placeholder="Post Name" class="form-control col-md-4" required />' +
                '</div>'+
                '<div class="col-md-6">' +
                '<label >Duration</label>' +
                '<input type="text" id="duration" placeholder="Duration" class="form-control col-md-4" required />' +
                '</div>' +
                '</div>' +
                '<div class="col-md-12">' +
                '<label>Description</label>' +
                '<textarea id="description" placeholder="Description" class="form-control" required rows="4" cols="50"></textarea>' +
                '</div>' +

                '</form>',
                buttons: {
                    formSubmit: {
                        text: 'Submit',
                        btnClass: 'btn-blue',
                        action: function () {
                            var name = this.$content.find('#name').val();
                            if(!name){
                                $.alert('provide a valid name');
                                return false;
                            }
                            $.alert('Your name is ' + name);
                        }
                    },
                    tryAgain: {
                        text: 'Cancel',
                        btnClass: 'btn-red',
                        action: function(){
                            //close
                        }
                    },
                },
                onContentReady: function () {
                    // bind to events
                    var jc = this;
                    this.$content.find('#CandidateWorkExperienceForm').on('submit', function (e) {
                        // if the user submits the form by pressing enter in the field.
                        e.preventDefault();
                        jc.$$formSubmit.trigger('click'); // reference the button and click it
                    });
                }
            });

        }
        function editCandidateAboutMe() {

            $.confirm({
                title: 'Candidate Info! : About Me',
                columnClass: 'large',
                closeIcon: true,
                type: 'orange',
                typeAnimated: true,
                draggable: false,

                content: '' +
                '<form id="CandidateFormAboutMe" action="" class="formName">' +
                '<div class="form-group">' +
                '<label>About Me</label>' +
                '<textarea id="aboutMe" placeholder="Candidate about me" class="form-control" required rows="4" cols="50"></textarea>' +
                '</div>' +
                '</form>',
                buttons: {
                    formSubmit: {
                        text: 'Submit',
                        btnClass: 'btn-blue',
                        action: function () {
                            var name = this.$content.find('#aboutMe').val();
                            if(!name){
                                $.alert('provide a valid aboutMe');
                                return false;
                            }
                            $.alert('Your aboutMe is ' + name);
                        }
                    },
                    tryAgain: {
                        text: 'Cancel',
                        btnClass: 'btn-red',
                        action: function(){
                            //close
                        }
                    },
                },
                onContentReady: function () {
                    // bind to events
                    var jc = this;
                    this.$content.find('#CandidateFormAboutMe').on('submit', function (e) {
                        // if the user submits the form by pressing enter in the field.
                        e.preventDefault();
                        jc.$$formSubmit.trigger('click'); // reference the button and click it
                    });
                }
            });

        }
        function editCandidateWorkExperience() {

            $(".deleteIcon").css("display", "block");
            $("#workExperienceEdit").css("display", "none");
            $("#WorkExperienceUpdate").css("display", "block");

        }
        function updateCandidateWorkExperience() {

            $(".deleteIcon").css("display", "none");
            $("#workExperienceEdit").css("display", "block");
            $("#WorkExperienceUpdate").css("display", "none");

        }
        function editCandidateEducation() {

            $(".deleteIconEducation").css("display", "block");
            $("#EducationEdit").css("display", "none");
            $("#EducationUpdate").css("display", "block");

        }
        function updateCandidateEducation() {

            $(".deleteIconEducation").css("display", "none");
            $("#EducationEdit").css("display", "block");
            $("#EducationUpdate").css("display", "none");

        }
        function addSocialLink() {



        }
    </script>

@endsection