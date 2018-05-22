
<form action="/action_page.php">
    <div class="form-group">
        <div class="col-md-6">
        <label class="col-md-2">Name</label>
        <input type="text" id="name" placeholder="Candidate name" value="{{$candidateInfo->name}}" class="form-control col-md-4" required />
        </div>
        <div class="col-md-6">
            <label>Profession</label>
            <input type="text" id="profession" placeholder="Candidate profession" value="{{$candidateInfo->professionTitle}}" class="form-control" required />
        </div>
    </div>
    <div class="form-group">
    <div class="col-md-6">
        <label class="col-md-2">Phone</label>
        <input type="text" id="phone" placeholder="Candidate Phone" value="{{$candidateInfo->phone}}" class="form-control col-md-4" required />
    </div>
    <div class="col-md-6">
        <label class="col-md-2">Email</label>
        <input type="email" id="email" placeholder="Candidate email" value="{{$candidateInfo->email}}" class="form-control col-md-4" required />
    </div>
    </div>
    @foreach($socialLink as $links)

        <div class="col-md-6">
            <label class="col-md-2">{{$links->name}}</label>
            <input type="text" id="phone" placeholder="Candidate Phone" value="{{$links->link}}" class="form-control col-md-4" required />
        </div>

    @endforeach

    <div id="TextBoxesGroup" class="">
        <label >Add Social Media Link</label>
        <a style="cursor: pointer" id="addButton"><i class="ion-plus"></i></a>
        <a style="cursor: pointer" id="removeButton"><i class="ion-close"></i></a>
    </div>

    <div class="">

        <label >Image</label>
        <input type="file" id="image" accept="image/*" placeholder="Candidate image" class="form-control" />

    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<script>
    $(document).ready(function(){
        var counter = 2;
        $("#addButton").click(function () {


            if(counter>10){
                alert("Only 10 textboxes allow");
                return false;
            }
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);
            newTextBoxDiv.after().html('<div class="form-group">'+
                '<label class="control-label col-md-3">Social Media Name#'+ counter + ' : </label>'+
                '<div class="col-md-5">'+
                '<input class="form-control input-height" type="text" id="socialMediaName" name="socialMediaName[]" >'+
                '</div>'+
                '</div>'+
                '<div class="form-group">'+
                '<label class="control-label col-md-3">Social Media Link#'+ counter + ' : </label>'+
                '<div class="col-md-5">'+
                '<input class="form-control input-height" type="text" id="socialMediaLink" name="socialMediaLink[]">'+
                '</div>'+
                '</div>'+
                '</div>'
            );
            newTextBoxDiv.appendTo("#TextBoxesGroup");
            counter++;

        });

    });
</script>
