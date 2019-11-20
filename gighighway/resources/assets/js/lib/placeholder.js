/************************* Placeholder - Start ************************/

function enableInstances_Placeholder() {
    lastErroredCallTrace += "->enableInstances_Placeholder";

    $(lastParentElementSelector + " [placeholder]").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_Placeholder(tempThisVar); }, 1);
    });
}

function enable_Placeholder(targetElement) {
    lastErroredCallTrace += "->enable_Placeholder";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-placeholderEnabled"))) {
        if (!Modernizr.input.placeholder) {
            if (targetElement.get(0).nodeName.toLowerCase() == "input" && targetElement.attr("type").toLowerCase() == "password") {
                /* For now we won't support placeholder functionality for input fields type password in old browsers. */
            }
            else {
                targetElement
                    .addClass("placeholder")
                    .val(targetElement.attr("placeholder"));

                targetElement
                    .focus(function () {
                        if (targetElement.val() === targetElement.attr("placeholder")) {
                            targetElement
                                .removeClass("placeholder")
                                .val("")
                                .select();
                        }
                    })
                    .blur(function () {
                        if (targetElement.val() === targetElement.attr("placeholder") || targetElement.val() === "") {
                            targetElement
                                .addClass("placeholder")
                                .val(targetElement.attr("placeholder"));

                        }
                        else {
                            targetElement.removeClass("placeholder");
                        }
                    })
                    .change(function () {
                        if (targetElement.val() !== targetElement.attr("placeholder")) {
                            targetElement.removeClass("placeholder");
                        }
                    });
            }
        }

        //Mark as enabled.
        targetElement.attr("data-placeholderEnabled", true);
    }
}

/************************* Placeholder - End ************************/