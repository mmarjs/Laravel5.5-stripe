﻿/************************* Equal Heights - Start ************************/

var equalHeightGroups = new Array();
var equalHeightGroupsCount = 0;

function enableInstances_EqualHeight() {
    lastErroredCallTrace += "->enableInstances_EqualHeight";

    equalHeightGroups = new Array();
    equalHeightGroupsCount = 0;

    $(lastParentElementSelector + " [data-equalHeightGroup]").each(function () {
        var tempThisVar = $(this);
        self.setTimeout(function () { enable_EqualHeight(tempThisVar); }, 1);
    });
}

function enable_EqualHeight(targetElement) {
    lastErroredCallTrace += "->enable_EqualHeight";

    if (targetElement.attr("data-equalHeightGroup") != "" && $.inArray(targetElement.attr("data-equalHeightGroup"), equalHeightGroups) == -1) {
        $(lastParentElementSelector + " [data-equalHeightGroup='" + targetElement.attr("data-equalHeightGroup") + "']").equalHeightColumns();

        //Add to array to mark as done.
        equalHeightGroups[equalHeightGroupsCount] = targetElement.attr("data-equalHeightGroup");
        equalHeightGroupsCount++;
    }
}

/**
* Set all passed elements to the same height as the highest element.
* 
* Copyright (c) 2010 Ewen Elder
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
*
* @author: Ewen Elder <glomainn at yahoo dot co dot uk> <ewen at jainaewen dot com>
* @version: 1.0
* 
* @todo: Recaluclate height if extra content is loaded into one of the elements after it has been resized
*        possibly detect if the highest column has a fixed CSS height to being with or is set to 'auto'; if set to auto
*        then leave as auto so that it well expend or contract naturally as it would normally.
**/

(function ($) {
    $.fn.equalHeightColumns = function (options) {
        var height, elements;

        options = $.extend({}, $.equalHeightColumns.defaults, options);
        height = options.height;
        elements = $(this);

        $(this).each
		(
			function () {
			    // Apply equal height to the children of this element??
			    if (options.children) {
			        elements = $(this).children(options.children);
			    }

			    // If options.height is 0, then find which element is the highest.
			    if (!options.height) {
			        // If applying to this elements children, then loop each child element and find which is the highest.
			        if (options.children) {
			            elements.each
						(
							function () {
							    // If this element's height is more than is store in 'height' then update 'height'.
							    if ($(this).height() > height) {
							        height = $(this).height();
							    }
							}
						);
			        }

			        else {
			            // If this element's height is more than is store in 'height' then update 'height'.
			            if ($(this).height() > height) {
			                height = $(this).height();
			            }
			        }
			    }
			}
		);


        // Enforce min height.
        if (options.minHeight && height < options.minHeight) {
            height = options.minHeight;
        }


        // Enforce max height.
        if (options.maxHeight && height > options.maxHeight) {
            height = options.maxHeight;
        }


        // Animate the column's height change.
        elements.animate
		(
			{
			    height: height
			},
			options.speed
		);

        return $(this);
    };


    $.equalHeightColumns = {
        version: 1.0,
        defaults: {
            children: false,
            height: 0,
            minHeight: 0,
            maxHeight: 0,
            speed: 0
        }
    };
})(jQuery);

/************************* Equal Heights - End ************************/

