@extends('employer.employerDashboard')
@section('empr-contant')
    <div class="profile-badge"><a class="btn btn-sm btn-success" onclick="addNewJob()">Add New Job</a></div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <h3 class="tab-pane-title">Manage Jobs</h3>

    <div class="table table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>

            <tr>

                <th>SL</th>
                <th>Job Name</th>
                <th>Company Name</th>
                <th>Job Type</th>
                <th>Job Vacancy</th>
                <th>DeadLine</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>

            @php
                $count= 1
            @endphp
            @foreach($employerAllJobs as $allJob)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$allJob->jobName}}</td>
                    <td>{{$allJob->companyName}}</td>
                    <td>{{$allJob->jobType}}</td>
                    <td>{{$allJob->vacancy}}</td>
                    <td>
                        {{$allJob->deadline}}
                    </td>
                    <td>
                        @foreach(JOB_STATUS as $key=>$value)
                            @if ($allJob->status==$value['code']){{$value['name']}}@endif
                        @endforeach
                    </td>
                    <td>
                        @foreach(JOB_STATUS as $key=>$value)
                            @if ($allJob->status==$value['code'] && $allJob->status=='1' )
                                <a data-panel-id="{{$allJob->jobId}} "onclick="deactiveJob(this)"><button class="btn btn-sm btn-success">Deactive</button></a>
                                {{--<a data-panel-id="{{$allJob->jobId}} "onclick="deleteJob(this)"><button class="btn btn-sm btn-danger">Delete</button></a>--}}

                            @elseif($allJob->status==$value['code'] && $allJob->status=='2' )

                                <a data-panel-id="{{$allJob->jobId}} "onclick="postJob(this)"><button class="btn btn-sm btn-success">Post</button></a>
                                <a data-panel-id="{{$allJob->jobId}} "onclick="deleteJob(this)"><button class="btn btn-sm btn-danger">Delete</button></a>
                             @endif
                        @endforeach
                            <a data-panel-id="{{$allJob->jobId}} "onclick="editJob(this)"><button class="btn btn-sm btn-info">Edit</button></a>

                    </td>

                    @php
                        $count++
                    @endphp
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

@endsection

@section('foot-js')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                    "targets": [ 1,2,3,6,7 ],
                    "orderable": false
                } ]
            });
        } );
        function addNewJob() {

            $.ajax({
                type: "POST",
                url: '{{route('employer.addNewJobForm')}}',
                data: {_token:"{{csrf_token()}}"},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Add-New-Job");
                    $('#myModal').modal({show:true});
                },
            });

        }
        function postJob(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employer.postJobForm')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Post-Job");
                    $('#myModal').modal({show:true});
                },
            });


        }
        function editJob(x) {
            var id = $(x).data('panel-id');
            $.ajax({
                type: "POST",
                url: '{{route('employer.editJobForm')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Job");
                    $('#myModal').modal({show:true});
                },
            });


        }
        function deleteJob(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To delete this Job?',
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
                                url: '{{route('employer.jobDelete')}}',
                                data: {id:id,_token:"{{csrf_token()}}"},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Job Deleted successfully',
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
        function deactiveJob(x) {

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To Deactive this Job?',
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
                                url: '{{route('employer.jobDeactive')}}',
                                data: {id:id,_token:"{{csrf_token()}}"},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Job Deactiveted successfully',
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

    </script>

@endsection