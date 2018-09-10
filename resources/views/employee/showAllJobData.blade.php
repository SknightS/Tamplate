
    @foreach($allJobs as $job)

        <div class="form-group">
            <div class="col-lg-12">
                <div style="background-color: #a0a7bc" class="card m-b-30">
                    <div class="card-body">

                        <div  class="media">
                            <div class="media-body">
                                <h4 style="margin-bottom: 5px;color:black " class="mt-0 font-20 mb-1">{{$job->jobName}}</h4>
                                <h4 style="margin-bottom: 5px;color:black " class="mt-0 font-20 mb-1">CompanyName:{{$job->companyName}}</h4>
                                <p class="text-muted font-14">{{$job->description}} </p>
                                <p class="text-muted font-14"><b>Deadline: {{$job->deadline}}</b></p>
                                <div class="form-group">
                                <div class="col-md-4">
                                    <p class="text-muted font-14 col-4"><b>Vacancy: {{$job->no_of_vacancy}}</b></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted font-14 col-4"><b>Amount: {{$job->job_amount}}</b></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted font-14 col-4"><b>JobType: {{$job->typeName}}</b></p>
                                </div>
                                </div>
                                <br>

                                <p class="text-muted font-14"> <a style="color: #707083;" href="#"><b> Details..</b></a> </p>
                            </div>
                        </div>

                        <div style="float: right; position: absolute; bottom: 10%; right: 1%;" class="applynow">

                            @php
                                $flag= "False"
                            @endphp
                            @foreach($applyjob as $aj)
                                @if($job->postId ==  $aj->post_id)

                                    <span style="color: red">{{ "Allready Applied"}}</span>

                                    @php
                                        $flag= "True"
                                    @endphp
                                @endif
                            @endforeach

                            @if($flag == "True")
                            @else


                                    <button type="button" class="btn btn-info btn-sm" data-job-title="{{$job->jobName}}" data-panel-id="{{$job->postId}}" onclick="applyJob(this)">Apply Now</button>


                            @endif

                        </div>


                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>


    @endforeach


    <ul class="pagination">


        <li class="page-item @if($allJobs->currentPage()== 1) disabled @endif"> <a data-id="{{$allJobs->previousPageUrl()}}" href="javascript:void(0)" class="page-link pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a></li>


        @for($i=$allJobs->perPage(); $i <= $allJobs->total();$i=($i+$allJobs->perPage()))
            <li  @if($allJobs->currentPage() == $i) class="page-item active " @else class="page-item" @endif> <a class="page-link pagiNextPrevBtn" data-id="{{$allJobs->url($i)}}" href="javascript:void(0)">{{$i}}</a></li>
        @endfor

        <li  class="page-item @if($allJobs->lastPage()==$allJobs->currentPage()) disabled @endif"><a data-id="{{$allJobs->nextPageUrl()}}" href="javascript:void(0)"  class="page-link pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a></li>

    </ul>





    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
        $(".pagiNextPrevBtn").on("click",function() {
            var page=$(this).data('id').split('page=')[1];
            getData(page);
        });
    </script>


