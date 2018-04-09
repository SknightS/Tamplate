@include('employee.head')
		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						<img src="{{url('public/images/candidate06.jpg')}}" alt="avatar" class="img-responsive">
						<div class="breadcrumb-info-dashboard">
							<h2>Mark Anderson</h2>
							<h4>UI/UX designer</h4>
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						@include('employee.sidebar')


                        <div class="right-side-content">
                            <div class="tab-content candidate-dashboard">

                                @yield('emp-contant')

                            </div>
                        </div>

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
@include('footer')