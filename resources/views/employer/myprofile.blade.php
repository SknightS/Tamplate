@extends('employer.employerDashboard')
@section('empr-content')

    <div class="profile-badge"><h6>Profile</h6></div>
    <div class="profile-wrapper">

        <div class="profile-info profile-section flex no-column no-wrap">
            <div class="profile-picture">
                <img src="images/company-logo-jumbo01.jpg" alt="company-logo" class="img-responsive">
            </div> <!-- end .user-picture -->
            <div class="profile-meta">
                <h4 class="dark">Banana inc.</h4>
                <p>Cupertino, CA, USA</p>
                <div class="profile-contact flex items-center no-wrap no-column">
                    <h6 class="contact-phone">(+01)-212-322-5732</h6>
                    <h6 class="contact-email">info@banana.com</h6>
                </div> <!-- end .profile-contact -->
                <ul class="list-unstyled social-icons flex no-column">
                    <li><a href="#0"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#0"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#0"><i class="ion-social-instagram"></i></a></li>
                </ul> <!-- end .social-icons -->
            </div> <!-- end .profile-meta -->
        </div> <!-- end .profile-info -->

        <div class="divider"></div>

        <div class="profile-about profile-section">
            <h3 class="dark profile-title">About company<span><i class="ion-edit"></i></span></h3>
            <p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh.<br><br>Donec eget nibh non nibh varius varius a vitae dolor. Ut ornare mollis lacus, non fringilla magna egestas mattis. Sed iaculis tortor magna, at tincidunt mi imperdiet in. Cras semper massa blandit quam varius, tincidunt imperdiet tellus accumsan. Vestibulum sagittis justo leo, bibendum ullamcorper arcu bibendum vitae. Integer convallis neque imperdiet orci consequat consequat.<br><br>Phasellus at feugiat diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.
            </p>
        </div> <!-- end .profile-about -->

        <div class="divider"></div>

        <div class="profile-experience-wrapper profile-section">
            <h3 class="dark profile-title">Awards<span><i class="ion-edit"></i></span></h3>
            <div class="profile-experience flex space-between no-wrap no-column">
                <div class="profile-experience-left">
                    <h5 class="profile-designation dark">AWWWARDS</h5>
                    <h5 class="profile-company dark">Site of the month</h5>
                    <p class="small ultra-light">Aug 2016</p>
                    <p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
                    <h6 class="projects-count">http://banana.com</h6>
                </div> <!-- end .profile-experience-left -->
            </div> <!-- end .profile-experience -->
            <div class="spacer-md"></div>
            <div class="profile-experience flex space-between no-wrap no-column">
                <div class="profile-experience-left">
                    <h5 class="profile-designation dark">Best css award</h5>
                    <h5 class="profile-company dark">Site of the day</h5>
                    <p class="small ultra-light">Aug 16th, 2016</p>
                    <p>Nulla molestie sed lorem non suscipit. Morbi imperdiet ex sit amet tortor faucibus ultricies. Fusce tincidunt elementum imperdiet.</p>
                    <h6 class="projects-count">http://banana.com</h6>
                </div> <!-- end .profile-experience-left -->
            </div> <!-- end .profile-experience -->
        </div> <!-- end .profile-experience-wrapper -->

    </div> <!-- end .profile-wrapper -->

    @endsection
@section('foot-js')

    @endsection

