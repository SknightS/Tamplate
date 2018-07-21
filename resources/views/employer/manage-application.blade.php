@extends('employer.employerDashboard')
@section('empr-content')

        <h3 class="tab-pane-title">Manage applications</h3>
        <div class="candidate-applications-list-wrapper">

            <ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
                <li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
                <li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>
                <li class="candidate-resume-cell"><h6>Resume</h6></li>
                <li class="candidate-actions-cell"><h6>Actions</h6></li>
            </ul> <!-- end .fav-candidates-table-headings -->

            <div class="candidate-applications-wrapper">

                <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                    <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex items-center no-column no-wrap">
                            <div class="candidate-img">
                                <img src="images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-img -->
                            <div class="cell-text no-column">
                                <h4>Richard Thomas</h4>
                                <p>UI/UX Designer</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p>Web Designer needed</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-job-cell -->

                    <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Resume</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-resume-cell -->

                    <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Actions</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <i class="ion-ios-checkmark-empty approve-icon"></i>
                            <i class="ion-ios-close-empty trash-icon"></i>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-actions-cell -->
                </div> <!-- end .candidate-application -->

                <div class="divider"></div>

                <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                    <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex items-center no-column no-wrap">
                            <div class="candidate-img">
                                <img src="images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-img -->
                            <div class="cell-text no-column">
                                <h4>David Ortega</h4>
                                <p>Front-end developer</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p>Front-end developer needed</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-job-cell -->

                    <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Resume</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-resume-cell -->

                    <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Actions</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <i class="ion-ios-checkmark-empty approve-icon"></i>
                            <i class="ion-ios-close-empty trash-icon"></i>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-actions-cell -->
                </div> <!-- end .candidate-application -->

                <div class="divider"></div>

                <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                    <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex items-center no-column no-wrap">
                            <div class="candidate-img">
                                <img src="images/candidate-small06.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-img -->
                            <div class="cell-text no-column">
                                <h4>Nancy Suvillivan</h4>
                                <p>Graphic Designer</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p>Graphic Designer needed</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-job-cell -->

                    <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Resume</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-resume-cell -->

                    <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Actions</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <i class="ion-ios-checkmark-empty approve-icon"></i>
                            <i class="ion-ios-close-empty trash-icon"></i>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-actions-cell -->
                </div> <!-- end .candidate-application -->

                <div class="divider"></div>

                <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                    <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex items-center no-column no-wrap">
                            <div class="candidate-img">
                                <img src="images/candidate-small07.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-img -->
                            <div class="cell-text no-column">
                                <h4>Gregory cooper</h4>
                                <p>Web Designer</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p>Web Designer needed</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-job-cell -->

                    <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Resume</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-resume-cell -->

                    <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Actions</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <i class="ion-ios-checkmark-empty approve-icon"></i>
                            <i class="ion-ios-close-empty trash-icon"></i>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-actions-cell -->
                </div> <!-- end .candidate-application -->

                <div class="divider"></div>

                <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                    <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Name</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex items-center no-column no-wrap">
                            <div class="candidate-img">
                                <img src="images/candidate-small08.jpg" alt="candidate-image" class="img-responsive">
                            </div> <!-- end .candidate-img -->
                            <div class="cell-text no-column">
                                <h4>Brittany Riley</h4>
                                <p>Marketer</p>
                            </div> <!-- end .cell-text -->
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-name-cell -->

                    <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Job</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p>Looking for a market position</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-job-cell -->

                    <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Resume</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-resume-cell -->

                    <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                        <div class="cell-mobile-label">
                            <h6>Actions</h6>
                        </div> <!-- end .cell-label -->
                        <div class="candidate-cell-inner flex no-column no-wrap">
                            <i class="ion-ios-checkmark-empty approve-icon"></i>
                            <i class="ion-ios-close-empty trash-icon"></i>
                        </div> <!-- end .candidate-cell-inner -->
                    </div> <!-- end .candidate-actions-cell -->
                </div> <!-- end .candidate-application -->

                <div class="divider"></div>

            </div> <!-- end .candidate-applications-wrapper -->
        </div> <!-- end .candidate-applications-list-wrapper -->

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

   <!-- end #manage-applications-employer -->

@endsection