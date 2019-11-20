/************************* UrlTextBox - Start ************************/

function enableInstances_UrlTextBox() {
    lastErroredCallTrace += "->enableInstances_PostalCodeTextBox";

    $(lastParentElementSelector + " input[type='url'], " + lastParentElementSelector + " input.urlTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_UrlTextBox(tempThisVar); }, 1);
    });
}


function enable_UrlTextBox(targetElement) {
    lastErroredCallTrace += "->enable_UrlTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-urlTextBoxEnabled"))) {
        //Build and assign the "pattern", if not already there.
        if (!isAttrDefined(targetElement.attr("pattern")) || targetElement.attr("pattern").length == 0) {
            var patternValue = "^(((ftp|http|https):\\/\\/[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4})|((ftp|http|https):\\/\\/[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}\\/.*))$";
            targetElement.attr("pattern", patternValue);
        }

        //Assign the "maxlength", if not already there.
        if (!isAttrDefined(targetElement.attr("maxlength")) || targetElement.attr("maxlength").length == 0) {
            targetElement.attr("maxlength", "200");
        }

        //Mark as enabled.
        targetElement.attr("data-urlTextBoxEnabled", true);
    }
}

/************************* UrlTextBox - End ************************/

