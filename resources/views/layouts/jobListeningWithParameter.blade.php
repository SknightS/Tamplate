<div class="sort-by-wrapper on-listing-page flex space-between items-center no-wrap">
    <div class="left-side-inner">
        <h6>showing
            <span>{{($alljob->currentpage()-1)*$alljob->perpage()+1}}
                - {{(($alljob->currentpage()-1)*$alljob->perpage())+$alljob->count()}}
                                </span>of
            <span>{{$alljob->total()}}</span>Jobs</h6>
    </div> <!-- end .left-side -->
    <div class="right-side-inner">
        <div class="sort-by dropdown flex no-wrap no-column items-center">
            <h6>sort by</h6>
            <button class="button dropdown-toggle" type="button" id="sort-by" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Default
                <i class="ion-ios-arrow-down"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="sort-by">
                <li><a href="#">Featured</a></li>
                <li><a href="#">Top candidates</a></li>
                <li><a href="#">Price, high to low</a></li>
                <li><a href="#">Alphabetically, A-Z</a></li>
                <li><a href="#">Alphabetically, Z-A</a></li>
                <li><a href="#">Best sellers</a></li>
            </ul> <!-- end .dropdown-menu -->
        </div> <!-- end .sort-by-drop-down -->
    </div> <!-- end .right-side -->
</div> <!-- end .sort-by-wrapper -->

@foreach($alljob as $aj)
    <div class="bookmarked-jobs-list-wrapper on-listing-page">
        <div class="bookmarked-job-wrapper">
            <div class="bookmarked-job flex no-wrap no-column ">
                <div class="job-company-icon">
                    @if($aj->image != null)
                        <img src="{{url('public/companyImages/thumb/'.$aj->cImage)}}" alt="company-icon" class="img-responsive">
                    @else
                        <img src="{{url('public/companyImages/dummy.jpg')}}" alt="company-icon" class="img-responsive">
                    @endif

                    {{--<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">--}}
                </div> <!-- end .job-icon -->
                <div class="bookmarked-job-info">
                    <h4 class="dark flex no-column">{{$aj->jobName}}</h4>
                    <h5>{{$aj->cname}}</h5>
                    <p>{{$aj->pdes}}</p>
                    <div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
                        <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                            {{--<ul class="list-unstyled candidates-avatar flex items-center no-wrap no-column">--}}
                            {{--<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>--}}
                            {{--<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>--}}
                            {{--<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>--}}
                            {{--</ul> <!-- end .candidates-avatar -->--}}
                            <h6 class="bookmarked-job-category">{{$aj->typeName}}</h6>
                            <h6 class="candidate-location">{{$aj->address}}</h6>
                            <h6 class="hourly-rate">{{$aj->job_amount}}<span>/Hour</span></h6>
                        </div> <!-- end .bookmarked-job-meta -->
                        <div class="right-side-bookmarked-job-meta flex items-center no-column no-wrap">
                            {{--<i class="ion-ios-heart wishlist-icon"></i>--}}
                            <a href="{{route('layouts.jobdetails', [ $aj->typeName, $aj->postid] )}}" class="button">more detail</a>
                        </div> <!-- end .right-side-bookmarked-job-meta -->
                    </div> <!-- end .bookmarked-job-info-bottom -->
                </div> <!-- end .bookmarked-job-info -->
            </div> <!-- end .bookmarked-job -->
        </div> <!-- end .bookmarked-job-wrapper -->

    </div> <!-- end .bookmarked-jobs-list-wrapper -->
@endforeach

<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center pagination">
    @if($alljob->currentPage()!= 1)
        <a data-id="{{$alljob->previousPageUrl()}}" href="{{$alljob->previousPageUrl()}}" class="button pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a>
    @endif

    <ul class="list-unstyled flex no-column items-center pagination">
        @for($i=$alljob->perPage(); $i <= $alljob->total();$i=($i+$alljob->perPage()))
            <li  ><a href="{{$alljob->url($i)}}">{{$i}}</a></li>
        @endfor
    </ul>
    @if($alljob->lastPage()!=$alljob->currentPage())
        <a data-id="{{$alljob->nextPageUrl()}}"href="{{$alljob->nextPageUrl()}}"  class="button pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a>
    @endif

</div>

<script>
    $(".pagiNextPrevBtn").on("click",function() {

        var page=$(this).data('id').split('page=')[1];

        getData(page)

    });
</script>