<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" />
        <title>@yield('title', 'GigHighway')</title>
        @yield('header-scripts')
        <style>
            #layoutMobileSearchFormContainer {
                height: 219px;
            }

            .layout_MobileSearch {
                background-color: #EFEFEF;
                position: relative;
                z-index: 10;
            }

            .seach-close-icon {
                float: none;
                font-size: 20px;
                font-weight: 100;
                line-height: 13px;
                opacity: 1;
                -webkit-transition: all 0.2s;
                transition: all 0.2s;
                text-decoration: none;
            }

            #frmLayout_MofileGlobalSearch {
                padding: 40px;
            }

            a {
                cursor: pointer;
            }

            /*this needs to be fixed and handle at global css styles*/
            .navbar-menu-container {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .container > .navbar-header,
            .container-fluid > .navbar-header,
            .container > .navbar-collapse,
            .container-fluid > .navbar-collapse {
                margin-right: 0;
                margin-left: 0;
            }

            #hypLayout_FavoritesCartContainer {
                margin-left: 16px;
            }
        </style>
    </head>


    <body>

    <div id="app">
        @yield('page-content')
    </div>

    @yield('footer')

    <script>

        var websiteSettings = {
            isLocalhost: true,
            root: "https://www.gighighway.com/",
            relativePathRoot: "/",
            showPageLoadingMessage: false,
            autoHideLoadingMessage: false,
            isAjaxLoadedPage: false,
            countryIsoCode: "US",
            currencyIsoCode: "USD",
            cultureCode: "en",
            cmsMode: "View",
            isLoggedIn: false,
            isAdmin: false};

        //Init Google Analytics object to allow access throughout the page.
        var _gaq = [["_setAccount", "UA-xxxxxx-xx"], ["_setDomainName", "GigHighway.com"], ["_trackPageview"]];

    </script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    @yield('footer-includes')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ URL::asset('js/shared/bootstrap.min.js') }}"></script>

    @yield('footer-scripts')
    </body>

</html>