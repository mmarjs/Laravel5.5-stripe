/************************* PostalCodeTextBox - Start ************************/

function enableInstances_PostalCodeTextBox() {
    lastErroredCallTrace += "->enableInstances_PostalCodeTextBox";

    $(lastParentElementSelector + " input.postalCodeTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_PostalCodeTextBox(tempThisVar); }, 1);
    });
}

function enable_PostalCodeTextBox(targetElement) {
    lastErroredCallTrace += "->enable_PostalCodeTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-postalCodeTextBoxEnabled"))) {
        targetElement.keyup(function (event) {
            //8  = Backspace
            //9  = Tab (so will stay highlighted)
            //16 = Reverse Tab - Shift+Tab (so will stay highlighted)
            //37 = Left Arrow
            //39 = Right Arrow
            if (getKeycode(event) != 8 && getKeycode(event) != 9 && getKeycode(event) != 16 && getKeycode(event) != 37 && getKeycode(event) != 39) {
                var countryIsoCode = ((!isAttrDefined(targetElement.attr("data-countryIsoCode")) || targetElement.attr("data-countryIsoCode").length == 0) ? websiteSettings.countryIsoCode : targetElement.attr("data-countryIsoCode"));
                var allowExtended = ((targetElement.attr("data-allowExtended") == "true") ? true : false);
                targetElement.val(formatPostalCode(targetElement.val(), countryIsoCode, allowExtended, event));
            }
        });

        targetElement.blur(function (event) {
            var countryIsoCode = ((!isAttrDefined(targetElement.attr("data-countryIsoCode")) || targetElement.attr("data-countryIsoCode").length == 0) ? websiteSettings.countryIsoCode : targetElement.attr("data-countryIsoCode"));
            var allowExtended = ((targetElement.attr("data-allowExtended") == "true") ? true : false);
            if (doesFormElementHaveValue(targetElement)) { //Only process this if has value, otherwise the placeholder onblur logic gets messed up.
                targetElement.val(formatPostalCode(targetElement.val(), countryIsoCode, allowExtended, event));
            }
        });

        self.setTimeout(function () { targetElement.keyup(); }, 1);

        //Mark as enabled.
        targetElement.attr("data-postalCodeTextBoxEnabled", true);
    }
}

