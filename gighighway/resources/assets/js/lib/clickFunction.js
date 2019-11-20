/************************* Click Function - Start ************************/

function enableInstances_ClickFunction() {
    lastErroredCallTrace += "->enableInstances_ClickFunction";

    $(lastParentElementSelector + " .clickFunction").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_ClickFunction(tempThisVar); }, 1);
    });
}

function enable_ClickFunction(targetElement) {
    lastErroredCallTrace += "->enable_ClickFunction";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-clickFunctionEnabled"))) {
        handleDisable(targetElement);
        targetElement.unbind("click").bind("click", function (event) {
            return buttonClick(targetElement, event);
        });

        //Mark as enabled.
        targetElement.attr("data-clickFunctionEnabled", true);
    }
}

/************************* Click Function - End ************************/

