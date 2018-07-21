@extends('employer.employerDashboard')
@section('empr-contant')

<div id="favorite-candidates" class="tab-pane fade in active">
    <h3 class="tab-pane-title">Favorite Candidates</h3>
    <div class="favorite-candidates-list-wrapper">

        <ul class="fav-candidates-table-headings flex items-center no-column list-unstyled">
            <li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
            <li class="candidate-skills-cell candidate-cell"><h6>Skills</h6></li>
            <li class="candidate-location-cell"><h6>Location</h6></li>
        </ul> <!-- end .fav-candidates-table-headings -->

        <div class="fav-candidates-wrapper">

            <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
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

                <div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Skills</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <button type="button" class="button button-sm grey ">PS</button>
                        <button type="button" class="button button-sm grey">AI</button>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-skills-cell -->

                <div class="candidate-location-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Location</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <p>Park Ave, NYC, USA</p>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-location-cell -->

                <div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
                    <i class="ion-ios-compose-outline edit-icon"></i>
                    <i class="ion-ios-trash-outline trash-icon"></i>
                    <i class="ion-ios-more-outline options-icon"></i>
                </div> <!-- end .posted-job-edit-cell -->
            </div> <!-- end .fav-candidate -->

            <div class="divider"></div>


            <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
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

                <div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Skills</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <button type="button" class="button button-sm grey ">PS</button>
                        <button type="button" class="button button-sm grey">AI</button>
                        <button type="button" class="button button-sm grey">HTML/CSS</button>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-skills-cell -->

                <div class="candidate-location-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Location</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <p>Park Ave, NYC, USA</p>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-location-cell -->

                <div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
                    <i class="ion-ios-compose-outline edit-icon"></i>
                    <i class="ion-ios-trash-outline trash-icon"></i>
                    <i class="ion-ios-more-outline options-icon"></i>
                </div> <!-- end .posted-job-edit-cell -->
            </div> <!-- end .fav-candidate -->

            <div class="divider"></div>

            <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
                <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Name</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex items-center no-column no-wrap">
                        <div class="candidate-img">
                            <img src="images/candidate-small03.jpg" alt="candidate-image" class="img-responsive">
                        </div> <!-- end .candidate-img -->
                        <div class="cell-text no-column">
                            <h4>Tammy Dixon</h4>
                            <p>Copywriter</p>
                        </div> <!-- end .cell-text -->
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-name-cell -->

                <div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Skills</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <button type="button" class="button button-sm grey ">MS WORD</button>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-skills-cell -->

                <div class="candidate-location-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Location</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <p>Park Ave, NYC, USA</p>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-location-cell -->

                <div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
                    <i class="ion-ios-compose-outline edit-icon"></i>
                    <i class="ion-ios-trash-outline trash-icon"></i>
                    <i class="ion-ios-more-outline options-icon"></i>
                </div> <!-- end .posted-job-edit-cell -->
            </div> <!-- end .fav-candidate -->

            <div class="divider"></div>

            <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
                <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Name</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex items-center no-column no-wrap">
                        <div class="candidate-img">
                            <img src="images/candidate-small04.jpg" alt="candidate-image" class="img-responsive">
                        </div> <!-- end .candidate-img -->
                        <div class="cell-text no-column">
                            <h4>Brandon Reynolds</h4>
                            <p>Web Developer</p>
                        </div> <!-- end .cell-text -->
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-name-cell -->

                <div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Skills</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <button type="button" class="button button-sm grey ">HTML/CSS</button>
                        <button type="button" class="button button-sm grey">PHP</button>
                        <button type="button" class="button button-sm grey">Jquery</button>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-skills-cell -->

                <div class="candidate-location-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Location</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <p>Park Ave, NYC, USA</p>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-location-cell -->

                <div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
                    <i class="ion-ios-compose-outline edit-icon"></i>
                    <i class="ion-ios-trash-outline trash-icon"></i>
                    <i class="ion-ios-more-outline options-icon"></i>
                </div> <!-- end .posted-job-edit-cell -->
            </div> <!-- end .fav-candidate -->

            <div class="divider"></div>


            <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
                <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Name</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex items-center no-column no-wrap">
                        <div class="candidate-img">
                            <img src="images/candidate-small05.jpg" alt="candidate-image" class="img-responsive">
                        </div> <!-- end .candidate-img -->
                        <div class="cell-text no-column">
                            <h4>Kathy Crawford</h4>
                            <p>Graphic Designer</p>
                        </div> <!-- end .cell-text -->
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-name-cell -->

                <div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Skills</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <button type="button" class="button button-sm grey ">PS</button>
                        <button type="button" class="button button-sm grey">AI</button>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-skills-cell -->

                <div class="candidate-location-cell candidate-cell flex no-column no-wrap">
                    <div class="cell-mobile-label">
                        <h6>Location</h6>
                    </div> <!-- end .cell-label -->
                    <div class="candidate-cell-inner flex no-column no-wrap">
                        <p>Park Ave, NYC, USA</p>
                    </div> <!-- end .candidate-cell-inner -->
                </div> <!-- end .candidate-location-cell -->

                <div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
                    <i class="ion-ios-compose-outline edit-icon"></i>
                    <i class="ion-ios-trash-outline trash-icon"></i>
                    <i class="ion-ios-more-outline options-icon"></i>
                </div> <!-- end .posted-job-edit-cell -->
            </div> <!-- end .fav-candidate -->

            <div class="divider"></div>

        </div> <!-- end .fav-candidates-wrapper -->
    </div> <!-- end .favorite-candidates-list-wrapper -->

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

