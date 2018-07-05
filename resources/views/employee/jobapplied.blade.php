@extends('employee.employeDashboard')
@section('emp-contant')

    <h3 class="tab-pane-title">Manage applications</h3>

    <div class="job-applications-list-wrapper">

        @foreach($candidateAllAppliedJob as $allAppliedJob)
        <div class="job-application flex items-center no-column no-wrap">
            <div class="application-company-cell application-cell flex items-center no-column no-wrap">
                <div class="application-company-logo">
                    <img src="images/company-logo01.jpg" alt="company-logo" class="img-responsive">
                </div> <!-- end .application-company-logo -->
                <div class="application-company-text">
                    <h4 class="dark">Web designer needed</h4>
                    <p>Quick studio</p>
                </div> <!-- end .application-company-text -->
            </div> <!-- end .job-application-company-cell -->
            <div class="application-contractor-type-cell application-cell">
                <button type="button" class="button full-time button-xs">Full time</button>
            </div> <!-- end .application-contractor-type-cell -->
            <div class="application-submission-date-cell application-cell">
                <p>{{$allAppliedJob->applyTime}}</p>
            </div> <!-- end .application-submission-date-cell -->
            <div class="application-status-cell">
                @if($allAppliedJob->request_status=='1')
                <p class="processing">In process</p>
                @elseif($allAppliedJob->request_status=='0')
                        <p class="rejected">Rejected</p>
                @elseif($allAppliedJob->request_status=='2')
                        <p class="approved">Approved</p>
                @endif


            </div> <!-- end .application-status-cell -->
        </div> <!-- end .job-application -->
            @endforeach

    </div> <!-- end .applications-list-wrapper -->

    <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
        @if($candidateAllAppliedJob->currentPage()!=1)
        <a href="{{$candidateAllAppliedJob->previousPageUrl()}}" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
        @endif
        <ul class="list-unstyled flex no-column items-center">
            @for($i=1; $i <= $candidateAllAppliedJob->total();$i++)
            <li><a href="{{$candidateAllAppliedJob->url($i)}}">{{$i}}</a></li>
            @endfor
        </ul>
        @if($candidateAllAppliedJob->lastPage()!=$candidateAllAppliedJob->currentPage())
        <a href="{{$candidateAllAppliedJob->nextPageUrl()}}" class="button">Next<i class="ion-ios-arrow-right"></i></a>
        @endif
    </div> <!-- end .jobpress-custom-pager -->

    <!--laravel pagination -->
    {{--<div class="list-unstyled flex space-center no-column items-center">--}}
        {{--{{$candidateAllAppliedJob->render()}}--}}
        {{--{{$candidateAllAppliedJob->lastPage()}}--}}
    {{--</div>--}}

    @endsection