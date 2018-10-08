<div class="table-header">
    <div class="table-cells flex">
        <div class="job-title-cell"><h6>Job title / Company name</h6></div>
        <div class="job-type-cell"><h6>Type</h6></div>
        <div class="location-cell"><h6>Location</h6></div>
        <div class="expired-date-cell"><h6>Expired Dated</h6></div>
        <div class="salary-cell"><h6>Salary</h6></div>
    </div> <!-- end .table-cells -->
</div> <!-- end .table-header -->

@foreach($latestjobs as $lj)
    <div class="table-row">
        <div class="table-cells flex no-wrap">
            <div class="cell job-title-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Company name</h6>
                </div> <!-- end .cell-label -->
                <img src="{{url('public/images/company-logo01.jpg')}}" alt="company-logo" class="img-responsive">
                <div class="content">
                    <h4>
                        {{--<a href="job-details.php">{{$lj->jobName}}</a>--}}
                        <a href="{{route('layouts.jobdetails', [$lj->typeName,$lj->postId] )}}">{{$lj->jobName}}</a>
                    </h4>
                    <p class="small">{{$lj->cname}}</p>
                </div> <!-- end .content -->
            </div> <!-- end .job-title-cell -->
            <div class="cell location-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Type</h6>
                </div> <!-- end .cell-label -->
                <p>{{$lj->typeName}}</p>
            </div> <!-- end .job-type-cell -->
            <div class="cell location-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Location</h6>
                </div> <!-- end .cell-label -->
                <p>{{$lj->cityname." , ".$lj->statename}}</p>
            </div> <!-- end .location-cell -->
            <div class="cell expired-date-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Expired Date</h6>
                </div> <!-- end .cell-label -->
                <p>{{$lj->deadline}}</p>
            </div> <!-- end .expire-date-cell -->
            <div class="cell salary-cell flex no-column no-wrap">
                <div class="cell-mobile-label">
                    <h6>Salary</h6>
                </div> <!-- end .cell-label -->
                <p>{{$lj->job_amount."/HOUR"}}</p>
            </div> <!-- end .salray-cell -->
        </div> <!-- end .table-cells -->
    </div> <!-- end .table-row -->



@endforeach

