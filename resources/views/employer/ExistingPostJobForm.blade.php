
<form method="post" action="{{route('employer.jobPost')}}"  class="form-horizontal">
    {{csrf_field()}}
    <input type="hidden" id="jobId" name="jobId" value="{{$jobId}}">

    <div id="postDesc" class="form-group">
        <div class="col-md-12">
            <label >Post Description</label>
            <textarea class="form-control" id="postDescription"name="postDescription" rows="3"cols="5" placeholder="Post Description"></textarea>

        </div>
    </div>

    <div  class="form-group">
        <div class="col-md-12">
            <button class="btn btn-sm btn-success" type="submit">Submit</button>
        </div>
    </div>


</form>

<style>
    .modal-dialog{
        width:60%;

    }
</style>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<script>




</script>
