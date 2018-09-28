<header class="header">
    <div class="container clearfix">
        <div class="header-inner flex space-between items-center">
            <div class="left">
                <div class="logo"><a href="{{route('home')}}"><img src="{{url('public/images/logo.png')}}" alt="JobPress" width="250" height="100" class="img-responsive"></a></div>
            </div> <!-- end .left -->
            <div class="right flex space-between no-column items-center">
                <div class="navigation">
                    <nav class="main-nav">
                        <ul class="list-unstyled">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>

                            <li class="menu-item">


                                <a href="{{route('allCandidate')}}"> Candidates</a>

                            </li>
                            <li class="menu-item">
                                <a href="{{route('Companies')}}">Companies</a>

                            </li>

                        </ul>
                    </nav> <!-- end .main-nav -->
                    <a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
                </div> <!-- end .navigation -->

                @if (Auth::check())


                @if(UserType['admin']['code']== Auth::user()->fkuserTypeId || UserType['empr']['code']== Auth::user()->fkuserTypeId )
                    <a href="{{route('postJob')}}" class="button">Post a Job</a>
                    <a href="{{route('employer.profile')}}" class="button">Profile</a>

                    <a href="{{ route('logout') }}" class="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                @elseif(UserType['emp']['code']== Auth::user()->fkuserTypeId)

                    <a href="{{route('employee')}}" class="button">Profile</a>

                    <a href="{{ route('logout') }}" class="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                @endif

                @endif

                @if(!Auth::check())
                    <div class="button-group-merged flex no-column">

                        <a href="{{route('sigupShow')}}" class="button">Sign up</a>
                        <a href="{{route('loginshow')}}" class="button"  data-target=".bs-modal-sm">Sign in</a>
                    </div> <!-- end .button-group-merged -->
                @endif



            </div> <!-- end .right -->
        </div> <!-- end .header-inner -->
    </div> <!-- end .container -->
</header>