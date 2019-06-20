{{$jobInfo}}
<form method="post" action="{{route('employer.updateJob')}}"  class="form-horizontal">
    {{csrf_field()}}
    <input type="hidden" id="jobId" name="jobId" value="{{$jobId}}">
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-6">company Name<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="companyId" name="companyId" required>
                <option selected value="">Select Company</option>

                @foreach($companyBrach as $state)

                    <option @if($state->id==$jobInfo->company_branch_id) selected @endif value="{{$state->id}}">{{$state->name}}</option>

                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="col-md-4">Job Name<span style="color: red">*</span></label>
            <input type="text" id="jobName" name="jobName" placeholder="Job name" value="{{$jobInfo->jobName}}" class="form-control col-md-4" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-4">job Type<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="jobType" name="jobType" required>
                <option selected value="">Select type</option>

                @foreach($jobType as $jobT)

                    <option @if($jobT->id==$jobInfo->fkjobTypeId) selected @endif value="{{$jobT->id}}">{{$jobT->typeName}}</option>

                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="col-md-4">DeadLine<span style="color: red">*</span></label>
            <input type="text" id="deadLine" name="deadLine" value="{{$jobInfo->deadline}}" class="form-control col-md-4 dateTime" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-2">Vacancy<span style="color: red">*</span></label>
            <input type="number" id="vacancy" placeholder="Vacancy" value="{{$jobInfo->no_of_vacancy}}" name="vacancy"  class="form-control col-md-4" required />
        </div>
        <div class="col-md-6">
            <label class="col-md-4">job Amount<span style="color: red">*</span></label>
            <input type="number" id="jobAmount" placeholder="Amount" value="{{$jobInfo->job_amount}}" name="jobAmount"  class="form-control col-md-4" required />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-4">Start Time<span style="color: red">*</span></label>
            <input type="text" id="startTime" name="startTime" value="{{$jobInfo->startTime}}" class="form-control col-md-4 Time" />
        </div>
        <div class="col-md-6">
            <label class="col-md-4">End Time</label>
            <input type="text" id="endTime" name="endTime" value="{{$jobInfo->endTime}}" class="form-control col-md-4 Time"/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-4">job Status<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="jobStatus" name="jobStatus" onchange="checkPost()" required>
                <option selected value="">Select status</option>

                @foreach(JOB_STATUS as $key=>$value)

                    @if($value['code'] !='0')
                        <option @if($value['code']==$jobInfo->status) selected @endif value="{{$value['code']}}">{{$key}}</option>
                    @endif
                @endforeach

            </select>
        </div>
        <div class="col-md-6">

        </div>
    </div>


@if(!empty($post))

    <div id="postDesc" class="form-group">
        <div class="col-md-12">
            <label >Post Description</label>
            <input type="hidden" id="postId" name="postId" value="{{$post->id}}">
            <textarea class="form-control" id="postDescription"name="postDescription" rows="3"cols="5" placeholder="Post Description">{{$post->description}}</textarea>

        </div>
    </div>
@else

        <div id="postDesc" class="form-group">
            <div class="col-md-12">
                <label >Post Description</label>
                <input type="hidden" id="postId" name="postId" value="">
                <textarea class="form-control" id="postDescription"name="postDescription" rows="3"cols="5" placeholder="Post Description"></textarea>

            </div>
        </div>

@endif

    <div  class="form-group">
        <div class="col-md-12">
            <label >Job Description<span style="color: red">*</span></label>
            <textarea class="form-control" id="description"name="description" rows="3"cols="5" required placeholder="Description">{{$jobInfo->description}}</textarea>

        </div>
    </div>
    <div  class="form-group">
        <div class="col-md-12">
            <button class="btn btn-sm btn-success" type="submit">Submit</button>
        </div>
    </div>


</form>

<style>
    .modal-dialog{
        width:70%;

    }
</style>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $( function() {
        @if(!empty($post))
            $( '#postDesc' ).show();
            $("[name='postDescription']").prop("required", true);
        @else
            $( '#postDesc' ).hide();
            $("[name='postDescription']").prop("required", false);
        @endif

        $(".dateTime").datetimepicker({
            format: "YYYY-MM-DD",

        });
//        $(".Time").datetimepicker({
////            format: "hh:mm A",
//            useCurrent: true,
//            minDate: moment(),
//            date: '1/11/2016 12:23:12',
//
//        });

    });
    function checkPost() {
        if ($("#jobStatus").val()== '<?php echo JOB_STATUS['post']['code'] ?>' ){


            $( '#postDesc' ).show();
            $("[name='postDescription']").prop("required", true);

        }else {

            $( '#postDesc' ).hide();
            $("[name='postDescription']").prop("required", false);
        }

    }



</script>
