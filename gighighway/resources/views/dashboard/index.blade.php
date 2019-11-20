@extends('shared._layout-main')

@section('main-body')



        <link href="/css/pageSpecific/profileAnalyticsGraph.css?version=201604051000" rel="stylesheet">
        <link href="/css/pageSpecific/dashboard.css?version=201604051000" rel="stylesheet">

        <span class="ajaxFormPost" data-ajaxformpostenabled="true"></span>

        <div class="row">
            <div id="hdivAccount_QuickLinks">
                <div class="col-sm-4"><a href="#" class="btn btn-default">View your Account</a></div>
                <div class="col-sm-4"><a href="#" class="btn btn-default">View your Quote Requests ({{ $currentVendor->open_quote_request_count }})</a></div>
                <div class="col-sm-4"><a href="#" class="btn btn-default">View your Reviews ({{ $reviewCount }})</a></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 dashboard_ProfileActionButtons">
                <div id="dashboard_profile_selection" class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle">{{ $currentVendor->name }}</button>
                    @if($user->vendors->count() > 1)
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    @endif
                    <ul class="dropdown-menu">
                        @foreach($user->vendors as $vendor)
                            <li>
                                <a href="/dashboard/switch-profiles/{{ $vendor->id }}" class="account_ProfileOption">{{ $vendor->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <a href="{{ route('vendors.edit', [$currentVendor->id]) }}" class="btn btn-primary">Edit</a>
                <a href="/Account/DeleteProfile?id=10" onclick="return confirm('Are you sure you want to delete this profile?');" class="btn btn-default">Delete</a>
                <a href="{{ route('vendors.create') }}" class="btn btn-primary pull-right">Add a New Profile</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-md-3 text-center">
                    <div class="row">
                        <div class="thumbnail">
                            <a href="/{{ $currentVendor->slug }}" class="tile-link" style="overflow: hidden; position: relative;">
                                @if($currentVendor->profileImage)
                                    <img src="{{ $currentVendor->profileImage->file_url }}"
                                         class="image-profile-tile img img-responsive"
                                         style="position: absolute; width: 275px; left: 0px; top: 0px;" alt="Gighighway-TileImage">
                                @else
                                    <img src="/images/ImageNotAvailable_Small.jpg"
                                         class="image-profile-tile"
                                         style="position: absolute; width: 275px; max-width: none; max-height: none; left: 0px; top: 0px;" alt="Gighighway-TileImage">
                                @endif
                            </a>
                            <div class="caption tile-caption">
                                <h4><a href="{{ route('vendorProfile', [$currentVendor->slug]) }}" id="hypProfileTile_ProfileName">{{ $currentVendor->name }}</a></h4>
                                <br>
                                <a href="{{ route('vendors.edit', [$currentVendor->id]) }}" id="hypProfileTile_EditProfile" class="btn btn-primary btn-tile">Edit Profile</a>
                                <a href="{{ route('vendorProfile', [$currentVendor->slug]) }}" class="btn btn-primary btn-tile" target="_blank">Preview Profile</a>
                                <a href="{{ route('vendors.edit', [$currentVendor->id]) }}?section=plan" class="btn btn-primary btn-tile" style="display: inline-block;">Upgrade to Featured</a>
                                <a href="{{ route('vendors.billing', [$currentVendor->id]) }}?section=payment" class="btn btn-primary btn-tile">Payment Information</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <!-- Quick View -->
                            <div id="hdivHomeProfile_CompletionWidget" data-profileid="10" class="dashboard-widget dashboard-widget-warning">
                                <div class="dashboard-widget-background">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="dashboard-widget-header">
                                    <div class="db-widget-score">
                                        <a href="{{ route('vendors.edit', [$currentVendor->id]) }}" id="hypProfile_CompletedPercentage">{{ $currentVendor->completion_percent }} %</a>
                                    </div>
                                    <div class="db-widget-score-type">Profile Completed</div>
                                </div>
                                <div class="dashboard-widget-footer">
                                    <a id="hypProfile_CompleteYourProfile" href="{{ route('vendors.edit', [$currentVendor->id]) }}">Complete your Profile <i class="glyphicon glyphicon-chevron-right pull-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <!-- Full Page -->
                            <div id="hdivHomeProfile_AnalyticsWidget" data-profileid="10" data-fromdate="2/2/2018 8:43:05 AM" data-todate="3/2/2018 8:43:05 AM" class="dashboard-widget dashboard-widget-alert">
                                <div class="dashboard-widget-background">
                                    <i class="glyphicon glyphicon-globe"></i>
                                </div>
                                <div class="dashboard-widget-header">
                                    <div id="hdivDashboard_ProfileViewCount" class="db-widget-score">{{ $currentVendor->pageViews()->count() }}</div>
                                    <div class="db-widget-score-type">Views</div>
                                </div>
                                <div class="dashboard-widget-footer">
                                    <a href="{{ route('dashboard.views.index') }}">
                                        View Details <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>

                    <!-- Visits -->
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <!-- Quote Requests -->
                            <div id="hdivHomeProfile_QuoteRequestsWidget" data-profileid="10" data-href="Profile/Quote" class="dashboard-widget dashboard-widget-info">
                                <div class="dashboard-widget-background">
                                    <i class="glyphicon glyphicon-log-in"></i>
                                </div>
                                <div class="dashboard-widget-header">
                                    <div id="hdivProfile_QuoteRequestCount" class="db-widget-score">{{ $currentVendor->open_quote_request_count }}</div>
                                    <div class="db-widget-score-type">Quote Requests</div>
                                </div>
                                <div class="dashboard-widget-footer">

                                    <a href="/dashboard/quote-requests">
                                        View Quote Requests
                                        <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <!-- Reviews -->
                            <div id="hdivHomeProfile_ReviewsWidget" data-profileid="10" data-href="Profile/Review/" class="dashboard-widget dashboard-widget-info">
                                <div class="dashboard-widget-background">
                                    <i class="glyphicon glyphicon-comment"></i>
                                </div>
                                <div class="dashboard-widget-header">
                                    <div id="hdivProfile_ReviewsCount" class="db-widget-score">{{ $vendor->reviews->count() }}</div>
                                    <div class="db-widget-score-type">Reviews</div>
                                </div>
                                <div class="dashboard-widget-footer">
                                    <a href="/Profile/Review/">
                                        View all Reviews <i class="glyphicon glyphicon-chevron-right pull-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </div>

        <!-- Analytics -->
        <div class="row">
            <div id="hdivDashboard_ProfileAnalyticsContainer" style="display:none;">
                <input type="hidden" id="hfDashboard_DefaultFromDate" value="2018-02-02">
                <input type="hidden" id="hfDashboard_DefaultToDate" value="2018-03-02">

                <div class="clearfix">&nbsp;</div>
                <div class="text-center col-sm-12">
                    <h3>Total Profile Views</h3>
                    <hr>
                </div>

                <div class="billingManager_DateRangeControls col-sm-12">
                    <form class="form-inline">
                        <input type="hidden" id="hfProfileAnaltyics_ProfileID" name="id" value="10" data-formgroup="ProfileAnalytics">
                        <div class="form-group">
                            <label for="txtProfileAnalytics_FromDate" id="lblProfileAnalytics_FromDate">From: </label>
                            <input class="dateTextbox" data-formgroup="ProfileAnalytics" id="txtProfileAnalytics_FromDate" max="2018-03-01" maxlength="500" min="0001-01-01" name="fromDate" type="date" value="2018-02-02">
                        </div>

                        <div class="form-group">
                            <label for="txtProfileAnalytics_ToDate" id="lblProfileAnalytics_ToDate"> to: </label>
                            <input class="dateTextbox" data-formgroup="ProfileAnalytics" id="txtProfileAnalytics_ToDate" max="2018-03-02" maxlength="500" min="0001-01-01" name="toDate" type="date" value="2018-03-02">
                        </div>

                        <div id="hdivProfileAnalytics_ButtomFormContainer" class="form-group">
                            <input class="btn btn-primary ajaxFormPost ajaxFormPost" data-formgroup="ProfileAnalytics" data-overlaywindowwhileprocessing="true" data-servicerequesturl="/Account/GetAnalyticsForProfile/" data-successfunction="profileStats.getProfileAnalyticsResponse" id="txtProfileAnalytics_RequestSubmit" type="submit" value="Submit" data-ajaxformpostenabled="true">
                        </div>
                    </form>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="col-sm-12 col-lg-12">
                    <div class="panel">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="canvas-holder2">
                                        <canvas id="chart2" width="1080" height="380">
                                        </canvas></div>
                                    <div id="chartjs-tooltip"></div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            Last update: 3/2/2018
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix">&nbsp;</div>

@stop