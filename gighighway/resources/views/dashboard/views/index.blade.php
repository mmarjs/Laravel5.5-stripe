@extends('shared._layout-main')

@section('main-body')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('dashboard') }}"><< Back to Dashboard</a>
            <h1>Page Views</h1>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Date Viewed</th>
                    <th>IP</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vendor->pageViews as $pageView)
                <tr>
                    <td>{{ $pageView->created_at->format('m/d/Y h:i a') }}</td>
                    <td>{{ $pageView->ip }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="clearfix"></div>

@stop