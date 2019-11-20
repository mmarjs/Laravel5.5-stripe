function enableInstances_AccordionToTabs() {
    //Enable Accordion(s) - This is last to allow the css selector to find stuff in the accordion content, which it does not find when collapsed
    lastErroredCallTrace += "->enableInstances_Accordion";

    $(lastParentElementSelector + " .accordionToTabs").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_AccordionToTabs(tempThisVar); }, 1);
    });
}

function enable_AccordionToTabs(targetElement) {
    lastErroredCallTrace += "->enable_AccordionToTabs";

    //Check to see if already enabled.

    if (!isAttrDefined(targetElement.attr("data-accordionToTabsEnabled"))) {
        // tabbed content
        // http://www.entheosweb.com/tutorials/css/tabs.asp
        $(".tab_content").hide();
        
        var activeTabContent = $("#activeTabContent").val();

        if (activeTabContent !== undefined) { $("#" + activeTabContent).show(); }
        else { $(".tab_content:first").show(); }
        
        /* if in tab mode */
        $("ul.tabs li").unbind("click").bind("click", function () {

            $(".tab_content").hide();
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).show();

            $("ul.tabs li").removeClass("active");
            $(this).addClass("active");

            $(".tab_drawer_heading").removeClass("d_active");
            $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

            //Update active tab hidden field
            $("#activeTabContent").val(activeTab);

            enableUiFeatures("#" + activeTab);
        });

        /* if in drawer mode */
        $(".tab_drawer_heading").unbind("click").bind("click", function (event) {
            if ($(this).hasClass("d_active")) {
                $(this).removeClass("d_active");
                $(".tab_content").hide();
            }
            else {
                $(".tab_content").hide();
                var d_activeTab = $(this).attr("rel");
                $("#" + d_activeTab).show();

                $(".tab_drawer_heading").removeClass("d_active");
                $(this).addClass("d_active");

                $("ul.tabs li").removeClass("active");
                $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
            }
        });


        /* Extra class "tab_last" 
           to add border to right side
           of last tab */
        $('ul.tabs li').last().addClass("tab_last");


        $(targetElement).attr("data-accordionToTabsEnabled", true);
    }
}
