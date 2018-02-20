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
                <div class="item  col-xs-4 col-lg-4">
                    <a href="{{route('Companiesdetails')}}">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/company/download%20(1).png"  alt="" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    <b>Company Name:</b> Azusa</h4>
                                <h4 class="group inner list-group-item-heading">
                                    &nbsp;&nbsp;&nbsp; <a href="#">Company A</a></h4>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <h4 class="group inner list-group-item-heading">
                                            <b>Address:</b> Mirpur :10</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="images/company/download%20(2).png" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <b>Company Name:</b> Matador</h4>
                            <h4 class="group inner list-group-item-heading">
                                <b>Position:</b><a href="#"> Company B</a></h4>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h4 class="group inner list-group-item-heading">
                                        <b>Address:</b> Dhanmondi : 27</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="images/company/download%20(3).png" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <b>Company Name:</b> Staff</h4>
                            <h4 class="group inner list-group-item-heading">
                                <b>Position:</b><a href="#">Company C</a></h4>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h4 class="group inner list-group-item-heading">
                                        <b>Address:</b> Milk vita</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="images/company/download.png" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <b>Company Name:</b> Oh tshirt</h4>
                            <h4 class="group inner list-group-item-heading">
                                <b>Position:</b><a href="#"> Company D</a></h4>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h4 class="group inner list-group-item-heading">
                                        <b>Address:</b> Banani : 11</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail"><br><br>
                        <img class="group list-group-image" src="images/company/images.jpg" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <b>Company Name:</b> Jhinga</h4>
                            <h4 class="group inner list-group-item-heading">
                                <b>Position:</b><a href="#"> Company E</a></h4>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h4 class="group inner list-group-item-heading">
                                        <b>Address:</b> Mirpur : 01</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="images/company/images.png" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <b>Company Name:</b> Kakku</h4>
                            <h4 class="group inner list-group-item-heading">
                                <b>Position:</b><a href="#"> Company F</a></h4>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h4 class="group inner list-group-item-heading">
                                        <b>Address:</b> Mirpur : 11.5</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

    @endsection