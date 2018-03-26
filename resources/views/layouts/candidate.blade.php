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
                <div class="left-content">
                    <div class="top flex space-between no-wrap items-center">
                        <h6>showing<span>1-5</span>of<span>683,092</span>candidates</h6>
                        <div class="spacer-xs-m"></div>
                        <div class="sort-by dropdown flex no-wrap no-column items-center">
                            <h6>sort by</h6>
                            <button class="button dropdown-toggle" type="button" id="sort-by" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Default
                                <i class="ion-ios-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sort-by">
                                <li><a href="#">Featured</a></li>
                                <li><a href="#">Top candidates</a></li>
                                <li><a href="#">Price, high to low</a></li>
                                <li><a href="#">Alphabetically, A-Z</a></li>
                                <li><a href="#">Alphabetically, Z-A</a></li>
                                <li><a href="#">Best sellers</a></li>
                            </ul> <!-- end .dropdown-menu -->
                        </div> <!-- end .sort-by -->
                    </div> <!-- end .top -->

                    <div class="candidates-list">
                        <div class="candidate flex no-wrap no-column">
                            <div class="candidate-image">
                                <img src="images/candidate01.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-image -->
                            <div class="candidate-info">
                                <a href="{{route('candidatedetails')}}"> <h4 class="candidate-name">Richard Thomas</h4>
                                    <h5 class="candidate-designation">UI/UX Designer</h5> </a>
                                <p class="candidate-description ultra-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                <div class="candidate-info-bottom flex no-column items-center">
                                    <h6 class="candidate-location"><span>Park ave,</span>nyc, usa</h6>
                                    <h6 class="hourly-rate"><span>$45</span>/Hour</h6>
                                    <ul class="list-unstyled candidate-skills flex no-column items-center">
                                        <li><a href="#0" class="button">PS</a></li>
                                        <li><a href="#0" class="button">AI</a></li>
                                        <li><a href="#0" class="button">HTML/CSS</a></li>
                                    </ul> <!-- end .candiate-skills -->
                                </div> <!-- end .candidate-info-bottom -->
                            </div> <!-- end .candidate-info -->
                        </div> <!-- end .candidate -->

                        <div class="spacer-xs"></div>

                        <div class="candidate flex no-wrap no-column">
                            <div class="candidate-image">
                                <img src="images/candidate02.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-image -->
                            <div class="candidate-info">
                                <h4 class="candidate-name">Asron Bailey</h4>
                                <h5 class="candidate-designation">Sales/Marketing</h5>
                                <p class="candidate-description ultra-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                <div class="candidate-info-bottom flex no-column items-center">
                                    <h6 class="candidate-location"><span>Park ave,</span>nyc, usa</h6>
                                    <h6 class="hourly-rate"><span>$45</span>/Hour</h6>
                                </div> <!-- end .candidate-info-bottom -->
                            </div> <!-- end .candidate-info -->
                        </div> <!-- end .candidate -->
                        <div class="spacer-xs"></div>

                        <div class="candidate flex no-wrap no-column">
                            <div class="candidate-image">
                                <img src="images/candidate03.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-image -->
                            <div class="candidate-info">
                                <h4 class="candidate-name">Tammy Dixon</h4>
                                <h5 class="candidate-designation">Copywriter</h5>
                                <p class="candidate-description ultra-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                <div class="candidate-info-bottom flex no-column items-center">
                                    <h6 class="candidate-location"><span>Park ave,</span>nyc, usa</h6>
                                    <h6 class="hourly-rate"><span>$45</span>/Hour</h6>
                                    <ul class="list-unstyled candidate-skills flex no-column items-center">
                                        <li><a href="#0" class="button">MS WORD</a></li>
                                    </ul> <!-- end .candiate-skills -->
                                </div> <!-- end .candidate-info-bottom -->
                            </div> <!-- end .candidate-info -->
                        </div> <!-- end .candidate -->

                        <div class="spacer-xs"></div>

                        <div class="candidate flex no-wrap no-column">
                            <div class="candidate-image">
                                <img src="images/candidate04.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-image -->
                            <div class="candidate-info">
                                <h4 class="candidate-name">Brandon Reynolds</h4>
                                <h5 class="candidate-designation">Web Developer</h5>
                                <p class="candidate-description ultra-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                <div class="candidate-info-bottom flex no-column items-center">
                                    <h6 class="candidate-location"><span>Park ave,</span>nyc, usa</h6>
                                    <h6 class="hourly-rate"><span>$45</span>/Hour</h6>
                                    <ul class="list-unstyled candidate-skills flex no-column items-center">
                                        <li><a href="#0" class="button">HTML/CSS</a></li>
                                        <li><a href="#0" class="button">PHP</a></li>
                                        <li><a href="#0" class="button">Jquery</a></li>
                                    </ul> <!-- end .candiate-skills -->
                                </div> <!-- end .candidate-info-bottom -->
                            </div> <!-- end .candidate-info -->
                        </div> <!-- end .candidate -->

                        <div class="spacer-xs"></div>

                        <div class="candidate flex no-wrap no-column">
                            <div class="candidate-image">
                                <img src="images/candidate05.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-image -->
                            <div class="candidate-info">
                                <h4 class="candidate-name">Kathy Crawford</h4>
                                <h5 class="candidate-designation">Graphic Designer</h5>
                                <p class="candidate-description ultra-light">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                                <div class="candidate-info-bottom flex no-column items-center">
                                    <h6 class="candidate-location"><span>Park ave,</span>nyc, usa</h6>
                                    <h6 class="hourly-rate"><span>$45</span>/Hour</h6>
                                    <ul class="list-unstyled candidate-skills flex no-column items-center">
                                        <li><a href="#0" class="button">PS</a></li>
                                        <li><a href="#0" class="button">AI</a></li>
                                    </ul> <!-- end .candiate-skills -->
                                </div> <!-- end .candidate-info-bottom -->
                            </div> <!-- end .candidate-info -->
                        </div> <!-- end .candidate -->
                    </div> <!-- end .candidates-list -->

                    <div class="spacer-md"></div>

                    <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                        <ul class="list-unstyled flex no-column items-center">
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">4</a></li>
                            <li><a href="#0">5</a></li>
                        </ul>
                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                    </div> <!-- end .jobpress-custom-pager -->

                </div> <!-- end .left-content -->
                <div class="right-sidebar">
                    <div class="filter location-filter">
                        <h6 class="filter-widget-title">Filter by location</h6>
                        <input type="text" value="New York" data-role="tagsinput" />
                    </div> <!-- end .location-filter -->

                    <div class="filter skill-filter">
                        <h6 class="filter-widget-title">Filter by skill</h6>
                        <input type="text" value="HTML" data-role="tagsinput" />
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

    @endsection