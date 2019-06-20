
<form method="post" action="{{route('employer.insertNewJob')}}"  class="form-horizontal">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-6">company Name<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="companyId" name="companyId" required>
                <option selected value="">Select Company</option>

                @foreach($companyBrach as $state)

                    <option  value="{{$state->id}}">{{$state->name}}</option>

                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="col-md-4">Job Name<span style="color: red">*</span></label>
            <input type="text" id="jobName" name="jobName" placeholder="Job name" class="form-control col-md-4" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-4">job Type<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="jobType" name="jobType" required>
                <option selected value="">Select type</option>

                @foreach($jobType as $jobT)

                    <option  value="{{$jobT->id}}">{{$jobT->typeName}}</option>

                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="col-md-4">DeadLine<span style="color: red">*</span></label>
            <input type="text" id="deadLine" name="deadLine" class="form-control col-md-4 dateTime" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-2">Vacancy<span style="color: red">*</span></label>
            <input type="number" id="vacancy" placeholder="Vacancy" name="vacancy" min="1" class="form-control col-md-4" required />
        </div>
        <div class="col-md-6">
            <label class="col-md-4">job Amount<span style="color: red">*</span></label>
            <input type="number" id="jobAmount" placeholder="Amount" name="jobAmount" min="1" class="form-control col-md-4" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-4">Start Time<span style="color: red">*</span></label>
            <input type="text" id="startTime" name="startTime" class="form-control col-md-4 Time" />
        </div>
        <div class="col-md-6">
            <label class="col-md-4">End Time</label>
            <input type="text" id="endTime" name="endTime" class="form-control col-md-4 Time"  />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-4">job Status<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="jobStatus" name="jobStatus" onchange="checkPost()" required>
                <option selected value="">Select status</option>

                @foreach(JOB_STATUS as $key=>$value)

                    @if($value['code'] !='0')
                    <option value="{{$value['code']}}">{{$key}}</option>
                    @endif
                @endforeach

            </select>
        </div>
        <div class="col-md-6">

        </div>
    </div>



    <div id="postDesc" class="form-group">
        <div class="col-md-12">
            <label >Post Description<span style="color: red">*</span></label>
            <textarea class="form-control" id="postDescription"name="postDescription" rows="3"cols="5" placeholder="Post Description"></textarea>

        </div>
    </div>
    <div  class="form-group">
        <div class="col-md-12">
            <label >Job Description<span style="color: red">*</span></label>
            <textarea class="form-control" id="description"name="description" rows="3"cols="5" required placeholder="Description"></textarea>

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
        $( '#postDesc' ).hide();
        $("[name='postDescription']").prop("required", false);

        $(".dateTime").datetimepicker({
            format: "YYYY-MM-DD",
            useCurrent: false,
            minDate: moment(),

        });
//        if ($("#startTime").val() == ''){
//            $("#endTime").datetimepicker({
//            format: "YYYY-MM-DD",
//
//                useCurrent: false,
//                minDate: moment(),
//
//            });
//        }else {
//            $("#endTime").datetimepicker({
////            format: "YYYY-MM-DD",
//                useCurrent: false,
//                minDate: $("#startTime").val(),
//
//            });
//        }

        $(".Time").datetimepicker({
//            format: "hh:mm A",
            useCurrent: true,
            minDate: moment(),

        });

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
