@extends('shared._layout-base')



@section('page-content')
    @php
        $admin = false;
    @endphp


    <header role="banner">
        <div class="navbar-fixed-top" style="background-color:#f1f1f1;">
            <div class="container top-header hidden-xs">
                <!-- Logo -->
                <div class="col-sm-4 col-md-4 col-lg-4 hidden-xs">
                    <div class="logo">
                        <a href="/"><img src="/images/Gig_Green_Logo_Web_SMALL.png"/></a>
                    </div>
                </div>
                <!-- Registration Buttons -->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                    <div class="registration-container pull-right">
                        @if ($admin)
                            <a href="javascript:void(0);" id="layout_admin" class="layout_userDisplay"
                               data-toggle="popover" data-trigger="focus">Admin <span class="caret"></span></a>
                            @if (true) <span style="font-size:1.3em;color:lightgrey;">&nbsp;|&nbsp;</span> @endif
                        @endif


                        @auth
							@if (Auth::user()->type == 'Visitor')
                            <a href="javascript:void(0);" id="layout_visitor" class="layout_userDisplay"
                               data-toggle="popover" data-trigger="focus">{{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}} <span class="caret"></span></a>
							   
							  
							 @endif
							 @if (Auth::user()->type == 'Vendor')
                            <a href="javascript:void(0);" id="layout_user" class="layout_userDisplay"
                               data-toggle="popover" data-trigger="focus">{{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}} <span class="caret"></span></a>
							 @endif
                        @endauth

                        @guest
                            <a href="/signin/" class="btn btn-primary">Sign In</a>
                            <span>&nbsp;</span>
                            <a href="/register/" class="btn btn-primary">Register</a>
                        @endguest

                        @if(auth()->check())
                            <favorites-counter :user="{{ auth()->user() }}" :favorites="{{ $favorites }}"></favorites-counter>
                        @else
                            <favorites-counter :user="null" :favorites="{{ $favorites }}"></favorites-counter>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <nav id="main-navbar" class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header navbar-menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- text logo on mobile view -->
                        <a id="hypHome_MobileLogo" class="navbar-brand visible-xs" href="/">
                            GigHighway
                        </a>

                        <div class="header-inner-right visible-xs">
                            <ul class="menu-icon-list">
                                @if (true)

                                    <li class="menu-icons"><a id="headerMobileSearch"
                                                              class="hypLayout_GlobalHeaderSearch"><span
                                                    class="glyphicon glyphicon-search"></span></a></li>
                                @endif
                                <li class="menu-icons"><a data-target="#hdivQuoteCart_FavoriteItemsModal"
                                                          data-toggle="modal"><span
                                                class="glyphicon glyphicon-heart"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        @section('primary-menu')
                            <ul class="nav navbar-nav" role="menu">
                                <li class="menuItem_l1">
                                    <a href="/category/music-entertainment/">Music Entertainment</a>

                                </li>
                                <li class="menuItem_l1">
                                    <a href="/category/event-services/">Event Services</a>

                                </li>
                                <li class="menuItem_l1">
                                    <a href="/category/variety-acts/">Variety Acts</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false">Other Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/category/speakers/">Speakers</a></li>
                                        <li><a href="/category/transportation/">Transportation</a></li>
                                        <li><a href="/category/parties-and-rentals/">Parties and Rentals</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://blog.gighighway.com/">Blog</a></li>
                                <li class="visible-xs divider"></li>
                                <li class="visible-xs"><a href="/register/">Register</a></li>
                                <li class="visible-xs"><a href="/signin/">Sign in</a></li>
                            </ul>
                        @show
                        {{--@yield('primary-menu')--}}
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container-fluid no-padding banner-container">
        @yield('banner')
    </div>

    <main id="mainContent" role="main" class="container main-container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('main-body')
    </main>

    <section class="container-fluid">
        {{--@RenderSection("ClientLogos", required: false)--}}
    </section>
@endsection
@section('footer')
    <footer class="clearFix">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="/aboutus/">About Us</a></li>
                        <li><a href="/privacypolicy/">Privacy Policy</a></li>
                        <li><a href="/termsofuse/">Terms and Conditions</a></li>
                        <li><a href="http://blog.gighighway.com/" target="_blank">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="/register/">Sign Up</a></li>
                        <li><a href="/requestquote/">Quick Quote</a></li>
                        <li><a href="/signin/">Sign In</a></li>
                        <li><a href="/help/">Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="/contactus/">Contact Us</a></li>
                        <li><a href="tel:8012602276">Tel: (801) 260-2276</a></li>
                        <li>
                            <a href="mailto:info@gighighway.com">Email: info@gighighway.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Follow Us</h4>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/GigHighway" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/gighighway/" target="_blank">Instagram</a></li>
                        <li><a href="https://plus.google.com/+Gighighway1" target="_blank">Google Plus</a></li>
                        <li><a href="https://www.youtube.com/channel/UCjkwyekOcYrVZd5hUpV9N_A"
                               target="_blank">YouTube</a></li>
                        <li><a href="https://twitter.com/gighighway" target="_blank">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-inverse text-center copyright">
            &copy;@php $date = new DateTime("now"); echo $date->format("Y"); @endphp GigHighway. All rights reserved.
        </div>
    </footer>
@endsection