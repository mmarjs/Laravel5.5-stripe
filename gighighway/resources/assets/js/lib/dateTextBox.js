/************************* DateTextBox - Start ************************/

function enableInstances_DateTextBox() {
    lastErroredCallTrace += "->enableInstances_DateTextBox";

    $(lastParentElementSelector + " input[type='date'], " + lastParentElementSelector + " input.dateTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_DateTextBox(tempThisVar); }, 1);
    });
}

function enable_DateTextBox(targetElement) {
    lastErroredCallTrace += "->enable_DateTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-dateTextBoxEnabled"))) {
        targetElement.attr("value", targetElement.attr("data-cultureFormattedValue")); //jQuery needs the culture formatted version.
        targetElement.datepicker({
            //Datetime stuff
            changeMonth: ((targetElement.attr("data-dateQuickMonthChange") == "true") ? true : false),
            changeYear: ((targetElement.attr("data-dateQuickYearChange") == "false") ? false : true),
            maxDate: ((!isAttrDefined(targetElement.attr("data-dateMax")) || targetElement.attr("data-dateMax") == "null") ? null : targetElement.attr("data-dateMax")),
            minDate: ((!isAttrDefined(targetElement.attr("data-dateMin")) || targetElement.attr("data-dateMin") == "null") ? null : targetElement.attr("data-dateMin")),
            numberOfMonths: ((!isAttrDefined(targetElement.attr("data-dateNumberOfMonthsToDisplay")) || isNaN(targetElement.attr("data-dateNumberOfMonthsToDisplay"))) ? 1 : eval(targetElement.attr("data-dateNumberOfMonthsToDisplay"))),
            showCurrentAtPos: ((!isAttrDefined(targetElement.attr("data-dateCurrentMonthPositionInMultiMonthDisplay")) || isNaN(targetElement.attr("data-dateCurrentMonthPositionInMultiMonthDisplay"))) ? 0 : eval(targetElement.attr("data-dateCurrentMonthPositionInMultiMonthDisplay"))),
            showOtherMonths: ((targetElement.attr("data-dateShowOtherMonthDays") == "true") ? true : false),
            selectOtherMonths: ((targetElement.attr("data-dateAllowSelectionOfOtherMonthDays") == "true") ? true : false),
            showWeek: ((targetElement.attr("data-dateShowWeek") == "true") ? true : false),
            yearRange: ((!isAttrDefined(targetElement.attr("data-dateYearRange"))) ? "-100:+100" : targetElement.attr("data-dateYearRange")),
            altField: ((!isAttrDefined(targetElement.attr("data-dateAlternateDisplayElementSelector"))) ? "" : targetElement.attr("data-dateAlternateDisplayElementSelector")),
            altFormat: ((!isAttrDefined(targetElement.attr("data-dateAlternateFormat"))) ? dateAlternateFormat : targetElement.attr("data-dateAlternateFormat")),
            dateFormat: dateDateFormat,
            firstDay: dateFirstDayOfWeekIndex,
            prevText: datePreviousText,
            nextText: dateNextText,
            monthNames: dateMonthNames,
            monthNamesShort: dateMonthNamesAbbreviated3,
            dayNames: dateDayNames,
            dayNamesShort: dateDayNamesAbbreviated3,
            dayNamesMin: dateDayNamesAbbreviated2,
            weekHeader: dateWeekTitleText,
            isRTL: dateIsRtl,
            showMonthAfterYear: dateShowMonthAfterYear,
            yearSuffix: dateYearSuffix,
            //Shared Stuff
            currentText: dateTimeTodayNowButtonText,
            closeText: dateTimeCloseButtonText,
            showButtonPanel: ((targetElement.attr("data-showTodayNowAndCloseButtons") == "false") ? false : true)
        });

        //Mark as enabled.
        targetElement.attr("data-dateTextBoxEnabled", true);
    }
}

/************************* DateTextBox - End ************************/

