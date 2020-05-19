@extends('fontend.layouts.layout')
@section('content');
<div class="d-flex align-items-center">
<div class="container login-container">

            <div class="row">
                <div class="col-md-12 login-form-1">
                    <h3>Login as Famalily Member and User</h3>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class=" form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                             @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class=" form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="{{ route('password.request') }}" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
               
        @endsection