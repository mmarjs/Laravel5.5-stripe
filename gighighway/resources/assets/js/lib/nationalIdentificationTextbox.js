/************************* NationalIdentificationTextBox - Start ************************/

function enableInstances_NationalIdentificationTextBox() {
    //Enable Accordion(s) - This is last to allow the css selector to find stuff in the accordion content, which it does not find when collapsed
    lastErroredCallTrace += "->enableInstances_NationalIdentificationTextBox";

    $(lastParentElementSelector + " input.nationalIdentificationTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_NationalIdentificationTextBox(tempThisVar); }, 1);
    });
}

function enable_NationalIdentificationTextBox(targetElement) {
    lastErroredCallTrace += "->enable_NationalIdentificationTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-nationalIdentificationTextBoxEnabled"))) {
        targetElement.keyup(function (event) {
            //8  = Backspace
            //9  = Tab (so will stay highlighted)
            //16 = Reverse Tab - Shift+Tab (so will stay highlighted)
            //37 = Left Arrow
            //39 = Right Arrow
            if (getKeycode(event) != 8 && getKeycode(event) != 9 && getKeycode(event) != 16 && getKeycode(event) != 37 && getKeycode(event) != 39) {
                var countryIsoCode = ((!isAttrDefined(targetElement.attr("data-countryIsoCode")) || targetElement.attr("data-countryIsoCode").length == 0) ? websiteSettings.countryIsoCode : targetElement.attr("data-countryIsoCode"));
                targetElement.val(formatNationalIdentificationNumber(targetElement.val(), countryIsoCode, event));
            }
        });

        targetElement.blur(function (event) {
            var countryIsoCode = ((!isAttrDefined(targetElement.attr("data-countryIsoCode")) || targetElement.attr("data-countryIsoCode").length == 0) ? websiteSettings.countryIsoCode : targetElement.attr("data-countryIsoCode"));
            if (doesFormElementHaveValue(targetElement)) { //Only process this if has value, otherwise the placeholder onblur logic gets messed up.
                targetElement.val(formatNationalIdentificationNumber(targetElement.val(), countryIsoCode, event));
            }
        });

        self.setTimeout(function () { targetElement.keyup(); }, 1);

        //Mark as enabled.
        targetElement.attr("data-nationalIdentificationTextBoxEnabled", true);
    }
}

function formatNationalIdentificationNumber(value, countryIsoCode, event) {
    lastErroredCallTrace += "->formatNationalIdentificationNumber";

    var requestingElement = $("#" + event.target.id);
    var unformattedNin = makeNumeric(value, false, null, null, false);
    var formattedNin = "";
    var section1Count = 3;
    var section2Count = 2;
    var section3Count = 4;

    switch (countryIsoCode.toUpperCase()) {
        case "CA": //123-123-123
            section1Count = 3;
            section2Count = 3;
            section3Count = 3;
            break;
        case "DO": //123-1234567-1
            section1Count = 3;
            section2Count = 7;
            section3Count = 1;
            break;
        default: //123-12-1234 (US)
            section1Count = 3;
            section2Count = 2;
            section3Count = 4;
            break;
    }

    //Build and assign the "pattern", if not already there.
    if (!isAttrDefined(requestingElement.attr("pattern")) || requestingElement.attr("pattern").length == 0) {
        var patternValue = "^((\\d{" + section1Count + "})-(\\d{" + section2Count + "})-(\\d{" + section3Count + "}))$";
        requestingElement.attr("pattern", patternValue);
    }

    //Assign the "maxlength", if not already there.
    if (!isAttrDefined(requestingElement.attr("maxlength")) || requestingElement.attr("maxlength").length == 0) {
        requestingElement.attr("maxlength", (section1Count + section2Count + section3Count + 2));
    }

    //Section 1
    var charCount = 0;
    while ((charCount + 1) <= section1Count) { //the (+1 & <=) is needed to not get messed up with Packer 3.1 compression
        formattedNin += unformattedNin.charAt(charCount);
        charCount++;
    }

    if (unformattedNin.length >= section1Count) {
        //Add dash
        formattedNin += "-";

        //Section 2
        charCount = 0;
        while ((charCount + 1) <= section2Count) { //the (+1 & <=) is needed to not get messed up with Packer 3.1 compression
            formattedNin += unformattedNin.charAt(charCount + section1Count);
            charCount++;
        }

        if (unformattedNin.length >= (section1Count + section2Count)) {
            //Add dash
            formattedNin += "-";

            //Section 2
            charCount = 0;
            while ((charCount + 1) <= section3Count) { //the (+1 & <=) is needed to not get messed up with Packer 3.1 compression
                formattedNin += unformattedNin.charAt(charCount + section1Count + section2Count);
                charCount++;
            }
        }
    }

    return formattedNin;
}

/************************* NationalIdentificationTextBox - End ************************/

