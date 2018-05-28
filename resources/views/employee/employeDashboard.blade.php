@include('employee.head')



		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">

						@if($candidateInfo->image != null)
						<img src="{{url('public/employeeImages/thumb/'.$candidateInfo->image)}}" alt="avatar" class="img-responsive">
						@else
							<img src="{{url('public/employeeImages/dummy.jpg')}}" alt="avatar" class="img-responsive">
						@endif
						<div class="breadcrumb-info-dashboard">
							<h2>{{$candidateInfo->name}}</h2>
							<h4>{{$candidateInfo->professionTitle}}</h4>
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

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<b><h4 class="modal-title dark profile-title" id="myModalLabel">Modal title</h4></b>
			</div>

			<div class="modal-body">

			</div>



		</div>
	</div>
</div>



@include('footer')