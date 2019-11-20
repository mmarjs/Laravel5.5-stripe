/************************* Tab - Start ************************/

function enableInstances_Tab() {
    //Enable Accordion(s) - This is last to allow the css selector to find stuff in the accordion content, which it does not find when collapsed
    lastErroredCallTrace += "->enableInstances_Tab";

    $(lastParentElementSelector + " .tab").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_Tab(tempThisVar); }, 1);
    });
}

function enable_Tab(targetElement) {
    lastErroredCallTrace += "->enable_Tab";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-tabEnabled"))) {
        targetElement.tabs();

        //Mark as enabled.
        targetElement.attr("data-tabEnabled", true);
    }
}

/************************* Tab - End ************************/

