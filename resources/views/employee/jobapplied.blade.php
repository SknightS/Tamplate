@extends('employee.employeDashboard')
@section('emp-contant')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <h3 class="tab-pane-title">Manage applications</h3>

    {{--<div class="job-applications-list-wrapper">--}}

        {{--@foreach($candidateAllAppliedJob as $allAppliedJob)--}}
        {{--<div class="job-application flex items-center no-column no-wrap">--}}
            {{--<div class="application-company-cell application-cell flex items-center no-column no-wrap">--}}
                {{--<div class="application-company-logo">--}}
                    {{--<img src="images/company-logo01.jpg" alt="company-logo" class="img-responsive">--}}
                {{--</div> <!-- end .application-company-logo -->--}}
                {{--<div class="application-company-text">--}}
                    {{--<h4 class="dark">Web designer needed</h4>--}}
                    {{--<p>Quick studio</p>--}}
                {{--</div> <!-- end .application-company-text -->--}}
            {{--</div> <!-- end .job-application-company-cell -->--}}
            {{--<div class="application-contractor-type-cell application-cell">--}}
                {{--<button type="button" class="button full-time button-xs">Full time</button>--}}
            {{--</div> <!-- end .application-contractor-type-cell -->--}}
            {{--<div class="application-submission-date-cell application-cell">--}}
                {{--<p>{{$allAppliedJob->applyTime}}</p>--}}
            {{--</div> <!-- end .application-submission-date-cell -->--}}
            {{--<div class="application-status-cell">--}}
                {{--@if($allAppliedJob->request_status=='1')--}}
                {{--<p class="processing">In process</p>--}}
                {{--@elseif($allAppliedJob->request_status=='0')--}}
                        {{--<p class="rejected">Rejected</p>--}}
                {{--@elseif($allAppliedJob->request_status=='2')--}}
                        {{--<p class="approved">Approved</p>--}}
                {{--@endif--}}


            {{--</div> <!-- end .application-status-cell -->--}}
        {{--</div> <!-- end .job-application -->--}}
            {{--@endforeach--}}

    {{--</div> <!-- end .applications-list-wrapper -->--}}



    {{--<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">--}}
        {{--@if($candidateAllAppliedJob->currentPage()!=1)--}}
        {{--<a href="{{$candidateAllAppliedJob->previousPageUrl()}}" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>--}}
        {{--@endif--}}
        {{--<ul class="list-unstyled flex no-column items-center">--}}
            {{--@for($i=1; $i <= $candidateAllAppliedJob->total();$i++)--}}
            {{--<li><a href="{{$candidateAllAppliedJob->url($i)}}">{{$i}}</a></li>--}}
            {{--@endfor--}}
        {{--</ul>--}}
        {{--@if($candidateAllAppliedJob->lastPage()!=$candidateAllAppliedJob->currentPage())--}}
        {{--<a href="{{$candidateAllAppliedJob->nextPageUrl()}}" class="button">Next<i class="ion-ios-arrow-right"></i></a>--}}
        {{--@endif--}}
    {{--</div> <!-- end .jobpress-custom-pager -->--}}

    <!--laravel pagination -->
    {{--<div class="list-unstyled flex space-center no-column items-center">--}}
        {{--{{$candidateAllAppliedJob->render()}}--}}
        {{--{{$candidateAllAppliedJob->lastPage()}}--}}
    {{--</div>--}}
    <div class="table table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>

        <tr>

            <th>SL</th>
            <th>Job Name</th>
            <th>Company Name</th>
            <th>Job Type</th>
            <th>Apply date</th>
            <th>Job Start Code</th>
            <th>Job End Code</th>
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
                <td>{{$allAppliedJob->applyTime}}</td>

                <td>
                    @if($allAppliedJob->request_status=='2')
                    @if(empty($allAppliedJob->jobStartTime)  && empty($allAppliedJob->jobEndTime))
                    <input style="border: none;background: transparent;" class="passform"  type="password" value="{{$allAppliedJob->jobStartCode}}" readonly />
                    @elseif(!empty($allAppliedJob->jobStartTime)  && empty($allAppliedJob->jobEndTime))
                    job already Running
                    @elseif(!empty($allAppliedJob->jobStartTime)  && !empty($allAppliedJob->jobEndTime))
                    job already End
                    @endif
                    @else
                    @endif

                </td>
                <td>
                    @if($allAppliedJob->request_status=='2')
                        @if(empty($allAppliedJob->jobEndTime))
                    <input style="border: none;background: transparent;" class="passform" type="password" value="{{$allAppliedJob->jobEndCode}}" readonly />
                        @else
                            job already End
                        @endif
                    @else
                    @endif
                </td>
                <td>{{$allAppliedJob->jobStartTime}}</td>
                <td>{{$allAppliedJob->jobEndTime}}</td>

                <td>
                    @if($allAppliedJob->request_status=='1')
                    <p class="processing">In process</p>
                    @elseif($allAppliedJob->request_status=='0')
                    <p class="rejected">Rejected</p>
                    @elseif($allAppliedJob->request_status=='2')
                    <p class="approved">Approved</p>
                    @endif
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
                    "targets": [ 1,2,3,5,6,9 ],
                    "orderable": false
                } ]
            });
        } );

    </script>

@endsection