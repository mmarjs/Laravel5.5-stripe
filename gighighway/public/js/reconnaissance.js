/// <reference path="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2-vsdoc.js" />
/// <reference path="modernizr-latest-customBuild.min.js" />

var lastErroredCallTrace = "";
var loadedScripts = [];
//#region Core UI Stuff

(function ($) {
    $.inArray = function (value, array, fromIndex) { //This is to support IE 8 and below. jQuery's way of doing it is an issue.
        fromIndex = fromIndex || 0;
        for (i = fromIndex; i < array.length; i++) {
            if (value == array[i]) {
                return i;
            }
        }

        return -1;
    };
})(jQuery);

function enableUiFeatures(parentElementSelector) {
    lastErroredCallTrace += "->enableUiFeatures";

    if (typeof parentElementSelector === "undefined") {
        parentElementSelector = "body";
    }

    scoutClient(parentElementSelector);
}

var newestVersion = 0; //YYYYMMDDHHMM

function scoutClient(parentElementSelector) {
    lastErroredCallTrace += "->scoutClient(" + parentElementSelector + ")";

    newestVersion = 0; //Reset in the case of a call after a DOM change. Only want to consider the additional scripts and not any of the previous ones.
    
    scoutScriptResource("Accordion",                        201501010000, parentElementSelector + " div.accordion", false, parentElementSelector);
    scoutScriptResource("AccordionToTabs",                  201501010000, parentElementSelector + " div.accordionToTabs", false, parentElementSelector);
    scoutScriptResource("Ajax",                             201602241247, websiteSettings.isAjaxLoadedPage, false, parentElementSelector);
    scoutScriptResource("AjaxForm",                         201602171249, parentElementSelector + " .ajaxFormPost", false, parentElementSelector);
    scoutScriptResource("Autocomplete",                     201607120928, parentElementSelector + " .autocomplete", false, parentElementSelector);
    scoutScriptResource("Button",                           201501010000, parentElementSelector + " .button", false, parentElementSelector);
    scoutScriptResource("ClickFunction",                    201501010000, parentElementSelector + " .clickFunction", false, parentElementSelector);
    scoutScriptResource("ClientSideValidation",             201501010000, parentElementSelector + " input[type='button'], " + parentElementSelector + "  input[type='submit']", false, parentElementSelector);
    scoutScriptResource("ContentBox",                       201501010000, parentElementSelector + " div.contentBox", false, parentElementSelector);
    scoutScriptResource("CurrencyTextBox",                  201501010000, parentElementSelector + " input.currencyTextBox", false, parentElementSelector);
    scoutScriptResource("DataTable",                        201604090242, parentElementSelector + " table.dataTable", false, parentElementSelector);
    scoutScriptResource("DateTextBox",                      201501010000, parentElementSelector + " input[type='date'], " + parentElementSelector + " input.dateTextBox", Modernizr.inputtypes.date, parentElementSelector);
    scoutScriptResource("DateTimeTextBox",                  201501010000, parentElementSelector + " input[type='datetime'], " + parentElementSelector + " input.datetimeTextBox", Modernizr.inputtypes.datetime, parentElementSelector);
    scoutScriptResource("EqualHeight",                      201501010000, parentElementSelector + " [data-equalHeightGroup]", false, parentElementSelector);
    scoutScriptResource("EqualWidth",                       201501010000, parentElementSelector + " [data-equalWidthGroup]", false, parentElementSelector);
    scoutScriptResource("EmailTextBox",                     201501010000, parentElementSelector + " input[type='email'], " + parentElementSelector + " input.emailTextBox", Modernizr.inputtypes.email, parentElementSelector);
    scoutScriptResource("Form",                             201602171249, parentElementSelector + " form, " + parentElementSelector + " .form", false, parentElementSelector);
    scoutScriptResource("HorizontalFormLayout",             201501010000, parentElementSelector + " .horizontalFormLayout", false, parentElementSelector);
    scoutScriptResource("IndicateDirty",                    201501010000, parentElementSelector + " [data-indicateDirty='true']", false, parentElementSelector);
    scoutScriptResource("LimitedTextarea",                  201501010000, parentElementSelector + " textarea.limitedTextarea", false, parentElementSelector);
    scoutScriptResource("LoadingComplete",                  201501010000, websiteSettings.showPageLoadingMessage, false, parentElementSelector);
    scoutScriptResource("NationalIdentificationTextBox",    201501010000, parentElementSelector + " input.nationalIdentificationTextBox", false, parentElementSelector);
    scoutScriptResource("NumberTextBox",                    201501010000, parentElementSelector + " input[type='number'], " + parentElementSelector + " input.numberTextBox", Modernizr.inputtypes.number, parentElementSelector);
    scoutScriptResource("PhoneTextBox",                     201501010000, parentElementSelector + " input[type='tel'], " + parentElementSelector + " input.phoneTextBox", Modernizr.inputtypes.tel, parentElementSelector);
    scoutScriptResource("Placeholder",                      201501010000, parentElementSelector + " [placeholder]", Modernizr.input.placeholder, parentElementSelector);
    scoutScriptResource("PostalCodeTextBox",                201501010000, parentElementSelector + " input.postalCodeTextBox", false, parentElementSelector);
    scoutScriptResource("Respond",                          201501010000, "body", Modernizr.mq('(min-width: 0)'), parentElementSelector);
    scoutScriptResource("ResponsiveImage",                  201501010000, parentElementSelector + " .responsiveImage", false, parentElementSelector);
    scoutScriptResource("SessionWarning",                   201604060000, websiteSettings.isLoggedIn, false, parentElementSelector);
    scoutScriptResource("Tab",                              201501010000, parentElementSelector + " .tab", false, parentElementSelector);
    scoutScriptResource("Templating",                       201501010000, parentElementSelector + " script[type='text/x-jQuery-tmpl']", false, parentElementSelector);
    scoutScriptResource("TimeTextBox",                      201501010000, parentElementSelector + " input[type='time'], " + parentElementSelector + " input.timeTextBox", Modernizr.inputtypes.time, parentElementSelector);
    scoutScriptResource("UrlTextBox",                       201501010000, parentElementSelector + " input[type='url'], " + parentElementSelector + " input.urlTextBox", Modernizr.inputtypes.url, parentElementSelector);
    scoutScriptResource("VisibilityControlTypeOpen",        201501010000, parentElementSelector + " a.visibilityControlTypeOpen", false, parentElementSelector);
    scoutScriptResource("VisibilityControlTypeToggle",      201501010000, parentElementSelector + " a.visibilityControlTypeToggle", false, parentElementSelector);
    scoutScriptResource("Window",                           201501010000, parentElementSelector + " .window, " + parentElementSelector + " [data-cmsKey]", false, parentElementSelector);

    //TODO: Media Query Support for old browsers
    //if (!Modernizr.mq("screen and (min-width: 0)")) {
    //  loadScriptFileIfNeeded("Respond", parentElementSelector, null, null, null, websiteSettings.relativePathRoot + "js/libs/respond" + useJsMinIfNotLocal + ".js?version=201501010000");
    //}

    callArmedForces(parentElementSelector);
}

//Required - Control identified on page and no native support for the functionality.
var requiredScriptResourcesCount = 0;
var requiredScriptResourcesArray = new Array(); //Scripts needed on the page
//Requested - The script tag was created with src to required file.
var requestedScriptResourcesCount = 0;
var requestedScriptResourcesArray = new Array(); //Scripts that have been passed to callArmedForces and hopefully loaded.
//Loaded - The file loaded successfully.
var loadedScriptResourcesCount = 0;
var loadedScriptResourcesArray = new Array(); //Script files that have been successfully loaded to the client.

function scoutScriptResource(scriptID, versionNumber, isRequiredSelector, isSupportedNatively, parentElementSelector) {
    lastErroredCallTrace += "->scoutScriptResource(" + scriptID + ")";

    //Check if required
    if ((isRequiredSelector == null || isRequiredSelector == true || $(isRequiredSelector).length) && $.inArray(scriptID, requiredScriptResourcesArray) == -1) {
        if (!isSupportedNatively || (isSupportedNatively && (scriptID == "EmailTextBox" || scriptID == "PhoneTextBox" || scriptID == "UrlTextBox"))) //May still need script resource even though it is supported natively.
        {
            requiredScriptResourcesArray[requiredScriptResourcesCount] = scriptID;
            requiredScriptResourcesCount++;

            if (versionNumber > newestVersion) {
                newestVersion = versionNumber;
            }
        }
    }
}

