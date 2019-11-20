/************************* Visibilty Control Type Open - Start ************************/

function enableInstances_VisibilityControlTypeOpen() {
    //Enable Accordion(s) - This is last to allow the css selector to find stuff in the accordion content, which it does not find when collapsed
    lastErroredCallTrace += "->enableInstances_VisibilityControlTypeOpen";

    $(lastParentElementSelector + " a.visibilityControlTypeOpen").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_VisibilityControlTypeOpen(tempThisVar); }, 1);
    });
}

function enable_VisibilityControlTypeOpen(targetElement) {
    lastErroredCallTrace += "->enableFeature_VisibilityControlTypeOpen";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-visibilityControlTypeOpenEnabled"))) {
        if (isAttrDefined(targetElement.attr("data-visibilityControlTypeTargetId")) && targetElement.attr("data-visibilityControlTypeTargetId").length > 0) {
            targetElement.click(function () {
                $("#" + targetElement.attr("data-visibilityControlTypeTargetId")).show("blind");
            });

            //Mark as enabled.
            targetElement.attr("data-visibilityControlTypeOpenEnabled", true);
        }
    }
}

/************************* Visibilty Control Type Open - Start ************************/

