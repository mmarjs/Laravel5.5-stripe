/************************* Limited Textarea - Start ************************/

function enableInstances_LimitedTextarea() {
    lastErroredCallTrace += "->enableInstances_LimitedTextarea";

    $(lastParentElementSelector + " textarea.limitedTextarea").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_LimitedTextarea(tempThisVar); }, 1);
    });
}

function enable_LimitedTextarea(targetElement) {
    lastErroredCallTrace += "->enable_LimitedTextarea";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-limitedTextareaEnabled"))) {
        targetElement.wrap("<div id=\"" + targetElement.attr("id") + "_wrapper\" class=\"limitedTextarea\" />");
        $("#" + targetElement.attr("id") + "_wrapper").append("<div id=\"" + targetElement.attr("id") + "_counterWrapper\">" + limitedTextareaCharacterRemainingText.replace("#", targetElement.attr("maxlength")) + "</div>");

        targetElement.keyup(function (event) {
            var requestingElement = $("#" + event.target.id);
            var remainingAllowedCharacters = (requestingElement.attr("maxlength") - requestingElement.val().length);
            if (remainingAllowedCharacters < 0) {
                remainingAllowedCharacters = 0;
                requestingElement.val(requestingElement.val().substring(0, requestingElement.attr("maxlength")));
            }

            $("#" + requestingElement.attr("id") + "_counterWrapper").html(limitedTextareaCharacterRemainingText.replace("#", remainingAllowedCharacters));
        });


        self.setTimeout(function () { targetElement.keyup(); }, 1);

        //Mark as enabled.
        targetElement.attr("data-limitedTextareaEnabled", true);
    }
}

/************************* Limited Textarea - End ************************/

