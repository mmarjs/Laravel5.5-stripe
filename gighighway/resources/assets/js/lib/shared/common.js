/************************* Common Utilities (common.js) - Start ************************/

//Should always be called as such: if(typeof anyVarThatMightNotBeSet !== "undefined" && hasValue(anyVarThatMightNotBeSet)){ //do something } else { //do nothing }
function hasValue(variable) {
    lastErroredCallTrace += "->hasValue";

    if ((variable) && typeof variable !== "undefined") {
        var variableValue = true;
        var isBoolean = (typeof variable === "boolean");
        var isArrayList = (variable instanceof Array);

        if (isBoolean) {
            variableValue = (variable === false) ? false : true;
        }

        if (isArrayList) {
            variableValue = (variable.length > 0);
        }
        
        return variableValue;
    }
    else {
        return false;
    }
}

function isAttrDefined(attribute) {
    lastErroredCallTrace += "->isAttrDefined";

    var isAttrDefined = false;

    try {
        isAttrDefined = (typeof attribute !== "undefined" && attribute !== false && attribute != "");
    }
    catch (err) {
        isAttrDefined = false;
    }

    return isAttrDefined;
}

function doesFormElementHaveValue(formElement) {
    lastErroredCallTrace += "->doesFormElementHaveValue";

    if (!formElement.val()) {
        return false;
    }
    else if (formElement.val() == formElement.attr("placeholder")) {
        return false;
    }
    else {
        return true;
    }
}

function convertToDate(ticks) {
    var value = new Date(parseInt(ticks.replace("/Date(", "").replace(")/", ""), 10));
    return value.toLocaleDateString();
}

/************************* Common Utilities (common.js) - End ************************/

