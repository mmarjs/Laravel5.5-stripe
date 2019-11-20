/************************* TimeTextBox - Start ************************/

function enableInstances_TimeTextBox() {
    lastErroredCallTrace += "->enableInstances_TimeTextBox";

    $(lastParentElementSelector + " input[type='time'], " + lastParentElementSelector + " input.timeTextBox").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_TimeTextBox(tempThisVar); }, 1);
    });
}

function enable_TimeTextBox(targetElement) {
    lastErroredCallTrace += "->enable_TimeTextBox";

    //Check to see if already enabled.
    if (!isAttrDefined(targetElement.attr("data-timeTextBoxEnabled"))) {
            targetElement.attr("value", targetElement.attr("data-cultureFormattedValue")); //jQuery needs the culture formatted version.
            targetElement.timepicker({
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
        targetElement.attr("data-timeTextBoxEnabled", true);
    }
}

/************************* TimeTextBox - End ************************/

