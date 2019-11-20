/************************* Client Side Validation - Start ************************/

function isFormValid(requestingButtonElement) {
    lastErroredCallTrace += "->isFormValid";

    var isFormValid = true;
    var validationErrorMessage = formValidationErrorMessageIntroduction + "\n\n";
    var isFirstError = true;
    var firstErrorFormField;

    //Clear any previous validation
    clearFormValidation(requestingButtonElement.attr("data-formGroup"));

    //Validation Check ("required" & "pattern")
    $("[data-formGroup='" + requestingButtonElement.attr("data-formGroup") + "'][required],[data-formGroup='" + requestingButtonElement.attr("data-formGroup") + "'][pattern]").each(function () {
        //Required
        if ($(this)[0].getAttribute("required") !== null) {
            if (!$(this).val() || $(this).val() == $(this).attr("placeholder") || ($(this).attr("type") == "checkbox" && !$(this).prop("checked"))) {
                $(this).addClass("errorField");
                //Special password field placeholder support.
                if (!Modernizr.input.placeholder && this.nodeName.toLowerCase() == "input" && $(this).attr("type").toLowerCase() == "password" && isAttrDefined($(this).attr("placeholder"))) {
                    $("#" + $(this).attr("id") + "_placeholderFakeInput").addClass("errorField");
                    $("#" + $(this).attr("id") + "_placeholderFakeInput").css("marginLeft", "-" + ($(this).width() + 4) + "px");
                }
                var errorMessage = "\"" + $.trim($("label[for='" + $(this).attr("id") + "']").text().replace(":", "").replace(formValidationRequiredIndicator, "").replace("*", "")) + "\"" + formValidationErrorMessageIsRequired;
                $(this).attr("title", errorMessage);
                validationErrorMessage += " - " + errorMessage + "\n";
                if (isFirstError) {
                    isFirstError = false;
                    firstErrorFormField = $(this);
                }
                $(this).keyup(function () {
                    if (!$(this).val() || $(this).val() == $(this).attr("placeholder")) {
                        $(this).addClass("errorField");
                        $(this).attr("title", errorMessage);
                        //Special password field placeholder support.
                        if (!Modernizr.input.placeholder && this.nodeName.toLowerCase() == "input" && $(this).attr("type").toLowerCase() == "password" && isAttrDefined($(this).attr("placeholder"))) {
                            $("#" + $(this).attr("id") + "_placeholderFakeInput").addClass("errorField");
                            $("#" + $(this).attr("id") + "_placeholderFakeInput").css("marginLeft", "-" + ($(this).width() + 4) + "px");
                        }
                    }
                    else {
                        $(this).removeClass("errorField");
                        $(this).attr("title", "");
                        //Special password field placeholder support.
                        if (!Modernizr.input.placeholder && this.nodeName.toLowerCase() == "input" && $(this).attr("type").toLowerCase() == "password" && isAttrDefined($(this).attr("placeholder"))) {
                            $("#" + $(this).attr("id") + "_placeholderFakeInput").removeClass("errorField");
                            $("#" + $(this).attr("id") + "_placeholderFakeInput").css("marginLeft", "-" + ($(this).width() + 6) + "px;");
                        }
                    }
                });

                isFormValid = false;
            }
        }

        //Pattern
        if (isAttrDefined($(this).attr("pattern"))) {
            if ($(this).attr("pattern").length > 0 && $(this).val() && $(this).val() != $(this).attr("placeholder")) {
                try {
                    var regExp = new RegExp($(this).attr("pattern"));
                    if (!regExp.test($(this).val())) {
                        $(this).addClass("errorField");
                        var errorMessage = "\"" + $.trim($("label[for='" + $(this).attr("id") + "']").text().replace(":", "").replace(formValidationRequiredIndicator, "").replace("*", "")) + "\"" + formValidationErrorMessageIsInvalid;
                        $(this).attr("title", errorMessage);
                        validationErrorMessage += " - " + errorMessage + "\n";
                        if (isFirstError) {
                            isFirstError = false;
                            firstErrorFormField = $(this);
                        }
                        $(this).keyup(function () {
                            if (!regExp.test($(this).val())) {
                                $(this).addClass("errorField");
                                $(this).attr("title", errorMessage);
                            }
                            else {
                                $(this).removeClass("errorField");
                                $(this).attr("title", "");
                            }
                        });

                        isFormValid = false;
                    }
                }
                catch (ex) {
                    //Regular Expression is not well formatted.
                    $(this).addClass("errorField");
                    var errorMessage = "\"" + $.trim($("label[for='" + $(this).attr("id") + "']").text().replace(":", "").replace(formValidationRequiredIndicator, "").replace("*", "")) + "\"" + formValidationErrorMessageIsInvalid + " RexExp failed. Error: " + ex;
                    $(this).attr("title", errorMessage);
                    validationErrorMessage += " - " + errorMessage + "\n";
                    isFormValid = false;
                }
            }
        }
    });

    //Validation Check (manual override)
    if (isFormValid && isAttrDefined(requestingButtonElement.attr("data-manualValidationFunction"))) {
        jsonResult = callFunctionDynamically(requestingButtonElement.attr("data-manualValidationFunction"), requestingButtonElement, null);
        if (!jsonResult.IsFormValid || jsonResult.IsFormValid == "false") {
            isFormValid = false;
            validationErrorMessage += jsonResult.AdditionalAlertErrorMessage;
            firstErrorFormField = $(jsonResult.FirstErrorFormFieldSelector);
        }
    }

    if (!isFormValid) {
        if (requestingButtonElement.attr("data-showAlertMessageOnError") != "false") {
            alert(jsPopupMessageCleanUp(validationErrorMessage));
        }
        try {
            firstErrorFormField.focus();
        }
        catch (ex) {
            //Do nothing if not work.
        }
    }

    return isFormValid;
}

function clearFormValidation(formGroup) {
    lastErroredCallTrace += "->clearFormValidation";

    $("[data-formGroup='" + formGroup + "']").removeClass("errorField");
    $("[data-formGroup='" + formGroup + "']").removeAttr("title");
}

/************************* Client Side Validation - Start ************************/

