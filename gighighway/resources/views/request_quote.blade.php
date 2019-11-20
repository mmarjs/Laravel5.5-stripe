{{--@model GigHighway.com.Models.QuoteModel
@{
Layout = "~/Views/Shared/_Layout-Main.cshtml";

ViewBag.TitleTagText = "Quote Request - GigHighway";
//ViewBag.MetaDescription = "Join GigHighway today and start getting more leads and more gigs. Take your talent to the next level and get noticed by event planners and party hosts. Signing up is fast and easy.";

bool displayCategoryToBook = false;
string conditionalRequiredField = string.Empty;
string buttonSubmitText = String.Empty;
string serviceRequestUrl = String.Empty;
string responseFunction = String.Empty;
string selectedClass = "selected";

bool isUpdate = ViewBag.IsUpdate ?? false;

if (!Model.IsOwnProfile)
{
displayCategoryToBook = String.IsNullOrEmpty(Model.CategoryToBook) && (Model.QuoteCartItems == null || Model.QuoteCartItems.Count == 0);
conditionalRequiredField = displayCategoryToBook ? "required" : String.Empty;

if (isUpdate)
{
buttonSubmitText = "Update Quote";
serviceRequestUrl = "EditQuote/";
responseFunction = "quotes.updateQuoteResponse";
}
else
{
buttonSubmitText = "Request Quote(s)";
serviceRequestUrl = "RequestQuote/";
responseFunction = "quotes.requestQuoteResponse";
}
}

bool hasProfileID = !string.IsNullOrEmpty(Request.QueryString["id"]) && Model.ProfileID > 0;
string signInUrl = "/signin?ReturnUrl=/RequestQuote/" + (hasProfileID ? "?id=" + Model.ProfileID : "");
}--}}
@extends('shared._layout-main')
@section('title','Account Sign Up - GigHighway')


@section('main-body')
<style>.requestQuote_AlreadyHaveAccount{font-size:16px;} h2.form-control-static{margin-top:0;}</style>

