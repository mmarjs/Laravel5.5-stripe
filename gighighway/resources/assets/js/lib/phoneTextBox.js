/************************* PhoneTextBox - Start ************************/

function enableInstances_PhoneTextBox() {
    lastErroredCallTrace += "->enableInstances_PhoneTextBox";

    $(lastParentElementSelector + " input[type='tel'], " + lastParentElementSelector + " input.phoneTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_PhoneTextBox(tempThisVar); }, 1);
    });
}

function enable_PhoneTextBox(targetElement) {
    lastErroredCallTrace += "->enable_PhoneTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-phoneTextBoxEnabled"))) {
        targetElement.keyup(function (event) {
            //8  = Backspace
            //9  = Tab (so will stay highlighted)
            //16 = Reverse Tab - Shift+Tab (so will stay highlighted)
            //37 = Left Arrow
            //39 = Right Arrow
            if (getKeycode(event) != 8 && getKeycode(event) != 9 && getKeycode(event) != 16 && getKeycode(event) != 37 && getKeycode(event) != 39) {
                var countryIsoCode = ((!isAttrDefined(targetElement.attr("data-countryIsoCode")) || targetElement.attr("data-countryIsoCode").length == 0) ? websiteSettings.countryIsoCode : targetElement.attr("data-countryIsoCode"));
                var allowExtension = ((targetElement.attr("data-allowExtension") == "true") ? true : false);
                var useTollFreeFormatting = ((targetElement.attr("data-useTollFreeFormatting") == "true") ? true : false);
                targetElement.val(formatPhoneNumber(targetElement.val(), countryIsoCode, allowExtension, useTollFreeFormatting, event));
            }
        });

        targetElement.blur(function (event) {
            var countryIsoCode = ((!isAttrDefined(targetElement.attr("data-countryIsoCode")) || targetElement.attr("data-countryIsoCode").length == 0) ? websiteSettings.countryIsoCode : targetElement.attr("data-countryIsoCode"));
            var allowExtension = ((targetElement.attr("data-allowExtension") == "true") ? true : false);
            var useTollFreeFormatting = ((targetElement.attr("data-useTollFreeFormatting") == "true") ? true : false);
            if (doesFormElementHaveValue(targetElement)) { //Only process this if has value, otherwise the placeholder onblur logic gets messed up.
                targetElement.val(formatPhoneNumber(targetElement.val(), countryIsoCode, allowExtension, useTollFreeFormatting, event));
            }
        });

        self.setTimeout(function () { targetElement.keyup(); }, 1);

        //Mark as enabled.
        targetElement.attr("data-phoneTextBoxEnabled", true);
    }
}

