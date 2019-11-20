@component('mail::message')
    # You have a new Quote Request!

    Name: {{ $quoteRequest->first_name }} {{ $quoteRequest->last_name }}

    Email: {{ $quoteRequest->user->email }}

    Event Type: {{ $quoteRequest->event_type }}

    Location: {{ $quoteRequest->event_location }}

    Date: {{ $quoteRequest->event_date }}

    To see the full quote request, visit your dashboard!

@endcomponent
