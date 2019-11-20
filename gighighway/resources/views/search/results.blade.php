@extends('shared._layout-main')

@section('main-body')
    <div class="clearfix" style="margin-top: 20px;"></div>
    <div class="row">
	
				
			
        @foreach($results as $result)
		
            <div class="col-sm-12 col-md-4 col-lg-3">
                <vendor-thumbnail  :vendor="{{ $result }}"></vendor-thumbnail>
            </div>
			
        @endforeach
		
		
@if($results->total()==0)
	<div class="alert alert-danger">
  <strong>Sorry</strong>  try another search.
</div>
@endif


    </div>
    <div class="row">
        <div class="col-sm-12">
            {{ $results->render() }}
        </div>
    </div>
@endsection