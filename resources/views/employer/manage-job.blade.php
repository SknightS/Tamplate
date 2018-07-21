@extends('employer.employerDashboard')
@section('empr-content')

        <h3 class="tab-pane-title">Manage Jobs</h3>
        <div class="posted-jobs-list-wrapper">

            <ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
                <li class="posted-job-title-cell"><h6>Name</h6></li>
                <li class="posted-job-type-cell"><h6>Job Type</h6></li>
                <li class="posted-job-candidates-cell"><h6>Candidates</h6></li>
                <li class="posted-job-featured-cell"><h6>Featured</h6></li>
            </ul> <!-- end .posted-jobs-table-headings -->

            <div class="posted-jobs-wrapper">

                <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                    <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner">
                            <div class="cell-text">
                                <h4>Web Designer needed</h4>
                                <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job Type</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-column no-wrap">
                            <button type="button" class="button button-sm freelancer">Freelancer</button>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-type-cell -->

                    <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Candidates</h6>
                        </div> <!-- end .cell-label -->
                        <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                            <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                            <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                            <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                        </ul> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Featured</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-wrap no-column">
                            <i class="ion-ios-star grey"></i>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                        <i class="ion-ios-compose-outline edit-icon"></i>
                        <i class="ion-ios-trash-outline trash-icon"></i>
                        <i class="ion-ios-more-outline options-icon"></i>
                    </div> <!-- end .posted-job-edit-cell -->
                </div> <!-- end .posted-job -->

                <div class="divider"></div>

                <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                    <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner">
                            <div class="cell-text">
                                <h4>We're hring a fullstack developer</h4>
                                <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job Type</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-column no-wrap">
                            <button type="button" class="button button-sm full-time">Freelancer</button>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-type-cell -->

                    <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Candidates</h6>
                        </div> <!-- end .cell-label -->
                        <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                            <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                            <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                            <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                        </ul> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Featured</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-wrap no-column">
                            <i class="ion-ios-star safron"></i>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                        <i class="ion-ios-compose-outline edit-icon"></i>
                        <i class="ion-ios-trash-outline trash-icon"></i>
                        <i class="ion-ios-more-outline options-icon"></i>
                    </div> <!-- end .posted-job-edit-cell -->
                </div> <!-- end .posted-job -->

                <div class="divider"></div>

                <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                    <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner">
                            <div class="cell-text">
                                <h4>Front-end developer needed</h4>
                                <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job Type</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-column no-wrap">
                            <button type="button" class="button button-sm part-time">Freelancer</button>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-type-cell -->

                    <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Candidates</h6>
                        </div> <!-- end .cell-label -->
                        <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                            <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                            <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                            <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                        </ul> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Featured</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-wrap no-column">
                            <i class="ion-ios-star grey"></i>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                        <i class="ion-ios-compose-outline edit-icon"></i>
                        <i class="ion-ios-trash-outline trash-icon"></i>
                        <i class="ion-ios-more-outline options-icon"></i>
                    </div> <!-- end .posted-job-edit-cell -->
                </div> <!-- end .posted-job -->

                <div class="divider"></div>

                <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                    <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner">
                            <div class="cell-text">
                                <h4>Looking for internship web designer</h4>
                                <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job Type</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-column no-wrap">
                            <button type="button" class="button button-sm internship">Freelancer</button>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-type-cell -->

                    <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Candidates</h6>
                        </div> <!-- end .cell-label -->
                        <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                            <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                            <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                            <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                        </ul> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Featured</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-wrap no-column">
                            <i class="ion-ios-star grey"></i>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                        <i class="ion-ios-compose-outline edit-icon"></i>
                        <i class="ion-ios-trash-outline trash-icon"></i>
                        <i class="ion-ios-more-outline options-icon"></i>
                    </div> <!-- end .posted-job-edit-cell -->
                </div> <!-- end .posted-job -->

                <div class="divider"></div>

                <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                    <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner">
                            <div class="cell-text">
                                <h4>We're looking for an project leader</h4>
                                <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job Type</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-column no-wrap">
                            <button type="button" class="button button-sm full-time">Freelancer</button>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-type-cell -->

                    <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Candidates</h6>
                        </div> <!-- end .cell-label -->
                        <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                            <li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                            <li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                            <li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                        </ul> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Featured</h6>
                        </div> <!-- end .cell-label -->
                        <div class="posted-job-cell-inner flex no-wrap no-column">
                            <i class="ion-ios-star safron"></i>
                        </div> <!-- end .posted-job-cell-inner -->
                    </div> <!-- end .posted-job-candidates-cell -->

                    <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                        <i class="ion-ios-compose-outline edit-icon"></i>
                        <i class="ion-ios-trash-outline trash-icon"></i>
                        <i class="ion-ios-more-outline options-icon"></i>
                    </div> <!-- end .posted-job-edit-cell -->
                </div> <!-- end .posted-job -->

                <div class="divider"></div>

            </div> <!-- end .posted-jobs-wrapper -->
        </div> <!-- end .posted-jobs-list-wrapper -->

        <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
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
    <!-- end #manage-applications-tab -->

@endsection