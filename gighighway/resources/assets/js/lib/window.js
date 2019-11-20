/************************* Window - Start ************************/

function enableInstances_Window() {
    lastErroredCallTrace += "->enableInstances_Window";

    $(lastParentElementSelector + " .window").each(function () {
        //Check to see if already enabled.
        if (!isAttrDefined($(this).attr("data-windowEnabled"))) {
            var tempThisVar = $(this);
            self.setTimeout(function () { openDialogWindow(tempThisVar, false, false); }, 1);
            //openDialogWindow($(this), false, false);

            //Mark as enabled.
            $(this).attr("data-windowEnabled", true);
        }
    });
}

function openDialogWindow(requestingElement, isEventTrigger, isUserEvent) {
    lastErroredCallTrace += "->openDialogWindow";

    var windowElementId;

    if (requestingElement.get(0).tagName == "DIV") {
        //Use the requesting element as the window element.
        windowElementId = requestingElement.attr("id");
    }
    else {
        //requestingElement is a link or button of sorts. Create new div for the window element.
        windowElementId = requestingElement.attr("id") + "_window";
    }

    if (isEventTrigger || requestingElement.attr("data-openOnLoad") == "true" || requestingElement.attr("data-initForOpenFromCodeRequest") == "true") {
        var windowElement;

        //Check to see if window element has already been initialized, or not.
        if ($("#" + windowElementId).is(":data(dialog)")) {
            //Already initialized.
            windowElement = $("#" + windowElementId);

            //Clear content from previous requests
            windowElement.html("");
        }
        else {
            //Does not yet exist.
            if (requestingElement.get(0).tagName == "DIV") {
                windowElement = requestingElement;
            }
            else {
                windowElement = $("<div></div>", { id: windowElementId });
            }

            windowElement.dialog({
                autoOpen: ((requestingElement.attr("data-openOnLoad") == "true") ? true : false),
                closeOnEscape: ((requestingElement.attr("data-allowCloseByEscKey") == "false" || requestingElement.attr("data-hideCloseByX") == "true") ? false : true),
                dialogClass: ((!isAttrDefined(requestingElement.attr("data-additionalWindowClass"))) ? "" : requestingElement.attr("data-additionalWindowClass")) + ((requestingElement.attr("data-hideCloseByX") == "true") ? " noClose" : "") + ((isAttrDefined(requestingElement.attr("data-contentSourceType")) && requestingElement.attr("data-contentSourceType").toLowerCase() == "url") ? " windowWithIframe" : ""), //add this CSS: .noClose .ui-dialog-titlebar-close { display:none; }
                draggable: ((requestingElement.attr("data-isDraggable") == "false") ? false : true),
                height: ((!isAttrDefined(requestingElement.attr("data-height"))) ? "auto" : ((isNaN(parseInt(requestingElement.attr("data-height"), 10))) ? requestingElement.attr("data-height") : eval(requestingElement.attr("data-height")))),
                width: ((!isAttrDefined(requestingElement.attr("data-width"))) ? 300 : eval(requestingElement.attr("data-width"))),
                maxHeight: ((!isAttrDefined(requestingElement.attr("data-maxHeight")) || requestingElement.attr("data-maxHeight") == "false") ? "false" : eval(requestingElement.attr("data-maxHeight"))),
                maxWidth: ((!isAttrDefined(requestingElement.attr("data-maxWidth")) || requestingElement.attr("data-maxWidth") == "false") ? "false" : eval(requestingElement.attr("data-maxWidth"))),
                minHeight: ((!isAttrDefined(requestingElement.attr("data-minHeight"))) ? 150 : eval(requestingElement.attr("data-minHeight"))),
                minWidth: ((!isAttrDefined(requestingElement.attr("data-minWidth"))) ? 150 : eval(requestingElement.attr("data-minWidth"))),
                modal: ((requestingElement.attr("data-isModal") == "false") ? false : true),
                position: ((!isAttrDefined(requestingElement.attr("data-position"))) ? "center" : ((requestingElement.attr("data-position").indexOf("[") >= 0) ? eval(requestingElement.attr("data-position")) : requestingElement.attr("data-position"))), //eval for array
                resizable: ((requestingElement.attr("data-isResizable") == "false") ? false : true),
                title: ((!isAttrDefined(requestingElement.attr("data-windowTitle"))) ? "No Title" : requestingElement.attr("data-windowTitle"))
                //zIndex: ((!isAttrDefined(requestingElement.attr("data-zIndex"))) ? 1000 : eval(requestingElement.attr("data-zIndex")))
            });
        }

        //Add loading message when content is loaded from seperate HTTP request.
        if (isAttrDefined(requestingElement.attr("data-contentSourceType")) &&
                (requestingElement.attr("data-contentSourceType").toLowerCase() == "ajax" ||
                requestingElement.attr("data-contentSourceType").toLowerCase() == "url")) {
            windowElement.append(windowLoadingMessage.replace("**windowElementId**", windowElementId));
        }

        if (isEventTrigger) {
            openWindow("#" + windowElementId);
        }

        //Add CMS Attributes to Dialog Title
        if (windowElementId.indexOf("_cmsEditWindow") < 0) {
            //Don't do it for the CMS Edit window
            var windowTitleElement = $("#ui-dialog-title-" + windowElementId);
            windowTitleElement.attr("data-cmsKey", requestingElement.attr("data-cmsKey"));
            windowTitleElement.attr("data-activeCultureCode", requestingElement.attr("data-activeCultureCode"));
            windowTitleElement.attr("data-contentType", requestingElement.attr("data-contentType"));
        }

        if (isAttrDefined(requestingElement.attr("data-contentSourceType"))) {
            var contentSourceValue = "";

            if (isAttrDefined(requestingElement.attr("data-contentSourceValue"))) {
                contentSourceValue = requestingElement.attr("data-contentSourceValue");

                //Check to see if data-contentSourceValue is a URL with JavaScript in it to dynamically generate the URL.
                if (requestingElement.attr("data-contentSourceValue").indexOf("/") >= 0 && requestingElement.attr("data-contentSourceValue").indexOf("+") >= 0) {
                    contentSourceValue = eval("'" + contentSourceValue + "'");
                }
            }

            switch (requestingElement.attr("data-contentSourceType").toLowerCase()) {
                case "ajax":
                    var ajaxUrl = contentSourceValue;
                    if (ajaxUrl.indexOf("?") > 0) {
                        ajaxUrl += "&";
                    }
                    else {
                        ajaxUrl += "?";
                    }
                    ajaxUrl += "windowId=" + windowElementId;
                    //ajaxRequest(requestingElement, null, ajaxUrl, "windowAjaxRequestSuccess", windowElementId, null, true);
                    self.setTimeout(function () { ajaxRequest(requestingElement, null, ajaxUrl, "windowAjaxRequestSuccess", windowElementId, null, true) }, 100);
                    break;
                case "element":
                    windowElement.html($("#" + contentSourceValue).html().replace(/windowcmsenabled/gi, "windowcmsenabledIgnoreThisItIsFromCopy"));

                    self.setTimeout("enableUiFeatures(\"[aria-describedby='" + windowElementId + "']\")", 2);
                    break;
                case "inlinehtml":
                    //Do nothing.
                    break;
                case "url":
                    var iframeElement = document.createElement("iframe");
                    iframeElement.id = windowElementId + "_iframe";
                    iframeElement.setAttribute("src", eval("'" + contentSourceValue + "'"));
                    iframeElement.className = "windowIframe";
                    iframeElement.setAttribute("onload", "removeDialogWindowLoadingMessage(this);");
                    windowElement.append(iframeElement);
                    break;
            }
        }
    }

    if (!isEventTrigger && requestingElement.get(0).tagName != "DIV") {
        //requestingElement is a link or button of sorts. So add click event.
        requestingElement.unbind("click").bind("click", function () {
            openDialogWindow(requestingElement, true, true);
            return false;
        });
    }

    //Check to see if the window should be opened by a timer.
    if (!isEventTrigger && isNaN(parseInt(requestingElement.attr("data-openOnTimeoutInMilliseconds"), 10)) == false) {
        self.setTimeout("openDialogWindow($('#" + requestingElement.attr("id") + "'), true, false);", parseInt(requestingElement.attr("data-openOnTimeoutInMilliseconds"), 10));
    }

    //Check to see if the window should close automatically by a timer, if it was not opened by the user.
    if (!isUserEvent && isNaN(parseInt(requestingElement.attr("data-closeOnTimeoutInMilliseconds"), 10)) == false) {
        self.setTimeout("$('#" + windowElementId + "').dialog('close');", parseInt(requestingElement.attr("data-closeOnTimeoutInMilliseconds"), 10));
    }
}

function windowAjaxRequestSuccess() {

    var windowElementID = arguments[1];
    var doesExit = $("[aria-describedby='" + windowElementID + "']").length > 0;
    enableUiFeatures("[aria-describedby='" + windowElementID + "']");
    return true;
}

function removeDialogWindowLoadingMessage(requestingElement) {
    lastErroredCallTrace += "->removeDialogWindowLoadingMessage";

    $("#" + requestingElement.id.replace("_iframe", "_loadingMessage")).hide();
}

function openWindow(selector) {
    lastErroredCallTrace += "->openWindow";

    $(document).ready(function () {
        $(selector).dialog("open");
        $(selector).dialog("moveToTop");
    });
}

function closeWindow(selector) {
    lastErroredCallTrace += "->closeWindow";

    $(selector).dialog("close");
}



/************************* Window - End ************************/