{{--<div class="table-row">--}}
{{--<div class="table-cells flex no-wrap">--}}
{{--<div class="cell job-title-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Company name</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<img src="{{url('public/images/company-logo02.jpg')}}" alt="company-logo" class="img-responsive">--}}
{{--<div class="content">--}}
{{--<h4><a href="job-details.blade.php">We're hiring a fullstack developer</a></h4>--}}
{{--<p class="small">Archive inc.</p>--}}
{{--</div> <!-- end .content -->--}}
{{--</div> <!-- end .job-title-cell -->--}}
{{--<div class="cell job-type-cell flex no-column">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Type</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<button type="button" class="button part-time">Part time</button>--}}
{{--</div>--}}
{{--<div class="cell location-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Location</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Cupertino<span>, CA, USA</span></p>--}}
{{--</div>--}}
{{--<div class="cell expired-date-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Expired date</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Nov 14th<sup>th</sup><span>, 2017</span></p>--}}
{{--</div>--}}
{{--<div class="cell salary-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Salary</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p><sup>$</sup>60<span>/hour</span></p>--}}
{{--</div>--}}
{{--</div> <!-- end .table-cells -->--}}
{{--</div> <!-- end .table-row -->--}}

{{--<div class="table-row">--}}
{{--<div class="table-cells flex no-wrap">--}}
{{--<div class="cell job-title-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Company name</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<img src="{{url('public/images/company-logo03.jpg')}}" alt="company-logo" class="img-responsive">--}}
{{--<div class="content">--}}
{{--<h4><a href="job-details.blade.php">Looking for a project leader</a></h4>--}}
{{--<p class="small">Comply agency</p>--}}
{{--</div> <!-- end .content -->--}}
{{--</div> <!-- end .job-title-cell -->--}}
{{--<div class="cell job-type-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Type</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<button type="button" class="button full-time">Full time</button>--}}
{{--</div>--}}
{{--<div class="cell location-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Location</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Cupertino<span>, CA, USA</span></p>--}}
{{--</div>--}}
{{--<div class="cell expired-date-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Expired Date</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Nov 14th<sup>th</sup><span>, 2017</span></p>--}}
{{--</div>--}}
{{--<div class="cell salary-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Salary</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p><sup>$</sup>60<span>/hour</span></p>--}}
{{--</div>--}}
{{--</div> <!-- end .table-cells -->--}}
{{--</div> <!-- end .table-row -->--}}

{{--<div class="table-row">--}}
{{--<div class="table-cells flex no-wrap">--}}
{{--<div class="cell job-title-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Company name</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<img src="{{url('public/images/company-logo04.jpg')}}" alt="company-logo" class="img-responsive">--}}
{{--<div class="content">--}}
{{--<h4><a href="job-details.blade.php">Front-end developer needed</a></h4>--}}
{{--<p class="small">Folder cooperation</p>--}}
{{--</div> <!-- end .content -->--}}
{{--</div> <!-- end .job-title-cell -->--}}
{{--<div class="cell job-type-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Type</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<button type="button" class="button freelancer">freelancer</button>--}}
{{--</div>--}}
{{--<div class="cell location-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Location</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Cupertino<span>, CA, USA</span></p>--}}
{{--</div>--}}
{{--<div class="cell expired-date-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Expired date</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Nov 14th<sup>th</sup><span>, 2017</span></p>--}}
{{--</div>--}}
{{--<div class="cell salary-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Salary</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p><sup>$</sup>60<span>/hour</span></p>--}}
{{--</div>--}}
{{--</div> <!-- end .table-cells -->--}}
{{--</div> <!-- end .table-row -->--}}

{{--<div class="table-row">--}}
{{--<div class="table-cells flex no-wrap">--}}
{{--<div class="cell job-title-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Company name</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<img src="{{url('public/images/company-logo05.jpg')}}" alt="company-logo" class="img-responsive">--}}
{{--<div class="content">--}}
{{--<h4><a href="job-details.blade.php">Software Engineer</a></h4>--}}
{{--<p class="small">Bookcover publisher</p>--}}
{{--</div> <!-- end .content -->--}}
{{--</div> <!-- end .job-title-cell -->--}}
{{--<div class="cell job-type-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Type</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<button type="button" class="button full-time">Full time</button>--}}
{{--</div>--}}
{{--<div class="cell location-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Location</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Cupertino<span>, CA, USA</span></p>--}}
{{--</div>--}}
{{--<div class="cell expired-date-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Expired date</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p>Nov 14th<sup>th</sup><span>, 2017</span></p>--}}
{{--</div>--}}
{{--<div class="cell salary-cell flex no-column no-wrap">--}}
{{--<div class="cell-mobile-label">--}}
{{--<h6>Salary</h6>--}}
{{--</div> <!-- end .cell-label -->--}}
{{--<p><sup>$</sup>60<span>/hour</span></p>--}}
{{--</div>--}}
{{--</div> <!-- end .table-cells -->--}}
{{--</div> <!-- end .table-row -->--}}

{{--<div class="table-footer flex space-between items-center">--}}
{{--<h6>Showing<span>1-5</span>of 23 jobs</h6>--}}
{{--<div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">--}}
{{--<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>--}}
{{--<ul class="list-unstyled flex no-column items-center">--}}
{{--<li><a href="#0">1</a></li>--}}
{{--<li><a href="#0">2</a></li>--}}
{{--<li><a href="#0">3</a></li>--}}
{{--<li><a href="#0">4</a></li>--}}
{{--<li><a href="#0">5</a></li>--}}
{{--</ul>--}}
{{--<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>--}}
{{--</div> <!-- end .jobpress-custom-pager -->--}}
{{--</div>--}}

<div class="table-footer flex space-between items-center">
    <h6>showing
        <span>{{($latestjobs->currentpage()-1)*$latestjobs->perpage()+1}}
            - {{(($latestjobs->currentpage()-1)*$latestjobs->perpage())+$latestjobs->count()}}
                                </span>of
        <span>{{$latestjobs->total()}}</span>Jobs</h6>



    <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">

        @if($latestjobs->currentPage()!= 1)
            <a data-id="{{$latestjobs->previousPageUrl()}}" href="javascript:void(0)" class="button pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a>
        @endif


            <ul class="list-unstyled flex no-column items-center pagination">
            @for($i=$latestjobs->perPage(); $i <= $latestjobs->total();$i=($i+$latestjobs->perPage()))
                <li @if($latestjobs->currentPage() == $i) class="page-item active " @else class="page-item" @endif ><a href="{{$latestjobs->url($i)}}">{{$i}}</a></li>
            @endfor
        </ul>
        @if($latestjobs->lastPage()!=$latestjobs->currentPage())
            <a data-id="{{$latestjobs->nextPageUrl()}}"href="javascript:void(0)"  class="button pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a>
        @endif



    </div>
    


</div> <!-- end .jobpress-custom-pager -->

<script>
    $(".pagiNextPrevBtn").on("click",function() {

        var page=$(this).data('id').split('page=')[1];

        getData(page)

    });
</script>