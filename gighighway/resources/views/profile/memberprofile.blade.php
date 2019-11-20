@extends('shared._layout-main')


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
         <h1>Quote Requests</h1>
		
            <h3>Open Quote Requests</h3>
			
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Date Opened</th>
                    <th>Requested To</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
				
                @foreach($openRequests as $quoteRequest)
                <tr>  
                   <td>{{ $quoteRequest->created_at }}</td>
                    <td>{{ $quoteRequest->name}}</td>
					<td>{{ $quoteRequest->email }}</td>
					
					<td>{{ $quoteRequest->user_id }}</td>
					<td>{{ $quoteRequest->status }}</td>
                    <td>
                        <a href="{{ URL::to('dashboard/quote-requests/'.$quoteRequest->id) }}" class="btn btn-info btn-sm">
                            <i class="fa fa-search"></i>
                            View
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
			
        </div>
        <div class="col-sm-12 col-md-8">
         </div>
        <div class="col-sm-12 col-md-4 text-center" id="sidebar">
        <p>{{$user->full_name}}</p>
		<p>{{$user->type}}</p>
		
			
			
			
        </div>

        <div class="clearfix">&nbsp;</div>


        <div class="col-sm-12 col-md-12 col-lg-12 no-padding">
           
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div id="hdivProfile_ReviewsContainer" class="col-md-12">
                
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