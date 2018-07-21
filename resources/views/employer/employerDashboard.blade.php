@include('employer.head')

		{{--<!-- Responsive Menu -->--}}
		{{--<div class="responsive-menu">--}}
			{{--<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>--}}
			{{--<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->--}}
		{{--</div> <!-- end .responsive-menu -->--}}

		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						<img src="images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
						<div class="breadcrumb-info-dashboard">
							<h2>Banana inc.</h2>
							<h4>Cupertino, CA, USA</h4>
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<!-- Employer Dashboard -->
		<div class="section employer-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="employer-dashboard-wrapper flex space-between no-wrap">

						@include('employer.sidebar')
						
						<div class="right-side-content">
							<div class="tab-content employer-dashboard">


								@yield('empr-content')


							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<!-- Footer -->


@include('employer.footer')