</div> <!-- end #favorite-candidates-tab -->



<div id="manage-applications-employer" class="tab-pane fade in">
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

</div> <!-- end #manage-applications-employer -->

<div id="manage-jobs" class="tab-pane fade in">
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
</div> <!-- end #manage-applications-tab -->

<div id="notifications-employer" class="tab-pane fade in">
    <h3 class="tab-pane-title">Your notifications</h3>
    <div class="notifications-list-wrapper">

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
                <p class="ultra-light">3 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification highlighted flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
                <p class="ultra-light">4 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo13.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                <p class="ultra-light">5 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo14.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
                <p class="ultra-light">6 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification highlighted flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                <p class="ultra-light">1 day ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo12.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
                <p class="ultra-light">2 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo08.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
                <p class="ultra-light">2 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo11.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
                <p class="ultra-light">2 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo14.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                <p class="ultra-light">2 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

        <div class="notification flex items-center no-column no-wrap">
            <div class="notification-company-logo">
                <img src="images/company-logo15.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .notification-company-logo -->
            <div class="notification-text">
                <p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
                <p class="ultra-light">2 hours ago</p>
            </div> <!-- end .notification-text -->
        </div> <!-- end .notification -->

        <div class="divider"></div>

    </div> <!-- end .notifications-list-wrapper -->
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
</div> <!-- end #notifications-tab -->

<div id="profile" class="tab-pane fade in">
    <div class="profile-badge"><h6>Profile</h6></div>
    <div class="profile-wrapper">

        <div class="profile-info profile-section flex no-column no-wrap">
            <div class="profile-picture">
                <img src="images/company-logo-jumbo01.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .user-picture -->
            <div class="profile-meta">
                <h4 class="dark">Banana inc.</h4>
                <p>Cupertino, CA, USA</p>
                <div class="profile-contact flex items-center no-wrap no-column">
                    <h6 class="contact-phone">(+01)-212-322-5732</h6>
                    <h6 class="contact-email">info@banana.com</h6>
                </div> <!-- end .profile-contact -->
                <ul class="list-unstyled social-icons flex no-column">
                    <li><a href="#0"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#0"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#0"><i class="ion-social-instagram"></i></a></li>
                </ul> <!-- end .social-icons -->
            </div> <!-- end .profile-meta -->
        </div> <!-- end .profile-info -->

        <div class="divider"></div>

        <div class="profile-about profile-section">
            <h3 class="dark profile-title">About company<span><i class="ion-edit"></i></span></h3>
            <p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh.<br><br>Donec eget nibh non nibh varius varius a vitae dolor. Ut ornare mollis lacus, non fringilla magna egestas mattis. Sed iaculis tortor magna, at tincidunt mi imperdiet in. Cras semper massa blandit quam varius, tincidunt imperdiet tellus accumsan. Vestibulum sagittis justo leo, bibendum ullamcorper arcu bibendum vitae. Integer convallis neque imperdiet orci consequat consequat.<br><br>Phasellus at feugiat diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.
            </p>
        </div> <!-- end .profile-about -->

        <div class="divider"></div>

        <div class="profile-experience-wrapper profile-section">
            <h3 class="dark profile-title">Awards<span><i class="ion-edit"></i></span></h3>
            <div class="profile-experience flex space-between no-wrap no-column">
                <div class="profile-experience-left">
                    <h5 class="profile-designation dark">AWWWARDS</h5>
                    <h5 class="profile-company dark">Site of the month</h5>
                    <p class="small ultra-light">Aug 2016</p>
                    <p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
                    <h6 class="projects-count">http://banana.com</h6>
                </div> <!-- end .profile-experience-left -->
            </div> <!-- end .profile-experience -->
            <div class="spacer-md"></div>
            <div class="profile-experience flex space-between no-wrap no-column">
                <div class="profile-experience-left">
                    <h5 class="profile-designation dark">Best css award</h5>
                    <h5 class="profile-company dark">Site of the day</h5>
                    <p class="small ultra-light">Aug 16th, 2016</p>
                    <p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
                    <h6 class="projects-count">http://banana.com</h6>
                </div> <!-- end .profile-experience-left -->
            </div> <!-- end .profile-experience -->
        </div> <!-- end .profile-experience-wrapper -->

    </div> <!-- end .profile-wrapper -->
</div> <!-- end #profile-tab -->

<div id="change-password-employer" class="tab-pane fade in">
    <div class="password-form-wrapper">
        <h3 class="dark">Change Password</h3>
        <form class="password-form">
            <div class="form-group">
                <label for="InputEmail1">Old password<sup>*</sup></label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="">
            </div>

            <div class="form-group">
                <label for="InputPassword1">New Password<sup>*</sup></label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="">
            </div>

            <div class="form-group">
                <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="">
            </div>
        </form> <!-- end .password-form -->
        <div class="password-button-wrapper">
            <button type="submit" class="button">Save change</button>
        </div> <!-- end .password-button-wrapper -->
    </div> <!-- end .password-form-wrapper -->
</div>

@endsection

@section('foot-js')
@endsection