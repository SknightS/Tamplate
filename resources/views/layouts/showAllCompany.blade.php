@extends('main')

@section('content')

    <div class="section breadcrumb-bar solid-blue-bg">
        <div class="inner">
            <div class="container">
                <p class="breadcrumb-menu">
                    <a href="#0"><i class="ion-ios-home"></i></a>
                    <i class="ion-ios-arrow-right arrow-right"></i>
                    <a href="#0">Candidates</a>
                    <i class="ion-ios-arrow-right arrow-right"></i>
                    <a href="#0">Browse companies</a>
                </p> <!-- end .breabdcrumb-menu -->
                <h2 class="breadcrumb-title">Showing all companies</h2>
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Companies List Section -->
    <div class="section companies-list-section">
        <div class="inner">
            <div class="container">
                <ul class="companies-list-menu flex space-around items-center no-column no-wrap list-unstyled">
                    <li class="active"><a href="#company-list-A">A</a></li>
                    <li><a href="#company-list-B">B</a></li>
                    <li><a href="#0">C</a></li>
                    <li><a href="#0">D</a></li>
                    <li><a href="#">E</a></li>
                    <li><a href="#">F</a></li>
                    <li><a href="#">G</a></li>
                    <li><a href="#">H</a></li>
                    <li><a href="#">I</a></li>
                    <li><a href="#">J</a></li>
                    <li><a href="#">K</a></li>
                    <li><a href="#">L</a></li>
                    <li><a href="#">M</a></li>
                    <li><a href="#">N</a></li>
                    <li><a href="#">O</a></li>
                    <li><a href="#">P</a></li>
                    <li><a href="#">Q</a></li>
                    <li><a href="#">R</a></li>
                    <li><a href="#">S</a></li>
                    <li><a href="#">T</a></li>
                    <li><a href="#">U</a></li>
                    <li><a href="#">V</a></li>
                    <li><a href="#">W</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Z</a></li>
                </ul> <!-- end .companies-list-menu -->

                <div class="well well-sm">
                    <strong></strong>
                    <!--							<div class="btn-group">-->
                    <!--								<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">-->
                    <!--            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span-->
                    <!--										class="glyphicon glyphicon-th"></span>Grid</a>-->
                    <!--							</div>-->
                </div>
                <div id="products" class="row list-group">

                    @foreach($allCompaniesWithBranch as $allCompany)
                    <div class="item  col-xs-4 col-lg-4">
                        <a href="{{route('Companydetails',$allCompany->companyId)}}">
                            <div class="thumbnail">

                                @if($allCompany->image != null)
                                    <img style="height:100px;"  src="{{url('public/employerImages/thumb/'.$allCompany->image)}}" alt="company-logo" class=" group list-group-image">
                                @else
                                    <img style="height:100px;" src="{{url('public/employeeImages/dummy.jpg')}}" alt="company-logo" class="img-responsive group list-group-image">
                                @endif


                                <div class="caption">
                                    <h4 style="color: #a0a7ba" class="group inner list-group-item-heading">
                                        <b>Company Name:</b>&nbsp;&nbsp;{{$allCompany->branchName}}</h4>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <h4 style="color:#a0a7ba " class="group inner list-group-item-heading">
                                                <b>Address:</b> {{$allCompany->addresscol}},<span>{{$allCompany->city}}, {{$allCompany->state}}</span>
                                            </h4>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach



                </div>


            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

@endsection