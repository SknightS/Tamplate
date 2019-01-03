
@foreach($candidateInfo as $candidate)
<form method="post" action="{{route('employee.updateCandidateAboutMe',$id)}}" class="form-horizontal">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-md-12">
            <label >About Me<span style="color: red">*</span></label>
            <textarea id="aboutMe" maxlength="2000" placeholder="Candidate about me" name="aboutMe" class="form-control" required rows="4" cols="50">{{$candidate->aboutme}}</textarea>
        </div>
    </div>

    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>

</form>
@endforeach



