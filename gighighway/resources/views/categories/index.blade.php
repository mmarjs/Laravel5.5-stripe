@extends('shared._layout-main')
@section('title','GigHighway - The Road to Extraordinary Events')

@section('main-body')
    <div class="row">
        <div class="col-sm-12">
            @foreach($categories as $category)
                <h2>{{ $category->name }}</h2>
                <h3>{{ $category->slug }}</h3>
                <p>
                    <a href="{{ route('category.show', $category->slug) }}">Go</a>
                </p>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Children</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category->children as $childCat)
                <tr>
                    <td>{{ $childCat->name }}</td>
                    <td>{{ $childCat->children->count() }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @endforeach
        </div>
    </div>
@endsection