function callArmedForces(parentElementSelector) {
    lastErroredCallTrace += "->callArmedForces(" + parentElementSelector + ")";

    if (requiredScriptResourcesArray.length) {
        var callArmedForcesUrl = websiteSettings.relativePathRoot + "js/armedForces.aspx?isInit=" + isInit + "&version=" + newestVersion;
        if (doesQueryStringKeyExist("min")) {
            callArmedForcesUrl += "&min=" + getQueryStringValue("min");
        }
        var armedForcesList = newestVersion + "_"; //Used for scriptFileID when calling loadScriptFile
        var callForArmedForces = false; //Don't call armedForces, if there are not required forces.
        var scriptIds = [];
        $.each(requiredScriptResourcesArray, function (key, value) {
            if ($.inArray(value, requestedScriptResourcesArray) == -1) { //only add if not already requested on the initial page load of some previous DOM change.
                callArmedForcesUrl += "&force=" + value;
                armedForcesList += "_" + value;
                callForArmedForces = true;
                scriptIds.push(value);
                
                //Keep track of which Scripts have been added to the script file request, so will know which additional ones to do on future calls after a DOM change.
                requestedScriptResourcesArray[requestedScriptResourcesCount] = value;
                requestedScriptResourcesCount++;
            }
        });

        //alert(callArmedForcesUrl + "\n\n" + armedForcesList);

        if (callForArmedForces) {
            loadScriptFile(armedForcesList, callArmedForcesUrl, parentElementSelector, scriptIds);
        }
        else {
            processPage(parentElementSelector);
        }
    }
    else {
        //No resources need to load, so just move on.
        processPage(parentElementSelector);
    }
}

function loadScriptFile(scriptElementID, srcUrl, parentElementSelector, scriptIds) {
    lastErroredCallTrace += "->loadScriptFile(" + scriptElementID + ")";

    if ($("#" + "js" + scriptElementID).length == 0) {
        var script = document.createElement("script");
        script.id = "js" + scriptElementID;
        script.type = "text/javascript";

        if (script.readyState) {  //IE Browser Support
            script.onreadystatechange = function () {
                if (script.readyState == "loaded" || script.readyState == "complete") {
                    script.onreadystatechange = null;
                    scriptFileLoaded(scriptElementID, parentElementSelector, scriptIds);
                }
            };
        }
        else {  //Other Browsers' Support
            script.onload = function () {
                scriptFileLoaded(scriptElementID, parentElementSelector, scriptIds);
            };

            script.onerror = function () {
                alert("The following scriptElementID failed: " + scriptElementID);
            };
        }

        script.src = srcUrl;

        document.getElementsByTagName("head")[0].appendChild(script);
    }
    else {
        scriptFileLoaded(scriptElementID, parentElementSelector);
    }
}

function scriptFileLoaded(loadedScriptID, parentElementSelector, scriptIds) {
    lastErroredCallTrace += "->scriptFileLoaded(" + loadedScriptID + ")";

    if ($.inArray(loadedScriptID, loadedScriptResourcesArray) == -1) {
        loadedScriptResourcesArray[loadedScriptResourcesCount] = loadedScriptID;
        loadedScriptResourcesCount++;
    }
    $.each(scriptIds, function (key, value) {
        if ($.inArray(loadedScripts, value) == -1) loadedScripts.push(value);
    });
    
    processPage(parentElementSelector);
}

function processPage(parentElementSelector) {
    lastErroredCallTrace += "->processPage";

    enableUiFeaturesActual(parentElementSelector);

    if (isInit) {
        isInit = false; //so wont call siteInit() & pageInit() again later when call enableUiFeatures() again after some DOM change.
        if ($.isFunction(window.siteInit)) {
            siteInit();
        }
        if ($.isFunction(window.pageInit)) {
            pageInit();
        }
    }
}

var lastParentElementSelector = null;

function waitForScriptToBeLoaded(parentElementSelector) {
    setTimeout(function () { enableUiFeaturesActual(parentElementSelector); }, 2);
}

