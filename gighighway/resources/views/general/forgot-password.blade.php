{{--@model GigHighway.com.Models.SignInModel
@{
Layout = "~/Views/Shared/_Layout-Main.cshtml";

ViewBag.TitleTagText = "Sign In - GigHighway";
ViewBag.MetaDescription = "Signin to GigHighway and access all your account-specific information.";

string emailFieldAutofocus = (String.IsNullOrEmpty(Model.Email) ? "autofocus" : String.Empty);
string passswordFieldAutofocus = (!String.IsNullOrEmpty(Model.Email) ? "autofocus" : String.Empty);
}--}}
@extends('shared._layout-main')
@section('title','Forgot Password - GigHighway')

@section('main-body')
    <style>
        @@media (min-width:767px) {
            #hypSignIn_ForgotPassword { float: right !important; }
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>Reset Password</h1>
                <hr>
                <div class="panel-heading">
					@if (session('status'))
   <p class="alert alert alert-success">{{ session('status') }}</p>
@endif</div>

                <div class="panel-body">
                    <form class="form-horizontal well" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									
                                @endif
														
                            </div>
                        </div>
						 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>

                                <a class="btn btn-link" href="/signin">
                                    Back to Sign In
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection