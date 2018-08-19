
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
@foreach($skillInfo as $skill)
<form method="post" action="{{route('employee.updateSkill',$skillId)}}" class="form-horizontal">
    <div class="row">
        {{csrf_field()}}
        <div class="col-md-12">
            <label>Skill Name</label>
            <input type="text" id="skillName" name="skillName" placeholder="Name of Skill" value="{{$skill->skillName}}" class="form-control" required />
        </div>
        <div class="col-md-12">

            <label>Percentage of Skill (out of 100)</label>
            <div class="slidecontainer">
                <input type="range" min="1" max="100" value="{{$skill->percentage}}" class="slider" id="myRange">
                <p>Value: <span id="demo"></span> %</p>
                <input type="hidden" id="skillPercentage" name="skillPercentage" class="form-control" required />
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
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
        $("#skillPercentage").val(this.value);
    }

</script>