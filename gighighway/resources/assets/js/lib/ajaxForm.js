/************************* Ajax Form - Start ************************/

function enableInstances_AjaxForm() {
    lastErroredCallTrace += "->enableInstances_AjaxForm";

    $(lastParentElementSelector + " .ajaxFormPost").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_AjaxForm(tempThisVar); }, 1);
        self.setTimeout(function () { enable_FormGroupFeatures(tempThisVar); }, 1);
    });

    //self.setTimeout(function () { setTabIndexes(); }, 1);
}

function enable_AjaxForm(targetElement) {
    lastErroredCallTrace += "->enable_AjaxForm";

    //Check to see if already enabled.
    if (isAttrDefined(targetElement.attr("disabled"))) {
        targetElement.addClass("disabled");
    }
    else {
        targetElement.removeClass("disabled");
    }

    if (!isAttrDefined(targetElement.attr("data-ajaxFormPostEnabled"))) {
        handleDisable(targetElement);
        //TODO:Do we want to support webforms?
        if (isAttrDefined(targetElement.attr("href"))) {
            if (targetElement.attr("href").indexOf("#") != 0) {
                targetElement.removeAttr("href"); //remove the asp.net call (__doPostBack)
            }
        }
        targetElement.unbind("click").bind("click", function (event) {
            buttonClick(targetElement, event);
            return false;
        });

        //Mark as enabled.
        targetElement.attr("data-ajaxFormPostEnabled", true);
    }
}

function enable_FormGroupFeatures(targetElement) {
    lastErroredCallTrace += "->enable_FormGroupFeatures";

    var activeButtonFormGroup = targetElement.attr("data-formGroup");

    //Loop through associated fields and set keyup event & required field indicator (This is done now on all. Cannot just search for [required], because maybe was required and then marked not to know and need to clear indicator)
    lastErroredCallTrace += "->simulateButtonClick";
    $(lastParentElementSelector + " [data-formGroup='" + activeButtonFormGroup + "'][name]").each(function () {
        //SimulateButtonClick
        //Check to see if already enabled.
        if (!isAttrDefined($(this).attr("data-enterKeySimulateButtonClickEnabled"))) {
            //Don't add this to textareas. When hit enter user wants to add new line and not submit.
            if ($(this).get(0).tagName != "TEXTAREA") {
                $(this).keyup(function (event) {
                    //13  = Enter                
                    if (getKeycode(event) == 13) {
                        simulateButtonClick("#" + targetElement.attr("id"));
                    }
                });
            }

            //Mark as enabled.
            $(this).attr("data-enterKeySimulateButtonClickEnabled", true);
        }

        //Required Field Indicator
        lastErroredCallTrace += "->requiredIndicator";
        var tempLabel = $(lastParentElementSelector + " label[for='" + $(this).attr("id") + "']");
        if ($(this)[0].getAttribute("required") !== null && tempLabel.html() != null) {
            if (tempLabel.html().indexOf(formValidationRequiredIndicator) < 0 && !tempLabel.hasClass("required")) { //Only add it once.
                tempLabel.append(formValidationRequiredIndicator);
            }
        }
        else if (tempLabel.html() != null && tempLabel.html().indexOf(formValidationRequiredIndicator) > 0) {
            tempLabel.html(tempLabel.html().replace(formValidationRequiredIndicator, ""));
        }
    });

    if ($.isFunction(window.enable_HorizontalFormLayout)) {
        enable_HorizontalFormLayout(activeButtonFormGroup);
    }
}

function setTabIndexes() {
    lastErroredCallTrace += "->setTabIndexes";

    var formControl = $("body").find("select, input, input[type!='hidden'], img.window, a, a.window, textarea, button");
    for (var x = 1; x < formControl.length; x++) { formControl[x].setAttribute("tabindex", x); }
}

