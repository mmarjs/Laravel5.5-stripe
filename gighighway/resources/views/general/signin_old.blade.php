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

<div class="col-sm-12 col-md-12">
    <h1>Sign In</h1>
    <hr />
    <form class="form-horizontal well" method="post" action="@(Model.FormActionUrl)" role="form">

{{--        @if (!Model.Succeeded)--}}
        @if(true)
            {{--{--}}
            <div class="alert alert-danger text-center">
                <strong>Sign in failed!</strong> The email/password combination do not match our records. Please try again.
            </div>
            {{--}--}}
        @endif

            <div class="form-group">
               {{-- @Html._EditorWithLabelFor(
                model => model.Email,
                addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
                addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { emailFieldAutofocus, emailFieldAutofocus } },
                wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-5")--}}
            </div>

            <div class="form-group">
                {{--@Html._EditorWithLabelFor(
                model => model.Password,
                addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
                addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { passswordFieldAutofocus, passswordFieldAutofocus } },
                wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-5")--}}
            </div>

            <input type="hidden" id="txtSignIn_ReturnTo" name="ReturnTo" data-formgroup="SignInModel" value="@(Request.QueryString["ReturnUrl"])" />

            <div class="form-group">
              {{--  @Html._EditorWithLabelFor(
                model => model.RememberMe,
                addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
                addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
                wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-2")--}}
                <div class="col-sm-3 form-control-static">
                    <a href="/forgotpassword/" id="hypSignIn_ForgotPassword">Forgot your password?</a>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4 hidden-xs">&nbsp;</label>
                <div class="col-xs-3 col-sm-2">
                    {{--@Html._Button(
                    new ElementAttribute { ID = "btnSignIn_Submit", CssClass = "btn btn-primary" },
                    new ButtonAttribute { Type = ButtonType.InputSubmit, Text = "Sign in" })--}}
                </div>
            </div>
    </form>
</div>   
@endsection