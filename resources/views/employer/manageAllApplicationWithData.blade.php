<div class="candidate-applications-wrapper">

    @foreach($allApplication as $applications)

        <div class="candidate-application flex no-wrap no-column items-center list-unstyled">



            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Image</h6>
                </div> <!-- end .cell-label -->
                <div class="candidate-cell-inner flex items-center no-column no-wrap">
                    <div class="candidate-img">

                        @if($applications->image != null)
                            <img src="{{url('public/employeeImages/thumb/'.$applications->image)}}" height="80px" width="80px" alt="candidate-image" class="img-responsive">
                        @else
                            <img src="{{url('public/employeeImages/dummy.jpg')}}" height="80px" width="80px" alt="candidate-image" class="img-responsive">
                        @endif


                    </div> <!-- end .candidate-img -->
                    <div class="cell-text no-column">
                        <h4>{{$applications->candidateName}}</h4>
                    </div> <!-- end .cell-text -->
                </div> <!-- end .candidate-cell-inner -->
            </div> <!-- end .candidate-name-cell -->

            <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Job</h6>
                </div> <!-- end .cell-label -->
                <div class="cell-text no-column">
                    <h4 style="color: black">{{$applications->companyName}}</h4>
                    <p>{{$applications->jobTitle}}</p>
                </div> <!-- end .candidate-cell-inner -->
            </div> <!-- end .candidate-job-cell -->

            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Email</h6>
                </div> <!-- end .cell-label -->
                <div class="candidate-cell-inner flex no-column no-wrap">
                    <p><span><i class="ion-email"></i></span>{{$applications->candidateEmail}}</p>
                </div> <!-- end .candidate-cell-inner -->
            </div> <!-- end .candidate-resume-cell -->

            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>JobType</h6>
                </div> <!-- end .cell-label -->
                <div class="candidate-cell-inner flex no-column no-wrap">
                    <p>{{$applications->typeName}}</p>
                </div> <!-- end .candidate-cell-inner -->
            </div> <!-- end .candidate-resume-cell -->

            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Status</h6>
                </div> <!-- end .cell-label -->
                <div class="candidate-cell-inner flex no-column no-wrap">
                    <p>

                        @foreach(JOB_REQUEST_STATUS as $key=>$value)
                            @if ($applications->request_status==$value['code']){{$value['name']}}@endif
                        @endforeach

                    </p>
                </div> <!-- end .candidate-cell-inner -->
            </div> <!-- end .candidate-resume-cell -->

            <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Actions</h6>
                </div> <!-- end .cell-label -->
                <div class="candidate-cell-inner flex no-column no-wrap">

                    @foreach(JOB_REQUEST_STATUS as $key=>$value)

                        @if ($applications->request_status==$value['code'] && $applications->request_status=='1' )

                            {{--<a data-panel-id="{{$applications->requestJobId}} "onclick="stopJob(this)"><button class="btn btn-sm btn-danger">Stop</button></a>--}}

                            <a data-panel-id="{{$applications->requestJobId}} "onclick="completeJob(this)"><button class="btn btn-sm btn-success">Complete</button></a>



                        @elseif($applications->request_status==$value['code'] && $applications->request_status=='2' )


                            <a data-panel-id="{{$applications->requestJobId}} "onclick="startJob(this)"><button class="btn btn-sm btn-danger">Start</button></a>



                        @elseif($applications->request_status==$value['code'] && $applications->request_status=='5' )


                            <a data-panel-id="{{$applications->requestJobId}} "onclick="approveJob(this)"><button class="btn btn-sm btn-info">Approve</button></a>
                            <a data-panel-id="{{$applications->requestJobId}} "onclick="rejectJob(this)"><button class="btn btn-sm btn-info">Reject</button></a>


                        @endif

                    @endforeach


                </div> <!-- end .candidate-cell-inner -->
            </div> <!-- end .candidate-actions-cell -->
        </div> <!-- end .candidate-application -->

        <div class="divider"></div>

    @endforeach
</div>




<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">

    @if($allApplication->currentPage()!= 1)
        <a data-id="{{$allApplication->previousPageUrl()}}" href="javascript:void(0)" class="button pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a>
    @endif
    <ul class="list-unstyled flex no-column items-center pagination">
        @for($i=$allApplication->perPage(); $i <= $allApplication->total();$i=($i+$allApplication->perPage()))
            <li ><a href="{{$allApplication->url($i)}}">{{$i}}</a></li>
        @endfor
    </ul>
    @if($allApplication->lastPage()!=$allApplication->currentPage())
        <a data-id="{{$allApplication->nextPageUrl()}}"href="javascript:void(0)"  class="button pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a>
    @endif

</div> <!-- end .jobpress-custom-pager -->

<script>
    $(".pagiNextPrevBtn").on("click",function() {

        var page=$(this).data('id').split('page=')[1];

        getData(page)

    });
</script>