function enableUiFeaturesActual(parentElementSelector) {
    lastErroredCallTrace += "->enableUiFeaturesActual";
    lastParentElementSelector = parentElementSelector; //Set the global var so the dynamic called functions have this value.

    var enableAccordion = false;
    $.each(requestedScriptResourcesArray, function (key, value) {
        if (value !== undefined && $.inArray(value, loadedScripts) == -1) {
            waitForScriptToBeLoaded(parentElementSelector);
            return;
        }

        if (value == "Accordion") {
            enableAccordion = true;
        } else {
            switch (value) {
            case "AccordionToTabs":
                enableInstances_AccordionToTabs();
                break;
            case "AjaxForm":
                enableInstances_AjaxForm();
                break;
            case "Autocomplete":
                enableInstances_Autocomplete();
                break;
            case "Button":
                enableInstances_Button();
                break;
            case "ClickFunction":
                enableInstances_ClickFunction();
                break;
            case "ContentBox":
                enableInstances_ContentBox();
                break;
            case "CurrencyTextBox":
                enableInstances_CurrencyTextBox();
                break;
            case "DataTable":
                enableInstances_DataTable();
                break;
            case "DateTextBox":
                enableInstances_DateTextBox();
                break;
            case "DateTimeTextBox":
                enableInstances_DateTimeTextBox();
                break;
            case "EmailTextBox":
                enableInstances_EmailTextBox();
                break;
            case "EqualHeight":
                enableInstances_EqualHeight();
                break;
            case "EqualWidth":
                //enableInstances_EqualWidth();
                break;
            case "Flexslider":
                enableInstances_Flexslider();
                break;
            case "Form":
                enableInstances_Form();
                break;
            //This is called by enable_FormGroupFeatures
            //case "HorizontalFormLayout":
            //    enable_HorizontalFormLayout();
            //    break;
            case "IndicateDirty":
                enableInstances_IndicateDirty();
                break;
            case "LimitedTextarea":
                enableInstances_LimitedTextarea();
                break;
            case "NationalIdentificationTextBox":
                enableInstances_NationalIdentificationTextBox();
                break;
            case "NumberTextBox":
                enableInstances_NumberTextBox();
                break;
            case "PhoneTextBox":
                enableInstances_PhoneTextBox();
                break;
            case "Placeholder":
                enableInstances_Placeholder(); // We won't support this for input type password in old browsers.
                break;
            case "PostalCodeTextBox":
                enableInstances_PostalCodeTextBox();
                break;
            case "ResponsiveImage":
                enableInstances_ResponsiveImage();

                //Check on resize to see if a different, more optimal image should be loaded.
                $(window).resize(function() {
                    lastParentElementSelector = "body";
                    enableInstances_ResponsiveImage();
                });
                break;
            case "Tab":
                enableInstances_Tab();
                break;
            case "TimeTextBox":
                enableInstances_TimeTextBox();
                break;
            case "UrlTextBox":
                enableInstances_UrlTextBox();
                break;
            case "VisibilityControlTypeOpen":
                enableInstances_VisibilityControlTypeOpen();
                break;
            case "VisibilityControlTypeToggle":
                enableInstances_VisibilityControlTypeToggle();
                break;
            case "Window":
                enableInstances_Window();

                //Enable Frameless iframes
                lastErroredCallTrace += "->frameborder";
                $(parentElementSelector + " ifame").attr("frameborder", "0"); //Done for Window with ContentType of URL
                break;
            }
        }
    });

    if (enableAccordion) {
        //Accordion must be last due to allowing access for its child content to be enabled.
        enableInstances_Accordion();
    }

    //Enable autofocus, if not natively supported by the browser. Sets focus on first item found by selector.
    lastErroredCallTrace += "->autofocus";
    if (!Modernizr.input.autofocus) {
        $(parentElementSelector + " [autofocus]").focus();
    }

    //Enable Alternating Row Style
    lastErroredCallTrace += "->tbody.alternatingRow";
    $(parentElementSelector + " tbody.alternatingRow").children("tr:odd").addClass("odd");

    //Enable Website-Specific Stuff(s) - All stuff that is not UI Library
    enableWebsiteSpecificFeatures(parentElementSelector);
}

function enableWebsiteSpecificFeatures(parentElementSelector) {
    lastErroredCallTrace += "->enableWebsiteSpecificFeatures";
}

//#endregion Core UI Stuff

//#region Supporting Functions

function doesQueryStringKeyExist(key) {
    lastErroredCallTrace += "->doesQueryStringKeyExist";

    var url = window.location.href;
    if (url.indexOf("?" + key + "=") != -1) {
        return true;
    }
    else if (url.indexOf("&" + key + "=") != -1) {
        return true;
    }

    return false;
}