function formatPhoneNumber(value, countryIsoCode, allowExtension, useTollFreeFormatting, event) {
    lastErroredCallTrace += "->formatPhoneNumber";

    var requestingElement = $("#" + event.target.id);
    var unformattedPhoneNumber = ""; //Set per ISO Code (leading zero)
    var isValidTollFreePrefix = false;
    var formattedPhoneNumber = "";

    switch (countryIsoCode.toUpperCase()) {
        default:
            unformattedPhoneNumber = makeNumeric(value, false, null, null, true);
            //Build and assign the "pattern", if not already there.
            if (!isAttrDefined(requestingElement.attr("pattern")) || requestingElement.attr("pattern").length == 0) {
                //(801) 123-1234                - ((\\((\\d{3})\\) (\\d{3})-(\\d{4}))
                //(801) 123-1234 ext. 12345     - (\\((\\d{3})\\) (\\d{3})-(\\d{4}) ext. \\d+)
                //801-123-1234                  - ((\\d{3})-(\\d{3})-(\\d{4}))
                //801-123-1234 ext. 12345       - ((\\d{3})-(\\d{3})-(\\d{4}) ext. \\d+$)
                //1-800-123-1234                - (1-(800|888|877|866|855|844|833|822)-(\\d{3})-(\\d{4}))
                //1-800-123-1234 ext. 12345     - (1-(800|888|877|866|855|844|833|822)-(\\d{3})-(\\d{4}) ext. \\d+))
                //all combined                  - ^((\((\d{3})\) (\d{3})-(\d{4}))|(\((\d{3})\) (\d{3})-(\d{4}) ext. \d+)|(1-(800|888|877|866|855|844|833|822)-(\d{3})-(\d{4}))|(1-(800|888|877|866|855|844|833|822)-(\d{3})-(\d{4}) ext. \d+))$
                var patternValue = "^((\\((\\d{3})\\) (\\d{3})-(\\d{4}))|(\\((\\d{3})\\) (\\d{3})-(\\d{4}) ext. \\d+)|((\\d{3})-(\\d{3})-(\\d{4}))|((\\d{3})-(\\d{3})-(\\d{4}) ext. \\d+$)|(1-(800|888|877|866|855|844|833|822)-(\\d{3})-(\\d{4}))|(1-(800|888|877|866|855|844|833|822)-(\\d{3})-(\\d{4}) ext. \\d+))$";
                requestingElement.attr("pattern", patternValue);
            }

            //Assign the "maxlength", if not already there.
            if (!isAttrDefined(requestingElement.attr("maxlength")) || requestingElement.attr("maxlength").length == 0) {
                if (allowExtension) {
                    requestingElement.attr("maxlength", "30");
                }
                else {
                    requestingElement.attr("maxlength", "14");
                }
            }

            //valid current & future toll free number prefixes : http://en.wikipedia.org/wiki/Toll_free_number
            var validTollFreePrefixies = new Array("800", "888", "877", "866", "855", "844", "833", "822");
            var validTollFreePrefixiesFirst2Only = new Array("80", "88", "87", "86", "85", "84", "83", "82");
            var first3Digits = unformattedPhoneNumber.charAt(0) + unformattedPhoneNumber.charAt(1) + unformattedPhoneNumber.charAt(2);
            var first4Digits = first3Digits + unformattedPhoneNumber.charAt(3);

            for (pfx in validTollFreePrefixies) {
                if (validTollFreePrefixies[pfx] == first3Digits) {
                    isValidTollFreePrefix = true;
                    unformattedPhoneNumber = "1" + unformattedPhoneNumber;
                }
                else if ("1" + validTollFreePrefixies[pfx] == first4Digits) {
                    isValidTollFreePrefix = true;
                }
                else if ("1" + validTollFreePrefixiesFirst2Only[pfx] == first3Digits && unformattedPhoneNumber.length == 3) {
                    isValidTollFreePrefix = true;
                }
            }

            if (!useTollFreeFormatting) {
                isValidTollFreePrefix = false;
            }

            if (isValidTollFreePrefix) {
                //1-###-###-#### ext. ####
                formattedPhoneNumber += "1" + "-" + unformattedPhoneNumber.charAt(1) + unformattedPhoneNumber.charAt(2) + unformattedPhoneNumber.charAt(3);
                if (unformattedPhoneNumber.length > 3) {
                    formattedPhoneNumber += "-";
                    formattedPhoneNumber += unformattedPhoneNumber.charAt(4) + unformattedPhoneNumber.charAt(5) + unformattedPhoneNumber.charAt(6);
                    if (unformattedPhoneNumber.length > 6) {
                        formattedPhoneNumber += "-";
                        formattedPhoneNumber += unformattedPhoneNumber.charAt(7) + unformattedPhoneNumber.charAt(8) + unformattedPhoneNumber.charAt(9) + unformattedPhoneNumber.charAt(10);
                        if (allowExtension) {
                            if (unformattedPhoneNumber.length > 11) {
                                formattedPhoneNumber += " ext. ";
                                for (var upn = 11; upn <= (unformattedPhoneNumber.length - 1) ; upn++) { //the (<= & -1) is needed to not get messed up with Packer 3.1 compression
                                    formattedPhoneNumber += unformattedPhoneNumber.charAt(upn);
                                }
                            }
                        }
                    }
                }
            }
            else {
                //If less then 4 in length, this still could be a valid toll-free number
                if (unformattedPhoneNumber.length > 2) {
                    if (unformattedPhoneNumber.charAt(0) == "1") {
                        var tempUnformattedPhoneNumber = "";
                        for (var upn2 = 1; upn2 <= (unformattedPhoneNumber.length - 1) ; upn2++) { //the (<= & -1) is needed to not get messed up with Packer 3.1 compression
                            tempUnformattedPhoneNumber += unformattedPhoneNumber.charAt(upn2);
                        }
                        unformattedPhoneNumber = tempUnformattedPhoneNumber;
                    }
                    //(###) ###-#### ext. ####
                    if (value.charAt(0) == "(") {
                        formattedPhoneNumber += "(";
                    }
                    formattedPhoneNumber += unformattedPhoneNumber.charAt(0) + unformattedPhoneNumber.charAt(1) + unformattedPhoneNumber.charAt(2);
                    if (unformattedPhoneNumber.length > 2) {
                        if (value.charAt(0) == "(") {
                            //(###) ###-#### ext. ####
                            formattedPhoneNumber += ") ";
                        }
                        else {
                            //###-###-#### ext. ####
                            formattedPhoneNumber += "-";
                        }
                        formattedPhoneNumber += unformattedPhoneNumber.charAt(3) + unformattedPhoneNumber.charAt(4) + unformattedPhoneNumber.charAt(5);
                        if (unformattedPhoneNumber.length > 5) {
                            formattedPhoneNumber += "-";
                            formattedPhoneNumber += unformattedPhoneNumber.charAt(6) + unformattedPhoneNumber.charAt(7) + unformattedPhoneNumber.charAt(8) + unformattedPhoneNumber.charAt(9);
                            if (allowExtension) {
                                if (unformattedPhoneNumber.length > 10) {
                                    formattedPhoneNumber += " ext. ";
                                    for (var upn3 = 10; upn3 <= (unformattedPhoneNumber.length - 1) ; upn3++) { //the (<= & -1) is needed to not get messed up with Packer 3.1 compression
                                        formattedPhoneNumber += unformattedPhoneNumber.charAt(upn3);
                                    }
                                }
                            }
                        }
                    }
                }
                else {
                    if (value == "1" && useTollFreeFormatting) {
                        formattedPhoneNumber = "1-";
                    }
                    else if (value == "1--" && useTollFreeFormatting) {
                        formattedPhoneNumber = "1-";
                    }
                    else if (value == "1-8" && useTollFreeFormatting) {
                        formattedPhoneNumber = "1-8";
                    }
                    else if (value.charAt(0) == "(") {
                        formattedPhoneNumber = "(" + unformattedPhoneNumber;
                    }
                    else {
                        formattedPhoneNumber = unformattedPhoneNumber;
                    }
                }
            }
            break;
    }

    return formattedPhoneNumber;
}

/************************* PhoneTextBox - End ************************/

