<header class="header">
    <div class="container clearfix">
        <div class="header-inner flex space-between items-center">
            <div class="left">
                <div class="logo"><a href="{{route('home')}}"><img src="{{url('public/images/logo.png')}}" alt="JobPress" width="250" height="100" class="img-responsive"></a></div>
            </div> <!-- end .left -->
            <div class="right flex space-between no-column items-center">
                <div class="navigation">
                    <nav class="main-nav">
                        <ul class="list-unstyled">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <!--                            <li><a href="about.php">About</a></li>-->
                            <li class="menu-item">
                                {{--<a href="{{route('candidate')}}">Candidates</a>--}}
                                <a href="{{route('allCandidate')}}">Candidates</a>
                                <!--                                <ul>-->
                                <!--                                    <li><a href="candidates-listing.php">Browse Candidates</a></li>-->
                                <!--                                    <li><a href="companies-listing.php">Browse Companies</a></li>-->
                                <!--                                    <li><a href="jobs-listing.php">Jobs Listing</a></li>-->
                                <!--                                    <li><a href="job-details.php">Job Details</a></li>-->
                                <!--                                    <li><a href="categories.php">Job Categories</a></li>-->
                                <!--                                    <li><a href="post-resume-form.php">Post a Resume</a></li>-->
                                <!--                                    <li><a href="candidate-dashboard.php">Candidate Dashboard</a></li>-->
                                <!--                                </ul>-->
                            </li>
                            <li class="menu-item">
                                <a href="{{route('Companies')}}">Companies</a>
                                <!--                                <ul>-->
                                <!--                                    <li><a href="companies-listing.php">Browse Companies</a></li>-->
                                <!--                                    <li><a href="post-job-form.php">Post a job</a></li>-->
                                <!--                                    <li><a href="employer-dashboard.php">Employer Dashboard</a></li>-->
                                <!--                                </ul>-->
                            </li>
                            <!--                            <li class="menu-item-has-children">-->
                            <!--                                <a href="blog-standard.php">Blog</a>-->
                            <!--                                <ul>-->
                            <!--                                    <li><a href="blog-standard.php">Blog Standard</a></li>-->
                            <!--                                    <li><a href="blog-grid-full-width.php">Blog Grid Full Width</a></li>-->
                            <!--                                    <li><a href="blog-masonry-full-width.php">Blog Masonry Full Width</a></li>-->
                            <!--                                    <li><a href="blog-list.php">Blog List</a></li>-->
                            <!--                                    <li><a href="blog-single-fullwidth-image.php">Blog Single Image</a></li>-->
                            <!--                                    <li><a href="blog-single-fullwidth-video.php">Blog Single Video</a></li>-->
                            <!--                                    <li><a href="blog-single-with-sidebar.php">Blog Single Sidebar</a></li>-->
                            <!--                                </ul>-->
                            <!--                            </li>-->
                            <!--                            <li class="menu-item-has-children">-->
                            <!--                                <a href="#0">Pages</a>-->
                            <!--                                <ul>-->
                            <!--                                    <li><a href="help.php">Help Tabs</a></li>-->
                            <!--                                    <li><a href="contact-us-full-width.php">Contact Us</a></li>-->
                            <!--                                    <li><a href="pricing-plans.php">Pricing plans</a></li>-->
                            <!--                                </ul>-->
                            <!--                            </li>-->
                        </ul>
                    </nav> <!-- end .main-nav -->
                    <a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
                </div> <!-- end .navigation -->
                <a href="{{route('postJob')}}" class="button">Post a Job</a>
                <div class="button-group-merged flex no-column">

                    <a href="{{route('sigupShow')}}" class="button">Sign up</a>
                    <a href="{{route('loginshow')}}" class="button"  data-target=".bs-modal-sm">Sign in</a>
                </div> <!-- end .button-group-merged -->
            </div> <!-- end .right -->
        </div> <!-- end .header-inner -->
    </div> <!-- end .container -->
</header>