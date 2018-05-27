<form method="post" action="{{route('employee.insertEducation',$id)}}" class="form-horizontal">
<div class="form-group">
    {{csrf_field()}}
    <div class="col-md-12">
        <label>Name of Institution</label>
        <input type="text" id="schoolName" name="schoolName" placeholder="Name of Institution" class="form-control" required />
    </div>
    <div class="col-md-12">
        <label>Degree Name</label>
        <input type="text" id="degreeName" name="degreeName" placeholder="Degree Name" class="form-control col-md-4" required />
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <label>Start Date</label>
            <input type="text" id="startDate" name="startDate" placeholder="Start From" class="form-control col-md-4 date" required />
        </div>
        <div class="col-md-6">
            <label>End Date</label>

            <input type="text" id="endDate"name="endDate" placeholder="End Date" class="form-control col-md-3 date"/> /
            <input type="checkbox" id="currentlyRunning" name="currentlyRunning" value="1">TillNow

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
        $( "#startDate" ).datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",

        });
        $( "#endDate" ).datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
        });
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