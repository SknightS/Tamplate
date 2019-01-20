

    <form method="post" action="{{route('employee.insertCandidateWorkExperience',$id)}}" class="form-horizontal">
        {{csrf_field()}}
        <div class="col-md-12">
            <label>Company Name<span style="color: red">*</span></label>
            <input type="text" id="companyName" name="companyName" placeholder="Company Name" class="form-control" required />
        </div>
        <div class="col-md-12">
            <div class="col-md-6"> 
                <label>Post Name<span style="color: red">*</span></label>
                <input type="text" id="postName" name="postName" placeholder="Post Name" class="form-control col-md-4" required />
            </div>
            <div class="col-md-6"> 
                <label class="col-md-2">Duration<span style="color: red">*</span></label>
                <input type="text" id="duration"name="duration" placeholder="Duration" class="form-control col-md-4" required />
            </div>
        </div>
        <div class="col-md-12">
            <label>Description<span style="color: red">*</span></label>
            <textarea id="description" placeholder="Description" maxlength="2000" name="description" class="form-control" required rows="4" cols="50"></textarea> <br>
        </div>

        <div style="padding: 20px;text-align: center" class="row">
            <button type="submit" class="btn btn-info">Submit</button>
            <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
        </div>
    </form>
