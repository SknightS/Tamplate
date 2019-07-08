
<form id="ds" method="post" action="{{route('employee.insertFreeTime',$candidateId)}}" class="form-horizontal">
    <div class="row">
        {{csrf_field()}}

        <div class="col-md-12">
            <label>Day Name<span style="color: red">*</span></label>

            <select id="dayName" name="dayName[]" class="form-control" required>

                <option value="">Select Day</option>
                <?php foreach (NameOfDays as $days){?>
                <option value="<?php echo $days?>"><?php echo $days?></option>
                <?php } ?>

            </select>



        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <label>Start Date<span style="color: red">*</span></label>
                <input type="text" id="startTime" name="startTime[]" placeholder="Start From" class="form-control col-md-4 time" required />
            </div>
            <div class="col-md-6">
                <label>End Date<span style="color: red">*</span></label>
                <input type="text" id="endTime"name="endTime[]" placeholder="End Date" class="form-control col-md-4 time" required/>
            </div>
        </div>
        <div  id="newFreeTime">

        </div>
        <div style="padding: 20px;"class="col-md-12" id="add_remove_button">

            <button class="btn btn-sm btn-info" type='button'  id='add'>Add</button>
            <button class="btn btn-sm btn-danger" type='button'  id='remove'>Remove</button>


        </div>
    </div>

    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>
</form>





<script>

    {{--function checkFreeTime(){--}}


        {{--var values =  $('select[name="dayName[]"]').map(function () {--}}
            {{--return this.value; // $(this).val()--}}
        {{--}).get();--}}

        {{--for( var i = values.length-1; i--;){--}}
            {{--if ( values[i] === '{{OTHERS}}') values.splice(i, 1);--}}
        {{--}--}}


        {{--var unique = values.filter(function(itm, i, values) {--}}

            {{--return i == values.indexOf(itm);--}}


        {{--});--}}

        {{--if(values.length != unique.length){--}}

            {{--alert("Already inserted");--}}
           {{--// $(x).val('');--}}

        {{--}--}}

    {{--}--}}





    $(document).ready(function(){

        $( ".time" ).datetimepicker({
            format: 'hh:mm A'

        });




        var counter = 2;

        $("#add").click(function () {

            if(counter == '2')
            {
                var name=document.getElementById("dayName").value;
                if(name==""){alert("Please Select a Day");
                    return false;
                }

            }
            else{
                var name=document.getElementById("dayName"+(counter-1)).value;
                if(name=="") {
                    alert("Please Select a Day");
                    return false;
                }

            }
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id",'TextBoxDiv' + counter);
            newTextBoxDiv.after().html(
            '<div class="col-md-12">'+
                '<label>Day Name<span style="color: red">*</span></label>'+

            '<select id="dayName'+counter+'" name="dayName[]" class="form-control" required>'+

            '<option value="">Select Day</option>'+
            '<?php foreach (NameOfDays as $days){?>'+
            '<option value="<?php echo $days?>"><?php echo $days?></option>'+
                '<?php } ?>'+

                '</select>'+
                '</div>'+
            '<div class="col-md-12">'+
                '<div class="col-md-6">'+
                '<label>Start Time<span style="color: red">*</span></label>'+
            '<input type="text" id="startTime'+counter+'" name="startTime[]" placeholder="Start From" class="form-control col-md-4 time" required />'+
            '</div>'+
            '<div class="col-md-6">'+
                '<label>End Time<span style="color: red">*</span></label>'+

            '<input type="text" id="endTime'+counter+'"name="endTime[]" placeholder="End Date" class="form-control col-md-4 time" required/>'+


                '</div>'+
                '</div>'+
            '</div>'+

                '<br>'
            );
            newTextBoxDiv.appendTo("#newFreeTime");

            $( ".time" ).datetimepicker({
                format: 'hh:mm A'

            });



            counter++;
        });
        $("#remove").click(function () {
            if(counter==2){

                alert("No more Skill to remove");

                return false;
            }

            counter--;
            $("#TextBoxDiv" + counter).remove();
        });
    });


</script>

