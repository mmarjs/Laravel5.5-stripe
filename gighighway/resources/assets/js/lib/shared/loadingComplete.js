/************************* Loading Complete - Start ************************/

function ajaxLoadingComplete(parentElementSelector) {
    lastErroredCallTrace += "->ajaxLoadingComplete";

    if (typeof parentElementSelector === "undefined") {
        parentElementSelector = "body";
    }

    enableUiFeatures(parentElementSelector);
    hidePageLoadingDisplay();
}

function hidePageLoadingDisplay() {
    lastErroredCallTrace += "->hidePageLoadingDisplay";

    self.setTimeout("$('#mainPageLoadingMessage').hide(); $('#mainContent').removeClass('opacityHide');", 200);
}

//function hidePageLoadingDisplayOnWindow(windowId) {
//    lastErroredCallTrace += "->hidePageLoadingDisplayOnWindow";

//    enableUiFeatures("#" + windowId);
//    $("#" + windowId + " .windowLoadingMessage").remove();
//}

/************************* Loading Complete - End ************************/

