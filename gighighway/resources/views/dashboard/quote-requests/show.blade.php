@extends('shared._layout-main')

@section('header-scripts')
    <style>
        #quote-request-details-container dl {

        }

        #quote-request-details-container dl dt {
            font-size: 1.5em;
        }

        #quote-request-details-container dl dd {
            font-size: 1.1em;
        }

        #quote-request-details-container dl dd ul{

        }

        #quote-request-details-container dl dd ul li{
            list-style: none;
            margin-left: 20px;
        }

        #quote-request-details-container dl dd ul li .list-title{
            display: inline-block;
            width: 150px;
        }
    </style>
@endsection

@section('main-body')

    <div class="row">
        <div class="col-sm-12 col-md-6" id="quote-request-details-container">
            <h1>Quote Request Details</h1>
            <dl>
                <dt>Contact Information</dt>
                <dd>
                    <ul>
                        <li><span class="list-title">Name:</span> {{ $quoteRequest->user->full_name }}</li>
                        <li><span class="list-title">Email:</span> {{ $quoteRequest->user->email }}</li>
                        @if($quoteRequest->user->phone)
                            <li><span class="list-title">Phone:</span> {{ $quoteRequest->user->phone }}</li>
                        @endif
                    </ul>
                </dd>
                <dt>
                    Event Information
                </dt>
                <dd>
                    <ul>
                        <li><span class="list-title">Date:</span> {{ $quoteRequest->event_date->format('m/d/Y') }}, {{ $quoteRequest->event_estimated_start_time }} - {{ $quoteRequest->event_estimated_end_time }}</li>
                        <li><span class="list-title">Type:</span> {{ $quoteRequest->event_type }}</li>
                        <li><span class="list-title">Location:</span> {{ $quoteRequest->event_location }}</li>
                        <li><span class="list-title">Duration:</span> {{ $quoteRequest->duration }} {{ $quoteRequest->duration_measurement }}</li>
                        <li><span class="list-title">Estimated Guests:</span> {{ $quoteRequest->estimated_guest_count }}</li>
                        <li><span class="list-title">Details:</span> {{ $quoteRequest->event_additional_details }}</li>
                    </ul>
                </dd>
                <dt>Status</dt>
                <dd>
                    <ul>
                        <li>
                            {!! Form::select('status', GigHighway\QuoteRequest::$statuses, $quoteRequest->status, ['class' => 'form-control', 'id' => 'status-dropdown']) !!}
                        </li>
                    </ul>
                </dd>
                <dt>
                    Actions
                </dt>
                <dd>
                    <a href="mailto:{{ $quoteRequest->user->email }}" class="btn btn-success btn-lg">Email {{ $quoteRequest->user->full_name }}</a>
                </dd>
            </dl>
        </div>
    </div>

    <div class="clearfix" style="height: 100px;"></div>

@stop

@section('footer-scripts')
    <script>
        $(document).ready(function () {
            $("#status-dropdown").change(function(e) {
                var newStatus = $(this).val();
                $.ajax({
                    url: '/api/quotes/{{$quoteRequest->id}}/update-status',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status_id: newStatus,
                    },
                    type: 'post',
                    success: function(response) {
                        if(response.success) {
                            // saved, set alert
                        }else {
                            alert(response.message)
                        }
                    }
                })
            })
        })
    </script>
@endsection