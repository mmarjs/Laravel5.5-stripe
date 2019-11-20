/************************* Accordion - Start ************************/

function enableInstances_Accordion() {
    //Enable Accordion(s) - This is last to allow the css selector to find stuff in the accordion content, which it does not find when collapsed
    lastErroredCallTrace += "->enableInstances_Accordion";

    $(lastParentElementSelector + " .accordion").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_Accordion(tempThisVar); }, 1);
    });
}

function enable_Accordion($targetElement) {
    lastErroredCallTrace += "->enable_Accordion";

    //Check to see if already enabled.
    // Options:
    // active       --> data-defaultActiveSection               // Zero-based index of the panel that is active (open).
    // heightStyle  --> data-makeSectionHeightsEqual            // true = 'auto' (Height for all panels is set as tall as the heighest panel), false = 'content' (Each panel will be as tall as its content)
    // collapsible  --> data-keepOneSectionAlwaysOpen           // true = false (keep one section always open), false = true (allow all sections to be collapsible)
    // event        --> data-userEventToTriggerSectionToggle    // 'click' event to trigger panel active/inactive. for multiple events separate them by a space i.e "click mouseover"
    if (!isAttrDefined($targetElement.attr("data-accordionEnabled"))) {
        $targetElement.accordion({
            active: ((!isAttrDefined($targetElement.attr("data-defaultActiveSection"))) ? false : ((isNaN($targetElement.data("defaultactivesection"))) ? false : eval($targetElement.data("defaultactivesection")))),
            heightStyle: (($targetElement.data("makesectionheightsequal")) ? "auto" : "content"), //'auto': each panel height is set to the height of the tallest one
            collapsible: (($targetElement.data("keeponesectionalwaysopen")) ? false : true),
            event: ((!isAttrDefined($targetElement.attr("data-userEventToTriggerSectionToggle"))) ? "click" : $targetElement.data("usereventtotriggersectiontoggle")) //'click', 'mouseover', etc. (http://api.jquery.com/category/events/)
        });

        //Mark as enabled.
        $targetElement.attr("data-accordionEnabled", true);
    }
}

/************************* Accordion - End ************************/

