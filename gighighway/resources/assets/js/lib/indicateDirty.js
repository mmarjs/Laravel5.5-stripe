/************************* IndicateDirty - Start ************************/

// isDirtyValue" data-indicateDirty="true" data-originalValue="1"

function enableInstances_IndicateDirty() {
    lastErroredCallTrace += "->enableInstances_IndicateDirty";

    $(lastParentElementSelector + " [data-indicateDirty='true']").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_IndicateDirty(tempThisVar); }, 1);
    });
}

function enable_IndicateDirty(targetElement) {
    lastErroredCallTrace += "->enable_IndicateDirty";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-indicateDirtyEnabled"))) {

        //Set data-originalValue.
        targetElement.attr("data-originalValue", targetElement.val());

        //Add onKeyup event to check if dirty.
        targetElement.keyup(function (event) {
            checkAndMarkIfDirty(targetElement);
        });

        //Add onChange event to check if dirty.
        targetElement.change(function (event) {
            checkAndMarkIfDirty(targetElement);
        });

        //Mark as enabled.
        targetElement.attr("data-indicateDirtyEnabled", true);
    }
}

function checkAndMarkIfDirty(targetElement) {
    if (targetElement.val() != targetElement.attr("data-originalValue")) {
        targetElement.addClass("isDirtyValue");

        if ($("#hdivAutoShip_IsDirtyMessage").length) {
            $("#hdivAutoShip_IsDirtyMessage").show()
        }

    }
    else {
        targetElement.removeClass("isDirtyValue");

        if ($("#hdivAutoShip_IsDirtyMessage").length) {
            $("#hdivAutoShip_IsDirtyMessage").hide()
        }
    }
}

(function ($) {
    $.fn.updateDirtyComparisonVal = function (value) {
        if ($(this).attr("data-indicateDirty") == "true" && typeof value !== "undefined") {
            $(this).attr("data-originalValue", value);
            $(this).removeClass("isDirtyValue");
        }
    };
})(jQuery);

/************************* IndicateDirty - End ************************/

