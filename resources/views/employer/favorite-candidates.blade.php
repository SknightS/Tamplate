@extends('employer.employerDashboard')
@section('empr-content')
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
@endsection