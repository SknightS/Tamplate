<div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm login-signup-modal">
        <div class="modal-content">
            <div class="popup-tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#login">login</a></li>
                    <li class=""><a data-toggle="tab" href="#register">Register</a></li>
                </ul>
            </div> <!-- end .popup-tabs -->
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="login">
                        <form class="login-form" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <label for="InputEmail1">Your Email *</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="InputPassword1">Password *</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="checkbox flex space-between">
                                <div>
                                    <input id="sigin-checkbox" type="checkbox">
                                    <label for="sigin-checkbox">Remember me</label>
                                </div>
                                <a href="#0">Lost password?</a>
                            </div> <!-- end .checkbox -->

                            <input type="submit" class="button" >Login</input>

                            <p class="text-center divider-text small"><span>or login using</span></p>

                            <div class="social-buttons">
                                <ul class="list-unstyled flex space-between">
                                    <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                    <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                    <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div> <!-- end .social-buttons -->

                        </form> <!-- end .login-form -->
                    </div> <!-- end login-tab-content -->

                    <div class="tab-pane fade active in" id="register">
                        <form class="signup-form">
                            <div class="form-group">
                                <label for="InputEmail1">Your Email *</label>
                                <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword1">Password *</label>
                                <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword2">Confirm Password *</label>
                                <input type="password" class="form-control" id="InputPassword3" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="select1">Register as:</label>
                                <div class="select-wrapper">
                                    <select class="form-control" id="select1">
                                        <option>Candidate</option>
                                        <option>Company</option>
                                    </select>
                                </div> <!-- end .select-wrapper -->
                            </div>

                            <div class="checkbox">
                                <input id="signup-checkbox" type="checkbox">
                                <label for="signup-checkbox">I agree with the Terms of Use</label>
                            </div> <!-- end .checkbox -->

                            <button type="button" class="button" data-dismiss="modal">Sign Up</button>

                            <p class="text-center divider-text small"><span>or login using</span></p>

                            <div class="social-buttons">
                                <ul class="list-unstyled flex space-between">
                                    <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                    <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                    <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div> <!-- end .social-buttons -->

                        </form> <!-- end .signup-form -->
                    </div> <!-- end signup-tab-content -->
                </div> <!-- end .mytabcontent -->
            </div> <!-- end .modal-body -->
        </div> <!-- end .modal-content -->
    </div> <!-- end .modal-dialog -->
</div> <!-- end .modal -->
