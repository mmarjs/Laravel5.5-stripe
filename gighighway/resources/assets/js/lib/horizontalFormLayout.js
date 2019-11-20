/************************* Horizontal Form Layout - Start ************************/

function enable_HorizontalFormLayout(activeButtonFormGroup) {
    //Horizontal Form Layout Equal Label Tag Width
    var widest = 0;
    //Loop through and determine the widest Label Tag for each form group.
    lastErroredCallTrace += "->horizontalFormLayout";
    
    var $labelsWithFormGroupAndName = $(lastParentElementSelector + " .horizontalFormLayout [data-formGroup='" + activeButtonFormGroup + "'][name]");
    var $labelsWithDataEqualWidthGroup = $(lastParentElementSelector + " .horizontalFormLayout [data-equalWidthGroup='" + activeButtonFormGroup + "']");

    $labelsWithFormGroupAndName.each(function () {
        $(lastParentElementSelector + " .horizontalFormLayout label[for='" + $(this).attr("id") + "']").each(function () { //Can be more than one with the RadioButtonList
            var tempWidth = $(this).css("width");
            $(this).css("width", "auto");
            if (widest < $(this).width() && $(this).attr("data-excludeFromLabelWidth") != "true" && !$(this).hasClass("checkbox")) {
                widest = $(this).width();
            }
            $(this).css("width", tempWidth);
        });
    });

    $labelsWithDataEqualWidthGroup.each(function () {
        var tempWidth = $(this).css("width");

        $(this).css("width", "auto");
        if (widest < $(this).width() && $(this).attr("data-excludeFromLabelWidth") != "true" && !$(this).hasClass("checkbox")) {
            widest = $(this).width();
        }
        $(this).css("width", tempWidth);
    });

    if (widest > 0) {
        //Loop through again and set all to the widest for each form group.
        $labelsWithFormGroupAndName.each(function () {
            $(lastParentElementSelector + " .horizontalFormLayout label[for='" + $(this).attr("id") + "']").each(function () { //Can be more than one with the RadioButtonList
                if (widest > 0 && $(this).attr("data-excludeFromLabelWidth") != "true" && !$(this).hasClass("checkbox")) {
                    $(this).width(widest);
                }
            });
        });

        $labelsWithDataEqualWidthGroup.each(function () {
            if (widest > 0 && $(this).attr("data-excludeFromLabelWidth") != "true" && !$(this).hasClass("checkbox")) {
                $(this).width(widest);
                $(this).attr("data-excludeFromEqualWidthProcessing", "true");
            }
        });
    }
}

/************************* Horizontal Form Layout - End ************************/