@if (Model.IsOwnProfile)
    {
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">
                <span> Get your Free Quote!</span>
            </h1>

            <div class="well">
                <h2>Oops!</h2>
                <p>You cannot request a quote from your own profile</p>
            </div>
        </div>
    </div>
    }
    else
    {
    if (Model.IsLoggedIn)
    {
    Html.RenderAction("SendQuoteMessage", "Quote", new { quoteId = Model.ID, from = "Account" });
    }

    <div class="row">
        <div class="col-sm-12">
            <h1>
                @if (String.IsNullOrEmpty(Model.ProfileName))
                    {
                    <span> Get a Free Quote!</span>
                    }
                    else
                    {
                    <span>Request a Free Quote from  @(Model.ProfileName)</span>
                    }
            </h1>
            <hr />

            <div id="hdivRequestQuote_ConfirmationMessage" class="alert alert-dismissible alert-success fade in" style="display:none;">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Quote Updated!</strong> Your changes were successfully updated.<a href="/Quote/" class="pull-right">back to quote manager</a>
            </div>

            @if (!Model.IsLoggedIn)
                {
                <div class="clearfix"><p class="text-center requestQuote_AlreadyHaveAccount">Already have an account? You must first <a href="@(signInUrl)">SIGN IN</a> to request your free quote.</p></div>
                }

                <form class="form-horizontal well" role="form">
                    <div id="hdivQuote_QuoteCartItemsContainer" class="text-center" style="display:none;">
                        <p>View all <a data-target="#hdivQuoteCart_FavoriteItemsModal" data-toggle="modal">vendors</a> in your FAVORITES list.</p>
                    </div>

                    <input type="hidden" value="@(Model.ID)" name="ID" id="hfQuote_ID" data-formgroup="QuoteModel" />
                    <input type="hidden" value="@(Model.ProfileID)" name="ProfileID" id="hfQuote_ProfileID" data-formgroup="QuoteModel" />
                    <input type="hidden" value="@(Model.AccountID)" name="AccountID" id="hfQuote_AccountID" data-formgroup="QuoteModel" />
                    <input type="hidden" value="" name="CategoryToBook" id="hfQuote_CategoryToBook" data-formgroup="QuoteModel" @(conditionalRequiredField) />
                    <input type="hidden" value="Account" id="hfQuote_QuoteParty" />

                    @if (Model.IsLoggedIn && isUpdate)
                        {
                        <br />
                        <div class="form-group">
                            <label class="control-label col-sm-4">Status:</label>
                            <div class="col-sm-6">
                                <select id="ddlQuoteManager_QuoteStatus@(Model.ID)" name="Status" data-formgroup="QuoteModel" class="form-control quoteManager_QuoteStatusOptionControl" data-quoteid="@(Model.ID)">
                                    <option @if (Model.Status == "Active") { @(selectedClass)         } value="Active">Active</option>
                                    <option @if (Model.Status == "Booked") { @(selectedClass)         } value="Booked">Booked</option>
                                    <option @if (Model.Status == "Canceled") { @(selectedClass)         } value="Canceled">Canceled</option>
                                </select>
                            </div>
                        </div>
                        }

                        <input type="hidden" id="hfQuote_DisplayCategoryToBook" value="@(displayCategoryToBook.ToString().ToLower())" />
                        <div id="hdivRequestQuote_CategoryToBookFieldContainer" class="form-group @(displayCategoryToBook ? "" : "hidden")">
                        <label id="lblQuote_CategoryToBook" class="control-label col-sm-4 required" for="hfQuote_CategoryToBook">Category you'd like hire:</label>
                        <div class="col-sm-6">
                            @Html._AutoCompleteTextBox(
                            new ElementAttribute
                            {
                            ID = "txtQuote_CategoryToBook",
                            CssClass = "form-control",
                            OtherAttributes = new Dictionary<string, string> { { "data-requireselection", "true" }, { "data-fieldname", "Category you'd like to hire" } }
                            },
                            new InputAttribute { Maxlength = 300, Placeholder = "ex: Magician, Rock Band, Guitarist...", Value = Model.CategoryToBook },
                            new AutoCompleteTextBoxAttribute
                            {
                            ServiceRequestUrl = "general/SearchCategoriesWithProfilesOnly/",
                            PropertyToUseOnSelect = "label",
                            ServiceRequestMinLength = 2,
                            ServiceRequestDelay = 0,
                            HighlightMatches = true,
                            SelectFunction = "quotes.categoryToBookSelected"
                            })
                        </div>
        </div>

        <br />

        <div id="hdivRequestQuote_EventDetailsTitleHeader" class="control-group">
            <label class="control-label col-sm-4">&nbsp;</label>
            <div class="col-sm-6 no-padding">
                <h2 class="form-control-static">Event Details</h2>
            </div>
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EventType,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-sm-6")
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EstimatedGuestCount,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-2 col-sm-2")
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EventLocation,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-6")
        </div>

        <div class="form-group">
            <label id="lblQuote_EventZipCode" class="control-label col-sm-4 required" for="hfQuote_EventZipCode">Venue City or Zip Code:</label>
            <input type="hidden" value="@(Model.EventZipCode)" name="EventZipCode" id="hfQuote_EventZipCode" data-formgroup="QuoteModel" required />
            <div class="col-sm-6">
                @Html._AutoCompleteTextBox(
                new ElementAttribute
                {
                ID = "txtQuote_EventZipCode",
                CssClass = "form-control",
                OtherAttributes = new Dictionary<string, string> { { "data-requireselection", "true" }, { "data-fieldname", "Venue Zip Code" }, { "required", "required" } }
                },
                new InputAttribute { Maxlength = 300, Placeholder = "City, ST or ZIP Code", Value = Model.EventZipCode },
                new AutoCompleteTextBoxAttribute
                {
                ServiceRequestUrl = "general/searchlocation/",
                PropertyToUseOnSelect = "label",
                ServiceRequestDelay = 0,
                ServiceRequestMinLength = 2,
                HighlightMatches = true,
                SelectFunction = "quotes.eventZipCodeSelected"
                })
            </div>
        </div>

        @* How to set min value in firefox *@
        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EventDate,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { "min", Model.MinEventDate } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-4")
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.IsEventDateFlexible,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-2 col-sm-2")
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EventEstimatedDuration,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-xs-12 col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xs-6 col-sm-3")

            @Html._EditorFor(
            model => model.EventEstimatedDuration_TimeMeasurement,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4 sr-only" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xs-6 col-sm-3")
        </div>

        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-4" for="ddlQuote_EventEstimatedStartTime" id="lblQuote_EventEstimatedStartTime">Event Start Time (Approx.):</label>
            <div class="col-xs-6 col-sm-3">
                <select id="ddlQuote_EventEstimatedStartTime" name="EventEstimatedStartTime" class="form-control" data-formgroup="QuoteModel">
                    <option value="12:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "12:00 AM" ? "selected" : "")>12:00 AM</option>
                    <option value="12:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "12:30 AM" ? "selected" : "")>12:30 AM</option>
                    <option value="1:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "1:00 AM" ? "selected" : "")>1:00 AM</option>
                    <option value="1:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "1:30 AM" ? "selected" : "")>1:30 AM</option>
                    <option value="2:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "2:00 AM" ? "selected" : "")>2:00 AM</option>
                    <option value="2:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "2:30 AM" ? "selected" : "")>2:30 AM</option>
                    <option value="3:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "3:00 AM" ? "selected" : "")>3:00 AM</option>
                    <option value="3:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "3:30 AM" ? "selected" : "")>3:30 AM</option>
                    <option value="4:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "4:00 AM" ? "selected" : "")>4:00 AM</option>
                    <option value="4:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "4:30 AM" ? "selected" : "")>4:30 AM</option>
                    <option value="5:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "5:00 AM" ? "selected" : "")>5:00 AM</option>
                    <option value="5:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "5:30 AM" ? "selected" : "")>5:30 AM</option>
                    <option value="6:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "6:00 AM" ? "selected" : "")>6:00 AM</option>
                    <option value="6:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "6:30 AM" ? "selected" : "")>6:30 AM</option>
                    <option value="7:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "7:00 AM" ? "selected" : "")>7:00 AM</option>
                    <option value="7:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "7:30 AM" ? "selected" : "")>7:30 AM</option>
                    <option value="8:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "8:00 AM" ? "selected" : "")>8:00 AM</option>
                    <option value="8:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "8:30 AM" ? "selected" : "")>8:30 AM</option>
                    <option value="9:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "9:00 AM" ? "selected" : "")>9:00 AM</option>
                    <option value="9:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "9:30 AM" ? "selected" : "")>9:30 AM</option>
                    <option value="10:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "10:00 AM" ? "selected" : "")>10:00 AM</option>
                    <option value="10:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "10:30 AM" ? "selected" : "")>10:30 AM</option>
                    <option value="11:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "11:00 AM" ? "selected" : "")>11:00 AM</option>
                    <option value="11:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "11:30 AM" ? "selected" : "")>11:30 AM</option>
                    <option value="12:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "12:00 PM" ? "selected" : "")>12:00 PM</option>
                    <option value="12:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "12:30 PM" ? "selected" : "")>12:30 PM</option>
                    <option value="1:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "1:00 PM" ? "selected" : "")>1:00 PM</option>
                    <option value="1:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "1:30 PM" ? "selected" : "")>1:30 PM</option>
                    <option value="2:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "2:00 PM" ? "selected" : "")>2:00 PM</option>
                    <option value="2:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "2:30 PM" ? "selected" : "")>2:30 PM</option>
                    <option value="3:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "3:00 PM" ? "selected" : "")>3:00 PM</option>
                    <option value="3:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "3:30 PM" ? "selected" : "")>3:30 PM</option>
                    <option value="4:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "4:00 PM" ? "selected" : "")>4:00 PM</option>
                    <option value="4:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "4:30 PM" ? "selected" : "")>4:30 PM</option>
                    <option value="5:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "5:00 PM" ? "selected" : "")>5:00 PM</option>
                    <option value="5:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "5:30 PM" ? "selected" : "")>5:30 PM</option>
                    <option value="6:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "6:00 PM" ? "selected" : "")>6:00 PM</option>
                    <option value="6:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "6:30 PM" ? "selected" : "")>6:30 PM</option>
                    <option value="7:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "7:00 PM" ? "selected" : "")>7:00 PM</option>
                    <option value="7:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "7:30 PM" ? "selected" : "")>7:30 PM</option>
                    <option value="8:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "8:00 PM" ? "selected" : "")>8:00 PM</option>
                    <option value="8:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "8:30 PM" ? "selected" : "")>8:30 PM</option>
                    <option value="9:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "9:00 PM" ? "selected" : "")>9:00 PM</option>
                    <option value="9:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "9:30 PM" ? "selected" : "")>9:30 PM</option>
                    <option value="10:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "10:00 PM" ? "selected" : "")>10:00 PM</option>
                    <option value="10:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "10:30 PM" ? "selected" : "")>10:30 PM</option>
                    <option value="11:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "11:00 PM" ? "selected" : "")>11:00 PM</option>
                    <option value="11:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedStartTime) && Model.EventEstimatedStartTime == "11:30 PM" ? "selected" : "")>11:30 PM</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-12 col-sm-4" for="ddlQuote_EventEstimatedEndTime" id="lblQuote_EventEstimatedEndTime">Event End Time (Approx.):</label>
            <div class="col-xs-6 col-sm-3">
                <select id="ddlQuote_EventEstimatedEndTime" name="EventEstimatedEndTime" class="form-control" data-formgroup="QuoteModel">
                    <option value="12:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "12:00 AM" ? "selected" : "")>12:00 AM</option>
                    <option value="12:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "12:30 AM" ? "selected" : "")>12:30 AM</option>
                    <option value="1:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "1:00 AM" ? "selected" : "")>1:00 AM</option>
                    <option value="1:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "1:30 AM" ? "selected" : "")>1:30 AM</option>
                    <option value="2:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "2:00 AM" ? "selected" : "")>2:00 AM</option>
                    <option value="2:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "2:30 AM" ? "selected" : "")>2:30 AM</option>
                    <option value="3:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "3:00 AM" ? "selected" : "")>3:00 AM</option>
                    <option value="3:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "3:30 AM" ? "selected" : "")>3:30 AM</option>
                    <option value="4:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "4:00 AM" ? "selected" : "")>4:00 AM</option>
                    <option value="4:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "4:30 AM" ? "selected" : "")>4:30 AM</option>
                    <option value="5:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "5:00 AM" ? "selected" : "")>5:00 AM</option>
                    <option value="5:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "5:30 AM" ? "selected" : "")>5:30 AM</option>
                    <option value="6:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "6:00 AM" ? "selected" : "")>6:00 AM</option>
                    <option value="6:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "6:30 AM" ? "selected" : "")>6:30 AM</option>
                    <option value="7:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "7:00 AM" ? "selected" : "")>7:00 AM</option>
                    <option value="7:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "7:30 AM" ? "selected" : "")>7:30 AM</option>
                    <option value="8:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "8:00 AM" ? "selected" : "")>8:00 AM</option>
                    <option value="8:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "8:30 AM" ? "selected" : "")>8:30 AM</option>
                    <option value="9:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "9:00 AM" ? "selected" : "")>9:00 AM</option>
                    <option value="9:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "9:30 AM" ? "selected" : "")>9:30 AM</option>
                    <option value="10:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "10:00 AM" ? "selected" : "")>10:00 AM</option>
                    <option value="10:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "10:30 AM" ? "selected" : "")>10:30 AM</option>
                    <option value="11:00 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "11:00 AM" ? "selected" : "")>11:00 AM</option>
                    <option value="11:30 AM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "11:30 AM" ? "selected" : "")>11:30 AM</option>
                    <option value="12:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "12:00 PM" ? "selected" : "")>12:00 PM</option>
                    <option value="12:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "12:30 PM" ? "selected" : "")>12:30 PM</option>
                    <option value="1:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "1:00 PM" ? "selected" : "")>1:00 PM</option>
                    <option value="1:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "1:30 PM" ? "selected" : "")>1:30 PM</option>
                    <option value="2:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "2:00 PM" ? "selected" : "")>2:00 PM</option>
                    <option value="2:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "2:30 PM" ? "selected" : "")>2:30 PM</option>
                    <option value="3:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "3:00 PM" ? "selected" : "")>3:00 PM</option>
                    <option value="3:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "3:30 PM" ? "selected" : "")>3:30 PM</option>
                    <option value="4:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "4:00 PM" ? "selected" : "")>4:00 PM</option>
                    <option value="4:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "4:30 PM" ? "selected" : "")>4:30 PM</option>
                    <option value="5:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "5:00 PM" ? "selected" : "")>5:00 PM</option>
                    <option value="5:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "5:30 PM" ? "selected" : "")>5:30 PM</option>
                    <option value="6:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "6:00 PM" ? "selected" : "")>6:00 PM</option>
                    <option value="6:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "6:30 PM" ? "selected" : "")>6:30 PM</option>
                    <option value="7:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "7:00 PM" ? "selected" : "")>7:00 PM</option>
                    <option value="7:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "7:30 PM" ? "selected" : "")>7:30 PM</option>
                    <option value="8:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "8:00 PM" ? "selected" : "")>8:00 PM</option>
                    <option value="8:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "8:30 PM" ? "selected" : "")>8:30 PM</option>
                    <option value="9:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "9:00 PM" ? "selected" : "")>9:00 PM</option>
                    <option value="9:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "9:30 PM" ? "selected" : "")>9:30 PM</option>
                    <option value="10:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "10:00 PM" ? "selected" : "")>10:00 PM</option>
                    <option value="10:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "10:30 PM" ? "selected" : "")>10:30 PM</option>
                    <option value="11:00 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "11:00 PM" ? "selected" : "")>11:00 PM</option>
                    <option value="11:30 PM" @(!String.IsNullOrEmpty(Model.EventEstimatedEndTime) && Model.EventEstimatedEndTime == "11:30 PM" ? "selected" : "")>11:30 PM</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EventAttendanceDuration,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-xs-12 col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xs-6 col-sm-3")

            @Html._EditorFor(
            model => model.EventAttendanceDuration_TimeMeasurement,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4 sr-only" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xs-6 col-sm-3")
        </div>

        <div class="form-group">
            @Html._EditorWithLabelFor(
            model => model.EventAdditionalDetails,
            addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
            addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
            wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-6")
        </div>


        @if (isUpdate)
            {
            <input type="hidden" name="RequestSimliarQuotes" value="0" />
            }
            else
            {
            <div class="form-group">
                <label class="control-label col-sm-4" for="ddlQuote_RequestSimilarQuotes" id="lblQuote_RequestSimilarQuotes">Get free quotes from similar vendors?:</label>
                @Html._EditorWithLabelFor(
                model => model.RequestSimilarQuotes,
                addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label sr-only" } },
                addOnAttribute: new Dictionary<string, string> { { "class", "form-control" } },
                wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-3 col-sm-3")
            </div>
            }

            @if (!Model.IsLoggedIn)
                {
                <!-- Personal Information -->
                <div class="control-group">
                    <label class="control-label col-sm-4">&nbsp;</label>
                    <div class="col-sm-6 no-padding">
                        <h2 class="form-control-static">Personal Information</h2>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4 hidden-xs">&nbsp;</label>
                    <div class="col-sm-6 no-padding">
                        <p class="form-control-static">The following information will be used to create a free GigHighway account for you, which makes it possible for service providers to send you quotes.</p>
                    </div>
                </div>

                <div class="form-group">
                    @Html._EditorWithLabelFor(
                    model => model.FirstName,
                    addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4 required" } },
                    addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { "required", "required" } },
                    wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-4")
                </div>

                <div class="form-group">
                    @Html._EditorWithLabelFor(
                    model => model.LastName,
                    addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4 required" } },
                    addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { "required", "required" } },
                    wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-4")
                </div>

                <div class="form-group">
                    @Html._EditorWithLabelFor(
                    model => model.PhoneNumber,
                    addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4" } },
                    addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { "placeholder", "(___) ___-____" } },
                    wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-4")
                </div>

                <div class="form-group">
                    @Html._EditorWithLabelFor(
                    model => model.EmailAddress,
                    addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4 required" } },
                    addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { "required", "required" } },
                    wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-4")
                </div>

                <div class="form-group">
                    @Html._EditorWithLabelFor(
                    model => model.Password,
                    addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-4 required" } },
                    addOnAttribute: new Dictionary<string, string> { { "class", "form-control" }, { "required", "required" } },
                    wrapEditorInDiv: true, editorDivClassAttributeValue: "col-xm-4 col-sm-4")
                </div>
                }

                <div class="form-group">
                    <label class="control-label col-sm-4" for="btnQuote_RequestQuote" id="lblQuote_RequestQuote">&nbsp;</label>
                    <div class="col-xm-3 col-sm-3">
                        @Html._Button(
                        new ElementAttribute
                        {
                        ID = "btnQuote_RequestQuote",
                        CssClass = "btn btn-primary ajaxFormPost"
                        },
                        new ButtonAttribute
                        {
                        Type = ButtonType.InputSubmit,
                        FormGroup = "QuoteModel",
                        ServiceRequestUrl = "/Quote/" + serviceRequestUrl,
                        SuccessFunction = responseFunction,
                        Text = buttonSubmitText,
                        OverlayWindowWhileLoading = true
                        })
                    </div>
                </div>
                </form>
    </div>
    </div>
    <div class="row">
        <br /><br />
        @if (Model.IsLoggedIn && isUpdate)
            {
            Html.RenderPartial("_Partial-QuoteMessages", Model);
            }
    </div>
    }
@section('footer-scripts')
<script src="/js/pageSpecific/quote.js?version=20170830"></script>

<script>
    var isUpdate = @Html.Raw(isUpdate.ToString().ToLower());

    function pageInit() {
        if (!isUpdate)
        {
            var quoteCartData = { QuoteCartItems: @Html.Raw(Json.Encode(Model.QuoteCartItems)) };
            quotes.init(quoteCartData);
        }
        else {
            var quoteMessages = @Html.Raw(Json.Encode(Model.QuoteMessages));

            document.getElementById("hdivRequestQuote_EventDetailsTitleHeader").style.display = "none";

            if (websiteSettings.isLoggedIn) {
                quotes.updateLastViewedBy();
                quotes.bindQuoteMessages(quoteMessages);
            }
        }
    }
</script>
@endsection