
@foreach($vendors as $vendor)
    <div class="col-sm-6 col-md-3 col-lg-3 tile-wrapper text-center">
        <div class="thumbnail">
            <a href="/profile/{{$vendor->id}}/" class="tile-link"
               style="overflow: hidden; position: relative;">
                <img src="/__content/Account1-4/Images/party-crashers-corporate-wedding-party-band_Small.jpg"
                     class="image-profile-tile" alt="party-crashers-corporate-wedding-party-band"
                     style="position: absolute; width: 250px; height: auto; max-width: none; max-height: none; left: -2px; top: 0px;">
            </a>
            <div id="ribbon-container">
                <a id="ribbon">Featured</a>
            </div>
            <div class="caption tile-caption">
                <div class="tile-caption-information">
                    <h4>
                        <a href="/profile/{{$vendor->id}}" id="hypProfileTile_Name">{{$vendor->name}}</a><br>
                        <small id="hsmProfileTile_PrimaryCategory">Party-Bands</small>
                        <br>
                        <small id="hsmProfileTile_ServingArea">Salt Lake City, UT</small>
                    </h4>
                    <small><span id="hspProfileTile_NumberOfReviews">1</span> reviews</small>
                    <div class="rating" style="margin-top:-9px;">
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                    </div>
                    <p id="hpProfileTile_Description">America's number one party band for corporate events, wedding
                        receptions, and parties.</p>
                </div>

                <a href="/RequestQuote?id=4" class="btn btn-primary btn-tile">Request a Free Quote</a>
                <br>
                <input value="4" name="profileId" data-formgroup="AddToQuoteCart_4" type="hidden">
                <input class="btn btn-primary btn-tile ajaxFormPost" data-action="remove"
                       data-formgroup="AddToQuoteCart_4" data-processingmessage="Adding..."
                       data-servicerequesturl="/Quote/AddProfileToQuoteCart"
                       data-singleactiononlygroupname="AddToQuoteCart"
                       data-successfunction="profileTile.addToQuoteCartResponse" id="btnAddToQuoteCart_4"
                       value="Add To Favorites" data-ajaxformpostenabled="true" type="button"></div>
        </div>
    </div>
@endforeach