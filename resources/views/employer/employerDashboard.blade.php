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

						@if($employerInfo->image != null)
							<img src="{{url('public/employerImages/thumb/'.$employerInfo->image)}}" alt="avatar" class="img-responsive">
						@else
							<img src="{{url('public/employerImages/dummy.jpg')}}" alt="avatar" class="img-responsive">
						@endif
						<div class="breadcrumb-info-dashboard">
							<h2>{{$employerInfo->contact_person_name}}</h2>
							{{--<h4>{{$candidateInfo->professionTitle}}</h4>--}}
						</div> <!-- end .candidate-info -->


					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

@if (Session::has('success_msg'))
    <div class="alert alert-success" style="margin-bottom: 0px;text-align: center">
        <strong >{{Session::get('success_msg')}}</strong>
    </div>

@elseif(Session::has('error_msg'))
    <div class="alert alert-danger" style="margin-bottom: 0px;text-align: center" >
        <strong >{{Session::get('error_msg')}}</strong>
    </div>
@endif
		<!-- Employer Dashboard -->
        <div class="section candidate-dashboard-content solid-light-grey-bg">
            <div class="inner">
                <div class="container">
                    <div class="candidate-dashboard-wrapper flex space-between no-wrap">

                        @include('employer.sidebar')


                        <div class="right-side-content">
                            <div class="tab-content candidate-dashboard">

                                @yield('empr-contant')

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


<!-- Footer -->


@include('employer.footer')

