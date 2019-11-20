@extends('shared._layout-main')

@section('main-body')
    <vendor-billing
        :user="{{ $user }}"
        :vendor-id="{{ $vendorId }}"
        :plans="{{ $plans }}"
        stripe-key="{{ config('services.stripe.key') }}"
    ></vendor-billing>
@stop

@section('footer-includes')
    <script src="https://js.stripe.com/v3/"></script>
@stop