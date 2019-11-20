/************************* Button - Start ************************/

function enableInstances_Button() {
    lastErroredCallTrace += "->enableInstances_Button";

    $(lastParentElementSelector + " .button").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_Button(tempThisVar); }, 1);
    });
}

function enable_Button(targetElement) {
    lastErroredCallTrace += "->enable_Button";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-buttonEnabled"))) {
        handleDisable(targetElement);
        targetElement.unbind("click").bind("click", function (event) {
            return buttonClick(targetElement, event);
        });

        //Mark as enabled.
        targetElement.attr("data-buttonEnabled", true);
    }

    var activeButtonFormGroup = targetElement.attr("data-formGroup");

    if ($.isFunction(window.enable_HorizontalFormLayout)) {
        enable_HorizontalFormLayout(activeButtonFormGroup);
    }
}

/************************* Button - End ************************/

