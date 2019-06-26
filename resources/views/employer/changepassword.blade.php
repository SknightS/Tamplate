@extends('employer.employerDashboard')
@section('empr-contant')

    <div class="password-form-wrapper">
        <h3 class="dark">Change Password</h3>
        <form id="myform"  method="post" action="{{route('employer.password.change')}}"  class="password-form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="InputEmail1">Old password<sup>*</sup></label>
                <input type="password" name="oldPass" class="form-control" id="InputEmail1" placeholder="">
            </div>

            <div class="form-group">
                <label for="InputPassword1">New Password<sup>*</sup></label>
                <input type="password" class="form-control"name="password"  id="password" placeholder="">
            </div>

            <div class="form-group">
                <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
                <input type="password" class="form-control" name="password_again" id="password_again" placeholder="">
            </div>
            <div class="form-group">
                <button type="submit" class="button">Save change</button>
            </div>
        </form> <!-- end .password-form -->
        <div class="password-button-wrapper">

        </div> <!-- end .password-button-wrapper -->
    </div> <!-- end .password-form-wrapper -->

@endsection

@section('foot-js')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        //        jQuery.validator.setDefaults({
        //            debug: true,
        //            success: "valid"
        //        });
        $( '#myform' ).validate({
            rules: {
                password: "required",
                password_again: {
                    equalTo: "#password"
                }
            }
        });
    </script>

@endsection