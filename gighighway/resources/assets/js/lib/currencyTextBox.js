/************************* Currency TextBox - Start ************************/

function enableInstances_CurrencyTextBox() {
    lastErroredCallTrace += "->enableInstances_CurrencyTextBox";

    $(lastParentElementSelector + " input.currencyTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_CurrencyTextBox(tempThisVar); }, 1);
    });
}

function enable_CurrencyTextBox(targetElement) {
    lastErroredCallTrace += "->enable_CurrencyTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-currencyTextBoxEnabled"))) {
        targetElement.keyup(function (event) {
            //8  = Backspace
            //9  = Tab (so will stay highlighted)
            //16 = Reverse Tab - Shift+Tab (so will stay highlighted)
            //37 = Left Arrow
            //39 = Right Arrow
            if ((getKeycode(event) != 8 && getKeycode(event) != 9 && getKeycode(event) != 16 && getKeycode(event) != 37 && getKeycode(event) != 39)) {
                var currencyIsoCode = ((!isAttrDefined(targetElement.attr("data-currencyIsoCode")) || targetElement.attr("data-currencyIsoCode").length == 0) ? websiteSettings.currencyIsoCode : targetElement.attr("data-currencyIsoCode"));
                var minimumAmount = ((!isAttrDefined(targetElement.attr("data-minimumAmount")) || targetElement.attr("data-minimumAmount").length == 0) ? 0.0 : targetElement.attr("data-minimumAmount"));
                var maximumAmount = ((!isAttrDefined(targetElement.attr("data-maximumAmount")) || targetElement.attr("data-maximumAmount").length == 0) ? null : targetElement.attr("data-maximumAmount"));
                targetElement.val(formatCurrency(targetElement.val(), currencyIsoCode, minimumAmount, maximumAmount, event));
            }
        });

        targetElement.blur(function (event) {
            var currencyIsoCode = ((!isAttrDefined(targetElement.attr("data-currencyIsoCode")) || targetElement.attr("data-currencyIsoCode").length == 0) ? websiteSettings.currencyIsoCode : targetElement.attr("data-currencyIsoCode"));
            if (doesFormElementHaveValue(targetElement)) { //Only process this if has value, otherwise the placeholder onblur logic gets messed up.
                var minimumAmount = ((!isAttrDefined(targetElement.attr("data-minimumAmount")) || targetElement.attr("data-minimumAmount").length == 0) ? 0.0 : targetElement.attr("data-minimumAmount"));
                var maximumAmount = ((!isAttrDefined(targetElement.attr("data-maximumAmount")) || targetElement.attr("data-maximumAmount").length == 0) ? null : targetElement.attr("data-maximumAmount"));
                targetElement.val(formatCurrency(targetElement.val(), currencyIsoCode, minimumAmount, maximumAmount, event));
            }
        });

        self.setTimeout(function () { targetElement.keyup(); }, 1);

        //Mark as enabled.
        targetElement.attr("data-currencyTextBoxEnabled", true);
    }
}

//TODO:New Country Setup - JavaScript:formatCurrency
function formatCurrency(value, currencyIsoCode, minimumAmount, maximumAmount, event) {
    lastErroredCallTrace += "->formatCurrency";

    var requestingElement = $("#" + event.target.id);
    var formattedCurrency = "";
    var decimalSeparator = ".";
    var decimalPlaceCount = 2;

    switch (currencyIsoCode.toUpperCase()) {
        case "EUR":
            decimalSeparator = ",";
            decimalPlaceCount = 2;
            break;
        default:
            decimalSeparator = ".";
            decimalPlaceCount = 2;
    }

    //Build and assign the "pattern", if not already there.
    if (!isAttrDefined(requestingElement.attr("pattern")) || requestingElement.attr("pattern").length == 0) {
        var patternValue;

        if (decimalSeparator.length > 0) {
            patternValue = "^((\\d+\\" + decimalSeparator + "\\d{1," + decimalPlaceCount + "})|(\\d+))$";
        }
        else {
            patternValue = "^\\d+$"; //number only
        }

        requestingElement.attr("pattern", patternValue);
    }

    //Assign a "maxlength", if not already there.
    if (!isAttrDefined(requestingElement.attr("maxlength")) || requestingElement.attr("maxlength").length == 0) {
        requestingElement.attr("maxlength", (20 + decimalPlaceCount)); //some huge amount, just to be safe
    }

    for (var i = 0; i <= value.length; i++) {
        var decimalIndex = -1;
        if (decimalSeparator.length > 0) {
            decimalIndex = formattedCurrency.indexOf(decimalSeparator);
        }
        if (((value.charAt(i) == decimalSeparator && decimalIndex < 0) || (!isNaN(value.charAt(i)) && value.charAt(i) != " ")) && (decimalIndex < 0 || formattedCurrency.length < (decimalIndex + 1 + decimalPlaceCount))) {
            if (value.charAt(i) == decimalSeparator && formattedCurrency.length == 0) {
                //Add zero before decimal, if the decimal is first valid char in value. 
                formattedCurrency = 0;
            }
            formattedCurrency += value.charAt(i);
        }
    }

    if (minimumAmount != null && !isNaN(minimumAmount) && Number(formattedCurrency) < Number(minimumAmount)) {
        formattedCurrency = minimumAmount;
    }

    if (maximumAmount != null && !isNaN(maximumAmount) && Number(formattedCurrency) > Number(maximumAmount)) {
        formattedCurrency = maximumAmount;
    }

    return formattedCurrency;
}

/************************* Currency TextBox - End ************************/

