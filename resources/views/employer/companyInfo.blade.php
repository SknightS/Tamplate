@extends('employer.employerDashboard')
@section('empr-contant')


    <div class="profile-badge"><h6>My Companies</h6></div>
    <div class="profile-wrapper">
        <div class="col-12">
            <button onclick="addNewCompany()" class="btn btn-sm"style="float: left; height: 26px; margin-top: 3px; background-color: #00A8FF;color: whitesmoke;"><b>New Company</b></button>
        </div>


        <div id="products" class="row list-group">

            @foreach($employerCompaniesWithBranch as $allCompany)
                <div class="item  col-xs-4 col-lg-4">
                    <span><a style="cursor: pointer" data-panel-id="{{$allCompany->branchId}}" onclick="editEmployerCompany(this)"><i class="ion-edit"></i></a></span>
                    <a href="{{route('Companydetails',$allCompany->companyId)}}">
                        <div class="thumbnail">

                            @if($allCompany->image != null)
                                <img style="height:100px;"  src="{{url('public/companyImages/thumb/'.$allCompany->image)}}" alt="company-logo" class=" group list-group-image">
                            @else
                                <img style="height:100px;" src="{{url('public/companyImages/dummy.jpg')}}" alt="company-logo" class="img-responsive group list-group-image">
                            @endif


                            <div class="caption">
                                <h4 style="color: #a0a7ba" class="group inner list-group-item-heading">
                                    <b>Company Name:</b>&nbsp;&nbsp;{{$allCompany->branchName}}</h4>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <h4 style="color:#a0a7ba " class="group inner list-group-item-heading">
                                            <b>Address:</b> {{$allCompany->addresscol}},<span>{{$allCompany->city}}, {{$allCompany->state}}</span>
                                        </h4>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </a>

                </div>
            @endforeach

        </div>


    </div> <!-- end .profile-skills-wrapper -->

    {{--</div> <!-- end .profile-wrapper -->--}}

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
        function editEmployerCompany(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employer.editEmployerCompany')}}',
                data: {id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Employer Company");
                    $('#myModal').modal({show:true});

                    //console.log(data)
                },
            });

        }
        function addNewCompany() {

            $.ajax({
                type: "POST",
                url: '{{route('employer.addEmployerNewCompany')}}',
                data: {},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Add-Employer Company");
                    $('#myModal').modal({show:true});

                    //console.log(data)
                },
            });

        }
    </script>


@endsection