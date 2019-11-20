/************************* errorOnAjaxRequest - Start ************************/

var lastErroredFunctionName = null;
var lastErroredRequestingElement = null;
var lastErroredServiceRequestUrl = null;
var lastErroredJsonToPost = null;
var lastErroredJsonReturned = "";

function errorOnAjaxRequest(jqXHR, textStatus, errorThrown) {
    if (jqXHR != null && jqXHR["statusText"] == "error" && jqXHR["status"] == "0" && lastErroredJsonToPost == null && lastErroredJsonReturned == "") {
        //Do nothing. the Ajax call was aborted by clicking on a link, or something, before the request was able to complete.
    }
    else {
        var errorMessage = "***********************************\r\n*****  Ajax Form Post Error  *****\r\n***********************************\r\n";
        errorMessage += "Function:\r\n" + lastErroredFunctionName + "\r\n\r\n";

        errorMessage += "errorThrown:\r\n" + errorThrown + "\r\n\r\n";

        errorMessage += "textStatus:\r\n" + textStatus + "\r\n";
        if (textStatus != null) {
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

        errorMessage += "jqXHR:\r\n" + jqXHR + "\r\n";
        if (jqXHR != null) {
            for (jqXHRProperty in jqXHR) {
                var propValue = jqXHR[jqXHRProperty];
                if (!$.isFunction(propValue)) {
                    errorMessage += "jqXHR." + jqXHRProperty + ": " + jqXHR[jqXHRProperty] + "\r\n";
                }
            }
        }
        errorMessage += "\r\n";

        if (lastErroredCallTrace != null && lastErroredCallTrace != "") {
            errorMessage += "Call Trace:\r\n" + lastErroredCallTrace + "\r\n\r\n";
        }
        if (lastErroredRequestingElement != null) {
            errorMessage += "Requesting Element:\r\n" + lastErroredRequestingElement.attr("id") + "\r\n\r\n";
        }
        errorMessage += "Service Request Url:\r\n" + lastErroredServiceRequestUrl + "\r\n\r\n";
        errorMessage += "JSON To Post:\r\n" + lastErroredJsonToPost + "\r\n\r\n";
        errorMessage += "JSON Returned:\r\n" + JSON.stringify(lastErroredJsonReturned) + "\r\n\r\n";

        //Write Error Log
        submitLog(lastErroredFunctionName, errorMessage, errorThrown, 4);

        //Clear the global vars
        lastErroredCallTrace = "";
        lastErroredFunctionName = null;
        lastErroredRequestingElement = null;
        lastErroredServiceRequestUrl = null;
        lastErroredJsonToPost = null;

        if (websiteRoot.indexOf("gighighway.com") > 0) {
            alert("Something has gone wrong with your request. The details of the error has been sent to our technical staff.\r\n\r\nYou may be able to temporally solve the problem by refreshing the page and trying again.");
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
            url: websiteRoot + "WebServices/GlobalClientService.svc/SubmitLog"
        });
    } catch (ex) {
        //Do Nothing
    }
}

/************************* errorOnAjaxRequest - End ************************/



