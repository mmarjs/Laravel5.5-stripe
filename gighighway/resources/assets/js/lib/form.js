/************************* Form - Start ************************/

function enableInstances_Form() {
    lastErroredCallTrace += "->enableInstances_Form";
}

//#region jQuery clearForm()

/*
* ClearForm - jQuery plugin to clear forms elements.
* Ref sites: 
*       http://jquery-howto.blogspot.com/2013/08/jquery-form-reset.html
*       http://www.learningjquery.com/2007/08/clearing-form-data 
* USAGE: 
*   1) Option one a form wrapper is passed, form elements must be wrapped in a form tag.
*       $("#formId").clearForm();       
*   2) Option two is a custom selector that passes a form elements array.
*       $("[data-formgroup='FormName']").clearForm();
*/
(function ($) {
    $.fn.clearForm = function () {
        return this.each(function () {
            var type = this.type, tag = this.tagName.toLowerCase();
            if (tag === 'form') {
                return $(':input', this).clearForm();
            }
            if (type === 'text' || type === 'password' || tag === 'textarea' || type === 'date' || type === 'tel' || type === 'number') {
                this.value = '';
                this.className = this.className.replace(/\bisDirtyValue\b/, '');
            }
            else if (type === 'checkbox' || type === 'radio') {
                this.checked = false;
                this.className = this.className.replace(/\bisDirtyValue\b/, '');
            }
            else if (tag === 'select') {
                this.selectedIndex = -1;
                this.className = this.className.replace(/\bisDirtyValue\b/, '');
            }
        });
    }
})(jQuery);

//#endregion clearForm End

//#region disable
/*
*   $.fn.disable: jQuery plugin to disable a input form field 
*
*   USAGE: 
*       $(selector).disable();
*/
(function ($) {
    $.fn.disable = function () {
        return this.each(function () {
            if (this.disabled === false) {
                this.disabled = true;
            }
            if (this.className.indexOf("disabled") === -1) {
                this.className = this.className + " disabled";
            }
            this.style.border = "none";
        });
    };
})(jQuery);
//#endregion disable


//#region enable
/*
*   $.fn.enable : jQuery plugin to enable a input form field 
*
*   USAGE: 
*       $(selector).enable();
*/
(function ($) {
    $.fn.enable = function () {
        return this.each(function () {
            this.disabled = false;
            this.className = this.className.replace(/\bdisabled\b/, '');
            this.style.border = "";
        });
    };
})(jQuery);

//#endregion enable

//#region autofillit

(function ($) {
    "use strict";

    /*
    * jQuery Plugin - autofillit-jquery.js
    * functionality:
    *  - auto populates fields from single or multiple input sources
    *  - auto populate event fires based on the specified event, blur or keyup (this needs to be seamless)
    *  - disables auto fill source if the target's value changes
    * Usage: 
    *   $(sourceMultiOrSingle).autofillit(targetElementID);
    */
    $.fn.autofillit = function (options) {

        var $targetElement,
            $sourceElement;

        var opts = $.extend({ inputTargetID: "", isMultiSource: false, onEvent: "keyup" }, options);
        var targetDataAttributes = [];

        function _autoFill() {
            var targetFieldValue;
            var targetFieldType = $targetElement.attr("type");

            if (!opts.isMultiSource) {
                targetFieldValue = $(this).val();
            }
            else {
                $targetElement.attr("data-" + arguments[0].target.name, (arguments[0].target.value !== "None" ? arguments[0].target.value : ""));
                targetFieldValue = _getValue();
            }

            if (typeof targetFieldType !== "undefined" && targetFieldType !== null) {
                $targetElement.val(targetFieldValue);
            }
            else {
                $targetElement.html(targetFieldValue);
            }
        }

        function _getValue() {
            var outputValue = "";
            var SPACE = " ";

            for (var i = 0; i < targetDataAttributes.length; i++) {
                var dataValue = $targetElement.attr("data-" + targetDataAttributes[i]);

                if (typeof dataValue != "undefined" && dataValue != "") {
                    outputValue += dataValue + SPACE;
                }
            }

            return outputValue.replace(/\s+|undefined/g, ' ').trim();
        }

        return this.each(function () {

            $targetElement = $(opts.inputTargetID);
            $sourceElement = $(this);

            targetDataAttributes.push($sourceElement.attr("name"));

            // set event to active element (source)
            $sourceElement.on(opts.onEvent + ".autofillit", _autoFill);

            // set change event to target element 
            $targetElement.on("change.autofillit", function () {
                if (typeof this.value === "undefined" || this.value === "" || this.value == null) {
                    $sourceElement.on(opts.onEvent + ".autofillit", _autoFill);
                }
                else {
                    $sourceElement.off(opts.onEvent + ".autofillit");
                }
            });
        });
    }
})(jQuery);

//#endregion

/************************* Form - End ************************/

