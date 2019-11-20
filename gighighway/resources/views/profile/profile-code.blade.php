
@section Breadcrumbs {
<!-- breadcrumbs -->
@if (Model.PrimaryCategory != null)
    {
    <ol class="breadcrumb">
        @{ Html.RenderPartial("_Partial-Breadcrums", Model.PrimaryCategory, new ViewDataDictionary { { "isProfilePage", true } }); }
        <li class="active">@(Model.Name)</li>
    </ol>
    }
}

    @{ Html.RenderAction("ReportAndDisputeContent", "General", new { profileId = Model.ID, modalHeader = "Report Inappropriate Content" });}

    <div id="mainPageLoadingMessage" class="row">
        <main role="main" style="padding:100px;text-align:center;">
            <img src="/images/pageLoading.gif" alt="Loading..." />
            <p>Loading page, please wait...</p>
        </main>
    </div>
    <div id="hdivProfile_Container" class="row" style="opacity:0;">
        <!-- profile intro -->
        <div class="col-sm-12">
            <h1 class="text-center">@(Model.Name)</h1>
            <hr />
        </div>
        <div class="col-sm-12 col-md-8">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <div class="profile-media-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#imageGallery" aria-controls="imageGallery" role="tab" data-toggle="tab">Images</a></li>
                        @if (Model.Videos != null && Model.Videos.Count > 0)
                            {
                            <li role="presentation"><a href="#videoGallery" id="hypProfile_VideoGalleryTab" aria-controls="videoGallery" role="tab" data-toggle="tab">Videos</a></li>
                            }
                            @if (Model.Audios != null && Model.Audios.Count > 0)
                                {
                                <li role="presentation"><a href="#audioFiles" id="hypProfile_AudioTab" aria-controls="audioFiles" role="tab" data-toggle="tab">Audio</a></li>
                                }
                                @if (Model.Songs != null && Model.Songs.Count > 0)
                                    {
                                    <li role="presentation"><a href="#songList" id="hypProfile_SongsTab" aria-controls="songList" role="tab" data-toggle="tab">Song List</a></li>
                                    }
                                    @if (!string.IsNullOrEmpty(Model.DescriptionBrief) || !string.IsNullOrEmpty(Model.DescriptionExtended))
                                        {
                                        <li role="presentation"><a href="#bioInformation" aria-controls="bioInformation" role="tab" data-toggle="tab">Bio</a></li>
                                        }
                                        <li role="presentation"><a href="#eventInfo" aria-controls="eventInfo" role="tab" data-toggle="tab">Event</a></li>
                                        @if (Model.Categories != null && Model.Categories.Count > 0)
                                            {
                                            <li role="presentation"><a href="#otherServices" aria-controls="otherServices" role="tab" data-toggle="tab">Related Categories</a></li>
                                            }
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="imageGallery" class="tab-pane active" role="tabpanel">
                        <div class="clearfix">&nbsp;</div>
                        <section class="slider">
                            <div id="hdivProfileForm_ImageGallerySlider" class="flexslider">
                                <ul id="ulProfileForm_GallerySlides" class="slides">
                                    @foreach (var item in Model.Images)
                                        {
                                        <li id="liProfileForm_GalleryPhotoItem-@(item.ID)">
                                            <img src="@(item.FilePartialPath + item.FileNameFull_Medium)" class="img-centered" alt="@(item.FileNameFull_Small)" height="300">
                                        </li>
                                        }
                                </ul>
                            </div>
                            <div id="hdivProfileForm_ImageGalleryCarousel" class="flexslider flexslider-carousel">
                                <ul id="ulProfileForm_CarouselSlides" class="slides">
                                    @if (Model.Images != null && Model.Images.Count > 0)
                                        {
                                        foreach (var item in Model.Images)
                                        {
                                        <li id="liProfileForm_GalleryPhotoItem-@(item.ID)">
                                            <img src="@(item.FilePartialPath + item.FileNameFull_Small)" alt="@(item.FileNameFull_Small)">
                                        </li>
                                        }
                                        }
                                        else
                                        {
                                        <li><img src="https://dummyimage.com/640x360/A3A3A3/fff.jpg?text=&nbsp;" class="img-centered img-responsive" alt="gig-img" /></li>
                                        }
                                </ul>
                            </div>
                        </section>
                    </div>

                    @if (Model.Videos != null && Model.Videos.Count > 0)
                        {
                        <div id="videoGallery" class="tab-pane" role="tabpanel">
                            <div class="clearfix">&nbsp;</div>
                            <section class="slider">
                                <div id="hdivProfile_VideoGallerySlider" class="flexslider">
                                    <ul id="ulProfile_VideoGallerySlides" class="slides">
                                        @foreach (var item in Model.Videos)
                                            {
                                            string vimeoClass = item.IsVimeo ? "vimeo-embed" : "youtube-embed";

                                            <li id="liProfileForm_GalleryPhotoItem-@(item.ID)">
                                                <div class="video-thumbnail-embed embed-responsive embed-responsive-16by9 video-embed-preview @(vimeoClass)"
                                                     data-embed="@(item.ExternallyHostedUrl + (!item.IsVimeo ? "?enablejsapi=1&autoplay=1" : ""))"
                                                data-videoid="@(item.ID.ToString())"
                                                data-videoKey="@(item.VideoID.ToString())">
                                                <img src="@(item.ThumbnailUrl)" class="img-responsive img-centered" alt="Alternate Text" />
                                                <span class="glyphicon glyphicon-play"></span>
                                </div>
                                </li>
                                }
                                </ul>
                        </div>
                        <div id="hdivProfile_VideoGalleryCarousel" class="flexslider">
                            <ul id="ulProfile_VideoCarouselSlides" class="slides">
                                @foreach (var item in Model.Videos)
                                    {
                                    string vimeoClass = item.IsVimeo ? "vimeo-embed" : "youtube-embed";

                                    <li id="liProfileForm_GalleryPhotoItem-@(item.ID)">
                                        <img src="@(item.ThumbnailUrl)" class="img-responsive" alt="Alternate Text" />
                                    </li>
                                    }
                            </ul>
                        </div>
                        </section>
                </div>
                }

                @if (Model.Audios != null && Model.Audios.Count > 0)
                    {
                    <div id="audioFiles" class="tab-pane" role="tabpanel">
                        <div class="clearfix">&nbsp;</div>
                        <table id="tbProfile_AudioFiles" class="table table-hover dataTable"
                               data-allowfilter="true"
                               data-allowpaging="true"
                               data-showsummaryinformation="true"
                               data-pagingsizedefaultoption="10"
                               data-allowsort="false"
                               data-dom="<'row'<'col-sm-7'f><'col-sm-5 text-right'i>><'row'<'col-sm-12 table-responsive dataTable_CustomHeight'tr>><'row'<'col-sm-12'p>>">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (var item in Model.Audios)
                                {
                                <tr>
                                    <td>@(item.Title)</td>
                                    <td class="text-center">
                                            <span class="audioPlayerContainer">
                                                <audio controls>
                                                    <source src="@(item.FilePartialPath + item.FileName_Mp3)" type="audio/mpeg">
                                                    <source src="@(item.FilePartialPath + item.FileName_Mp3)" type="audio/ogg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </span>
                                    </td>
                                </tr>
                                }
                            </tbody>
                        </table>
                    </div>
                    }

                    @if (Model.Songs != null && Model.Songs.Count > 0)
                        {
                        <div id="songList" class="tab-pane" role="tabpanel">
                            <div class="clearfix">&nbsp;</div>
                            <table id="tbProfle_SongList" class="table table-hover table-condensed dataTable"
                                   data-allowfilter="true"
                                   data-allowpaging="true"
                                   data-showsummaryinformation="true"
                                   data-pagingsizedefaultoption="10"
                                   data-allowsort="true"
                                   data-dom="<'row'<'col-sm-7'f><'col-sm-5 text-right'i>><'row'<'col-sm-12 table-responsive dataTable_CustomHeight'tr>><'row'<'col-sm-12'p>>">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Artist</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (var item in Model.Songs)
                                    {
                                    <tr>
                                        <td>@(item.Title)</td>
                                        <td>
                                            <span>by</span>&nbsp;@(item.Artist)
                                        </td>
                                    </tr>
                                    }
                                </tbody>
                            </table>
                        </div>
                        }

                        @if (!string.IsNullOrEmpty(Model.DescriptionBrief) || !string.IsNullOrEmpty(Model.DescriptionExtended))
                            {
                            <div id="bioInformation" class="tab-pane">
                                <div class="clearfix">&nbsp;</div>
                                <h3 class="text-center">@(Model.Name)</h3>
                                @if (!string.IsNullOrEmpty(Model.DescriptionBrief))
                                    {
                                    <p>@Model.DescriptionBrief</p>
                                    }
                                    @if (!string.IsNullOrEmpty(Model.DescriptionExtended))
                                        {
                                        <p>@Html.Raw(HttpUtility.HtmlEncode(Model.DescriptionExtended).Replace("\n", "<br/>"))</p>
                                        }
                            </div>
                            }

                            <div id="eventInfo" class="tab-pane">
                                <div class="clearfix">&nbsp;</div>
                                <div class="col-sm-5">
                                    <div role="form">
                                        <div class="form-group">
                                            <label data-equalwidthgroup="ProfileModel" for="hdivProfile_WhatToExpect" id="lblProfile_WhatToExpect">What to expect:</label>
                                            <div class="horizontalFormLayoutAdditionalItem form-control-static" id="hdivProfile_WhatToExpect">
                                                @if (!string.IsNullOrEmpty(Model.WhatToExpect))
                                                    {
                                                    @Html.Raw(HttpUtility.HtmlEncode(Model.WhatToExpect).Replace("\n", "<br/>"))
                                                    }
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label data-equalwidthgroup="ProfileModel" for="hdivProfile_SetupRequirements" id="lblProfile_SetupRequirements">Setup requirements:</label>
                                            <div class="horizontalFormLayoutAdditionalItem form-control-static" id="hdivProfile_SetupRequirements">
                                                @if (!string.IsNullOrEmpty(Model.SetupRequirements))
                                                    {
                                                    @Html.Raw(HttpUtility.HtmlEncode(Model.SetupRequirements).Replace("\n", "<br/>"))
                                                    }
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label data-equalwidthgroup="ProfileModel" for="hdivProfile_TechnicalInformation" id="lblProfile_TechnicalInformation">Notes/Technical Info:</label>
                                            <div class="horizontalFormLayoutAdditionalItem form-control-static" id="hdivProfile_TechnicalInformation">
                                                @if (!string.IsNullOrEmpty(Model.TechnicalInformation))
                                                    {
                                                    @Html.Raw(HttpUtility.HtmlEncode(Model.TechnicalInformation).Replace("\n", "<br/>"))
                                                    }
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-7 profile_EventDetailsStaticForm">
                                    <div class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="control-label col-sm-5" data-equalwidthgroup="ProfileModel" for="hdivProfile_HasLiabilityInsurance" id="lblProfile_HasLiabilityInsurance">Liability Insurance:</label>
                                            <div class="col-sm-6 form-control-static" id="hdivProfile_HasLiabilityInsurance">@(Model.HasLiabilityInsurance ? "Yes" : "No")</div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-5" data-equalwidthgroup="ProfileModel" for="hdivProfile_LocationZipCode" id="lblProfile_LocationZipCode">Location:</label>
                                            <div class="col-sm-6 form-control-static" id="hdivProfile_LocationZipCode">@(Model.Location)</div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-5" data-equalwidthgroup="ProfileModel" for="hdivProfile_TravelDistanceInMiles" id="lblProfile_TravelDistanceInMiles">Travel distance:</label>
                                            <div class="col-sm-6 form-control-static" id="hdivProfile_TravelDistanceInMiles">
                                                @if (Model.TravelDistanceInMiles == 999999999)
                                                    {
                                                    <span>Travels Worldwide</span>
                                                    }
                                                    else
                                                    {
                                                    @("Travels up to " + Model.TravelDistanceInMiles + " miles")
                                                    }
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-5" for="hdivProfile_EstimatedEventDuration" id="lblProfile_EstimatedEventDuration">Estimated Event Duration:</label>
                                            <div class="col-sm-6 form-control-static" id="hdivProfile_EstimatedEventDuration">
                                                @(Model.EstimatedEventDuration + " " + Model.EstimatedEventDuration_TimeMeasurement.ToString().ToLower() + "(s)")
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-5" for="hdivProfile_PayRange_MinimumAmount" id="lblProfile_PayRange_MinimumAmount">Pay Range:</label>
                                            <div class="col-sm-6 form-control-static" id="hdivProfile_PayRange_MinimumAmount">@("$" + Model.PayRange_MinimumAmount + " to $" + Model.PayRange_MaximumAmount) </div>
                                        </div>

                                        @if (!String.IsNullOrEmpty(Model.Languages))
                                            {
                                            <div class="form-group">
                                                @Html._DisplayWithLabelFor(
                                                model => model.Languages,
                                                addOnLabelAttribute: new Dictionary<string, string> { { "class", "control-label col-sm-5" } },
                                                addOnAttribute: new Dictionary<string, string> { { "class", "form-control-static" } },
                                                wrapDisplayInDiv: true, displayDivClassAttributeValue: "col-sm-6")
                                            </div>
                                            }
                                    </div>
                                </div>
                            </div>

                            @if (Model.Categories != null && Model.Categories.Count > 0)
                                {
                                <div id="otherServices" class="tab-pane">
                                    <h3 class="text-center">Additional Categories</h3>
                                    <div class="list-group">
                                        @foreach (var category in Model.Categories)
                                            {
                                            <a href="/Category/@(category.ID)" class="list-group-item" target="_blank">@(category.Name)</a>
                                            }
                                    </div>
                                </div>
                                }
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 text-center">
        <div class="footer-social-icons">
            <ul class="social-icons">
                @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_GooglePlus))
                    {
                    <li><a href="@Model.SocialLinkUrl_GooglePlus" class="social-icon" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    }
                    @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_Twitter))
                        {
                        <li><a href="@Model.SocialLinkUrl_Twitter" class="social-icon" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        }
                        @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_Facebook))
                            {
                            <li><a href="@Model.SocialLinkUrl_Facebook" class="social-icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            }
                            @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_Instagram))
                                {
                                <li><a href="@Model.SocialLinkUrl_Instagram" class="social-icon" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                }
                                @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_Youtube))
                                    {
                                    <li><a href="@Model.SocialLinkUrl_Youtube" class="social-icon" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    }
                                    @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_Vimeo))
                                        {
                                        <li><a href="@Model.SocialLinkUrl_Youtube" class="social-icon" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                        }
                                        @if (!String.IsNullOrEmpty(Model.SocialLinkUrl_Pinterest))
                                            {
                                            <li><a href="@Model.SocialLinkUrl_Pinterest" class="social-icon" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                            }
            </ul>
        </div>
        <h3>@Model.PrimaryCategory.Name</h3>
        <h4>@Model.Location</h4>
        @if (Model.TravelDistanceInMiles > 0)
            {
            if (Model.TravelDistanceInMiles == 999999999)
            {
            <p class="profileTile_DistanceFromLocation">Travels Worldwide</p>
            }
            else
            {
            <p class="profileTile_DistanceFromLocation">Travels up to @(Model.TravelDistanceInMiles) miles</p>
            }
            }
            <div class="rating">
                <a href="#Reviews" id="hypProfile_ViewReviews" class="small">Reviews</a> <br />
                @for (int r = 0; r < 5; r++)
                    {
                    if (Model.Rating > r)
                    {
                    <span class="averageRating">☆</span>
                    }
                    else
                    {
                    <span>☆</span>
                    }
                    } @(Model.Reviews.Count + Model.Reviews_Outside.Count)
            </div>
            <br />
            <div class="profile_ProfileActionButtons">
                <a href="/RequestQuote?id=@(Model.ID)" class="btn btn-primary btn-tile">Request a Free Quote</a>

                <input type="hidden" value="@Model.ID" name="profileId" data-formgroup="MainProfileRequest_@(Model.ID)" />
                @Html._Button(
                new ElementAttribute
                {
                ID = "btnAddToQuoteCart_" + Model.ID,
                CssClass = "btn btn-primary btn-tile",
                OtherAttributes = new Dictionary<string, string> { { "data-action", dataAction } }
                },
                new ButtonAttribute
                {
                Text = buttonText,
                ProcessingMessage = processingMessage,
                SingleActionOnlyGroupName = "AddToQuoteCart",
                FormGroup = "MainProfileRequest_" + Model.ID,
                ServiceRequestUrl = serviceRequestUrl,
                SuccessFunction = "profileTile.addToQuoteCartResponse"
                })

                <a href="/Review/Create/?profileID=@(Model.ID)" class="btn btn-primary btn-tile">Write a Review</a>
            </div>
            <hr />
            <p>
            <div class="form-horizontal profile_ContactInformation">
                @if (Model.ShowPhoneNumber)
                    {
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hdviProfile_PhoneNumber" id="lblProfile_PhoneNumber">Phone:</label>
                        <div class="col-xm-3 col-sm-9 form-control-static" id="hdviProfile_PhoneNumber"><a href="tel:@(account.PhoneNumber)">@(account.PhoneNumber)</a></div>
                    </div>
                    }

                    @if (!string.IsNullOrEmpty(account.EmailAddress))
                        {
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="hdviProfile_EmailAddress" id="lblProfile_EmailAddress">Email:</label>
                            <div class="col-xm-3 col-sm-9 form-control-static" id="hdviProfile_EmailAddress" required="required"><a href="mailto:@(account.EmailAddress)" target="_blank">@(account.EmailAddress)</a></div>
                        </div>
                        }

                        @if (!string.IsNullOrEmpty(Model.WebsiteUrl))
                            {
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="hdviProfile_WebsiteUrl" id="lblProfile_WebsiteUrl">Website:</label>
                                <div class="col-xm-3 col-sm-9 form-control-static" id="hdviProfile_WebsiteUrl"><a href="@(Model.WebsiteUrl)" target="_blank">@(Model.WebsiteUrl)</a></div>
                            </div>
                            }
            </div>
            </p>
    </div>

    <div class="clearfix">&nbsp;</div>


    <div class="col-sm-12 col-md-12 col-lg-12 no-padding">
        <span class="anchor" id="Reviews"></span>
        <h2 class="title">Reviews</h2>
        <hr />
    </div>

    <div class="col-xs-12 col-md-12 col-lg-12">
        <div id="hdivProfile_ReviewsContainer" class="col-md-12 @(Model.Reviews.Count > 5 ? "profile_ReviewOvelay" : "")">
        <!-- Wrapper for slides -->
        @if (Model.Reviews != null)
            {
            if (Model.Reviews.Count == 0 && Model.Reviews_Outside.Count == 0)
            {
            <div class="well">
                Be the fisrt one to leave a <a href="/Review/Create/?profileID=@(Model.ID)">review</a>.
            </div>
            }

            foreach (var review in Model.Reviews)
            {
            <div class="well">
                <div class="rating">
                    @for (int r = 0; r < 5; r++)
                        {
                        if (review.Rating > r)
                        {
                        <span class="averageRating">☆</span>
                        }
                        else
                        {
                        <span>☆</span>
                        }
                        }
                        &nbsp;&nbsp;<strong> @review.Title</strong>
                </div>
                By <strong>@review.ReviewerDisplayName</strong> on @review.DateCreated.ToShortDateString()
                <br />
                <p>
                    @review.ContentText
                </p>
                @if (!String.IsNullOrEmpty(review.ServiceProviderReply))
                    {
                    <div class="profile_ReviewResponse">
                        Reply by <strong>@review.ProfileName</strong>
                        <p> @review.ServiceProviderReply</p>
                    </div>
                    }
            </div>
            }
            }

            @if (Model.Reviews_Outside != null && Model.Reviews_Outside.Count > 0)
                {
                foreach (var review in Model.Reviews_Outside)
                {
                <div class="well">
                    <div class="rating">
                        @for (int r = 0; r < 5; r++)
                            {
                            if (review.Rating > r)
                            {
                            <span class="averageRating">☆</span>
                            }
                            else
                            {
                            <span>☆</span>
                            }
                            }
                            &nbsp;&nbsp;<strong> @review.Title</strong>
                    </div>
                    By <strong>@review.ReviewerDisplayName</strong> on @review.DateCreated.ToShortDateString()
                    <br />
                    <p>
                        @review.ContentText
                    </p>
                    @if (!String.IsNullOrEmpty(review.ServiceProviderReply))
                        {
                        <div class="profile_ReviewResponse">
                            Reply by <strong>@review.ProfileName</strong>
                            <p> @review.ServiceProviderReply</p>
                        </div>
                        }
                </div>
                }
                }
    </div>
    @if ((Model.Reviews.Count + Model.Reviews_Outside.Count) > 5)
        {
        <div class="col-sm-12 text-center">
            <a href="#" id="hypProfile_ViewAllReviewsExpander" data-action="expand">View all</a>
        </div>
        }
        </div>
        <a id="hypProfile_ReportInappropriateCotent" data-target="#hdivReportAndDisputeContent_SendMessageModal" data-toggle="modal" class="pull-right"><span class="glyphicon glyphicon-flag"></span> Report content</a>
        </div>

        <div class="clearfix">&nbsp;</div>
@section('footer-scripts')
<script src="/js/libs/jquery.flexslider.js?version=20170830"></script>
<script src="/js/pageSpecific/profile.js?version=20170830"></script>
@endsection
