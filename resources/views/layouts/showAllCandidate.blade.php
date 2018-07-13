@extends('main')

@section('content')
    <!-- Breadcrumb Bar -->
    <div class="section breadcrumb-bar solid-blue-bg">
        <div class="inner">
            <div class="container">
                <p class="breadcrumb-menu">
                    <a href="#0"><i class="ion-ios-home"></i></a>
                    <i class="ion-ios-arrow-right arrow-right"></i>
                    <a href="#0">Companies</a>
                    <i class="ion-ios-arrow-right arrow-right"></i>
                    <a href="#0">Browse candidates</a>
                </p> <!-- end .breabdcrumb-menu -->
                <h2 class="breadcrumb-title">Showing all candidates</h2>
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Candidates Listing Section -->
    <div id="candidateContainer" class="section candidates-listing solid-light-grey-bg">
        <div class="inner">
            <div class="container">
                <div class="page-content flex no-wrap space-between">


                    <div id="CandidateInfo" class="left-content">



                    </div> <!-- end .left-content -->


                    <div class="right-sidebar">
                        <div class="filter location-filter">
                            <h6 class="filter-widget-title">Filter by location</h6>
                            <input type="text" id="filterLocation" data-role="tagsinput" />
                        </div> <!-- end .location-filter -->

                        <div class="filter skill-filter">
                            <h6 class="filter-widget-title">Filter by skill</h6>
                            <input type="text" id="filterSkill" data-role="tagsinput" />
                        </div> <!-- end .skill-filter -->

                        <div class="filter categories-filter">
                            <h6 class="filter-widget-title">Filter by categories</h6>
                            <div class="form-group">

                                <select class="form-control" id="categories-filter">
                                    <option value="" selected disabled>Choose Categories</option>
                                    <option>Featured Developer</option>
                                    <option>Hourly Rate</option>
                                    <option>Location</option>
                                    <option>Skills</option>
                                </select>

                            </div> <!-- end .form-group -->
                        </div> <!-- end .categories-filter -->

                    </div> <!-- end .right-sidebar -->
                </div> <!-- end .page-content -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Footer -->
@endsection
@section('foot-js')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function candidateInfo() {

            var filterSkills=$("#filterSkill").tagsinput('items');
            var filterLocation=$("#filterLocation").tagsinput('items');

            $.ajax({
                type: 'POST',
                url: "{!! route('candidate.candidateParameter') !!}",
                cache: false,
                data: {skills:filterSkills,location:filterLocation},
                success: function (data) {

                    $("#CandidateInfo").html(data);
                   // console.log(data);



                }

            });

        }


        $(document).ready(function() {
            candidateInfo();


        });

        $("#filterSkill").on('itemAdded', function(event) {
            candidateInfo();
        });
        $("#filterLocation").on('itemAdded', function(event) {
            candidateInfo();
        });







    </script>


    <script>
//        $(window).on('hashchange', function() {
//            if (window.location.hash) {
//                var page = window.location.hash.replace('#', '');
//                if (page == Number.NaN || page <= 0) {
//                    return false;
//                }else{
//                    getData(page);
//                }
//            }
//        });
        $(document).ready(function()
        {
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
                    datatype: "html",
                    // beforeSend: function()
                    // {
                    //     you can show your loader
                    // }
                })
                .done(function(data)
                {


                    $("#CandidateInfo").html(data);

                    location.hash = page;
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }
    </script>

@endsection