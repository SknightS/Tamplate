<div class="left-sidebar-menu">
    <ul class="nav nav-pills nav-stacked">
        <li class="heading">Manage account</li>

        <li><a  href="{{route('employer.profile')}}">My Profile</a></li>
        <li><a href="{{route('home')}}">Staffnetwork Home</a></li>
        <li ><a href="{{route('employer.companyInfo')}}">Company Info</a></li>
        <li class="nav-divider"></li>
        <li class="heading">Manage job</li>
        {{--<li><a  href="{{route('managejob')}}">Manage Jobs</a></li>--}}
        <li><a  href="{{route('employer.manageAllApplication')}}">Manage Applications</a></li>
        <li><a  href="{{route('employer.manageAllJob')}}">Manage Jobs</a></li>
        {{--<li><a  href="{{route('manageapplication')}}">Manage Applications</a></li>--}}
        <li class="nav-divider"></li>
        <li><a  href="{{route('employer.changepassword')}}">Change Password</a></li>
        <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>


    </ul>
</div> <!-- end .left-sidebar-menu -->