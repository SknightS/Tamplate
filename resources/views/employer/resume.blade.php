@extends('employer.employerDashboard')
@section('empr-contant')


    <div class="profile-badge"><h6>My Profile</h6></div>
    <div class="profile-wrapper">

        <div class="profile-info profile-section flex no-column no-wrap">

            <div class="profile-picture">
                @if($employerInfo->image != null)
                    <img src="{{url('public/employerImages/thumb/'.$employerInfo->image)}}" height="116px" width="116px" alt="employer-picture" class="img-responsive">
                @else
                    <img src="{{url('public/employerImages/dummy.jpg')}}" height="116px" width="116px" alt="employer-picture" class="img-responsive">
                @endif
            </div> <!-- end .user-picture -->
            <div class="profile-meta">
                <h4 class="dark">{{$employerInfo->contact_person_name}}<span><a style="cursor: pointer" onclick="editEmployer()"><i class="ion-edit"></i></a></span></h4>

                <div class="profile-contact flex items-center no-wrap no-column">
                    @if($employerAddress!=null)
                        @foreach($employerAddress as $address)
                            <h6 class="contact-location">{{$address->addresscol}},<span>{{$address->city}}, {{$address->state}}</span></h6>
                        @endforeach
                    @else
                        <h6 class="contact-location"><span></span></h6>
                    @endif
                    <h6 class="contact-phone">{{$employerInfo->cp_phone}}</h6>
                    <h6 class="contact-email">{{$employerInfo->cp_email}}</h6>
                </div> <!-- end .profile-contact -->

            </div> <!-- end .profile-meta -->
        </div> <!-- end .profile-info -->

        {{--<div class="divider"></div>--}}

        {{--<div class="profile-about profile-section">--}}
            {{--<h3 class="dark profile-title">About me<span><a style="cursor: pointer" onclick="editCandidateAboutMe()"><i class="ion-edit"></i></a></span></h3>--}}
            {{--<p>{{$candidateInfo->aboutme}}</p>--}}
        {{--</div> <!-- end .profile-about -->--}}


        {{--<div class="divider"></div>--}}

            {{--<div class="spacer-xs"></div>--}}


        </div> <!-- end .profile-skills-wrapper -->

    </div> <!-- end .profile-wrapper -->

@endsection

@section('foot-js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        });
        function editEmployer() {
            var id= '{{$employerInfo->companyId}}';
            var name = '{{$employerInfo->contact_person_name}}';

            var phone = '{{$employerInfo->cp_phone}}';
            var email = '{{$employerInfo->cp_email}}';
            var addressId = '{{$employerInfo->address_addressId}}';

            $.ajax({
                type: "POST",
                url: '{{route('employer.showInfo')}}',
                data: {name:name,phone:phone,email:email,id:id,address:addressId},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Employer Info!");
                    $('#myModal').modal({show:true});

                },
            });
        }
    </script>


@endsection