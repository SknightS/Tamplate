@extends('employer.employerDashboard')
@section('empr-contant')

    <h3 class="tab-pane-title">Manage applications</h3>
    <div class="candidate-applications-list-wrapper">

        <ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
            <li class="candidate-name-cell candidate-cell"><h6>Image</h6></li>
            <li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
            <li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>
            <li class="candidate-resume-cell"><h6>Email</h6></li>

            <li class="candidate-resume-cell"><h6>JobType</h6></li>
            <li class="candidate-resume-cell"><h6>Status</h6></li>
            <li class="candidate-actions-cell"><h6>Actions</h6></li>
        </ul>
        <!-- end .fav-candidates-table-headings -->

        <div id="allApplication">

        </div>


    </div> <!-- end .candidate-applications-list-wrapper -->



    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function applicationInfo() {

            $.ajax({
                type: 'POST',
                url: "{!! route('employer.manageAllApplicationData') !!}",
                cache: false,
                data: {_token:"{{csrf_token()}}"},
                success: function (data) {
                    $("#allApplication").html(data);
                    // console.log(data);
                }
            });
        }

        $(document).ready(function()
        {
            applicationInfo();

            $(document).on('click', '.pagination a',function(event)
            {
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                event.preventDefault();
                var myurl = $(this).attr('href');
                var page=$(this).attr('href').split('page=')[1];
                getData(page);
            });
        });
        function getData(page){

            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    data: {},
                    datatype: "html",
                    // beforeSend: function()
                    // {
                    //     you can show your loader
                    // }
                })
                .done(function(data)
                {
                    $("#allApplication").html(data);
                    location.hash = page;
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }

        function startJob(x) {

            var id = $(x).data('panel-id');

            $.ajax({
                type: "POST",
                url: '{{route('employer.startJob')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){
                    location.reload();
                },
            });

        }
        function completeJob(x) {

            var id = $(x).data('panel-id');

            $.ajax({
                type: "POST",
                url: '{{route('employer.completeJob')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){
                    location.reload();
                },
            });

        }
        function approveJob(x) {

            var id = $(x).data('panel-id');

            $.ajax({
                type: "POST",
                url: '{{route('employer.approveJob')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){
                    location.reload();
                },
            });

        }
        function rejectJob(x) {

            var id = $(x).data('panel-id');

            $.ajax({
                type: "POST",
                url: '{{route('employer.rejectJob')}}',
                data: {_token:"{{csrf_token()}}",id:id},
                success: function(data){
                    location.reload();
                },
            });

        }


    </script>

@endsection