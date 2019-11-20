@extends('shared._layout-main')

@section('main-body')

    <div class="row">
        <div class="col-sm-12">
            <h1>Quote Requests</h1>
            <h3>Open Quote Requests</h3>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Date Opened</th>
                    <th>Requested By</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($openRequests as $quoteRequest)
                <tr>
                    <td>{{ $quoteRequest->created_at->format('m/d/Y h:i a') }}</td>
                    <td>{{ $quoteRequest->user->full_name }}</td>
                    <td>{{ $quoteRequest->user->email }}</td>
                    <td>{{ $quoteRequest->event_location  }}</td>
                    <td>{{ $quoteRequest->status_name }}</td>
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
    </div>

    <div class="clearfix"></div>

@stop