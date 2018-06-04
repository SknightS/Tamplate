@extends('main')

@section('content')
    <!-- Hero Section -->
    <div class="section hero-section transparent" style="background-image: url('public/images/background01.jpg');">
        <div class="inner">
            <div class="container">
                <div class="job-search-form">
                    <h2>Over<span>100,000<sup>+</sup></span>jobs are waiting for you</h2>
                    <form class="form-inline flex">
                        <div class="form-group">
                            <div class="form-group-inner">
                                <input type="text" class="form-control" id="input-field-1" placeholder="job title / Keywords / company name">
                                <i class="ion-ios-briefcase-outline"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-field-2" placeholder="city / province / zip code">
                            <i class="ion-ios-location-outline"></i>
                        </div>
                        <button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
                    </form>
                    <div class="keywords flex">
                        <h4 class="self-center">Popular Keywords:</h4>
                        <a href="#0" class="button item-center">web design</a>
                        <a href="#0" class="button item-center">accountant</a>
                        <a href="#0" class="button item-center">car dealer</a>
                    </div> <!-- end .keywords -->
                </div> <!-- end .job-search-form -->
            </div> <!-- end .container -->
            <div class="features-bar">
                <div class="container">
                    <div class="features-bar-inner flex space-between">
                        <div class="features-box self-center">
                            <h3>Leading the industry</h3>
                            <a href="about.php">About us<i class="ion-ios-arrow-thin-right"></i></a>
                        </div> <!-- end .feature-box -->
                        <div class="features-box-icon flex no-wrap">
                            <img src="{{url('public/images/feature-icon01.png')}}" alt="cup-icon" class="img-responsive self-center">
                            <div class="content self-center">
                                <h3>High average salary</h3>
                                <a href="#0">Learn more<i class="ion-ios-arrow-thin-right"></i></a>
                            </div> <!-- end .content -->
                        </div> <!-- end .feature-box-icon -->
                        <div class="features-box-icon flex no-wrap">
                            <img src="{{url('public/images/feature-icon02.png')}}" alt="cup-icon" class="img-responsive self-center">
                            <div class="content self-center">
                                <h3>2,500,000+ candidates</h3>
                                <a href="#0">Our community<i class="ion-ios-arrow-thin-right"></i></a>
                            </div> <!-- end .content -->
                        </div> <!-- end .feature-box-icon -->
                        <div class="user-profile-icon self-center">
                            <img src="{{url('public/images/profile-icon01.png')}}" alt="profile-icon" class="img-responsive self-center">
                        </div> <!-- end .profile-icon -->
                    </div> <!-- end .features-bar-inner -->
                </div> <!-- end .container -->
            </div> <!-- end .features-bar -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Featured Jobs Section -->
    <div class="section featured-jobs-section">
        <div class="inner">
            <div class="container">
                <div class="section-top-content flex items-center">
                    <h1>Latest Jobs</h1>
                    <a href="{{route('jobListening')}}">View all jobs<i class="ion-ios-arrow-thin-right"></i></a>
                </div> <!-- end .section-top-content -->
                <div class="jobs-table">
                    <div class="table-header">
                        <div class="table-cells flex">
                            <div class="job-title-cell"><h6>Job title / Company name</h6></div>
                            <div class="job-type-cell"><h6>Type</h6></div>
                            <div class="location-cell"><h6>Location</h6></div>
                            <div class="expired-date-cell"><h6>Expired Dated</h6></div>
                            <div class="salary-cell"><h6>Salary</h6></div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-header -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Company name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/company-logo01.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Web Designer needed</a></h4>
                                    <p class="small">Quick studio</p>
                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button full-time">Full time</button>
                            </div> <!-- end .job-type-cell -->
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div> <!-- end .location-cell -->
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired Date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div> <!-- end .expire-date-cell -->
                            <div class="cell salary-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Salary</h6>
                                </div> <!-- end .cell-label -->
                                <p><sup>$</sup>60<span>/hour</span></p>
                            </div> <!-- end .salray-cell -->
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Company name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/company-logo02.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">We're hiring a fullstack developer</a></h4>
                                    <p class="small">Archive inc.</p>
                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button part-time">Part time</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>
                            <div class="cell salary-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Salary</h6>
                                </div> <!-- end .cell-label -->
                                <p><sup>$</sup>60<span>/hour</span></p>
                            </div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Company name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/company-logo03.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Looking for a project leader</a></h4>
                                    <p class="small">Comply agency</p>
                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button full-time">Full time</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired Date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>
                            <div class="cell salary-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Salary</h6>
                                </div> <!-- end .cell-label -->
                                <p><sup>$</sup>60<span>/hour</span></p>
                            </div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Company name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/company-logo04.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Front-end developer needed</a></h4>
                                    <p class="small">Folder cooperation</p>
                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button freelancer">freelancer</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>
                            <div class="cell salary-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Salary</h6>
                                </div> <!-- end .cell-label -->
                                <p><sup>$</sup>60<span>/hour</span></p>
                            </div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Company name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/company-logo05.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Software Engineer</a></h4>
                                    <p class="small">Bookcover publisher</p>
                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button full-time">Full time</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>
                            <div class="cell salary-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Salary</h6>
                                </div> <!-- end .cell-label -->
                                <p><sup>$</sup>60<span>/hour</span></p>
                            </div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-footer flex space-between items-center">
                        <h6>Showing<span>1-5</span>of 23 jobs</h6>
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
                    </div>
                </div> <!-- end .jobs-table -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Category Section -->
    <div class="section category-section solid-blue-bg">
        <div class="inner">
            <div class="container">
                <h1 class="light">Browse Categories</h1>

                <div class="category-grid">
                    <?php $counter=0;$firstFive=0;?>

                    @foreach($jobtype as $jt)




                        @if($counter%5==0)
                            <div class="category-row  flex no-wrap  space-between items-center ">
                                @endif

                                <div class="item">
                                    <img src="public/images/{{$jt->image}}" alt="category-icon" class="img-responsive">
                                    <h4>{{$jt->typeName}}</h4>
                                    <p class="light">4286 Jobs</p>
                                </div> <!-- end .item -->
                                <?php $counter++; $firstFive++;?>
                                @if($firstFive == 5)
                            </div> <!-- end .category-row -->
                        @else
                            @if($counter!=0 && $counter%5==0)
                </div> <!-- end .category-row -->
                @endif
                @endif
                @endforeach

            </div>	<!-- end .category-grid -->


        </div> <!-- end .container -->
    </div> <!-- end .inner -->
    <div class="background-text">
        <h1>Categories</h1>
    </div> <!-- end .background-text -->
    </div> <!-- end .section -->


    <!-- Top hire employee -->

    <div class="section featured-jobs-section">
        <div class="inner">
            <div class="container">
                <div class="section-top-content flex items-center">
                    <h1>Top Hired Employees </h1>
                    <a href="#0">View all Employees<i class="ion-ios-arrow-thin-right"></i></a>
                </div> <!-- end .section-top-content -->
                <div class="jobs-table">
                    <div class="table-header">
                        <div class="table-cells flex">
                            <div class="job-title-cell"><h6>Name</h6></div>
                            <div class="job-type-cell"><h6>Job Type</h6></div>
                            <div class="location-cell"><h6>Location</h6></div>
                            <div class="expired-date-cell"><h6>Total Time</h6></div>
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-header -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/candidate-small01.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Richard Thomas</a></h4>

                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column">
                                <div class="cell-mobile-label">
                                    <h6> JoB Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button full-time">Full time</button>
                            </div> <!-- end .job-type-cell -->
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div> <!-- end .location-cell -->
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired Date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div> <!-- end .expire-date-cell -->
                            <!-- end .salray-cell -->
                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/candidate-small02.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Asron Bailey</a></h4>
                                    <p class="small">Archive inc.</p>
                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button part-time">Part time</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>

                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/candidate-small03.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Tammy Dixon</a></h4>

                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6> Job Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button full-time">Full time</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired Date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>

                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/candidate-small04.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Brandon Reynolds</a></h4>

                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6> Job Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button freelancer">freelancer</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>

                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-row">
                        <div class="table-cells flex no-wrap">
                            <div class="cell job-title-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Name</h6>
                                </div> <!-- end .cell-label -->
                                <img src="{{url('public/images/candidate-small05.jpg')}}" alt="company-logo" class="img-responsive">
                                <div class="content">
                                    <h4><a href="job-details.php">Kathy Crawford</a></h4>

                                </div> <!-- end .content -->
                            </div> <!-- end .job-title-cell -->
                            <div class="cell job-type-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Type</h6>
                                </div> <!-- end .cell-label -->
                                <button type="button" class="button full-time">Full time</button>
                            </div>
                            <div class="cell location-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Location</h6>
                                </div> <!-- end .cell-label -->
                                <p>Cupertino<span>, CA, USA</span></p>
                            </div>
                            <div class="cell expired-date-cell flex no-column no-wrap">
                                <div class="cell-mobile-label">
                                    <h6>Expired date</h6>
                                </div> <!-- end .cell-label -->
                                <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                            </div>

                        </div> <!-- end .table-cells -->
                    </div> <!-- end .table-row -->

                    <div class="table-footer flex space-between items-center">
                        <h6>Showing<span>1-5</span>of 23 jobs</h6>
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
                    </div>
                </div> <!-- end .jobs-table -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div>
    <!-- end .section -->

    <div class="section cta-section parallax text-center" style="background-image: url('public/images/background02.jpg');">
        <div class="inner">
            <div class="container">
                <h2>Looking for a job</h2>
                <p class="large light">Join thousand of emplyers and earn what you deserve</p>
                <div class="cta-button">
                    <a href="{{route('post-resume-form')}}" class="button">Get started now</a>
                </div> <!-- end .cta-button -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

@endsection

<!-- Latest News Section -->


<!-- Clients Section -->


<!-- CTA App Section -->

