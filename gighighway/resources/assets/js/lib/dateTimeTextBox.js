/************************* DateTime TextBox - Start ************************/

function enableInstances_DateTimeTextBox() {
    lastErroredCallTrace += "->enableInstances_DateTimeTextBox";

    $(lastParentElementSelector + " input[type='datetime'], " + lastParentElementSelector + " input.datetimeTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_DateTimeTextBox(tempThisVar); }, 1);
    });
}

function enable_DateTimeTextBox(targetElement) {
    lastErroredCallTrace += "->enable_DateTimeTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-datetimeTextBoxEnabled"))) {
            targetElement.attr("value", targetElement.attr("data-cultureFormattedValue")); //jQuery needs the culture formatted version.
            targetElement.datetimepicker({
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
            //Timepicker stuff
            stepHour: ((!isAttrDefined(targetElement.attr("data-timeHourStep")) || isNaN(targetElement.attr("data-timeHourStep"))) ? 1 : eval(targetElement.attr("data-timeHourStep"))),
            stepMinute: ((!isAttrDefined(targetElement.attr("data-timeMinuteStep")) || isNaN(targetElement.attr("data-timeMinuteStep"))) ? 5 : eval(targetElement.attr("data-timeMinuteStep"))),
            hourGrid: ((!isAttrDefined(targetElement.attr("data-timeHourDisplayStep")) || isNaN(targetElement.attr("data-timeHourDisplayStep"))) ? 6 : eval(targetElement.attr("data-timeHourDisplayStep"))),
            minuteGrid: ((!isAttrDefined(targetElement.attr("data-timeMinuteDisplayStep")) || isNaN(targetElement.attr("data-timeMinuteDisplayStep"))) ? 10 : eval(targetElement.attr("data-timeMinuteDisplayStep"))),
            hourMin: ((!isAttrDefined(targetElement.attr("data-timeHourMin")) || isNaN(targetElement.attr("data-timeHourMin"))) ? 0 : eval(targetElement.attr("data-timeHourMin"))),
            hourMax: ((!isAttrDefined(targetElement.attr("data-timeHourMax")) || isNaN(targetElement.attr("data-timeHourMax"))) ? 23 : eval(targetElement.attr("data-timeHourMax"))),
            ampm: !timeIs24Hour,
            timeFormat: timeTimeFormat,
            timeOnlyTitle: timeTimeOnlyHeaderText,
            timeText: timeTimeTitleText,
            hourText: timeHourTitleText,
            minuteText: timeMinuteTitleText,
            secondText: timeSecondTitleText,
            //Shared Stuff
            currentText: dateTimeTodayNowButtonText,
            closeText: dateTimeCloseButtonText,
            showButtonPanel: ((targetElement.attr("data-showTodayNowAndCloseButtons") == "false") ? false : true)
        });

        //Mark as enabled.
        targetElement.attr("data-datetimeTextBoxEnabled", true);
    }
}

/************************* DateTime TextBox - End ************************/

