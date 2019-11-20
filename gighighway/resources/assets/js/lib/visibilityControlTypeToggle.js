/************************* Visibility Control Type Toggle - Start ************************/

function enableInstances_VisibilityControlTypeToggle() {
    //Enable Accordion(s) - This is last to allow the css selector to find stuff in the accordion content, which it does not find when collapsed
    lastErroredCallTrace += "->enableInstances_VisibilityControlTypeToggle";

    $(lastParentElementSelector + " a.visibilityControlTypeToggle").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_VisibilityControlTypeToggle(tempThisVar); }, 1);
    });
}

function enable_VisibilityControlTypeToggle(targetElement) {
    lastErroredCallTrace += "->enableFeature_VisibilityControlTypeToggle";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-visibilityControlTypeToggleEnabled"))) {
        if (isAttrDefined(targetElement.attr("data-visibilityControlTypeTargetId")) && targetElement.attr("data-visibilityControlTypeTargetId").length > 0) {
            targetElement.click(function () {
                $("#" + targetElement.attr("data-visibilityControlTypeTargetId")).toggle("blind");
            });

            //Mark as enabled.
            targetElement.attr("data-visibilityControlTypeToggleEnabled", true);
        }
    }
}

/************************* Visibility Control Type Toggle - End ************************/

