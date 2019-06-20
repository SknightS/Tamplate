@foreach($FreeTimeInfo as $Time)
<form id="ds" method="post" action="{{route('employee.updateFreeTime',$FreeTimeId)}}" class="form-horizontal">
    <div class="row">
        {{csrf_field()}}

        <div class="col-md-12">
            <label>Day Name<span style="color: red">*</span></label>

            <select id="dayName" name="dayName" class="form-control" required>

                <option value="">Select Day</option>
                <?php foreach (NameOfDays as $days){?>
                <option @if($Time->day == $days)selected @endif value="<?php echo $days?>"><?php echo $days?></option>
                <?php } ?>

            </select>



        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <label>Start Date<span style="color: red">*</span></label>
                <input type="text" id="startTime" name="startTime" value="{{$Time->startTime}}" placeholder="Start From" class="form-control col-md-4 time" required />
            </div>
            <div class="col-md-6">
                <label>End Date</label>

                <input type="text" id="endTime"name="endTime"value="{{$Time->endTime}}" placeholder="End Time" class="form-control col-md-4 time"/>


            </div>
        </div>


    </div>

    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>
</form>
@endforeach

<script>

    $(document).ready(function(){

        $( ".time" ).datetimepicker({
            format: 'hh:mm A'

        });

        });

</script>

