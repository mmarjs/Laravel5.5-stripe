/************************* Ajax - Start ************************/

//Send JSON back to an existing function    -> set a successFunction.
//Have returned HTML inserted into the DOM  -> set a targetElementID.
//Have JSON returned from the function call -> set successFunction and targetElementID as null.
function ajaxRequest(requestingElement, jsonToPost, serviceRequestUrl, successFunction, targetElementID, autocompleteResponse, isAsync, returnData) {
    lastErroredCallTrace += "->ajaxRequest";

    lastErroredFunctionName = "ajax.js -> ajaxRequest(requestingElement, jsonToPost, serviceRequestUrl, successFunction, targetElementID, autocompleteResponse, isAsync, returnData)";
    lastErroredRequestingElement = requestingElement;
    lastErroredServiceRequestUrl = serviceRequestUrl;
    lastErroredJsonToPost = jsonToPost;
    // TODO: Should probably check for serviceRequestUrl being empty string or undefined
    
    returnData = (typeof returnData === "undefined") ? true : returnData;

    var requestType = "GET";
    var requestDataType = "application/x-www-form-urlencoded; charset=UTF-8";
    var returnDataType = "json"; //"html", "jsonp", "script", "text", "xml"

    if (jsonToPost != null) {
        requestType = "POST";
        requestDataType = "application/json; charset=UTF-8";
    }
    else {
        jsonToPost = "{}";
    }

    if (targetElementID != null) {
        returnDataType = "html";
    }

    if (serviceRequestUrl.indexOf("http") == 0) {
        returnDataType = "jsonp";
    }

    var dataTemp;

    if (returnDataType == "jsonp") {
        //Make the Ajax (JSONP) call.
        $.ajax({
            url: serviceRequestUrl,
            data: jsonToPost,
            dataType: "jsonp",
            success: function (data) {
                dataTemp = ajaxSuccess(data, "success", null, requestingElement, targetElementID, successFunction);
                if (autocompleteResponse != null) {
                    autocompleteResponse(dataTemp);
                }
            },
            error: errorOnAjaxRequest
        });
    }
    else {
        //Make the Ajax call.
        if (autocompleteResponse != null) {
            requestType = "GET";
            isAsync = true;
        }

        $.ajax({
            url: serviceRequestUrl,
            data: jsonToPost,
            type: requestType,
            contentType: requestDataType,
            dataType: returnDataType,
            cache: false,
            async: isAsync,
            success: function (data, textStatus, jqXHR) {
                dataTemp = ajaxSuccess(data, textStatus, jqXHR, requestingElement, targetElementID, successFunction);
                if (autocompleteResponse != null) {
                    autocompleteResponse(dataTemp);
                }
            },
            error: errorOnAjaxRequest
        });
    }

    if (autocompleteResponse == null && returnData) {
        return dataTemp;
    }
}

function ajaxSuccess(data, textStatus, jqXHR, requestingElement, targetElementID, successFunction) {
    if (textStatus == "success") {
        //Reset Session Warning Timers
        if (typeof sessionManagement !== "undefined") {
            sessionManagement.setSessionExpiration();
        }

        var dataTemp = data;
        if (dataTemp != null) {
            dataTemp = data.d || data; //WCF sends back with "d" wrapper.

            // jQuery API function trim usage: $.trim()
            if (typeof dataTemp != "object" && (($.trim(dataTemp.indexOf("{")) == 0 && $.trim(dataTemp.indexOf("}")) >= 1) || ($.trim(dataTemp.indexOf("[")) == 0 && $.trim(dataTemp.indexOf("]")) >= 1))) {
                //Is JSON Data. Parse it.
                lastErroredJsonReturned = dataTemp;
                lastErroredCallTrace += "->ajaxRequest.parseJSON{";
                dataTemp = $.parseJSON(dataTemp);
                lastErroredCallTrace += "}";
                lastErroredJsonReturned = dataTemp;
            }
        }

        if (targetElementID != null) {
            //if (targetElementID.indexOf("window") > -1) {
            //    var $windowLoadingMessage = $("#" + targetElementID + " .windowLoadingMessage");
            //    if ($windowLoadingMessage.length > 0) {
            //        $windowLoadingMessage.after(dataTemp);
            //    }
            //}
            //else {
                $("#" + targetElementID).html(dataTemp);
            //}
        }

        if (successFunction != null) {
            var dynamicFunctionReturnValue = callFunctionDynamically(successFunction, requestingElement, dataTemp, targetElementID);

            if (requestingElement != null) {
                //If the dynamically called function returns false, the buttonClickRequestComplete will not be called
                if (dynamicFunctionReturnValue !== false && typeof buttonClickRequestComplete == "function") {
                    buttonClickRequestComplete(requestingElement);
                }
            }
        }

        //TODO: can this work with async call? (I think not. Need to confirm);
        if (targetElementID == null && successFunction == null) {
            return dataTemp;
        }
    }
    else {
        errorOnAjaxRequest(jqXHR, textStatus, "Error on $.ajax.success (textStatus != 'success')");
    }
}

/************************* errorOnAjaxRequest - Start ************************/

var lastErroredFunctionName = null;
var lastErroredRequestingElement = null;
var lastErroredServiceRequestUrl = null;
var lastErroredJsonToPost = null;
var lastErroredJsonReturned = "";