function postAjaxForm(requestingElement, runValidation) {
    lastErroredCallTrace += "->postAjaxForm";

    var isFormValid = true;
    if (runValidation) {
        isFormValid = isFormValid(requestingElement);
    }
    //If form is valid, build the JSON and make the Ajax POST call.
    if (isFormValid) {
        //Find all the corresponding form fields and map them to the service method parameters and add them to JSON string for POST.
        var isFirstItem = true;
        var addComma = false;
        var isParameterObject = (isAttrDefined(requestingElement.attr("data-parameterObjectName")) && requestingElement.attr("data-parameterObjectName").length > 0);

        var jsonToPost = "{";

        if (isParameterObject) {
            jsonToPost += "\"" + requestingElement.attr("data-parameterObjectName") + "\":{";
        }

        var doesFormContainSecondNestedItem = false;
        var processedRadioButtonListCount = 0;
        var processedRadioButtonLists = new Array();

        var nestedObjectGroupCount = 0;
        var nestedObjectGroups = new Array();
        var formGroup = requestingElement.attr("data-formGroup");

        $("[data-formGroup='" + requestingElement.attr("data-formGroup") + "']").each(function () {
            if (isAttrDefined($(this).attr("name"))) {

                if (!isAttrDefined($(this).attr("data-nestedObjectName"))) {

                    processRadioButtonList($(this));

                    if (isFirstItem) {
                        isFirstItem = false;
                    }
                    else {
                        jsonToPost += ","
                    }

                    jsonToPost += buildJsonWithValues($(this));

                    addComma = true;
                }

                if (addComma && isAttrDefined($(this).attr("data-nestedObjectName")) && $.inArray($(this).attr("data-nestedObjectName"), nestedObjectGroups) == -1) {
                    jsonToPost += ", ";
                }

                if (isAttrDefined($(this).attr("data-nestedObjectName")) && $.inArray($(this).attr("data-nestedObjectName"), nestedObjectGroups) == -1) {
                    var isFirstNestedItem = true;
                    var isSecondNestedItem = $(this).attr("data-nestedObjectName").split('.').length > 1;

                    if (!isSecondNestedItem) {
                        jsonToPost += "\"" + $(this).attr("data-nestedObjectName") + "\":{";
                        $("[data-nestedObjectName='" + $(this).attr("data-nestedObjectName") + "']").each(function () {

                            processRadioButtonList($(this));

                            if (isFirstNestedItem) {
                                isFirstNestedItem = false;
                            }
                            else {
                                jsonToPost += ","
                            }

                            jsonToPost += buildJsonWithValues($(this));
                        });
                    }

                    $("[data-formGroup='" + formGroup + "']").each(function () {
                        if ($(this).attr("data-nestedObjectName") !== undefined && $(this).attr("data-nestedObjectName").split('.').length > 1) {
                            doesFormContainSecondNestedItem = true;
                        }
                    });

                    if (isSecondNestedItem) {

                        var nestedNamesArray = new Array;
                        nestedNamesArray = $(this).attr("data-nestedObjectName").split('.');
                        var isFirstNestedItem = true;
                        jsonToPost += "\"" + nestedNamesArray[1] + "\":{";

                        $("[data-nestedObjectName='" + $(this).attr("data-nestedObjectName") + "']").each(function () {
                            if (isFirstNestedItem) {
                                isFirstNestedItem = false;
                            }
                            else {
                                jsonToPost += ","
                            }

                            jsonToPost += buildJsonWithValues($(this));
                        });

                        jsonToPost += "}}";

                        //jsonToPost += "}";
                    }

                    if (!doesFormContainSecondNestedItem) {
                        jsonToPost += "}";
                    }

                    nestedObjectGroups[nestedObjectGroupCount] = $(this).attr("data-nestedObjectName");
                    nestedObjectGroupCount++;
                }
            }
        });

        jsonToPost += "}";

        if (isParameterObject) {
            jsonToPost += "}";
        }

        //Manual JSON Build
        if (isAttrDefined(requestingElement.attr("data-manualDataBuildFunction"))) {
            jsonToPost = callFunctionDynamically(requestingElement.attr("data-manualDataBuildFunction"), requestingElement, jsonToPost);
        }
        ajaxRequest(requestingElement, jsonToPost, requestingElement.attr("data-serviceRequestUrl"), requestingElement.attr("data-successFunction"), null, null, true);
    }
}

function buildJsonWithValues(element) {
    var jsonToPost = "\"" + element.attr("name") + "\":";

    var formElementValue = getFormElementValue(element);
    if (formElementValue == "null" || formElementValue == "0" || typeof (formElementValue) === "boolean" || typeof (formElementValue) === "object" || (!isNaN(formElementValue) && formElementValue.charAt(0) != "0")) {
        if (typeof (formElementValue) !== "boolean" && formElementValue == "") {
            formElementValue = null;
        }
        jsonToPost += formElementValue;
    }
    else {
        jsonToPost += "\"" + formElementValue + "\"";
    }

    return jsonToPost;
}

function processRadioButtonList(element) {
    if ($(this).attr("type") == "radio") {
        //Must only add the checked radio input in a group.
        if (processedRadioButtonLists.indexOf($(this).attr("name")) >= 0) {
            return true; //continue; //Already processed and added to the JSON, so move to the next loop iteration.
        }
        else {
            processedRadioButtonLists[processedRadioButtonListCount] = $(this).attr("name");
            processedRadioButtonListCount++;
            //Let it flow through this loop iteration and it will be added to the JSON. Logic to select the checked radio option is in the getFormElementValue() function.
        }
    }
}

function simulateButtonClick(buttonSelector) {
    lastErroredCallTrace += "->simulateButtonClick";

    if (!$(buttonSelector).hasClass("ajaxFormPost") && !$(buttonSelector).hasClass("clickFunction")) {
        //Only do this for the old LinkButton Asp.Net junk.
        eval($(buttonSelector).attr("href").replace("javascript:", ""));
    }

    $(buttonSelector).click(); //To fire 
    return true;
}

function getFormElementValue(formElement) {
    lastErroredCallTrace += "->getFormElementValue";

    var value = "";

    if (formElement.attr("type") == "checkbox") {
        value = formElement.prop("checked");
    }
    else if (formElement.attr("type") == "radio") {
        value = jsonValueCleanUp($("input[data-formGroup='" + formElement.attr("data-formGroup") + "'][name='" + formElement.attr("name") + "']:checked").val());
    }
    else {
        //Check if the val is just the placeholder text.
        if (doesFormElementHaveValue(formElement)) {
            value = jsonValueCleanUp(formElement.val());
        }
        else {
            //Is just the placeholder text, so pass the value as empty.
        }
    }

    if (value == "true") {
        value = true;
    }
    if (value == "false") {
        value = false;
    }
    if (typeof value === "undefined") {
        value = null;
    }

    return value;
}

function clearAjaxForm(requestingElement) {
    lastErroredCallTrace += "->clearAjaxForm";

    $("[data-formGroup='" + requestingElement.attr("data-formGroup") + "']").each(function () {
        if (isAttrDefined($(this).attr("name"))) {
            $(this).val("");
        }
    });
}

/************************* Ajax Form - End ************************/

