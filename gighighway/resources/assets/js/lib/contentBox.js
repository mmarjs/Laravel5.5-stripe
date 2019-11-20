/************************* ContentBox - Start ************************/

function enableInstances_ContentBox() {
    lastErroredCallTrace += "->enableInstances_ContentBox";

    $(lastParentElementSelector + " div.contentBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_ContentBox(tempThisVar); }, 1);
    });
}

function enable_ContentBox(targetElement) {
    lastErroredCallTrace += "->enable_ContentBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-contentBoxEnabled"))) {
        //Add ui-widget-header class to header.
        targetElement.children("header:first-child").addClass("ui-widget-header");

        //Set the width
        if (isAttrDefined(targetElement.attr("data-width")) && targetElement.attr("data-width") != "") {
            targetElement.css("width", targetElement.attr("data-width") + "px");
        }

        //Set the flow. Options (left, right, block)
        switch (targetElement.attr("data-flow")) {
            case "left":
                targetElement.css("float", "left");
                break;
            case "right":
                targetElement.css("float", "right");
                break;
            default: //block
                targetElement.css("float", "");
                targetElement.css("clear", "both");
                break;
        }

        //Set the pad (margin) class. Options (left, right, both, none)
        if (isAttrDefined(targetElement.attr("data-pad")) && targetElement.attr("data-pad") != "" && targetElement.attr("data-pad") != "none") {
            switch (targetElement.attr("data-pad")) {
                case "left":
                    targetElement.addClass("contentBoxPadLeft");
                    break;
                case "right":
                    targetElement.addClass("contentBoxPadRight");
                    break;
                case "both":
                    targetElement.addClass("contentBoxPadBoth");
                    break;
            }
        }

        //Mark as enabled.
        targetElement.attr("data-contentBoxEnabled", true);
    }
}

/************************* ContentBox - End ************************/

