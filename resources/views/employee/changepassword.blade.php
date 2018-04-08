@extends('employee.employeDashboard')
@section('emp-contant')
<div id="change-password" class="tab-pane fade in">
    <div class="password-form-wrapper">
        <h3 class="dark">Change Password</h3>
        <form class="password-form">
            <div class="form-group">
                <label for="InputEmail1">Old password<sup>*</sup></label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="">
            </div>

            <div class="form-group">
                <label for="InputPassword1">New Password<sup>*</sup></label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="">
            </div>

            <div class="form-group">
                <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="">
            </div>
        </form> <!-- end .password-form -->
        <div class="password-button-wrapper">
            <button type="submit" class="button">Save change</button>
        </div> <!-- end .password-button-wrapper -->
    </div> <!-- end .password-form-wrapper -->
</div>
@endsection