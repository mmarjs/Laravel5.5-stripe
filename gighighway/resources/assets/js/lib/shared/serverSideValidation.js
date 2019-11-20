/************************* Server Side Validation - Start ************************/

function handleServerSideValidationErrors() {
    //Clear any previous validation
    if (lastRequestingElement != null) {
        clearFormValidation(lastRequestingElement.attr("data-formGroup"));
    }

    var isFormValid = false;
    var isFirstError = true;
    var firstErrorFormField;
    var validationErrorMessage = formValidationErrorMessageIntroduction + "\n\n";

    $(lastJsonResult.ErrorMessages).each(function () {
        //$(this).ModelProperty
        //$(this).ErrorCode
        var errorFormField = null;
        if ((this).ModelProperty != "") {
            errorFormField = $("[name='" + (this).ModelProperty + "']")
        }
        var errorMessage = (this).ErrorMessage;

        if ((this).Data != null) {
            for (dataProperty in (this).Data) {
                var propValue = (this).Data[dataProperty];
                if (!$.isFunction(propValue)) {
                    errorMessage = errorMessage.replace(new RegExp("(\\$\\{)" + dataProperty + "(\\})", "g"), propValue);
                }
            }
        }

        if (errorFormField != null) {
            //Replace ${PropertyDisplayName}, if exists in errorMessage.
            if (errorMessage.indexOf("${PropertyDisplayName}") >= 0) {
                //Get property's display name from the related form label
                errorMessage = errorMessage.replace(new RegExp("(\\$\\{)PropertyDisplayName(\\})", "g"), getRelatedLabelValue(errorFormField));
            }

            errorFormField.addClass("errorField");
            errorFormField.attr("title", errorMessage.replace(/"/g, "")); //TODO:ensure title friendly value.
            if (isFirstError) {
                isFirstError = false;
                firstErrorFormField = errorFormField;
            }
        }
        validationErrorMessage += " - " + errorMessage + "\n";
    });

    if (!isFormValid) {
        alert(jsPopupMessageCleanUp(validationErrorMessage));

        try {
            firstErrorFormField.focus();
        }
        catch (ex) {
            //Do nothing if not work.
        }
    }
}

function getRelatedLabelValue(formFieldElement) {
    return $.trim($("label[for='" + formFieldElement.attr("id") + "']").text().replace(":", "").replace(formValidationRequiredIndicator, "").replace("*", ""));
}

function clearFormValidation(formGroup) {
    lastErroredCallTrace += "->clearFormValidation";

    $("[data-formGroup='" + formGroup + "']").removeClass("errorField");
    $("[data-formGroup='" + formGroup + "']").removeAttr("title");
}

/************************* Server Side Validation - End ************************/

