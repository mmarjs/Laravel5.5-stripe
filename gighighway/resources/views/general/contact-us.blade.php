@extends('shared._layout-main')
@section('title', 'Contact Us - GigHighway')
@section('main-body')



        <div class="col-sm-12 col-md-12">
            <h1>Contact Us</h1>
            <hr>
            <p>We value your comments and suggestions. Please contact us by filling out the form below.</p>
            <form class="form-horizontal well" method="post" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="txtContactUs_Name" id="lblContactUs_Name">Name:<span class="requiredAsterisk">*</span></label>
                    <div class="col-xm-4 col-sm-5"><input class="form-control" data-formgroup="ContactUsModel" id="txtContactUs_Name" maxlength="500" name="name" required="required" type="text"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="txtContactUs_Email" id="lblContactUs_Email">Email:<span class="requiredAsterisk">*</span></label>
                    <div class="col-xm-4 col-sm-5"><input class="emailTextBox form-control" data-formgroup="ContactUsModel" id="txtContactUs_Email" maxlength="500" name="email" required="required" type="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" data-emailtextboxenabled="true"></div>
                </div>

                <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="txtContactUs_Subject" id="lblContactUs_Subject">Subject:<span class="requiredAsterisk">*</span></label>
                    <div class="col-xm-4 col-sm-5"><input class="form-control" data-formgroup="ContactUsModel" id="txtContactUs_Subject" maxlength="500" name="subject" required="required" type="text"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="txtContactUs_Message" id="lblContactUs_Message">Message:<span class="requiredAsterisk">*</span></label>
                    <div class="col-xm-4 col-sm-5"><div id="txtContactUs_Message_wrapper" class="limitedTextarea"><textarea class="limitedTextarea form-control" data-formgroup="ContactUsModel" id="txtContactUs_Message" maxlength="1000" name="message" required="required" data-limitedtextareaenabled="true"></textarea><div id="txtContactUs_Message_counterWrapper">You have <strong>1000</strong> character(s) remaining.</div></div></div>
                </div>

                <div class="form-group">
                    <label for="" id="" class="control-label col-sm-4 hidden-xs">&nbsp;</label>
                    <div class="col-xs-3 col-sm-2">
                        <input class="btn btn-primary" id="btnContactUs_Submit" type="submit" value="Send Message">
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
            </form>
        </div>


@endsection