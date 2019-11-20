<?php

namespace GigHighway;

use Illuminate\Http\Request;

class SiteLoad
{


    public static function BuildJavaScriptWebSettingVars($showPageLoadingMessage = false, $autoHideLoadingMessage = false, $isAjaxLoadedPage = false){
        /*return sprintf("var websiteSettings = {{\r\n
                    isLocalhost: {0},\r\n
                    root: \"{1}\",\r\n
                    relativePathRoot: \"/\",\r\n
                    showPageLoadingMessage: {2},\r\n
                    autoHideLoadingMessage: {3},\r\n
                    isAjaxLoadedPage: {4},\r\n 
                    countryIsoCode: \"{5}\",\r\n
                    currencyIsoCode: \"{6}\",\r\n 
                    cultureCode: \"{7}\",\r\n
                    cmsMode: \"{8}\",\r\n 
                    isLoggedIn: {9},\r\n
                    isAdmin: {10}}}", (object) "true", (object) this._applicationStateRepository.Root, (object) showPageLoadingMessage.ToString().ToLower(), (object) autoHideLoadingMessage.ToString().ToLower(), (object) isAjaxLoadedPage.ToString().ToLower(), (object) "US", (object) "USD", (object) "en", (object) "View", (object) this._userState.IsLoggedIn.ToString().ToLower(), (object) this._userState.IsAdmin.ToString().ToLower());*/
        return '';
    }
}
