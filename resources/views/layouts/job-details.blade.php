@extends('main')

@section('content')
		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container-fluid">
					<p class="breadcrumb-menu">
						<a href="{{route('home')}}"><i class="ion-ios-home"></i></a>
						<i class="ion-ios-arrow-right arrow-right"></i>
						<a href="#">Job Details</a>
					</p> <!-- end .breabdcrumb-menu -->
					<h2 class="breadcrumb-title flex items-center">{{$jobdetails->jobName}}
						<button type="button" class="button full-time button-sm">Full time</button>
					</h2>
				</div> <!-- end .container-fluid -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Job Listings Section -->
		<div class="section jobs-details-section">
			<div class="container-fluid">
				<div class="jobs-details-wrapper flex no-wrap">

					<div class="left-side">

						<div class="statistics-widget-wrapper jobs-widget">
							<h6>Overall statistics</h6>
							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
									<h2 class="dark">683,207</h2>
									<h5>Created Resumes</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+583 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

							<div class="statistics-widget flex no-column no-wrap">
								<div class="left-side-inner">
										<h2 class="dark">129, 245</h2>
										<h5>Posted Jobs</h5>
								</div> <!-- end .left-side -->
								<div class="right-side-inner">
									<button type="button" class="button button-sm grey">+364 this week</button>
								</div> <!-- end .right-side -->
							</div> <!-- end .statisstics-widget -->

						</div> <!-- end .statistics-widget-wrapper -->

						<div class="divider"></div>

					 <!-- end .featured-jobs-widget-wrapper -->

						<div class="divider"></div>

					

					</div> <!-- end .left-side -->

					<div class="right-side-wrapper">
						<div class="right-side-top">
							<h6><span><i class="ion-ios-arrow-left"></i></span>Back to <a href="{{route('jobListening')}}">All Jobs</a></h6>
							<div class="right-side-top-inner flex no-wrap">
							
								<div class="job-post-wrapper">
									<div class="job-post-top flex no-column no-wrap">
										<div class="job-post-top-left">
											<img src="images/{{$jobdetails->image}}" alt="company-logo" class="img-responsive">
										</div> <!-- end .left-side-inner -->
										<div class="job-post-top-right">
											<h4 class="dark">{{$jobdetails->jobName}}</h4>
											<h5>{{$jobdetails->cname}}</h5>
											<div class="job-post-meta flex items-center no-column no-wrap">
												<div class="bookmarked-job-meta flex items-center no-wrap no-column">
						        					<h6 class="candidate-location">{{$jobdetails->addresscol}},<span>{{$jobdetails->cityname}}, {{$jobdetails->statename}}</span></h6>
													<h6 class="hourly-rate">{{"$".$jobdetails->job_amount}}<span>/Hour</span></h6>
						        				</div>
					        					<h6 class="full-time">{{$jobdetails->typeName}}</h6>
											</div> <!-- end .job-post-meta -->
										</div> <!-- end .right-side-inner -->
									</div> <!-- end .job-post-top -->

									<div class="divider"></div>

									<div class="job-post-bottom">
										<h4 class="dark">Job Description</h4>

                                        {{$jobdetails->jdetails}}
										<div class="divider"></div>
                                        <div class="job-post-bottom">
                                        <h4 class="dark">Job Time</h4>
										{{--<div class="job-post-share flex space-between items-center no-wrap">--}}
											{{--<div class="job-post-share-left flex items-center no-wrap">--}}
												{{--<h6>Share this job:</h6>--}}
												{{--<ul class="social-share flex no-wrap no-column list-unstyled">--}}
													{{--<li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>--}}
													{{--<li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>--}}
													{{--<li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>--}}
												{{--</ul> <!-- end .social-share -->--}}
											{{--</div> <!-- end .job-post-share-left -->--}}
											{{--<div class="job-post-share-right flex items-center no-column no-wrap">--}}
												{{--<h6>Bookmark this job</h6>--}}
												{{--<i class="ion-ios-heart wishlist-icon"></i>--}}
											{{--</div> <!-- end .job-post-share-right -->--}}
											{{----}}
										{{--</div> <!-- end .job-post-share -->--}}
                                        </div>
									</div> <!-- end .job-post-bottom -->

								</div> <!-- end .left-side-inner -->

								<div class="right-side-inner">
									<div id="map" class="map on-job-details-page"></div>
									<div class="job-post-company-info">
										<h5 class="dark">{{$jobdetails->cname}}</h5>
										<ul class="list-unstyled">
											<li class="flex no-column no-wrap"><i class="ion-ios-location"></i>{{$jobdetails->addresscol}}</li>
											<li class="flex no-column no-wrap"><i class="ion-ios-telephone"></i><a href="tel:(+01)-212-342-6789">{{$jobdetails->phone}}</a></li>
											<li class="flex no-column no-wrap"><i class="ion-email"></i><a href="mailto:{{$jobdetails->email}}">{{$jobdetails->email}}</a></li>
											<li class="flex no-column no-wrap"><i class="ion-earth"></i><a target="_blank" href="http://{{$jobdetails->website}}">{{$jobdetails->website}}</a></li>
										</ul>
									</div> <!-- end .job-post-company-info -->

									<div class="apply-for-job">

