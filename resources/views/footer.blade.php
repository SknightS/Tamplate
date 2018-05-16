<div class="section footer transparent" style="background-image: url('public/images/background03.jpg');">
    <div class="container">
        <!--        <div class="top flex space-between items-center">-->
        <!--            <img src="images/logo.png" width="150" height="50" alt="footer-logo" class="img-responsive">-->
        <!--            <ul class="list-unstyled footer-menu flex">-->
        <!--                                    <li><a href="#0">About Us</a></li>-->
        <!--                                    <li><a href="#0">FAQ</a></li>-->
        <!--                                    <li><a href="#0">Pricing</a></li>-->
        <!--                                    <li><a href="#0">Team</a></li>-->
        <!--                                    <li><a href="contact-us-full-width.php">Contact Us</a></li>-->
        <!--            </ul> <!-- end .footer-menu -->
        <!--        </div> <!-- end .top -->
        <div class="footer-widgets flex no-column space-between">

            <div class=" copyright-menu">
                <img src="{{url('public/images/logo.png')}}" width="150" height="50" alt="footer-logo" class="img-responsive">
                <ul class="list-unstyled footer-menu flex">
                    <li><a href="{{route('about-us')}}">About Us |</a></li>
                    <li><a href="#0">&nbsp;FAQ |</a></li>
                    <li><a href="#0">&nbsp; Pricing |</a></li>
                    <li><a href="#0">&nbsp; Team |</a></li>
                    <li><a href="{{route('contact-us')}}">&nbsp; Contact Us</a></li>
                </ul>

            </div>
            <div class="widget">
                <h6>Follow us</h6>
                <ul class="list-unstyled social-icons flex no-column">
                    <li><a href="#0"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#0"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#0"><i class="ion-social-youtube"></i></a></li>
                    <li><a href="#0"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
                </ul>

            </div>

            <!-- end .widget -->
            <div class="widget">
                <h6>Subscribe Us</h6>
                <p>Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
                <form class="form-inline subscribe-form flex no-column no-wrap items-center">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your email">
                    </div> <!-- end .form-group -->
                    <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
                </form>
            </div>
        </div> <!-- end .footer-widgets -->
        <div class="bottom flex space-between items-center">
            <p class="copyright-text small">&copy; 2017 <a href="#0">StaffNetwork</a>. All Rights Reserved. Designed by <a href="#0">StaffNetwork</a>.</p>
            <ul class="list-unstyled copyright-menu flex no-column">
                <li><a href="#0">Privacy policy</a></li>
                <li><a href="#0">Terms of service</a></li>
                <li><a href="#0">Conditions</a></li>
            </ul> <!-- end .copyright-menu -->
        </div> <!-- end .bottom -->
    </div> <!-- end .container -->
</div> <!-- end .footer -->


<!-- Scripts -->
<!-- jQuery -->
<!--<script src="js/jquery-3.1.1.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap -->
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
<!-- Owl Carousel -->
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<!-- Wow.js -->
<script src="{{url('public/js/wow.min.js')}}"></script>
<!-- Typehead.js -->
<script src="{{url('public/js/typehead.js')}}"></script>
<!-- myscript.js -->
<script src="{{url('public/js/myscript.js')}}"></script>
<!-- Tagsinput.js -->
<script src="{{url('public/js/tagsinput.js')}}"></script>
<!-- Bootstrap Select -->
<script src="{{url('public/js/bootstrap-select.js')}}"></script>
<!-- Waypoints -->
<script src="{{url('public/js/jquery.waypoints.min.js')}}"></script>
<!-- CountTo -->
<script src="{{url('public/js/jquery.countTo.js')}}"></script>
<!-- Isotope -->
<script src="{{url('public/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('public/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Magnific-Popup -->
<script src="{{url('public/js/jquery.magnific-popup.js')}}"></script>
<!-- Scripts.js -->
<script src="{{url('public/js/scripts.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

@yield('foot-js')