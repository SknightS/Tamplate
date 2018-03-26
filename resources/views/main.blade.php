<!DOCTYPE html>
<html lang="en">


@include('head')
<body>

<!-- Header -->
@include('menu')
<!-- end .header -->

<!-- Responsive Menu -->
<div class="responsive-menu">
    <a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
    <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->

<!-- Login/Signup Popup -->
@include('login')



@yield('content')




<!-- Footer -->
@include('footer')
</body>
</html>