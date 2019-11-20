/************************* Session Warning - Start ************************/

var sessionManagement = (function () {
    "use strict";
    var sessionWarningTimeCookieKey = "sessionWarningTime";
    var sessionExpiresTimeCookieKey = "sessionExpiresTime";

    var sessionWarningInMinutes = 25;
    var sessionExpiresInMinutes = 30;
    var sessionCheckIntervalInMinutes = 5;
    
    var sessionWarningTimeout, checkSessionTimeoutId;

    var btnSessionLogOutNow = document.getElementById("btnSession_LogOutNow");
    var btnSessionStayConnected = document.getElementById("btnSession_StayConnected");
    var btnSessionExpired = document.getElementById("btnSession_Expired");

    function init() {
        btnSessionLogOutNow.addEventListener("click", restartSession);
        btnSessionStayConnected.addEventListener("click", extendSession);
        btnSessionExpired.addEventListener("click", restartSession);

        setSessionExpiration();
        checkSession();
    }

    function setSessionExpiration() {
        var sessionWarningTime = $.cookie(sessionWarningTimeCookieKey);
        var sessionExpiresTime = $.cookie(sessionExpiresTimeCookieKey);
        var originalExpiresTime;
        var nowDate = new Date();

        //If does not exists, then create it.
        if (typeof sessionExpiresTime === "undefined") {
            updateTimers();//Has not yet been set. So should do it.
        }
        else {
            //Only update, if is past the halfway point. 
            //Auth Ticket does not update during the first half of the session life for "performance" reasons.
            sessionExpiresTime = +sessionExpiresTime;
            originalExpiresTime = new Date(sessionExpiresTime);

            //Auth Ticket does not update during the first half.
            var waitToRenewDate = originalExpiresTime.setTime(originalExpiresTime.getTime() - ((sessionExpiresInMinutes / 2) * 60 * 1000)); 

            if (nowDate.getTime() >= waitToRenewDate) {
                updateTimers();
            }
        }
    }

    function updateTimers() {
        var nowDate = new Date();
        var warningDate = new Date();
        var expiresDate = new Date();

        //Stored as milliseconds since 1970/01/01 (primitive value of a js Date object)
        warningDate.setTime(nowDate.getTime() + (sessionWarningInMinutes * 60 * 1000) - 5000); //Plus X minutes, and minus 5 seconds to make sure does not miss the "checkSession".
        $.cookie(sessionWarningTimeCookieKey, warningDate.getTime(), { expires: 1, path: "/" });

        expiresDate.setTime(nowDate.getTime() + (sessionExpiresInMinutes * 60 * 1000) - 5000); //Plus Y minutes, and minus 5 seconds to make sure does not miss the "checkSession".
        $.cookie(sessionExpiresTimeCookieKey, expiresDate.getTime(), { expires: 1, path: "/" });
    }

    function checkSession() {
        var nowDate = new Date();
        var sessionWarningTime = $.cookie(sessionWarningTimeCookieKey);
        var sessionExpiresTime = $.cookie(sessionExpiresTimeCookieKey);

        if (typeof sessionExpiresTime === "undefined") {
            console.error("sessionExpiresTime should never be undefined when calling checkSession! What went wrong?");
        }
        else {
            sessionWarningTime = +sessionWarningTime;
            sessionExpiresTime = +sessionExpiresTime;

            var warningDate = new Date(sessionWarningTime);
            var expiresDate = new Date(sessionExpiresTime);

            if (nowDate.getTime() >= expiresDate.getTime()) {
                closeSessionTimeoutWarningWindow();
                openSessionTimedOutWindow();
            }
            else if (nowDate.getTime() >= warningDate.getTime()) {
                showSessionWarning();
            }

            //Check again in X minutes.
            checkSessionTimeoutId = window.setTimeout(checkSession, (sessionCheckIntervalInMinutes * 60 * 1000));
        }
    }

    function showSessionWarning() {
        $("#divSessionTimeoutWarning").modal("show");
    }

    function closeSessionTimeoutWarningWindow() {
        window.clearTimeout(sessionWarningTimeout);
        $("#divSessionTimeoutWarning").modal("hide");
    }

    function openSessionTimedOutWindow() {
        $("#divSessionTimedout").modal("show");
    }

    function extendSession() {
        overlayWindow();
        console.log("%c extendSession called!!", "font-size:1.5em; background: #222; color:red;");
        ajaxRequest(null, null, "/SessionWarningSystem/ExtendSession", "sessionManagement.extendSession_completed", null, null, true);
    }

    function extendSession_completed() {
        setSessionExpiration();
        closeSessionTimeoutWarningWindow();
        hideOverlayWindow();
    }

    function restartSession() {
        overlayWindow();
        console.log("%c restartSession called!!", "font-size:1.5em; background: #222; color: #bada55;");
        ajaxRequest(null, null, "/SessionWarningSystem/KillSession", "sessionManagement.restartSession_completed", null, null, true);
    }

    function restartSession_completed() {
        hideOverlayWindow();
        window.location.reload();
        return false;
    }

    return {
        init: init,
        setSessionExpiration: setSessionExpiration,
        extendSession_completed: extendSession_completed,
        restartSession_completed: restartSession_completed
    };
})();

sessionManagement.init();

/************************* Session Warning - End ************************/