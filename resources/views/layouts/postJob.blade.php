@extends('main')
@section('content')
<!-- Post Job Section -->
<div class="section job-post-form-section solid-light-grey-bg">
    <div class="inner">
        <div class="container">
            <!-- multistep form -->
            <form action="#" method="post" id="job-post-form" class="job-post-form multisteps-form">


                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h2 class="step-title text-center dark">Step 1: Create an account</h2>

                    <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                        <!--								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>-->
                        <li ><span>1</span></li>
                        <li><span>2</span></li>
                        <li><span>3</span></li>
                    </ul> <!-- end .steps-progress-bar -->

                    <div class="form-inner">

                        <h6>Already have an account? <a href="#0">Click here to login</a></h6>
                        <div class="divider"></div>

                        <div class="form-fields-wrapper">

                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">First Name</p>
                                    <input type="text" id="employer-contact-name" name="employer-contact-name" placeholder="" required="">
                                </div> <!-- end .form-group -->
                                <div class="form-group">
                                    <p class="label">Last Name</p>
                                    <input type="email" id="employer-contact-email" name="employer-contact-email" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">Username<sup>*</sup></p>
                                    <input type="text" id="employer-username" name="employer-username" placeholder="" required="">
                                </div> <!-- end .form-group -->
                                <div class="form-group">
                                    <p class="label">Email<sup>*</sup></p>
                                    <input type="email" id="employer-email" name="employer-email" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                        </div> <!-- end .form-field-wrapper -->

                        <div class="divider"></div>

                        <div class="button-wrapper text-center">
                            <!--					    			<button type="button" class="button previous">Back</button>-->
                            <button type="button" class="button next">Go to step 2</button>
                        </div> <!-- end .button-wrapper -->

                    </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h2 class="step-title text-center dark">Step 2: Job Detail</h2>

                    <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                        <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                        <li class="sub-active"><span>2</span></li>
                        <li><span>3</span></li>
                    </ul> <!-- end .steps-progress-bar -->

                    <div class="form-inner">

                        <div class="form-fields-wrapper">
                            <h4 class="form-fields-title dark">Company Info</h4>
                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">Company name</p>
                                    <input type="text" id="employer-company-name" name="employer-company-name" placeholder="" required="">
                                </div> <!-- end .form-group -->
                                <div class="form-group">
                                    <p class="label">Address</p>
                                    <input type="text" id="employer-company-address" name="employer-company-address" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">Phone Number<sup>*</sup></p>
                                    <input type="text" id="employer-company-number" name="employer-company-number" placeholder="" required="">
                                </div> <!-- end .form-group -->
                                <div class="form-group">
                                    <p class="label">Email<sup>*</sup></p>
                                    <input type="email" id="employer-company-email" name="employer-company-email" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper">
                                <div class="form-group upload-company-logo">
                                    <p class="label">Company logo<span>(Maximum file size: 5MB)</span></p>
                                    <label for="company-logo-upload" class="flex space-between items-center no-column no-wrap">
                                        <span>Upload your logo</span>
                                        <span><i class="ion-ios-folder-outline"></i>Browse image</span>
                                    </label>
                                    <input type="file" name="company-logo-upload" id="company-logo-upload">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <p class="label">Website<span>(optional)</span></p>
                                    <input type="text" id="employer-company-site" name="employer-company-site" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <p class="label">Company description<span>(optional)</span></p>
                                    <textarea name="employer-company-desc" id="employer-company-desc" required="" rows="6" placeholder=""></textarea>
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                        </div> <!-- end .form-fields-wrapper -->

                        <div class="divider"></div>

                        <div class="form-fields-wrapper">
                            <h4 class="form-fields-title dark">Job Details</h4>
                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <p class="label">Job title</p>
                                    <input type="text" id="job-title" name="job-title" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">Job type</p>
                                    <select class="form-control" id="job-type-filter">
                                        <option value="" selected="" disabled=""></option>
                                        <option>Featured Developer</option>
                                        <option>Hourly Rate</option>
                                        <option>Location</option>
                                        <option>Skills</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">Start Time</p>
                                    <input type="datetime-local" id="job-title" name="job-title" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <p class="label">End Time</p>
                                    <input type="datetime-local" id="job-title" name="job-title" placeholder="" required="">
                                </div>
                            </div>
                            <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <p class="label">Job description</p>
                                    <textarea name="job-desc" id="job-desc" required="" rows="6" placeholder=""></textarea>
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                            <div class="form-group-wrapper flex space-between items-center">
                                <div class="form-group">
                                    <p class="label">Job location</p>
                                    <input type="text" id="job-location" name="job-location" placeholder="" required="">
                                </div> <!-- end .form-group -->
                                <div class="form-group">
                                    <p class="label">Salary/Wage</p>
                                    <input type="text" id="job-salary" name="job-salary" placeholder="" required="">
                                </div> <!-- end .form-group -->
                            </div> <!-- end .form-group-wrapper -->

                        </div> <!-- end .form-fields-wrapper -->

                        <div class="divider"></div>

                        <div class="button-wrapper text-center">
                            <button type="button" class="button previous">Back</button>
                            <button type="button" class="button next">Go to step 3</button>
                        </div> <!-- end .button-wrapper -->

                    </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h2 class="step-title text-center dark">Step 3: Review job</h2>

                    <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                        <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                        <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                        <li class="sub-active"><span>3</span></li>
                    </ul> <!-- end .steps-progress-bar -->

                    <div class="form-inner">
                        <div class="job-post-wrapper">
                            <div class="job-post-top flex no-column no-wrap">
                                <div class="job-post-top-left">
                                    <img src="images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
                                </div> <!-- end .left-side-inner -->
                                <div class="job-post-top-right">
                                    <h4 class="dark">Front-end developer needed</h4>
                                    <h5>Banana inc.</h5>
                                    <div class="job-post-meta flex items-center no-column no-wrap">
                                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                            <h6 class="bookmarked-job-category">Technologies</h6>
                                            <h6 class="candidate-location">Park Ave,<span>NYC, USA</span></h6>
                                            <h6 class="hourly-rate">$60<span>/Hour</span></h6>
                                        </div>
                                        <h6 class="full-time">Full Time</h6>
                                    </div> <!-- end .job-post-meta -->
                                </div> <!-- end .right-side-inner -->
                            </div> <!-- end .job-post-top -->

                            <div class="divider"></div>

                            <div class="job-post-bottom">
                                <h4 class="dark">Job Description</h4>
                                <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.<br><br>Nullam tempor, ipsum eget egestas viverra, velit augue fringilla arcu, et sollicitudin enim eros nec est. Suspendisse volutpat velit non porttitor placerat. Mauris porttitor aliquam bibendum. Nam at ultrices justo. Mauris eget urna magna.</p><br>

                                <h4 class="dark">Challenges &amp; Benifits</h4>
                                <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.</p><br>

                                <ul class="job-post-nested-list list-unstyled">
                                    <li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Donec accumsan auctor iaculis. Nullam non tortor massa. Proin ligula leo, hendrerit quis tincidunt a, sodales eget ligula. Aenean et est tristique, dictum lorem vel, porttitor urna.</li>
                                    <li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Suspendisse gravida elementum lacus, a malesuada tortor sollicitudin ut. Donec pharetra metus lectus, ut eleifend eros sollicitudin et. Ut at lobortis dolor, eget commodo tortor. Curabitur bibendum consequat neque a tincidunt. In in euismod quam. Proin in egestas eros. Cum sociis natoque penatibus et magnis dis parturient montes.</li>
                                    <li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Etiam cursus metus arcu, ut pellentesque eros dictum vitae. Vivamus purus ex, dapibus ut eleifend in, hendrerit non nibh. Donec ornare molestie vehicula. Duis feugiat iaculis convallis.</li>
                                </ul> <!-- end .job-post-nested-list -->

                                <br>

                                <h4 class="dark">Requirements</h4>
                                <p>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. Etiam a laoreet justo, laoreet blandit arcu. Vestibulum lacinia, lacus vitae dignissim tempor, mi tellus imperdiet dolor, quis consectetur tortor magna id enim.<br><br>Vestibulum ac vestibulum dui. Vivamus finibus vel mauris ut vehicula. Nullam a magna porttitor, dictum risus nec, faucibus sapien. Curabitur porttitor in est at viverra. Sed dictum felis lorem.</p>

                                <br>

                                <div class="divider"></div>

                                <div class="job-post-share flex space-between items-center no-wrap">
                                    <div class="job-post-share-left flex items-center no-wrap">
                                        <h6>Share this job:</h6>
                                        <ul class="social-share flex no-wrap no-column list-unstyled">
                                            <li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
                                            <li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
                                            <li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
                                        </ul> <!-- end .social-share -->
                                    </div> <!-- end .job-post-share-left -->
                                    <div class="job-post-share-right flex items-center no-column no-wrap">
                                        <h6>Bookmark this job</h6>
                                        <i class="ion-ios-heart wishlist-icon"></i>
                                    </div> <!-- end .job-post-share-right -->

                                </div> <!-- end .job-post-share -->
                            </div> <!-- end .job-post-bottom -->
                        </div> <!-- end .job-post-wrapper -->

                        <div class="divider"></div>

                        <div class="button-wrapper text-center">
                            <button type="button" class="button previous">Back</button>
                            <button type="button" class="button next">Submit</button>
                        </div> <!-- end .button-wrapper -->

                    </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h2 class="step-title text-center dark">You've successfully posted a job</h2>

                    <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                        <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                        <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                        <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                    </ul> <!-- end .steps-progress-bar -->

                    <div class="form-inner">
                        <h2 class="text-center job-post-success">Congratulations!</h2>
                        <p class="text-center">You’ve successfully posted a new job. Let’s see who you’re gonna hire. Whenever you want to edit your job, please go to your <a href="#0">Dashboard</a>> <a href="#0">Manage Jobs</a>. Thank you for using our job board!</p>
                        <div class="button-wrapper text-center">
                            <a href="{{route('jobListening')}}"> <button type="button" class="button">View job now</button></a>
                        </div> <!-- end .button-wrapper -->
                    </div> <!-- end .form-inner -->
                </fieldset>

            </form> <!-- end .job-post-form -->

        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

@endsection