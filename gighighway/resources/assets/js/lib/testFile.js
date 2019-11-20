/************************* Accordion - Start ************************/

function enableInstances_Accordion() {
    lastErroredCallTrace += "->enableInstances_Accordion";

    $(lastParentElementSelector + " .accordion").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_Accordion(tempThisVar); }, 1);
    });
}

function enable_Accordion($targetElement) {
    lastErroredCallTrace += "->enable_Accordion";

    if (!isAttrDefined($targetElement.attr("data-accordionEnabled"))) {
        $targetElement.accordion({
            active: ((!isAttrDefined($targetElement.attr("data-defaultActiveSection"))) ? false : ((isNaN($targetElement.data("defaultactivesection"))) ? false : eval($targetElement.data("defaultactivesection")))),
            heightStyle: (($targetElement.data("makesectionheightsequal") == "true") ? 'auto' : 'content'),
            collapsible: (($targetElement.data("keeponesectionalwaysopen") == "true") ? false : true),
            event: ((!isAttrDefined($targetElement.attr("data-userEventToTriggerSectionToggle"))) ? "click" : $targetElement.data("usereventtotriggersectiontoggle")),
        });

        $targetElement.attr("data-accordionEnabled", true);
    }
}

/************************* Accordion - End ************************/

