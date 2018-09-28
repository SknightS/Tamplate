@extends('main')

@section('content')
    <!-- Responsive Menu -->
    <div class="responsive-menu">
        <a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
        <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <!-- Breadcrumb Bar -->
    <div class="section breadcrumb-bar solid-blue-bg">
        <div class="inner">
            <div class="container">
                <div class="breadcrumb-menu flex items-center no-column">

                    @if($companyDetails->image != null)
                        <img src="{{url('public/companyImages/thumb/'.$companyDetails->image)}}" alt="company-logo" class="img-responsive">
                    @else
                        <img src="{{url('public/companyImages/dummy.jpg')}}" alt="company-logo" class="img-responsive">
                    @endif

                    <div class="breadcrumb-info-dashboard">
                        <h2>{{$companyDetails->name}}</h2>

                        @if($companyAddress!=null)
                            @foreach($companyAddress as $address)
                                <h4 >{{$address->addresscol}},<span>{{$address->city}}, {{$address->state}}</span></h4>
                            @endforeach
                        @else
                            <h4 ><span></span></h4>
                        @endif


                    </div> <!-- end .candidate-info -->
                </div> <!-- end .breadcrumb-menu -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Employer Dashboard -->
    <div class="section employer-dashboard-content solid-light-grey-bg">
        <div class="inner">
            <div class="container">

                <div class="right-side-content ">

                    <div id="profile" class="tab-pane  fade in active">

                        <div class="profile-wrapper fade in active">

                            <div class="profile-info profile-section flex no-column no-wrap">
                                <div class="profile-picture">
                                                                           {{--<img src="images/company-logo-jumbo01.jpg" alt="company-logo" class="img-responsive">--}}
                                </div> <!-- end .user-picture -->
                                <div class="profile-meta">
                                    <h4 class="dark">{{$companyDetails->name}}</h4>
                                    @if($companyAddress!=null)
                                        @foreach($companyAddress as $address)
                                            <p >{{$address->addresscol}},<span>{{$address->city}}, {{$address->state}}</span></p>
                                        @endforeach
                                    @else
                                        <p ><span></span></p>
                                    @endif

                                    {{--<p>Cupertino, CA, USA</p>--}}
                                    <div class="profile-contact flex items-center no-wrap no-column">
                                        <h6 class="contact-phone">{{$companyDetails->phone}}</h6>
                                        <h6 class="contact-email">{{$companyDetails->email}}</h6>
                                    </div> <!-- end .profile-contact -->

                                    {{--<ul class="list-unstyled social-icons flex no-column">--}}
                                        {{--<li><a href="#0"><i class="ion-social-twitter"></i></a></li>--}}
                                        {{--<li><a href="#0"><i class="ion-social-facebook"></i></a></li>--}}
                                        {{--<li><a href="#0"><i class="ion-social-instagram"></i></a></li>--}}
                                    {{--</ul> <!-- end .social-icons -->--}}

                                </div> <!-- end .profile-meta -->
                            </div> <!-- end .profile-info -->

                            <div class="divider"></div>

                            <div class="profile-about profile-section">
                                <h3 class="dark profile-title">About company</h3>
                                <p>{{$companyDetails->about}}</p>
                            </div> <!-- end .profile-about -->

                            <div class="divider"></div>

                            {{--<div class="profile-experience-wrapper profile-section">--}}
                                {{--<h3 class="dark profile-title">Awards<span><i class="ion-edit"></i></span></h3>--}}
                                {{--<div class="profile-experience flex space-between no-wrap no-column">--}}
                                    {{--<div class="profile-experience-left">--}}
                                        {{--<h5 class="profile-designation dark">AWWWARDS</h5>--}}
                                        {{--<h5 class="profile-company dark">Site of the month</h5>--}}
                                        {{--<p class="small ultra-light">Aug 2016</p>--}}
                                        {{--<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>--}}
                                        {{--<h6 class="projects-count">http://banana.com</h6>--}}
                                    {{--</div> <!-- end .profile-experience-left -->--}}
                                {{--</div> <!-- end .profile-experience -->--}}
                                {{--<div class="spacer-md"></div>--}}
                                {{--<div class="profile-experience flex space-between no-wrap no-column">--}}
                                    {{--<div class="profile-experience-left">--}}
                                        {{--<h5 class="profile-designation dark">Best css award</h5>--}}
                                        {{--<h5 class="profile-company dark">Site of the day</h5>--}}
                                        {{--<p class="small ultra-light">Aug 16th, 2016</p>--}}
                                        {{--<p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>--}}
                                        {{--<h6 class="projects-count">http://banana.com</h6>--}}
                                    {{--</div> <!-- end .profile-experience-left -->--}}
                                {{--</div> <!-- end .profile-experience -->--}}
                            {{--</div> <!-- end .profile-experience-wrapper -->--}}

                        </div> <!-- end .profile-wrapper -->
                    </div> <!-- end #profile-tab -->

                </div> <!-- end .right-side-content -->

            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->
@endsection