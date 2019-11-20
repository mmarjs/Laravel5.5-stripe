@extends('shared._layout-main')

@section('main-body')
    <create-vendor
        :user="{{ $user }}"
        :vendor-id="{{ $vendorId }}"
        :plans="{{ $plans }}"
        stripe-key="{{ config('services.stripe.key') }}"
    ></create-vendor>
@stop

@section('footer-includes')
    <script src="https://js.stripe.com/v3/"></script>
@stop