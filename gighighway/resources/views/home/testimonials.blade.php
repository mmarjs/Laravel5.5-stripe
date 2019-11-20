<div class="col-md-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <blockquote>
                            <p>We could not be more pleased and satisfied.</p>
                            <footer>Fred Nuccio, Krewe of Orpheus, Mardi Gras, New Orleans, Louisiana</footer>
                        </blockquote>
                    </div>
                    <div class="col-sm-6">
                        <blockquote>
                            <p>Man, are you good to work with!!!!! As always, you’re awesome!</p>
                            <footer>Jody Bell, Chairperson, MedWish International Fundraiser</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <blockquote>
                            <p>You all are Not only amazing but a wonderful group of people!!! We appreciate you and thank you from the bottom of our hearts!</p>
                            <footer>Colleen, Vail, Colorado</footer>
                        </blockquote>
                    </div>
                    <div class="col-sm-6">
                        <blockquote>
                            <p>Thank you for being so responsive and helpful!</p>
                            <footer>Kate, Park City, Utah</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm"></div>
        {{--<!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($testimonials as $testimonial)
                --}}{{--@php
                    $active = ($loop->iteration > 2)?'':'active';
                @endphp--}}{{--
                @if(($loop->iteration % 2) == 0 || $loop->iteration == 1)
                <div class="item active">
                @else
                    --}}{{--<div class="item">--}}{{--
                @endif
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <blockquote>
                                <p>We could not be more pleased and satisfied.</p>
                                <footer>Fred Nuccio, Krewe of Orpheus, Mardi Gras, New Orleans, Louisiana</footer>
                            </blockquote>
                        </div>
                    </div>
                @if(($loop->iteration % 2) == 0 || $loop->iteration == 1)
                </div>
                @endif
            @endforeach
                <div class="clearfix visible-sm"></div>

        </div>--}}
    </div>
</div>