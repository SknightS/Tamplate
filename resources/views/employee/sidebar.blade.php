<div class="left-sidebar-menu">
    <ul class="nav nav-pills nav-stacked">
        <li class="heading">Manage account</li>
        <li><a href="{{route('resume')}}">My Resume</a></li>
        <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications">Notifications</a> <span class="notification-count">2</span></li>
        <li class="nav-divider"></li>
        <li class="heading">Manage job</li>
        <li><a href="{{route('jobapplied')}}">Manage Applications</a></li>
        <li class="nav-divider"></li>
        <li><a  href="{{route('changepassword')}}">Change Password</a></li>
        <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </ul>
</div> <!-- end .left-sidebar-menu -->
