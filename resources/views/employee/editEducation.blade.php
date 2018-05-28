
<form method="post" action="{{route('employee.updateCandidateEducation',$id)}}" class="form-horizontal">
    <div class="form-group">
        {{csrf_field()}}
        <div class="col-md-12">
            <label>Name of Institution</label>
            <input type="text" id="schoolName" name="schoolName" placeholder="Name of Institution" value="{{$education->schoolName}}" class="form-control" required />
        </div>
        <div class="col-md-12">
            <label>Degree Name</label>
            <input type="text" id="degreeName" name="degreeName" placeholder="Degree Name" value="{{$education->degreeName}}" class="form-control col-md-4" required />
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <label>Start Date</label>
                <input type="text" id="startDate" name="startDate" placeholder="Start From" value="{{$education->startDate}}" class="form-control col-md-4 date" required />
            </div>
            <div class="col-md-6">
                <label>End Date</label>
                @if($education->currentlyRunning=='0')
                <input type="text" id="endDate"name="endDate" placeholder="End Date" value="{{$education->endDate}}" class="form-control col-md-3 date"/>
                @else
                    <input type="text" id="endDate"name="endDate" placeholder="End Date"  class="form-control col-md-3 date"/>
                @endif
                    /
                <input type="checkbox" id="currentlyRunning" name="currentlyRunning" @if($education->currentlyRunning=='1')checked @endif value="1">TillNow

            </div>
        </div>
    </div>

    <div style="padding: 20px;text-align: center" class="form-group">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>

</form>


<script>
    $( function() {
        $( "#startDate" ).datetimepicker({
            format: "Y"

        });
        $( "#endDate" ).datetimepicker({
            format: "Y"
        });

        if($('#currentlyRunning').is(":checked")) {
            $("#endDate").css({"display":"none"});
        }
        else {
            $("#endDate").css({"display":"block"});
        }

    } );

    $("#currentlyRunning").click(function () {

        if($('#currentlyRunning').is(":checked")) {
            $("#endDate").css({"display":"none"});
        }
        else {
            $("#endDate").css({"display":"block"});
        }
    });
</script>