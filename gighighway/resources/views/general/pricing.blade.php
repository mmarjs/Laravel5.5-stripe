@extends('shared._layout-main')
@section('title','Pricing - GigHighway')
@section('header-scripts')
    <link href="{{ URL::asset('css/pageSpecific/pricing.css') }}" rel="stylesheet"/>
@endsection
@section('main-body')
    <div class="row">

        {{--TODO -- CODE IN THE DYNAMIC PRICING PAGE--}}

        <h1>GigHighway Pricing</h1>
        <hr>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-1 service-pricing-main">
            <div class="service-pricing-block service-pricing-orage">
                <div class="service-block pricing-block-header">
                    <h2>Professional</h2>
                    <div class="rating">
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                    </div>
                </div>
                <div class="pricing-body text-center">
                    <p class="pricing-lead">For those who want <br> more leads and more gigs.</p>

                    <p class="pricing-plan-features">
                        High visibility<br>
                        Multiple Categories<br>
                        50 photos including hi-res<br>
                        Add YouTube and Vimeo videos<br>
                        Add audio files<br>
                        Display a link to your website<br>
                        Display your phone number<br>
                        Potential clients can contact you directly<br>
                        No GigHighway commissions to pay<br>
                        No hidden fees - You make all the money
                        <br><br><br>
                    </p>
                </div>

                <div class="pricing-bottom-section service-block-pricing text-center">
                    <p class="pricing-actual-figure">$19.99 / Month</p>

                    <p class="pricing-actual-figure">$149 / Year</p>
                    <p class="pricing-discount-amount text-primary">SAVE $90</p>

                    <a href="/signup/?SignUpType=Basic" class="btn btn-default">Sign Up</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 service-pricing-main">
            <div class="service-pricing-block service-pricing-blue">
                <div class="service-block pricing-block-header">
                    <h2>Featured</h2>
                    <div class="rating">
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                        <span class="averageRating">☆</span>
                    </div>
                </div>
                <div class="pricing-body text-center">
                    <p class="pricing-lead">For those who want the most leads, most gigs, and greatest exposure.</p>

                    <p class="pricing-plan-features">
                        <span class="pricing-featured-highlight danger">Appear above competitors in search results</span><br>
                        High visibility<br>
                        Multiple Categories<br>
                        100 photos including hi-res<br>
                        Add YouTube and Vimeo videos<br>
                        Add audio files<br>
                        Display a link to your website<br>
                        Display your phone number<br>
                        Potential clients can contact you directly<br>
                        No GigHighway commissions to pay<br>
                        No hidden fees - You make all the money<br>
                        <span class="pricing-featured-highlight featured-ribbon">TOP PLACEMENT</span>
                    </p>
                </div>
                <div class="pricing-bottom-section service-block-pricing text-center">
                    <p class="pricing-actual-figure">$29.98 / Month</p>

                    <p class="pricing-actual-figure">$199 / Year</p>
                    <p class="pricing-discount-amount text-danger">SAVE $160</p>

                    <a href="/signup/?SignUpType=Featured" class="btn btn-default">Sign Up</a>
                </div>
            </div>
        </div>

        {{--<div class="col-sm-12">
            <h1>GigHighway Pricing</h1>
            <hr />

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-1 service-pricing-main">
                <div class="service-pricing-block service-pricing-orage">
                    @{ Html.RenderPartial("_Partial-PricingRegular"); }
                    <div class="pricing-bottom-section service-block-pricing text-center">
                        <p class="pricing-actual-figure">$@basicMonthlyCostAsString / Month</p>

                        <p class="pricing-actual-figure">$@basicYearlyCostAsString / Year</p>
                        <p class="pricing-discount-amount text-primary">@Model.BasicYearlyCost_UpSellText</p>

                        <a href="/signup/?SignUpType=Basic" class="btn btn-default">Sign Up</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 service-pricing-main">
                <div class="service-pricing-block service-pricing-blue">
                    @{ Html.RenderPartial("_Partial-PricingFeatured"); }
                    <div class="pricing-bottom-section service-block-pricing text-center">
                        <p class="pricing-actual-figure">$@featuredMonthlyCostAsString / Month</p>

                        <p class="pricing-actual-figure">$@featuredYearlyCostAsString / Year</p>
                        <p class="pricing-discount-amount text-danger">@Model.BasicAndFeaturedAddOnYearlyCost_UpSellText</p>

                        <a href="/signup/?SignUpType=Featured" class="btn btn-default">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
@endsection