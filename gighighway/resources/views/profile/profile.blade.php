@extends('shared._layout-main')

@php

    $meta_description = "One of the best " .$vendor->primaryCategory->name . " in " . $vendor->location . ". GigHighway is your road to booking them for your event.";
    $meta_tags = $vendor->name . "," . $vendor->location . "," . $vendor->primary_category;
    $account = $vendor->account;


    $button_text = "Add To Favorites";
    $data_action = "remove";
    $processing_message = "Adding...";
    $service_request_url = "/Quote/AddProfileToQuoteCart";

    if($vendor->is_in_quote_basket){
        $button_text = "Remove From Favorites";
        $data_action = "add";
        $processing_message = "Removing...";
        $service_request_url = "/Quote/RemoveProfileFromQuoteCart";
    }
@endphp

@foreach($vendor->categories as $category)
    @php $meta_tags .= ",".$category; @endphp
@endforeach

@section('title', $vendor->seo_title)

@section("primary-menu")
    @parent

@endsection
@section('main-body')
    <link href="/css/flexslider.min.css?version=2016040280120" rel="stylesheet"/>
    <link href="/css/pageSpecific/profile.css?version=2016040280129" rel="stylesheet"/>
    <link rel="stylesheet" href="/js/vendor/unitegallery/dist/css/unite-gallery.css">
    <link rel="stylesheet" href="/js/vendor/unitegallery/dist/themes/default/ug-theme-default.css">

    @include('general.partials.breadcrumbs')
    {{-- BREAD CRUMBS GO HERE --}}

    {{-- MAIN PROFILE STUFF --}}
    <div id="hdivProfile_Container" class="row" style="">
        <!-- profile intro -->
        <div class="col-sm-12">
            <h1 class="text-center">{{ $vendor->seo_title }}</h1>
            <hr/>
        </div>
        <div class="col-sm-12 col-md-8">
            <div >


                <div id="imageGallery" >
                    <h2>Images</h2>
                    <div id="image-gallery" style="display: none;">
                        @foreach($vendor->images as $image)
                            <img alt="Image Title" src="{{ $image->file->url() }}"
                                 data-image="{{ $image->file->url() }}"
                                 data-description="Image Description">
                        @endforeach
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>

                @if (!is_null($vendor->videos))
                    <div id="videoGallery" class="" >
                        <h3 class="h2">Videos</h3>
                        <div id="video-gallery" style="display: none;">
                            @foreach($vendor->videos as $video)
                                <img alt="Youtube Without Images"
                                     data-type="youtube"
                                     src="https://img.youtube.com/vi/{{ $video->video_key }}/0.jpg"
                                     data-image="https://img.youtube.com/vi/{{ $video->video_key }}/0.jpg"
                                     data-videoid="{{ $video->video_key }}"
                                     data-description="Youtube video description">
                            @endforeach
                        </div>
                        <div class="clearfix">&nbsp;</div>
                    </div>
                @endif

                @if (!is_null($vendor->audios) && count($vendor->videos) > 0)
                    <div id="audioFiles" class="" >
                        <p class="h2">Audio</p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($vendor->audios as $audio)
                                <tr>
                                    <td>{{$audio->title}}</td>
                                    <td class="text-center">
                                            <span class="audioPlayerContainer">
                                                <audio controls>
                                                    <source src="{{$audio->file->url()}}"
                                                            type="audio/mpeg">
                                                    <source src="{{$audio->file->url()}}"
                                                            type="audio/ogg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix">&nbsp;</div>
                    </div>
                @endif

                @if (!is_null($vendor->songs) && count($vendor->songs) > 0)
                    <div id="songList" class="" >
                        <p class="h2">Songs</p>
                        <table class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Artist</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($vendor->songs as $song)
                                <tr>
                                    <td>{{$song->title}}</td>
                                    <td>
                                        <span>by</span>&nbsp; {{ $song->artist }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix">&nbsp;</div>
                    </div>
                @endif

                @if (!empty($vendor->description_brief) || !empty($vendor->description))
                    <div id="bioInformation" class="">
                        <h4 class="h2">{{ $vendor->seo_title }} Bio</h4>
                        @if (!empty($vendor->description_brief))
                            <p style="font-size: 20px;">{{$vendor->description_brief}}</p>
                        @endif
                        @if (!empty($vendor->description))
                            <p style="font-size: 16px;">{{$vendor->description}} {{ $vendor->seo_title }}.</p>
                        @endif
                    </div>
                @endif

                <div id="eventInfo" class="">
                    <p class="h2">Service Details</p>
                    <div class="col-sm-12">
                        @foreach([
                            'what_to_expect' => 'What to expect',
                            'setup_requirements' => 'Setup Requirements',
                            'technical_information' => 'Notes/Technical Info',
                        ] as $key => $label)
                            @if($vendor->$key)
                            <p>
                                <strong>{{ $label }}</strong>: {{ $vendor->$key }}
                            </p>
                            @endif
                        @endforeach
                        <p>
                            <strong>Liability Insurance</strong>: @if($vendor->has_liabillity_insurance) Yes @else No @endif
                        </p>
                        <p>
                            <strong>Location</strong>: {{ $vendor->location->city }}
                        </p>
                        @if($vendor->travel_distance_in_miles)
                            <p>
                                <strong>Travel Distance</strong>:
                                @if($vendor->travel_distance_in_miles > 999999) Travels Worldwide @else Travels up to {{ $vendor->location_name }} miles @endif
                            </p>
                        @endif
                        @if($vendor->estimated_event_duration && $vendor->estimated_event_duration_time_measurement)
                            <p>
                                <strong>Estimated Event Duration</strong>: {{ number_format($vendor->estimated_event_duration, 0) }} {{ GigHighway\Vendor::$timeMeasurements[$vendor->estimated_event_duration_time_measurement] }}
                            </p>
                        @endif
                        @if($vendor->pay_range_min && $vendor->pay_range_max)
                            <p>
                                <strong>Pay Range</strong>: ${{ $vendor->pay_range_min }} - {{ $vendor->pay_range_max }}
                            </p>
                        @endif

                    </div>
                </div>

                @if (!is_null($vendor->categories) && count($vendor->categories) > 0)

                    <div id="otherServices" class="">
                        <p class="h3" class="text-center">Additional Categories</p>
                        <div class="list-group">
                            @foreach ($vendor->categories as $category)
                                <a href="/Category/{{$category->id}}" class="list-group-item"
                                   target="_blank">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-4 text-center" id="sidebar">
            <div class="footer-social-icons">
                <ul class="social-icons">
                    @if (!empty($vendor->sml_googleplus))

                        <li><a href="{{$vendor->sml_googleplus}}" class="social-icon" target="_blank"><i
                                        class="fa fa-google-plus"></i></a></li>
                    @endif
                    @if (!empty($vendor->sml_twitter))

                        <li><a href="{{$vendor->sml_twitter}}" class="social-icon" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                    @endif
                    @if (!empty($vendor->sml_facebook))
                        <li><a href="{{$vendor->sml_facebook}}" class="social-icon" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                    @endif
                    @if (!empty($vendor->sml_instagram))
                        <li><a href="{{$vendor->sml_instagram}}" class="social-icon" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                    @endif
                    @if (!empty($vendor->sml_youtube))
                        <li><a href="{{$vendor->sml_youtube}}" class="social-icon"
                               target="_blank"><i class="fa fa-youtube"></i></a></li>
                    @endif
                    @if (!empty($vendor->sml_youtube))
                        <li><a href="{{$vendor->sml_youtube}}" class="social-icon"
                               target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                    @endif
                    @if (!empty($vendor->sml_pinterest))
                        <li><a href="{{$vendor->sml_pinterest}}" class="social-icon"
                               target="_blank"><i class="fa fa-pinterest"></i></a></li>
                    @endif
                </ul>
            </div>
            <p class="h3">{{$vendor->categories[0]->name}}</p>
            <p class="h4">{{$vendor->location->location_name}}</p>
            @if ($vendor->travel_distance_in_miles)
                @if ($vendor->travel_distance_in_miles == 99999)
                    <p class="profileTile_DistanceFromLocation">Travels Worldwide</p>
                @else
                    <p class="profileTile_DistanceFromLocation">Travels up to {{$vendor->travel_distance_in_miles}} miles</p>
                @endif
            @endif
            <div class="rating">
                <a href="#Reviews" id="hypProfile_ViewReviews" class="small">Reviews</a> <br/>
                @for ($r = 0; $r < 5; $r++)
                    @if (true)
                        <span class="averageRating">☆</span>
                    @else
                        <span>☆</span>
                    @endif
                @endfor {{count($vendor->reviews)}}
            </div>
            <br/>
            <div class="profile_ProfileActionButtons">
                <a href="/RequestQuote?id={{$vendor->id}}" class="btn btn-primary btn-tile">Request a Free Quote</a>

                <input type="hidden" value="{{$vendor->id}}" name="profileId"
                       data-formgroup="MainProfileRequest_{{$vendor->id}}"/>

                <favorite-button :vendor="{{ $vendor }}" :user="{{ $user }}"></favorite-button>

                <review-button :vendor="{{ $vendor }}" :user="{{ $user }}"></review-button>

                <quote-button :vendor="{{ $vendor }}" :user="{{ $user }}"></quote-button>
            </div>
            <hr/>
            <p>
            <div class="form-horizontal profile_ContactInformation">
                @if ($vendor->show_phone_number)
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hdviProfile_PhoneNumber"
                               id="lblProfile_PhoneNumber">Phone:</label>
                        <div class="col-xm-3 col-sm-9 form-control-static" id="hdviProfile_PhoneNumber"><a
                                    href="tel:@(account.PhoneNumber)">@(account.PhoneNumber)</a></div>
                    </div>
                @endif

                @if (!empty($vendor->user->email))
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hdviProfile_EmailAddress"
                               id="lblProfile_EmailAddress">Email:</label>
                        <div class="col-xm-3 col-sm-9 form-control-static" id="hdviProfile_EmailAddress"
                             required="required"><a href="mailto:{{$vendor->user->email}}"
                                                    target="_blank">{{$vendor->user->email}}</a>
                        </div>
                    </div>
                @endif
                @if (!empty($vendor->website_url))
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hdviProfile_WebsiteUrl"
                               id="lblProfile_WebsiteUrl">Website:</label>
                        <div class="col-xm-3 col-sm-9 form-control-static" id="hdviProfile_WebsiteUrl"><a
                                    href="{{$vendor->website_url}}" target="_blank">$vendor->website_url</a></div>
                    </div>
                @endif
            </div>
            </p>
        </div>

        <div class="clearfix">&nbsp;</div>


        <div class="col-sm-12 col-md-12 col-lg-12 no-padding">
            <span class="anchor" id="Reviews"></span>
            <p class="h2" class="title">Reviews for {{ $vendor->name }}</p>
            <hr/>
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div id="hdivProfile_ReviewsContainer" class="col-md-12">
                <!-- Wrapper for slides -->
                @if (!is_null($vendor->reviews))

                    @if (count($vendor->reviews) === 0)

                        <div class="well">
                            Be the first one to leave a <a href="/Review/Create/?profileID={{$vendor->id}}">review</a>.
                        </div>
                    @endif

                    @foreach ($vendor->reviews as $review)
                        <div class="well">
                            <div class="rating">
                                @for ($r = 0; $r < 5; $r++)

                                    @if ($review->rating > $r)

                                        <span class="averageRating">☆</span>

                                    @else

                                        <span>☆</span>
                                    @endif
                                @endfor
                                &nbsp;&nbsp;<strong> {{$review->title}}</strong>
                            </div>
                            By <strong>{{$review->reviewer_display_name}}</strong> on {{ \Carbon\Carbon::parse($review->created_at)->format('m/d/Y') }}
                            <br/>
                            <p>
                                {{$review->text}}
                            </p>
                            @if (!empty($review->service_provider_reply))

                                <div class="profile_ReviewResponse">
                                    Reply by <strong>{{$vendor->name}}</strong>
                                    <p> {{$review->service_provider_reply}}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
        <a id="hypProfile_ReportInappropriateCotent" data-target="#hdivReportAndDisputeContent_SendMessageModal"
           data-toggle="modal" class="pull-right"><span class="glyphicon glyphicon-flag"></span> Report content</a>
    </div>

    <div class="clearfix">&nbsp;</div>

@endsection

@section('footer-scripts')
    <script src="/js/vendor/unitegallery/dist/js/unitegallery.js"></script>
    <script src="/js/vendor/unitegallery/dist/themes/default/ug-theme-default.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="{{ URL::asset('js/shared/jquery.flexslider.js') }}"></script>
    {{--<script src="{{ URL::asset('js/reconnaissance.js') }}"></script>--}}
    {{--    <script src="{{ URL::asset('js/modernizr-latest-customBuild.min.js') }}"></script>--}}
    <script src="{{ URL::asset('js/shared/jquery.blImageCenter.js') }}"></script>
    <script src="{{ URL::asset('js/shared/loStorage.js') }}"></script>
    <script src="{{ URL::asset('js/shared/pubsub.js') }}"></script>
    <script src="{{ URL::asset('js/profile.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#image-gallery").unitegallery();
            $("#video-gallery").unitegallery();
        })
    </script>

@endsection