<!--										<div class="apply-btn-group flex space-center items-center no-column no-wrap">-->
<!--											<button type="button" class="button facebook-btn">Via Facebook</button>-->
<!--											<button type="button" class="button linkedln-btn">Via Linkedln</button>-->
<!--										</div> <!-- end .apply-btn-group -->
									</div> <!-- end .apply-for-job -->

									<div class="system-login text-center">
										<p class="divider-text text-center"><span>Apply for this job</span></p><br>
										<button type="submit" class="button">Submit your resume</button>
									</div> <!-- end .system-login -->

								</div> <!-- end .right-side-inner -->

							</div> <!-- end .left-side-top -->

							<div class="right-side-bottom-wrapper">
							
						        <div class="bookmarked-jobs-list-wrapper on-listing-page on-job-detals-page">
									<h3>Similar jobs from<span>Banana inc.</span></h3>
						        	<div class="bookmarked-job-wrapper">
						        		<div class="bookmarked-job flex no-wrap no-column ">
							        		<div class="job-company-icon">
							        			<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
							        		</div> <!-- end .job-icon -->
							        		<div class="bookmarked-job-info">
							        			<h4 class="dark flex no-column">We're looking for a designer<a href="#0" class="button full-time">full time</a></h4>
							        			<h5>Banana inc.</h5>
							        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
							        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
							        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
								        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
							        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
							        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
							        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
							        					</ul> <!-- end .candidates-avatar -->
														<h6 class="bookmarked-job-category">Art/Design</h6>
							        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
														<h6 class="hourly-rate">$45<span>/Hour</span></h6>
							        				</div> <!-- end .bookmarked-job-meta -->
							        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
							        					<i class="ion-ios-heart wishlist-icon"></i>
							        					<a href="#0" class="button">more detail</a>
							        				</div> <!-- end .right-side-bookmarked-job-meta -->
							        			</div> <!-- end .bookmarked-job-info-bottom -->
							        		</div> <!-- end .bookmarked-job-info -->
						        		</div> <!-- end .bookmarked-job -->
						        	</div> <!-- end .bookmarked-job-wrapper --> 

						        	<div class="bookmarked-job-wrapper">
						        		<div class="bookmarked-job flex no-wrap no-column ">
							        		<div class="job-company-icon">
							        			<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
							        		</div> <!-- end .job-icon -->
							        		<div class="bookmarked-job-info">
							        			<h4 class="dark flex no-column">We need a web designer<a href="#0" class="button part-time">Part time</a></h4>
							        			<h5>Banana inc.</h5>
							        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
							        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
							        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
								        				<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">
							        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
							        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
							        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
							        					</ul> <!-- end .candidates-avatar -->
														<h6 class="bookmarked-job-category">Art/Design</h6>
							        					<h6 class="candidate-location">Cupertino,<span>CA, USA</span></h6>
														<h6 class="hourly-rate">$45<span>/Hour</span></h6>
							        				</div> <!-- end .bookmarked-job-meta -->
							        				<div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
							        					<i class="ion-ios-heart wishlist-icon"></i>
							        					<a href="#0" class="button">more detail</a>
							        				</div> <!-- end .right-side-bookmarked-job-meta -->
							        			</div> <!-- end .bookmarked-job-info-bottom -->
							        		</div> <!-- end .bookmarked-job-info -->
						        		</div> <!-- end .bookmarked-job -->
						        	</div> <!-- end .bookmarked-job-wrapper -->	
					        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
							</div> <!-- end .right-side-bottom-wrapper -->
							</div> <!-- end .right-side-top-inner -->
						</div> <!-- end .right-side-top -->
					</div> <!-- end .right-side-wrapper -->
				</div> <!-- end .jobs-details-wrapper -->
			</div> <!-- end .container-fluid -->
		</div> <!-- end .section -->


		<!-- Footer -->

	@endsection