// Checks the header request
// If the headers are empty or null, means that the call was aborted
// Otherwise we let our logic handle the error as before
function navigationAbortedCall(jqXHR) {
    return !jqXHR.getAllResponseHeaders();
}

function errorOnAjaxRequest(jqXHR, textStatus, errorThrown) {
    if (jqXHR != null && jqXHR["statusText"] == "error" && (jqXHR["status"] === 0 || jqXHR["status"] == "0") && navigationAbortedCall(jqXHR)) {
        //Do nothing. the Ajax call was aborted by clicking on a link, or something, before the request was able to complete.
        jqXHR.abort();
    }
    else {
        var errorMessage = "***********************************\r\n*****  Ajax Form Post Error  *****\r\n***********************************\r\n";

        if (lastErroredRequestingElement != null) {
            errorMessage += "Requesting Element: " + lastErroredRequestingElement.attr("id") + "\r\n";
        }
        errorMessage += "Service Request Url: " + lastErroredServiceRequestUrl + "\r\n";
        errorMessage += "JSON To Post: " + lastErroredJsonToPost + "\r\n";
        errorMessage += "JSON Returned: " + JSON.stringify(lastErroredJsonReturned) + "\r\n";
        errorMessage += "Function: " + lastErroredFunctionName + "\r\n";
        if (errorThrown != "") {
            errorMessage += "Error Thrown: " + errorThrown + "\r\n";
        }

        errorMessage += "jqXHR: " + jqXHR + "\r\n";
        if (jqXHR != null) {
            for (jqXHRProperty in jqXHR) {
                var propValue = jqXHR[jqXHRProperty];
                if (!$.isFunction(propValue)) {
                    try
                    {
                        if (jqXHRProperty == "responseText" && jqXHR[jqXHRProperty] != null && jqXHR[jqXHRProperty].indexOf("<title>") > 1) {
                            errorMessage += "Exception Message: " + jqXHR[jqXHRProperty].substring(jqXHR[jqXHRProperty].indexOf("<title>") + 7, jqXHR[jqXHRProperty].indexOf("</title>")) + "\r\n";
                        }
                        else {
                            errorMessage += "jqXHR." + jqXHRProperty + ": " + jqXHR[jqXHRProperty] + "\r\n";
                        }
                    }
                    catch (ex) {
                        errorMessage += "jqXHR." + jqXHRProperty + ": " + jqXHR[jqXHRProperty] + "\r\n";
                    }
                }
            }
        }
        errorMessage += "\r\n";

        errorMessage += "textStatus: " + textStatus + "\r\n";
        if (textStatus != null && typeof textStatus != "string") {
            for (textStatusProperty in textStatus) {
                var propValue = textStatus[textStatusProperty];
                if (!$.isFunction(propValue)) {
                    if (textStatusProperty != "popStackFrame") {
                        errorMessage += "textStatus." + textStatusProperty + ": " + textStatus[textStatusProperty] + "\r\n";
                        if (textStatusProperty == "number") {
                            var errorNumber = textStatus[textStatusProperty];
                            errorMessage += "textStatus.number[Facility Code]: " + (errorNumber >> 16 & 0x1FFF) + "\r\n";
                            errorMessage += "textStatus.number[Number]: <a href=\"http://msdn.microsoft.com/en-us/library/1dk3k160\">" + (errorNumber & 0xFFFF) + "</a>\r\n";
                        }
                    }
                }
            }
        }
        errorMessage += "\r\n";

        if (lastErroredCallTrace != null && lastErroredCallTrace != "") {
            errorMessage += "Call Trace: " + lastErroredCallTrace + "\r\n";
        }

        //Write Error Log
        submitLog(lastErroredFunctionName, errorMessage, errorThrown, 4);

        //Clear the global vars
        lastErroredCallTrace = "";
        lastErroredFunctionName = null;
        lastErroredRequestingElement = null;
        lastErroredServiceRequestUrl = null;
        lastErroredJsonToPost = null;

        if (websiteSettings.root.indexOf("GigHighway.com") > 0) {
            alert("Something has gone wrong with your request. The details of the error has been sent to the technical staff.\r\n\r\nYou may be able to temporally solve the problem by refreshing the page and trying again.");
        }
        else {
            alert(errorMessage);
        }
    }
}

function submitLog(method, message, errorThrown, logType) {
    try {
        $.ajax({
            type: "POST",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            cache: false,
            data: "{\"method\":\"" + jsonValueCleanUp(method) + "\",\"message\":\"" + jsonValueCleanUp(message.replace(/(\r\n|\n|\r)/gm, "<br />")) + "\",\"errorThrown\":\"" + jsonValueCleanUp(errorThrown.replace(/(\r\n|\n|\r)/gm, " ")) + "\",\"errorType\":\"" + logType + "\"}",
            url: websiteSettings.root + "general/submitLog/"
        });
    } catch (ex) {
        //Do Nothing
    }
}

function jsonValueCleanUp(value) {
    lastErroredCallTrace += "->jsonValueCleanUp";
    
    value = $.trim(value);

    if (hasValue(value)) {
        value = value.replace(/"/g, "\\\"");
        value = value.replace(/(\r\n|[\r\n])/g, "\\n");
        value = value.replace(/\t/g, "    ");
    }

    return value;
}

/************************* errorOnAjaxRequest - End ************************/

/************************* Ajax - End ************************/

