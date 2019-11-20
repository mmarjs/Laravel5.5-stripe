/************************* EqualWidth - Start ************************/

var equalWidthGroups = new Array();
var equalWidthGroupCount = 0;

function enableInstances_EqualWidth() {
    lastErroredCallTrace += "->enableInstances_EqualWidth";

    equalWidthGroups = new Array();
    equalWidthGroupCount = 0;

    $(lastParentElementSelector + " [data-equalWidthGroup]").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_EqualWidth(tempThisVar); }, 1);
    });
}

function enable_EqualWidth(targetElement) {
    lastErroredCallTrace += "->enable_EqualWidth";

    if (targetElement.attr("data-equalWidthGroup") != "" && $.inArray(equalWidthGroups, targetElement.attr("data-equalWidthGroup")) == -1) {
        $(lastParentElementSelector + " [data-equalWidthGroup='" + targetElement.attr("data-equalWidthGroup") + "']").equalWidths();

        //Add group to array to mark as done.
        equalWidthGroups[equalWidthGroupCount] = targetElement.attr("data-equalWidthGroup");
        equalWidthGroupCount++;
    }
}

(function ($) {
    $.fn.equalWidths = function () {
        var widest = 0;
        var tempWidth;
        $(this).each(function () {
            if ($(this).attr("data-excludeFromLabelWidth") != "true" && $(this).attr("data-excludeFromEqualWidthProcessing") != "true") {
                tempWidth = $(this).css("width");
                $(this).css("width", ""); //clear the width from any previous calculation on a previous enableUiFeatures call.
                if (widest < $(this).width()) {
                    widest = $(this).width();
                }
                $(this).css("width", tempWidth);
            }
        });

        if (widest > 0) {
            $(this).each(function () {
                if ($(this).attr("data-excludeFromLabelWidth") != "true" && $(this).attr("data-excludeFromEqualWidthProcessing") != "true") {
                    $(this).width(widest);
                }
            });
        }
    };
})(jQuery);

/************************* EqualWidth - End ************************/

