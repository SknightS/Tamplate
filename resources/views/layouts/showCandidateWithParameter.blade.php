<div class="top flex space-between no-wrap items-center">
    <h6>showing
        <span>{{($allCandidates->currentpage()-1)*$allCandidates->perpage()+1}}
            - {{(($allCandidates->currentpage()-1)*$allCandidates->perpage())+$allCandidates->count()}}
                                </span>of
        <span>{{$allCandidates->total()}}</span>candidates</h6>
    <div class="spacer-xs-m"></div>
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
    </div> <!-- end .sort-by -->
</div> <!-- end .top -->


@foreach ($allCandidates as $candidates)
    <div class="candidates-list">
        <div class="candidate flex no-wrap no-column">

            <div class="candidate-image">
                @if(!empty($candidates->image))
                    <img src="{{'public/employeeImages'."/".$candidates->image}}" alt="candidate-image" class="img-responsive">
                @else
                    <img src="{{'public/employeeImages/dummy.jpg'}}" alt="candidate-image" class="img-responsive">
                @endif
            </div> <!-- end .candidate-image -->

            <div class="candidate-info">
                <a href="{{route('candidatedetails',$candidates->candidateId)}}"> <h4 class="candidate-name">{{$candidates->name}}</h4>
                    <h5 class="candidate-designation">{{$candidates->professionTitle}}</h5>
                </a>

                <p class="candidate-description ultra-light">
                    {{$candidates->aboutme}}
                </p>

                <div class="candidate-info-bottom flex no-column items-center">

                    {{--<h6 class="candidate-location">--}}
                    {{--<span>Park ave,</span>nyc, usa--}}
                    {{--</h6>--}}


                    <h6 class="contact-location">{{$candidates->addresscol}},<span>{{$candidates->city}}, {{$candidates->state}}</span></h6>&nbsp;&nbsp;


                    <h6 class="hourly-rate"><span>$45</span>/Hour</h6>

                    <ul class="list-unstyled candidate-skills flex no-column items-center">

                        @foreach($allSkill as $personalSkill)
                            @if($personalSkill->candidateId==$candidates->candidateId)
                                <li><a href="#" class="button">{{$personalSkill->skillName}}</a></li>
                            @endif
                        @endforeach

                                {{--<li><a href="#" class="button">{{$candidates->skillName}}</a></li>--}}


                    </ul> <!-- end .candiate-skills -->
                </div> <!-- end .candidate-info-bottom -->
            </div> <!-- end .candidate-info -->
        </div> <!-- end .candidate -->
    </div> <!-- end .candidates-list -->

    <div class="spacer-xs"></div>

@endforeach


<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
    @if($allCandidates->currentPage()!= 1)
        <a data-id="{{$allCandidates->previousPageUrl()}}" href="javascript:void(0)" class="button pagiNextPrevBtn"><i class="ion-ios-arrow-left"></i>Prev</a>
    @endif
    <ul class="list-unstyled flex no-column items-center pagination">
        @for($i=$allCandidates->perPage(); $i <= $allCandidates->total();$i=($i+$allCandidates->perPage()))
            <li ><a href="{{$allCandidates->url($i)}}">{{$i}}</a></li>
        @endfor
    </ul>
    @if($allCandidates->lastPage()!=$allCandidates->currentPage())
        <a data-id="{{$allCandidates->nextPageUrl()}}"href="javascript:void(0)"  class="button pagiNextPrevBtn">Next<i class="ion-ios-arrow-right"></i></a>
    @endif

</div> <!-- end .jobpress-custom-pager -->

<script>
    $(".pagiNextPrevBtn").on("click",function() {

        var page=$(this).data('id').split('page=')[1];

        getData(page)

    });
</script>