/************************* Make Numeric - Start ************************/

function makeNumeric(value, setEmptyToZero, minNumberAllowed, maxNumberAllowed, removeLeadingZero) {
    lastErroredCallTrace += "->makeNumeric";

    var numericValue = "";

    for (var i = 0; i <= value.length; i++) {
        if (!isNaN(value.charAt(i)) && value.charAt(i) != " ") { //JavaScript interprets an empty string as a 0, which then fails the isNAN test.
            numericValue += value.charAt(i);
        }
    }

    if (setEmptyToZero) {
        if (numericValue == "") {
            numericValue = 0;
        }
    }

    //Remove leading 0
    if (removeLeadingZero) {
        if (numericValue.length > 1 && numericValue.charAt(0) == "0") {
            numericValue = numericValue.substring(1);
        }
    }

    //Yes, the "<=" is not needed, but the compressorrater would not work without it.
    if (removeLeadingZero && minNumberAllowed != null && numericValue <= minNumberAllowed) {
        numericValue = minNumberAllowed;
    }

    //Yes, the ">=" is not needed, but the compressorrater would not work without it.
    if (maxNumberAllowed != null && numericValue >= maxNumberAllowed) {
        numericValue = maxNumberAllowed;
    }

    return numericValue;
}

/************************* Make Numeric - End ************************/

