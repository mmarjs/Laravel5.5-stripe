@if(isset($vendors))
    <div class="row">
        @foreach($vendors as $vendor)
            <div class="col-sm-12 col-md-4 col-lg-3">
                <vendor-thumbnail :user="{{ $theUser }}" :vendor="{{ $vendor }}"></vendor-thumbnail>
            </div>
        @endforeach
    </div>
@endif
