/************************* Button Click - Start ************************/

function buttonClick(requestingElement, event) {
    lastErroredCallTrace += "->buttonClick";

    var processRequest = true;

    if (isAttrDefined(requestingElement.attr("disabled"))) {
        processRequest = false;
    }
    
    if (isAttrDefined(requestingElement.attr("data-singleActionOnlyGroupName"))) {
        //Need to check to see if another action is already running.
        //Check to see if hidden status element exists.
        if ($("#hfIsActionRunning-" + requestingElement.attr("data-singleActionOnlyGroupName")).length == 0) {
            //Does not exist.
            //Create it.
            var hfElement = document.createElement("input");
            hfElement.id = "hfIsActionRunning-" + requestingElement.attr("data-singleActionOnlyGroupName");
            hfElement.setAttribute("type", "hidden");
            hfElement.setAttribute("value", "true");
            $("body").append(hfElement);
        }
        else {
            //Exists.
            //Now check to see if hidden status element indicates an action is already running.
            if ($("#hfIsActionRunning-" + requestingElement.attr("data-singleActionOnlyGroupName")).val() == "false") {
                $("#hfIsActionRunning-" + requestingElement.attr("data-singleActionOnlyGroupName")).val("true");
            }
            else {
                //Another call is already running, so this one ain't gonna happen.
                processRequest = false;
            }
        }
    }

    if (processRequest) {
        var isAjaxFormPost = (requestingElement.attr("class").indexOf("ajaxFormPost") >= 0);
        var isClickFunction = (requestingElement.attr("class").indexOf("clickFunction") >= 0);

        //Check if button has formgroup
        if (!isClickFunction) {
            //Ajax Form Post - Validation
            processRequest = isFormValid(requestingElement);
        }

        if (processRequest) {
            //Confirm Action
            if (isAttrDefined(requestingElement.attr("data-confirmActionMessage")) && requestingElement.attr("data-confirmActionMessage").length > 0) {
                processRequest = confirm(jsPopupMessageCleanUp(requestingElement.attr("data-confirmActionMessage")));
            }
        }

        if (processRequest) {
            //Overlay Window
            if (requestingElement.attr("data-overlayWindowWhileProcessing") == "true") {
                overlayWindow();
            }
            //Processing Message
            if (isAttrDefined(requestingElement.attr("data-processingMessage")) && requestingElement.attr("data-processingMessage").length > 0) {
                var divMessageElement = document.createElement("div");
                divMessageElement.id = requestingElement.attr("id") + "_processingMessage";
                divMessageElement.innerHTML = requestingElement.attr("data-processingMessage");
                divMessageElement.className = " buttonProcessingMessage";
                requestingElement.after(divMessageElement);
                requestingElement.hide();
            }

            //Ajax Form Post - Call
            if (isAjaxFormPost) {
                event.preventDefault();
                postAjaxForm(requestingElement, false);
            }

            //Click Function - Call
            if (isClickFunction) {
                event.preventDefault();
                callFunctionDynamically(requestingElement.attr("data-clickFunction"), requestingElement, null, null);
            }
        }
    }

    return processRequest;
}

function buttonClickRequestComplete(requestingElement) {
    lastErroredCallTrace += "->buttonClickRequestComplete";

    if (requestingElement != null) {
        hideOverlayWindow();
        $("#" + $(requestingElement).attr("id") + "_processingMessage").remove();

        if (!$(requestingElement).hasClass("hide")) {
            $(requestingElement).show();
        }

        if (isAttrDefined($(requestingElement).attr("data-singleActionOnlyGroupName"))) {
            //Need to mark the hidden status element to "false" to indicate that this action is no longer running and the next one can fired.
            $("#hfIsActionRunning-" + $(requestingElement).attr("data-singleActionOnlyGroupName")).val("false");
        }
    }
}

function handleDisable(targetElement) {
    if (isAttrDefined(targetElement.attr("disabled"))) {
        targetElement.addClass("disabled");
    }
    else {
        targetElement.removeClass("disabled");
    }
}

//Use for alert and confirm
function jsPopupMessageCleanUp(value) {
    lastErroredCallTrace += "->jsPopupMessageCleanUp";

    if (hasValue(value)) {
        value = value.replace(/<br \/>/gi, "\n");
        value = value.replace(/<br\/>/gi, "\n");
        value = value.replace(/<br>/gi, "\n");
        value = value.replace(/\\"/gi, "\"");
        value = value.replace("\\n", "\n");
    }

    return value;
}

/************************* Button Click - End ************************/

