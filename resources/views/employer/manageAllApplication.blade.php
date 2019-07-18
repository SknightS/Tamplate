@extends('employer.employerDashboard')
@section('empr-contant')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <h3 class="tab-pane-title">Manage applications</h3>
    <div class="candidate-applications-list-wrapper">

{{--        <ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">--}}
{{--            <li class="candidate-name-cell candidate-cell"><h6>Image</h6></li>--}}
{{--            <li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>--}}
{{--            <li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>--}}
{{--            <li class="candidate-resume-cell"><h6>Email</h6></li>--}}

{{--            <li class="candidate-resume-cell"><h6>JobType</h6></li>--}}
{{--            <li class="candidate-resume-cell"><h6>Status</h6></li>--}}
{{--            <li class="candidate-actions-cell"><h6>Actions</h6></li>--}}
{{--        </ul>--}}
        <!-- end .fav-candidates-table-headings -->

        <div id="allApplication">

            <div class="table table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>

                    <tr>

                        <th>Image</th>
                        <th>Aplicant Name</th>
                        <th>Branch &<br> Job name</th>
                        <th>Email</th>
                        <th>Job Type</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach($allApplication as $applications)
                        <tr>

                            <td>@if($applications->image != null)
                                    <img src="{{url('public/employeeImages/thumb/'.$applications->image)}}" height="80px" width="80px" alt="candidate-image" class="img-responsive">
                                @else
                                    <img src="{{url('public/employeeImages/dummy.jpg')}}" height="80px" width="80px" alt="candidate-image" class="img-responsive">
                                @endif
                            </td>
                            <td>{{$applications->candidateName}}</td>
                            <td><h4 style="color: black">{{$applications->companyName}}</h4>
                                <p>{{$applications->jobTitle}}</p>
                            </td>
                            <td>{{$applications->candidateEmail}}</td>
                            <td>
                                {{$applications->typeName}}
                            </td>
                            <td>
                                @foreach(JOB_REQUEST_STATUS as $key=>$value)
                                    @if ($applications->request_status==$value['code']){{$value['name']}}@endif
                                @endforeach
                            </td>
                            <td>
                                @foreach(JOB_REQUEST_STATUS as $key=>$value)

                                    @if ($applications->request_status==$value['code'] && $applications->request_status=='1' )

                                        {{--<a data-panel-id="{{$applications->requestJobId}} "onclick="stopJob(this)"><button class="btn btn-sm btn-danger">Stop</button></a>--}}

                                        <a data-panel-id="{{$applications->requestJobId}} "onclick="completeJob(this)"><button class="btn btn-sm btn-success">Complete</button></a>



                                    @elseif($applications->request_status==$value['code'] && $applications->request_status=='2' )


                                        <a data-panel-id="{{$applications->requestJobId}} "onclick="startJob(this)"><button class="btn btn-sm btn-danger">Start</button></a>



                                    @elseif($applications->request_status==$value['code'] && $applications->request_status=='5' )


                                        <a data-panel-id="{{$applications->requestJobId}} "onclick="approveJob(this)"><button class="btn btn-sm btn-info">Approve</button></a>
                                        <a data-panel-id="{{$applications->requestJobId}} "onclick="rejectJob(this)"><button class="btn btn-sm btn-info">Reject</button></a>
                                         <a target="_blank" href="{{route('candidate.viewcv',['id'=>$applications->requestJobId])}}" ><button class="btn btn-sm btn-primary">View CV</button></a>


                                    @endif

                                @endforeach

                                {{--<a data-panel-id="{{$applications->jobId}} "onclick="editJob(this)"><button class="btn btn-sm btn-info">Edit</button></a>--}}

                            </td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>


        </div>


    </div> <!-- end .candidate-applications-list-wrapper -->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


    <script>




        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready( function () {
            table=$('#example').DataTable({

                "columnDefs": [ {
                    "targets": [ 0,1,2,3,4,6 ],
                    "orderable": false
                } ]
            });
        } );
        {{--function applicationInfo() {--}}

            {{--$.ajax({--}}
                {{--type: 'POST',--}}
                {{--url: "{!! route('employer.manageAllApplicationData') !!}",--}}
                {{--cache: false,--}}
                {{--data: {_token:"{{csrf_token()}}"},--}}
                {{--success: function (data) {--}}
                    {{--$("#allApplication").html(data);--}}
                    {{--// console.log(data);--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
        //
        // $(document).ready(function()
        // {
        //     applicationInfo();
        //
        //     $(document).on('click', '.pagination a',function(event)
        //     {
        //         $('li').removeClass('active');
        //         $(this).parent('li').addClass('active');
        //         event.preventDefault();
        //         var myurl = $(this).attr('href');
        //         var page=$(this).attr('href').split('page=')[1];
        //         getData(page);
        //     });
        // });
        // function getData(page){
        //
        //     $.ajax(
        //         {
        //             url: '?page=' + page,
        //             type: "get",
        //             data: {},
        //             datatype: "html",
        //             // beforeSend: function()
        //             // {
        //             //     you can show your loader
        //             // }
        //         })
        //         .done(function(data)
        //         {
        //             $("#allApplication").html(data);
        //             location.hash = page;
        //         })
        //         .fail(function(jqXHR, ajaxOptions, thrownError)
        //         {
        //             alert('No response from server');
        //         });
        // }

        function startJob(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure to start this Job?',
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
                                url: '{{route('employer.startJob')}}',
                                data: {_token:"{{csrf_token()}}",id:id},
                                success: function(data){

                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Job started successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    location.reload();

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
        function completeJob(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure to complete this Job?',
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
                                url: '{{route('employer.completeJob')}}',
                                data: {_token:"{{csrf_token()}}",id:id},
                                success: function(data){

                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Job completed successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    location.reload();

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
        function approveJob(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure to approve this Job?',
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
                                url: '{{route('employer.approveJob')}}',
                                data: {_token:"{{csrf_token()}}",id:id},
                                success: function(data){

                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Job approved successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    location.reload();

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
        function rejectJob(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure to reject this Job?',
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
                                url: '{{route('employer.rejectJob')}}',
                                data: {_token:"{{csrf_token()}}",id:id},
                                success: function(data){

                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Job rejected successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    location.reload();

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

        function viewCV(x) {
            var id = $(x).data('panel-id');

            $.ajax({
                type: "POST",
                url: '{{route('candidate.viewcv')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){



                },
            });
        }


    </script>

@endsection