function formatPostalCode(value, countryIsoCode, allowExtended, event) {
    lastErroredCallTrace += "->formatPostalCode";

    var requestingElement = $("#" + event.target.id);

    switch (countryIsoCode.toUpperCase()) {
        case "CA":
            //Build and assign the "pattern", if not already there.
            if (!isAttrDefined(requestingElement.attr("pattern")) || requestingElement.attr("pattern").length == 0) {
                //var patternValue = "^\\d{5}(-\\d{4})?$";
                var patternValue = "^((A|B|C|E|G|H|J|K|L|M|N|P|R|S|T|V|X|Y)(\\d{1})(A|B|C|E|G|H|J|K|L|M|N|P|R|S|T|V|W|X|Y|Z) (\\d{1})(A|B|C|E|G|H|J|K|L|M|N|P|R|S|T|V|W|X|Y|Z)(\\d{1}))$";
                requestingElement.attr("pattern", patternValue);
            }

            //Assign the "maxlength", if not already there.
            if (!isAttrDefined(requestingElement.attr("maxlength")) || requestingElement.attr("maxlength").length == 0) {
                requestingElement.attr("maxlength", "7");
            }

            //http://www.infinitegravity.ca/postalcodeformat.htm (ANA NAN)
            var unformattedPostalCode = value.replace(/\s/g, "");
            var formattedPostalCode = "";

            if (unformattedPostalCode.length > 0) {
                var validCanadaFirstCharacterRegExp = /[ABCEGHJKLMNPRSTVXY]/;
                if (validCanadaFirstCharacterRegExp.test(unformattedPostalCode.charAt(0).toUpperCase())) {
                    formattedPostalCode += unformattedPostalCode.charAt(0).toUpperCase();
                }

                if (formattedPostalCode.length == 1 && unformattedPostalCode.length > 1) {
                    if (!isNaN(unformattedPostalCode.charAt(1)) && unformattedPostalCode.charAt(1) != " ") {
                        formattedPostalCode += unformattedPostalCode.charAt(1);
                    }
                }

                if (formattedPostalCode.length == 2 && unformattedPostalCode.length > 2) {
                    //http://en.wikipedia.org/wiki/Canadian_postal_code
                    //No postal code includes the letters D, F, I, O, Q, or U, as the OCR equipment used in automated sorting could easily confuse them with other letters and digits, especially when they are rendered as cursive handwriting. The letters W and Z are used, but are not currently used as the first letter.
                    //Added W and Z to First list
                    var validCanadaThirdAndFifthCharacterRegExp = /[ABCEGHJKLMNPRSTVWXYZ]/;
                    if (validCanadaThirdAndFifthCharacterRegExp.test(unformattedPostalCode.charAt(2).toUpperCase())) {
                        formattedPostalCode += unformattedPostalCode.charAt(2).toUpperCase();
                    }
                }

                if (formattedPostalCode.length == 3) {
                    formattedPostalCode += " ";
                }

                if (formattedPostalCode.length == 4 && unformattedPostalCode.length > 3) {
                    if (!isNaN(unformattedPostalCode.charAt(3)) && unformattedPostalCode.charAt(3) != " ") {
                        formattedPostalCode += unformattedPostalCode.charAt(3);
                    }
                }

                if (formattedPostalCode.length == 5 && unformattedPostalCode.length > 4) {
                    if (validCanadaThirdAndFifthCharacterRegExp.test(unformattedPostalCode.charAt(4).toUpperCase())) {
                        formattedPostalCode += unformattedPostalCode.charAt(4).toUpperCase();
                    }
                }

                if (formattedPostalCode.length == 6 && unformattedPostalCode.length > 5) {
                    if (!isNaN(unformattedPostalCode.charAt(5)) && unformattedPostalCode.charAt(5) != " ") {
                        formattedPostalCode += unformattedPostalCode.charAt(5);
                    }
                }
            }

            return formattedPostalCode;
            break;
        case "US":
            //Build and assign the "pattern", if not already there.
            if (!isAttrDefined(requestingElement.attr("pattern")) || requestingElement.attr("pattern").length == 0) {
                var patternValue = "^\\d{5}(-\\d{4})?$";
                requestingElement.attr("pattern", patternValue);
            }

            //Assign the "maxlength", if not already there.
            if (!isAttrDefined(requestingElement.attr("maxlength")) || requestingElement.attr("maxlength").length == 0) {
                if (allowExtended) {
                    requestingElement.attr("maxlength", "10");
                }
                else {
                    requestingElement.attr("maxlength", "5");
                }
            }

            var unformattedPostalCode = makeNumeric(value, false, null, null, false);
            var formattedPostalCode = "";

            formattedPostalCode += unformattedPostalCode.charAt(0) + unformattedPostalCode.charAt(1) + unformattedPostalCode.charAt(2) + unformattedPostalCode.charAt(3) + unformattedPostalCode.charAt(4);

            if ((formattedPostalCode.length == 5 && getKeycode(event) == 109) || (unformattedPostalCode.length > 5)) {
                formattedPostalCode += "-"
            }

            if (unformattedPostalCode.length > 5 && allowExtended) {
                formattedPostalCode += unformattedPostalCode.charAt(5) + unformattedPostalCode.charAt(6) + unformattedPostalCode.charAt(7) + unformattedPostalCode.charAt(8);
            }

            return formattedPostalCode;
            break;
        default:
            return value;
            break;
    }
}

/************************* PostalCodeTextBox - End ************************/

