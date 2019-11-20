{{--@model GigHighway.com.Models.SignInModel
@{
Layout = "~/Views/Shared/_Layout-Main.cshtml";

ViewBag.TitleTagText = "Sign In - GigHighway";
ViewBag.MetaDescription = "Signin to GigHighway and access all your account-specific information.";

string emailFieldAutofocus = (String.IsNullOrEmpty(Model.Email) ? "autofocus" : String.Empty);
string passswordFieldAutofocus = (!String.IsNullOrEmpty(Model.Email) ? "autofocus" : String.Empty);
}--}}
@extends('shared._layout-main')
@section('title','Sign In - GigHighway')

@section('main-body')
<style>
    @@media (min-width:767px) {
        #hypSignIn_ForgotPassword { float: right !important; }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1>Customer Sign In</h1>
            <hr>
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form class="form-horizontal well" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail:<span class="requiredAsterisk">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password:<span class="requiredAsterisk">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sign In
                                </button>

                                <a class="btn btn-link" href="/forgot-password">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@endsection