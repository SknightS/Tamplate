

<style>
    .slidecontainer {
        width: 100%;
    }

    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 15px;
        border-radius: 5px;
        /*background: #d3d3d3;*/
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #4CAF50;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #4CAF50;
        cursor: pointer;
    }
</style>


<form id="ds" method="post" action="{{route('employee.insertSkill',$candidateId)}}" class="form-horizontal">
    <div class="row">
    {{csrf_field()}}

        <div class="col-md-12">
        <label>Skill Name</label>

            <input type="text" id="skillName" name="skillName[]" class="form-control" required />
            <?php $test=array();foreach($skills as $skill){?>



                        <?php
                   // $arr1 = array('name' => $skill->skillName);
                    array_push($test,$skill->skillName);



                    } ?>



            </div>
    <div class="col-md-12">

        <label>Percentage of Skill (out of 100)</label>
        <div class="slidecontainer">
            <input type="range" min="1" max="100" value="01" class="slider" id="myRange">
            <p>Value: <span id="demo"></span> %</p>
            <input type="hidden" id="skillPercentage" name="skillPercentage[]" class="form-control" required />
        </div>

    </div>
        <div  id="newSkill">

        </div>
        <div class="col-md-12" id="add_remove_button">

            <button class="btn btn-sm btn-info" type='button'  id='add'>Add</button>
            <button class="btn btn-sm btn-danger" type='button'  id='remove'>Remove</button>


        </div>
    </div>

    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>
</form>




<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    var js_array = [<?php echo '"'.implode('","', $test).'"' ?>];
    $( function() {

        $( "#skillName" ).autocomplete({
            source: js_array
        });
    } );

    $('#ds').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });

    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
        $("#skillPercentage").val(this.value);
    };

    $(document).ready(function(){
        var counter = 2;

        $("#add").click(function () {




            if(counter == '2')
            {
                var name=document.getElementById("skillName").value;
                if(name==""){alert("Please Type a skill");
                    return false;
                }

            }
            else{
                var name=document.getElementById("skillName"+(counter-1)).value;
                if(name=="") {
                    alert("Please Type a skill");
                    return false;
                }

            }
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id",'TextBoxDiv' + counter);
            newTextBoxDiv.after().html('<div class="col-md-12">'+'<label>Skill Name#'+counter+':</label>' +
                '<input type="text" id="skillName'+counter+'" name="skillName[]" class="form-control" required />'+
                    '</div>'+
                '<div class="col-md-12">'+

                '<label>Percentage of Skill (out of 100)</label>'+
            '<div class="slidecontainer">'+
                '<input type="range" min="1" max="100" value="01" class="slider" id="myRange'+counter+'">'+
                '<p>Value: <span id="demo'+counter+'"></span> %</p>'+
            '<input type="hidden" id="skillPercentage'+counter+'" name="skillPercentage[]" class="form-control" required />'+

            '</div>'+

            '</div>'+'</div>'+

                '<br>'
            );
            newTextBoxDiv.appendTo("#newSkill");

            var slider = document.getElementById("myRange"+(counter));
            var output = document.getElementById("demo"+(counter));
            output.innerHTML = slider.value;

            slider.oninput = function() {
                output.innerHTML = this.value;

                $("#skillPercentage"+(counter-1)).val(this.value);


            };

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

