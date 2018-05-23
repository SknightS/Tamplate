
<form method="post" action="{{route('employee.updateCandidateInfo',$candidateInfo->id)}}" enctype="multipart/form-data" class="form-horizontal">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-md-6">
        <label class="col-md-2">Name<span style="color: red">*</span></label>
        <input type="text" id="name" name="name" placeholder="Candidate name" value="{{$candidateInfo->name}}" class="form-control col-md-4" required />
        </div>
        <div class="col-md-6">
            <label>Profession<span style="color: red">*</span></label>
            <input type="text" id="profession" name="profession" placeholder="Candidate profession" value="{{$candidateInfo->professionTitle}}" class="form-control" required />
        </div>
    </div>
    <div class="form-group">
    <div class="col-md-6">
        <label class="col-md-2">Phone<span style="color: red">*</span></label>
        <input type="text" id="phone" placeholder="Candidate Phone" name="phone" value="{{$candidateInfo->phone}}" class="form-control col-md-4" required />
    </div>
    <div class="col-md-6">
        <label class="col-md-2">Email<span style="color: red">*</span></label>
        <input type="email" id="email" placeholder="Candidate email" name="email" value="{{$candidateInfo->email}}" class="form-control col-md-4" required />
    </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
        <label class="col-md-2">Address States</label> <br>
        <select class="form-control col-md-4" id="states" name="states">
            <option selected value="">Select States</option>
            @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="col-md-6">
        <label class="col-md-2">Address City</label> <br>
        <select class="form-control col-md-4" id="cities" name="cities">
            <option selected value="">Select City</option>
        </select>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6">

        <label class="col-md-2">Image</label>
        <input type="file" id="image" name="image" accept="image/*" placeholder="Candidate image" class="form-control col-md-4" />
        </div>

    </div>


    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>

</form>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#states').change(function(){

        var states=$('#states').val();

        $.ajax({
            type: "POST",
            url: '{{route('employee.getAllAddressCity')}}',
            data: {stateId:states},
            success: function(data){

                document.getElementById("cities").innerHTML = data;

            },
        });

    });
</script>


