/************************* ResponsiveImage - Start ************************/

function enableInstances_ResponsiveImage() {
    lastErroredCallTrace += "->enableInstances_ResponsiveImage";

    $(lastParentElementSelector + " .responsiveImage").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_ResponsiveImage(tempThisVar); }, 1);
    });
}

function enable_ResponsiveImage(targetElement) {
    lastErroredCallTrace += "->enable_ResponsiveImage";

    var src = ((!isAttrDefined(targetElement.attr("data-srcPattern"))) ? null : targetElement.attr("data-srcPattern"));

    if (src != null) {
        var phoneBreakpoint = ((!isAttrDefined(targetElement.attr("data-phoneBreakpoint"))) ? 0 : eval(targetElement.attr("data-phoneBreakpoint")));
        var tabletBreakpoint = ((!isAttrDefined(targetElement.attr("data-tabletBreakpoint"))) ? 0 : eval(targetElement.attr("data-tabletBreakpoint")));

        var searchStr = "-X.", replaceStr = ".";//The Desktop image file has no extension, and is the default.
        if (Modernizr.mq("(max-width: " + phoneBreakpoint + "px)")) {
            replaceStr = "-phone.";
        }
        else if (Modernizr.mq("(max-width: " + tabletBreakpoint + "px)")) {
            replaceStr = "-tablet.";
        }
        src = src.replace(searchStr, replaceStr);
        
        //Only update if differs to not make a request when not needed.
        if (targetElement.attr("src") != src) {
            targetElement.attr("src", src);
        }
    }
}


/************************* ResponsiveImage - End ************************/

