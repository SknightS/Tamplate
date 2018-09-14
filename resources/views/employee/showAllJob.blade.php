@extends('employee.employeDashboard')
@section('emp-contant')

    {{--<h3 class="tab-pane-title">JOBS</h3>--}}
    <div class="profile-badge"><h6>JOBS</h6></div>


        <div style="margin-bottom: 20px;" class="form-group">
            <div class="col-2">
                <h5 style="color: black">Job Search: </h5>
            </div>

            <div class="col-10">
                {{--<form class="navbar-form" role="search">--}}
                <div class="input-group add-on">
                    <input class="form-control" placeholder="Search" name="srch-term" id="search-job" type="text">
                    <div style="color: black;" class="input-group-btn">
                        <button style="background: #a3a3a4; color: white;" class="btn btn-default" onclick="getAllJob()"><i style="font-size: 18px;" class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
                {{--</form>--}}
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div id="allJob">

        </div>


@endsection

@section('foot-js')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
        $(function () {

            getAllJob();

        });

        $("#search-job").on('keyup', function (e) {
            if($("#search-job").val()==""){
                getAllJob();
            }
            if (e.keyCode == 13) {
                getAllJob();
            }

            if (e.keyCode == 32) {
                getAllJob();
            }
        });

        function getAllJob() {
            var search=$("#search-job").val();
            $.ajax({
                type: 'POST',
                url: "{!! route('employee.getAllJobData') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",search:search},
                success: function (data) {
                    $('#allJob').html(data);

                }
            });
        }

        function getData(page){
            var search=$("#search-job").val();

            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    data: {search:search},
                    datatype: "html",
                    // beforeSend: function()
                    // {
                    //     you can show your loader
                    // }
                })
                .done(function(data)
                {
                    $("#allJob").html(data);
                    location.hash ='?page='+page;

                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }
    </script>


@endsection