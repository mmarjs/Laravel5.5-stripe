/************************* Autocomplete - Start ************************/

function enableInstances_Autocomplete() {
    lastErroredCallTrace += "->enableInstances_Autocomplete";

    $(lastParentElementSelector + " .autocomplete").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_Autocomplete(tempThisVar); }, 1);
    });
}

function enable_Autocomplete(targetElement) {
    lastErroredCallTrace += "->enable_Autocomplete";    
    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-autocompleteEnabled"))) {
        targetElement
        .autocomplete({
            source: function (request, response) {
                //lastErroredCallTrace += "->TBR:autocomplete.Source- START:" + request.term;
                ajaxRequest(null, { term: request.term }, ((this.element.attr("data-serviceRequestUrl").indexOf("http") == 0) ? this.element.attr("data-serviceRequestUrl") : websiteSettings.relativePathRoot + this.element.attr("data-serviceRequestUrl")), null, null, response, true, false);
                //lastErroredCallTrace += "->TBR:autocomplete.Source- END:" + request.term;
            },
            open: function (event, ui) { if (!targetElement.is(":focus")) { targetElement.delay(500).autocomplete("close"); } },
            minLength: ((!isAttrDefined(targetElement.attr("data-serviceRequestMinLength")) || isNaN(targetElement.attr("data-serviceRequestMinLength"))) ? 2 : eval(targetElement.attr("data-serviceRequestMinLength"))),
            delay: ((!isAttrDefined(targetElement.attr("data-serviceRequestDelay")) || isNaN(targetElement.attr("data-serviceRequestDelay"))) ? 300 : eval(targetElement.attr("data-serviceRequestDelay"))),
            focus: function(event){
                event.preventDefault();
                event.stopImmediatePropagation();
            },
            select: function (event, ui) {
                if (/no result found/gi.test(ui.item.label)) {
                    targetElement.val("");
                    window.setTimeout(function () { targetElement.focus(); }, 100);
                } else {
                    if (isAttrDefined(targetElement.attr("data-propertyToUseOnSelect")) && targetElement.attr("data-propertyToUseOnSelect").length > 0) {
                        if (targetElement.val() == ui.item.value) {
                            targetElement.val(ui.item.value);
                        }
                        else {
                            targetElement.val(ui.item[targetElement.attr("data-propertyToUseOnSelect")]);
                        }
                    }
                    else {
                        targetElement.val(ui.item.value);
                        $(this).parent("form").submit();
                    }

                    if (isAttrDefined(targetElement.attr("data-selectFunction")) && targetElement.attr("data-selectFunction").length > 0) {
                        callFunctionDynamically(targetElement.attr("data-selectFunction"), targetElement, ui.item, null);
                    }
                }

                return false;
            },
            change: function (event, ui) {
                var $autocompleteField = $(event.target);
                var $divContainer = $autocompleteField.parent("div");
                var warningMessage;

                if (!ui.item) {
                    $autocompleteField.val('');
                    warningMessage = isAttrDefined($autocompleteField.attr("data-fieldname")) ? 
                                        " " + $autocompleteField.attr("data-fieldname") + " " : 
                                        " ";
                    alert("You must select one of the suggested" + warningMessage + "options.");

                    window.setTimeout(function () { targetElement.focus(); }, 100);
                }
            }
        })
        .data("ui-autocomplete")._renderItem = function (ul, item) {
            if (isAttrDefined(this.element.attr("data-itemTemplateId")) && this.element.attr("data-itemTemplateId").length > 0) {
                var itemTemplate = $("#" + this.element.attr("data-itemTemplateId")).html();

                var itemVariables = itemTemplate.match(/\${([^}]*)}/gi); //Get "${...} vars.
                for (x in itemVariables) {
                    if (x >= 0) {
                        var itemVariableFull = itemVariables[x];
                        var itemVariableNameOnly = itemVariableFull.substr(2, (itemVariableFull.length - 3));
                        var itemVariableValue = item[itemVariableNameOnly];

                        if (itemVariableValue != undefined && itemVariableValue.length > 0) {
                            if (this.element.attr("data-highlightMatches") == "true" && itemVariableValue.indexOf("://") < 0) { //Don't higlight an URL
                                var regExp = new RegExp(this.term, "i");
                                var match = regExp.exec(itemVariableValue);
                                var markElement = document.createElement("mark");
                                markElement.innerHTML = match;
                                itemVariableValue = itemVariableValue.replace(regExp, markElement.outerHTML);
                                itemTemplate = itemTemplate.replace(itemVariableFull, itemVariableValue);
                            }
                            else {
                                itemTemplate = itemTemplate.replace(itemVariableFull, itemVariableValue);
                            }
                        }
                    }
                }
            }
            else {
                if (this.element.attr("data-highlightMatches") == "true") {
                    var regExp = new RegExp(this.term, "i");
                    var match = regExp.exec(item.label);
                    var markElement = document.createElement("mark");
                    markElement.innerHTML = match;
                    itemTemplate = item.label.replace(regExp, markElement.outerHTML);

                    //Highlight even if forget dash in stock number.
                    var termWithDash = addDashToTermAsStockNumber(this.term);
                    if (termWithDash != null) {
                        var regExpWithDash = new RegExp(termWithDash, "i");
                        var matchWithDash = regExpWithDash.exec(item.label);
                        markElement.innerHTML = matchWithDash;
                        itemTemplate = itemTemplate.replace(regExpWithDash, markElement.outerHTML);
                    }
                }
                else {
                    itemTemplate = item.label;
                }
            }

            var anchorElement = document.createElement("a");
            anchorElement.className = "itemWrapper clearFix";
            anchorElement.innerHTML = itemTemplate;

            var listItemElement = document.createElement("li");
            return $(listItemElement)
			.data("item.autocomplete", item)
			.append(anchorElement)
			.appendTo(ul);
        };

        //Mark as enabled.
        targetElement.attr("data-autocompleteEnabled", true);
    }
}

function addDashToTermAsStockNumber(term) {
    if (!isNaN(term) && term.length > 2) {
        return term.substr(0, term.length - 1) + "-" + (term % 10);
    }

    return null;
}

/************************* Autocomplete - End ************************/


