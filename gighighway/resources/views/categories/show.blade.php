@extends('shared._layout-main')
@section('title','GigHighway - The Road to Extraordinary Events')
@section('banner')
    <div class="jumbotron text-center" style="background-color:gray; margin-bottom:0;">
        <h1 style="padding-bottom:1%;">
            <span id="spnCategory_Name">{{ $category->name }}</span>
        </h1>
    </div>
@endsection
@section('main-body')
    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 40px; margin-bottom: 40px;">
        @if($childCategoryCount > 1)
            @foreach($category->children as $child)
            <div class="col-sm-12 category-sub-container">
                <div class="row"><h4 class="text-center category-name-title">{{ $child->name }}</h4></div>
                @include('categories._child-list', ['parent' => $child]);
            </div>
            @endforeach
        @else
            @include('categories._child-list', ['parent' => $category]);
        @endif
    </div>

@endsection