function getQueryStringValue(key) {
    lastErroredCallTrace += "->getQueryStringValue";

    key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + key + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.href);
    if (results == null) {
        return "";
    }
    else {
        return decodeURIComponent(results[1].replace(/\+/g, " "));
    }
}

function updateQueryString(key, value, url) {
    if (!url) url = window.location.href;
    var re = new RegExp("([?|&])" + key + "=.*?(&|#|$)(.*)", "gi");

    if (re.test(url)) {
        if (typeof value !== 'undefined' && value !== null)
            return url.replace(re, '$1' + key + "=" + value + '$2$3');
        else {
            return url.replace(re, '$1$3').replace(/(&|\?)$/, '');
        }
    }
    else {
        if (typeof value !== 'undefined' && value !== null) {
            var separator = url.indexOf('?') !== -1 ? '&' : '?',
                hash = url.split('#');
            url = hash[0] + separator + key + '=' + value;
            if (hash[1]) url += '#' + hash[1];
            return url;
        }
        else
            return url;
    }
}

//#endregion Supporting Functions

function siteInit() {
    if (websiteSettings.autoHideLoadingMessage) {
        hidePageLoadingDisplay();
    }

    //This is for the Site-wide Important Message. If no element exists, will just not do it?
    self.setTimeout(function () { $("#notification").fadeIn("slow"); }, 500);
}

var isInit = true;
(function ($) {
    $(document).ready(function () {
        enableUiFeatures(); //This will load optional libs as needed and call pageInit()
    });
})(jQuery);

//#region Website-Specific Functions (global, every page usage)



//#endregion Website-Specific Functions (global, every page usage)

//#region Cookies
// Set/Get and remove Cookies
// Usage: 
//      set cookie      =>  $.cookie('key', 'value', { expires: 7 })
//      get cookie      =>  var cookieValue = $.cookie('key');
//      remove cookie   =>  $.removeCookie('key');

(function ($, undefined) {
    var defaults = {
        expires: 0,     // Number of days or Date when the cookie expires
        path: '/',      // Path for the cookie   
        domain: '',     // Domain for the cookie
        secure: false,  // Whether https is required or not
        json: false,    // Whether the value to store/retrieve is json or not. Uses JSON.stringify and JSON.parse
        raw: true      // Whether the value to store/retrieve is encoded or not, Default is true (encoded). Uses encodeURIComponent and decodeURIComponent
    };
    var pluses = /\+/g;
    
    $.cookie = function (key, value, options) {
        // Write
        if (value !== undefined) {
            options = $.extend({}, defaults, options);

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = defaults.json ? JSON.stringify(value) : String(value);

            return (document.cookie = [
				defaults.raw ? key : encodeURIComponent(key),
				'=',
				defaults.raw ? value : encodeURIComponent(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path ? '; path=' + options.path : '',
				options.domain ? '; domain=' + options.domain : '',
				options.secure ? '; secure' : ''
            ].join(''));
        }
        
        // Read
        var result = key ? undefined : {};
        var cookies = document.cookie ? document.cookie.split('; ') : [];

        for (var c = 0; c < cookies.length; c++) {
            var parts = cookies[c].split('=');
            var name = decode(parts.shift());
            var cookie = parts.join('=');

            if (key && key === name) {
                result = decodeAndParse(cookie);
                break;
            }

            if (!key) {
                result[name] = decodeAndParse(cookie);
            }
        }
        return result;
    };
    
    $.removeCookie = function (key, options) {
        if ($.cookie(key) !== undefined) {
            // Must not alter options, thus extending a fresh object...
            $.cookie(key, '', $.extend({}, options, { expires: -1 }));
            return true;
        }
        return false;
    };
    
    // private functions
    function decode(s) {
        if (defaults.raw) {
            return s;
        }
        return decodeURIComponent(s.replace(pluses, ' '));
    }

    function decodeAndParse(s) {
        if (s.indexOf('"') === 0) {
            // This is a quoted cookie as according to RFC2068, unescape...
            s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
        }
        s = decode(s);

        try { return defaults.json ? JSON.parse(s) : s; } catch (e) { return ''; }
    }
})(jQuery);

//#endregion Cookies End