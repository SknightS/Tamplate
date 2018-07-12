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
    <div class="section candidates-listing solid-light-grey-bg">
        <div class="inner">
            <div class="container">
                <div class="page-content flex no-wrap space-between">


                    <div id="CandidateInfo" class="left-content">



                    </div> <!-- end .left-content -->


                    <div class="right-sidebar">
                        <div class="filter location-filter">
                            <h6 class="filter-widget-title">Filter by location</h6>
                            <input type="text" value="New York" data-role="tagsinput" />
                        </div> <!-- end .location-filter -->

                        <div class="filter skill-filter">
                            <h6 class="filter-widget-title">Filter by skill</h6>
                            <input type="text" value="HTML" id="filterSkill" data-role="tagsinput" />
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

            $.ajax({
                type: 'POST',
                url: "{!! route('candidate.candidateParameter') !!}",
                cache: false,
                data: {},
                success: function (data) {

                    $("#CandidateInfo").html(data);

                }

            });

        }




        $(document).ready(function() {
            candidateInfo();

        });

        $("#filterSkill").bind("keyup input paste", function() {
            var skills=$("#filterSkill").val();


        });
    </script>

@endsection