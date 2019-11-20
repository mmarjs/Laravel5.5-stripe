/************************* Email TextBox - Start ************************/

function enableInstances_EmailTextBox() {
    lastErroredCallTrace += "->enableInstances_EmailTextBox";

    $(lastParentElementSelector + " input[type='email'], " + lastParentElementSelector + " input.emailTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_EmailTextBox(tempThisVar); }, 1);
    });
}

function enable_EmailTextBox(targetElement) {
    lastErroredCallTrace += "->enable_EmailTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-emailTextBoxEnabled"))) {
        //Build and assign the "pattern", if not already there.
        if (!isAttrDefined(targetElement.attr("pattern")) || targetElement.attr("pattern").length == 0) {
            var patternValue = "^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}$";
            targetElement.attr("pattern", patternValue);
        }

        //Assign the "maxlength", if not already there.
        if (!isAttrDefined(targetElement.attr("maxlength")) || targetElement.attr("maxlength").length == 0) {
            targetElement.attr("maxlength", "200");
        }

        //Mark as enabled.
        targetElement.attr("data-emailTextBoxEnabled", true);
    }
}

/************************* Email TextBox - End ************************/

