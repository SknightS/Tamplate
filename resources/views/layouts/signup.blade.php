
@extends('main')
@section('content')

    <style>
        input[type='password'] {
            width: 100%;
            box-sizing: border-box;
            height: 55px;
            display: inline-block;
            /*border: 3px solid #2F96EF;*/
            border-radius: 5px;
            padding: 0 15px;
            margin: 10px 0;
            transition: .2s;
        }

        input[type='password']:focus {
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
        }
        .progress-bar_text {
            display: inline-block;
            color: #aaa;
            margin-left: 5px;
            transition: .2s;
        }


    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding: 50px">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('userType') ? ' has-error' : '' }}">

                        <label for="userType" class="control-label">Register As</label>
                        <select id="userType" name="userType" required class="form-control">
                            <option value="">Select</option>
                            @foreach(UserType as $type)
                                @if($type['code']=='emp' || $type['code']=='empr' )
                                <option value="{{$type['code']}}">{{$type['name']}}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('userType'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('userType') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <label for="name" class="control-label">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>


                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="col-md-6">
                            <label for="password" class="control-label">Password</label>
                            <input id="password" type="password" class="form-control password" name="password" required>
                            <span id="progress-bar_text1" class="progress-bar_text">Password is blank</span>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="control-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control confirmPassword" name="password_confirmation" required>

                            <span id="progress-bar_text2" class="progress-bar_text">Password is blank</span>
                            @if ($errors->has('conPassword'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('conPassword') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{--<div class="checkbox">--}}
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Create Account
                            </button>

                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {

            const changeText = function (el, text, color) {
                el.text(text).css('color', color);
            };

            $('.password').keyup(function(){
                 len = this.value.length;
                const pbText = $('#progress-bar_text1');

                if (len === 0) {
                    $(this).css('border-color', '#2F96EF');
                    changeText(pbText, 'Password is blank', '#aaa');
                } else if (len > 0 && len <= 4) {
                    $(this).css('border-color', '#FF4B47');
                    changeText(pbText, 'Too weak', '#FF4B47');
                } else if (len > 4 && len <= 8) {
                    $(this).css('border-color', '#F9AE35');
                    changeText(pbText, 'Could be stronger', '#F9AE35');
                } else {
                    $(this).css('border-color', '#2DAF7D');
                    changeText(pbText, 'Strong password', '#2DAF7D');
                }
            });
            $('.confirmPassword').keyup(function(){
                 len = this.value.length;
                var pass = $('#password').val();

                const pbText = $('#progress-bar_text2');

                if (len === 0) {
                    $(this).css('border-color', '#2F96EF');
                    changeText(pbText, 'Confirm Password is blank', '#aaa');
                } else if (len > 0 && this.value != pass) {
                    $(this).css('border-color', '#FF4B47');
                    changeText(pbText, 'Not Matched!!', '#FF4B47');
                } else if (len > 0 && this.value == pass){
                    $(this).css('border-color', '#2DAF7D');
                    changeText(pbText, 'Matched', '#2DAF7D');
                }
            });

        });

    </script>
@endsection