<div class="bookmarked-jobs-list-wrapper on-listing-page on-job-detals-page">
    <h3>Similar jobs </h3>

    @foreach($similarjob as $sj)
        <div class="bookmarked-jobs-list-wrapper on-listing-page">
            <div class="bookmarked-job-wrapper">
                <div class="bookmarked-job flex no-wrap no-column ">
                    <div class="job-company-icon">
                        @if($sj->cimage != null)
                            <img style="height: 100px;width: 100px" src="{{url('public/companyImages/thumb/'.$sj->cimage)}}" alt="company-icon" class="img-responsive">
                        @else
                            <img src="{{url('public/companyImages/dummy.jpg')}}" alt="company-icon" class="img-responsive">
                        @endif

                    </div> <!-- end .job-icon -->
                    <div class="bookmarked-job-info">
                        <h4 class="dark flex no-column">{{$sj->jobName}}</h4>
                        <h5>{{$sj->cname}}</h5>
                        <p>{{$sj->pdes}}</p>
                        <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                            <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                {{--<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">--}}
                                {{--<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>--}}
                                {{--<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>--}}
                                {{--<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>--}}
                                {{--</ul> <!-- end .candidates-avatar -->--}}
                                <h6 class="bookmarked-job-category">{{$sj->typeName}}</h6>
                                <h6 class="candidate-location">{{$sj->address}}</h6>
                                <h6 class="hourly-rate">{{$sj->job_amount}}<span>/Hour</span></h6>
                            </div> <!-- end .bookmarked-job-meta -->
                            <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                                {{--<i class="ion-ios-heart wishlist-icon"></i>--}}
                                <a href="{{route('layouts.jobdetails', [ $sj->typeName, $sj->postid] )}}" class="button">more detail</a>
                            </div> <!-- end .right-side-bookmarked-job-meta -->
                        </div> <!-- end .bookmarked-job-info-bottom -->
                    </div> <!-- end .bookmarked-job-info -->
                </div> <!-- end .bookmarked-job -->
            </div> <!-- end .bookmarked-job-wrapper -->

        </div> <!-- end .bookmarked-jobs-list-wrapper -->
    @endforeach

</div> <!-- end .bookmarked-jobs-list-wrapper -->

<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center pagination">
    @if($similarjob->currentPage()!= 1)
        <a data-id="{{$similarjob->previousPageUrl()}}" href="{{$similarjob->previousPageUrl()}}" class="button pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a>
    @endif
        {{--<li class="page-item @if($similarjob->currentPage()== 1) disabled @endif"> <a data-id="{{$similarjob->previousPageUrl()}}" href="javascript:void(0)" class="page-link pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a></li>--}}
    <ul class="list-unstyled flex no-column items-center pagination">
        @for($i=$similarjob->perPage(); $i <= $similarjob->total();$i=($i+$similarjob->perPage()))
            <li @if($similarjob->currentPage() == $i) class="page-item active " @else class="page-item" @endif ><a href="{{$similarjob->url($i)}}">{{$i}}</a></li>
        @endfor
    </ul>
    @if($similarjob->lastPage()!=$similarjob->currentPage())
        <a data-id="{{$similarjob->nextPageUrl()}}"href="{{$similarjob->nextPageUrl()}}"  class="button pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a>
    @endif
        {{--<li  class="page-item @if($similarjob->lastPage()==$similarjob->currentPage()) disabled @endif"><a data-id="{{$similarjob->nextPageUrl()}}" href="javascript:void(0)"  class="page-link pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a></li>--}}
</div>

<script>
    $(".pagiNextPrevBtn").on("click",function() {

        var page=$(this).data('id').split('page=')[1];

        getData(page)

    });
</script>