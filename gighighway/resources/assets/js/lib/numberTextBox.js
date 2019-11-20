/************************* NumberTextBox - Start ************************/

function enableInstances_NumberTextBox() {
    lastErroredCallTrace += "->enableInstances_NumberTextBox";

    $(lastParentElementSelector + " input[type='number'], " + lastParentElementSelector + " input.numberTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_NumberTextBox(tempThisVar); }, 1);
    });
}

function enable_NumberTextBox(targetElement) {
    lastErroredCallTrace += "->enable_NumberTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-numberTextBoxEnabled"))) {
        //Build and assign the "pattern", if not already there.
        if (!isAttrDefined(targetElement.attr("pattern")) || targetElement.attr("pattern").length == 0) {
            var patternValue = "^\\d+$";
            targetElement.attr("pattern", patternValue);
        }

        //Assign the "maxlength", if not already there.
        if (!isAttrDefined(targetElement.attr("maxlength")) || targetElement.attr("maxlength").length == 0) {
            targetElement.attr("maxlength", "11"); //safe int32 range
        }

        targetElement.keyup(function (event) {
            //8  = Backspace
            //9  = Tab (so will stay highlighted)
            //16 = Reverse Tab - Shift+Tab (so will stay highlighted)
            //37 = Left Arrow
            //39 = Right Arrow
            if (getKeycode(event) != 8 && getKeycode(event) != 9 && getKeycode(event) != 16 && getKeycode(event) != 37 && getKeycode(event) != 39) {
                var setEmptyToZero = ((targetElement.attr("data-setEmptyToZero") == "true") ? true : false);
                var min = ((!isAttrDefined(targetElement.attr("min"))) ? null : ((isNaN(parseInt(targetElement.attr("min"), 10))) ? null : eval(targetElement.attr("min"))));
                var max = ((!isAttrDefined(targetElement.attr("max"))) ? null : ((isNaN(parseInt(targetElement.attr("max"), 10))) ? null : eval(targetElement.attr("max"))));
                var allowLeadingZero = ((targetElement.attr("data-allowLeadingZero") == "true") ? true : false);
                targetElement.val(makeNumeric(targetElement.val(), setEmptyToZero, min, max, !allowLeadingZero));
            }
        });

        targetElement.blur(function () {
            var setEmptyToZero = ((targetElement.attr("data-setEmptyToZero") == "true") ? true : false);
            var min = ((!isAttrDefined(targetElement.attr("min"))) ? null : ((isNaN(parseInt(targetElement.attr("min"), 10))) ? null : eval(targetElement.attr("min"))));
            var max = ((!isAttrDefined(targetElement.attr("max"))) ? null : ((isNaN(parseInt(targetElement.attr("max"), 10))) ? null : eval(targetElement.attr("max"))));
            var allowLeadingZero = ((targetElement.attr("data-allowLeadingZero") == "true") ? true : false);
            if (setEmptyToZero || doesFormElementHaveValue(targetElement)) { //Only process this if has value, otherwise the placeholder onblur logic gets messed up.
                targetElement.val(makeNumeric(targetElement.val(), setEmptyToZero, min, max, !allowLeadingZero));
            }
        });

        //Mark as enabled.
        targetElement.attr("data-numberTextBoxEnabled", true);
    }
}

/************************* NumberTextBox - End ************************/

