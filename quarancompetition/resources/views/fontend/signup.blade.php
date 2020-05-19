@extends('fontend.layouts.layout')
@section('content');
 <link rel="stylesheet" href="{{asset('public/fontend/signup/fonts/linearicons/style.css')}}">
 <link rel="stylesheet" href="{{asset('public/fontend/signup/css/style.css')}}">

        <div class="wrapper">
            <div class="inner">
                <img src="{{asset('public/fontend/signup/images/image-1.png')}}" alt="" class="image-1">
                <form action="{{url('/signup/user')}}" method="post">
                    @csrf
                    <h3>New Account?</h3>
                    <div class="form-holder">
                        <span class="lnr lnr-user"></span>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                            @if($errors->has('name'))
                            <label><small style="color:red">{{$errors->first('name')}}</small></label>
                            @endif
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-phone-handset"></span>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{old('phone')}}">
                         @if($errors->has('phone'))
                            <label><small style="color:red">{{$errors->first('phone')}}</small></label>
                            @endif
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-envelope"></span>
                        <input type="text" class="form-control" name="email" placeholder="Email"  value="{{old('email')}}">
                         @if($errors->has('email'))
                            <label><small style="color:red">{{$errors->first('email')}}</small></label>
                            @endif
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-lock"></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" >
                         @if($errors->has('password'))
                            <label><small style="color:red">{{$errors->first('password')}}</small></label>
                            @endif
                    </div>
                    <div class="form-holder">
                        <span class="lnr lnr-lock"></span>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                     <div class="form-holder">
                        <span class="lnr lnr-lock"></span>
                        <input type="text" name="city" class="form-control" placeholder="City" value="{{old('city')}}" >
                         @if($errors->has('city'))
                            <label><small style="color:red">{{$errors->first('city')}}</small></label>
                            @endif
                    </div>

                    <button type="submit">
                        <span>Sign Up</span>
                    </button>
                </form>
                <img src="{{asset('public/fontend/signup/images/image-2.png')}}" alt="" class="image-2">
            </div>
            
        </div>
     @endsection
     <script src="{{asset('public/fontend/signup/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('public/fontend/signup/js/main.js')}}"></script>