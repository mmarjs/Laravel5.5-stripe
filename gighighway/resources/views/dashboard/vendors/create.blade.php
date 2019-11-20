@extends('shared._layout-main')

@section('main-body')
    <create-vendor
        :user="{{ $user }}"
    ></create-vendor>
@stop