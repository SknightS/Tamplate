
@foreach($employerCompaniesWithBranch as $company)
<form method="post" action="{{route('employer.updateEmployerCompanyInfo',$companyBranchId)}}" enctype="multipart/form-data" class="form-horizontal">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-md-12">
            <label class="col-md-2">Name<span style="color: red">*</span></label>
            <input type="text" id="name" name="name" placeholder="Company name" value="{{$company->branchName}}" class="form-control col-md-4" required />
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label class="col-md-2">Phone<span style="color: red">*</span></label>
            <input type="text" id="phone" placeholder="Company Phone" name="phone" value="{{$company->phone}}" class="form-control col-md-4" required />
        </div>
        <div class="col-md-6">
            <label class="col-md-2">Email<span style="color: red">*</span></label>
            <input type="email" id="email" placeholder="Company email" name="email" value="{{$company->email}}" class="form-control col-md-4" required />
        </div>
    </div>



    <div  class="form-group">
        <div class="col-md-12">
            <label >About<span style="color: red">*</span></label>
            @if($company->about !=null)
                <textarea class="form-control" id="address"name="about" rows="2"cols="5" placeholder="About">{{$company->about}}</textarea>
            @else
                <textarea class="form-control" id="address"name="about" rows="2"cols="5" placeholder="About"></textarea>
            @endif
        </div>
    </div>

    <div align="center" class="form-group">
        <label style="text-align: center">Address</label>
    </div>

    <div  class="form-group">
        <div class="col-md-6">
            <label class="col-md-2">States<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="states" name="states" required>
                <option selected value="">Select States</option>

                @foreach($addressStates as $state)
                    @if($company->state !=null)

                        <option @if($company->state==$state->id) selected @endif  value="{{$state->id}}">{{$state->name}}</option>

                    @else
                        <option  value="{{$state->id}}">{{$state->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="col-md-2">City<span style="color: red">*</span></label>
            <select class="form-control col-md-4" id="cities" name="cities"required>
                <option selected value="">Select City</option>
                @if($company->cityId !=null)
                    <option selected  value="{{$company->cityId}}">{{$company->cityName}}</option>
                @endif
            </select>
        </div>

    </div>
    <div  class="form-group">
        <div class="col-md-12">
            <label >Address<span style="color: red">*</span></label>
            @if($company->addresscol !=null)
                <textarea class="form-control" id="address"name="address" rows="2"cols="5" placeholder="Your address">{{$company->addresscol}}</textarea>
            @else
                <textarea class="form-control" id="address"name="address" rows="2"cols="5" placeholder="Your address"></textarea>
            @endif
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
@endforeach
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
            url: '{{route('employer.getAllAddressCity')}}',
            data: {stateId:states},
            success: function(data){

                document.getElementById("cities").innerHTML = data;

            },
        });

    });


</script>


