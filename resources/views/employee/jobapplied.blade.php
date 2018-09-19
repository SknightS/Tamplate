@extends('employee.employeDashboard')
@section('emp-contant')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <h3 class="tab-pane-title">Manage applications</h3>


    <div class="table table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>

        <tr>

            <th>SL</th>
            <th>Job Name</th>
            <th>Company Name</th>
            <th>Job Type</th>
            <th>Apply date</th>

            <th>Start Date</th>
            <th>End Date</th>
            <th>Job Status</th>

        </tr>
        </thead>
        <tbody>

        @php
            $count= 1
        @endphp
        @foreach($candidateAllAppliedJob as $allAppliedJob)
            <tr>
                <td>{{$count}}</td>
                <td>{{$allAppliedJob->jobName}}</td>
                <td>{{$allAppliedJob->companyName}}</td>
                <td>{{$allAppliedJob->jobType}}</td>
                <td>{{date('Y-m-d',strtotime($allAppliedJob->applyTime))}}</td>

                <td>{{$allAppliedJob->jobStartTime}}</td>
                <td>{{$allAppliedJob->jobEndTime}}</td>

                <td>

                    @foreach(JOB_REQUEST_STATUS as $key=>$value)
                        @if ($allAppliedJob->request_status==$value['code'])<p>{{$value['name']}}</p>@endif
                    @endforeach

                    {{--@if($allAppliedJob->request_status=='1')--}}
                    {{--<p class="processing">In process</p>--}}
                    {{--@elseif($allAppliedJob->request_status=='0')--}}
                    {{--<p class="rejected">Rejected</p>--}}
                    {{--@elseif($allAppliedJob->request_status=='2')--}}
                    {{--<p class="approved">Approved</p>--}}
                    {{--@endif--}}

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

        $(".passform").mousedown(function(){
            $(this).prop('type', 'text');
        });

        $(".passform").mouseup(function(){
            $(this).prop('type', 'password');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready( function () {
            $('#example').DataTable({

                "columnDefs": [ {
                    "targets": [ 1,2,3,7 ],
                    "orderable": false
                } ]
            });
        } );

    </script>

@endsection