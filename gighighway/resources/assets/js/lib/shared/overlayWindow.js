/************************* Overlay Window - Start ************************/

function overlayWindow() {
    lastErroredCallTrace += "->overlayWindow";

    gigModal.showPleaseWait();
    //if ($("#hdivLoadingOverlay").length == 0) {
    //    $("body").append(overlayWindowMarkup);
    //}

    //$(".overlayLoadingMessage").center();
    //$("#hdivLoadingOverlay").show();
}

function hideOverlayWindow() {
    lastErroredCallTrace += "->hideOverlayWindow";

    //$("#hdivLoadingOverlay").hide();
    gigModal.hidePleaseWait();
}

(function($) {
    $.fn.center = function() {
        this.css("position", "absolute");
        this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
        this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px");
        return this;
    };
})(jQuery); 
/************************* Overlay Window - End ************************/

