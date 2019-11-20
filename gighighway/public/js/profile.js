var profile = (function () {
    "use strict";

    var $hypProfile_SongsTab = $("#hypProfile_SongsTab");
    var $hypProfile_AudioTab = $("#hypProfile_AudioTab");

    var $hypViewAllReviewsExpander = $("#hypProfile_ViewAllReviewsExpander");

    function init() {
        $("#hdivProfileForm_ImageGalleryCarousel").flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 148,
            itemMargin: 5,
            asNavFor: "#hdivProfileForm_ImageGallerySlider"
        });

        $("#hdivProfileForm_ImageGallerySlider").flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideShow: false,
            sync: "#hdivProfileForm_ImageGalleryCarousel"
        });

        $("#hypProfile_VideoGalleryTab").on("click.VideoGallery", function () {

            $("#hdivProfile_VideoGalleryCarousel").flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 148,
                itemMargin: 5,
                asNavFor: "#hdivProfile_VideoGallerySlider"
            });

            $("#hdivProfile_VideoGallerySlider").flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: false,
                animationLoop: false,
                slideShow: false,
                sync: "#hdivProfile_VideoGalleryCarousel",
                video: true,
                before: function (slider) {
                    var iframe = slider.slides.eq(slider.currentSlide).find("iframe")[0];
                    pauseVideo(iframe);
                }
            });

            $(this).off("click.VideoGallery");
        });

        document.addEventListener("play", function (e) { pauseAudio(e.target); }, true);

        $hypProfile_AudioTab.on("click.EnableSearchFilter", audioFilterPlaceholder);

        $hypProfile_SongsTab.on("click.EnableSearchFilter", songFilterPlaceholder);

        $("#hypProfile_ViewReviews").on("click", function () {
            var positionTop = $("#Reviews").offset().top;
            $("body,html").animate({ scrollTop: positionTop }, 500);
            return false;
        });

        $hypViewAllReviewsExpander.on("click", function (event) {
            event.preventDefault();
            event.stopImmediatePropagation();

            var $this = $(this);
            if ($this.attr("data-action") === "expand") {
                $("#hdivProfile_ReviewsContainer").removeClass("profile_ReviewOvelay");
                $this
                    .html("show less")
                    .attr("data-action", "collapse");
            }
            else {
                $("#hdivProfile_ReviewsContainer").addClass("profile_ReviewOvelay");
                $this
                    .html("view all")
                    .attr("data-action", "expand");
            }
        });

        $("a[data-toggle='tab']").on("hide.bs.tab", function (e) {
            var targetTab = e.target,
                previousTab = targetTab.getAttribute("href");

            if (previousTab === "#videoGallery") {
                pauseVideo();
            }

            if (previousTab === "#audioFiles") {
                pauseAudio();
            }
        });
        
        $("#mainPageLoadingMessage").hide();
        $("#hdivProfile_Container").animate({opacity: "1"}, 300);
    }

    function pauseAudio(audio) {
        var audios = document.getElementsByTagName("audio"),
            audioCount = audios.length,
            i;

        for (i = 0; i < audioCount; i++) {
            var aPlayer = audios[i];

            if (audio) {
                if (aPlayer !== audio) {
                    aPlayer.pause();
                }
            } else {
                aPlayer.pause();
            }
        }
    }

    function pauseVideo(currentVideoIframe) {

        var iframe = currentVideoIframe;

        if (typeof iframe === "undefined" || iframe === null) {
            iframe = $("#ulProfile_VideoGallerySlides .flex-active-slide").find("iframe")[0];
        }

        if (typeof iframe !== "undefined" && iframe !== null) {
            var isVimeo = (/^https?:\/\/player.vimeo.com/).test(iframe.src);
            var playerOrigin = "*";
            var message;
            var data;

            if (isVimeo) {
                data = { method: "pause" };
            } else {
                data = {
                    event: "command",
                    func: "pauseVideo",
                    args: ""
                };
            }

            message = JSON.stringify(data);

            iframe.contentWindow.postMessage(message, playerOrigin);

            $("#hdivProfile_VideoGallerySlider").flexslider("play");
        }
    }

    function songFilterPlaceholder() {
        var $songFilterInput = $("#tbProfle_SongList_wrapper .dataTables_filter input");

        if ($songFilterInput.length > 0) {
            $songFilterInput.css("width", "100%");
            $songFilterInput.prev("label").addClass("sr-only");
            $songFilterInput.prev("label").parent().css("width", "50%");

            $hypProfile_SongsTab.off("click.EnableSearchFilter");
        }
    }

    function audioFilterPlaceholder() {
        var $audioFilterInput = $("#tbProfile_AudioFiles_wrapper .dataTables_filter input");

        if ($audioFilterInput.length > 0) {
            $audioFilterInput.css("width", "100%");
            $audioFilterInput.prev("label").addClass("sr-only");
            $audioFilterInput.prev("label").parent().css("width", "50%");

            $hypProfile_AudioTab.off("click.EnableSearchFilter");
        }
    }

    return {
        init: init
    };
}());

var videoCarousel = (function () {
    "use strict";

    $(".video-thumbnail-embed").on("click.LazyLoadEmbed", function (event) {
        event.preventDefault();

        var $vidContainer = $(this);
        var embedUrl = $vidContainer.attr("data-embed");

        if ($vidContainer.hasClass("vimeo-embed")) {
            loadVimeoVideo($vidContainer);
        }
        else {
            $vidContainer.html("<iframe src=" + embedUrl + " allowfullscreen></iframe>")
                    .addClass("video-embed-loaded")
                    .removeClass("video-embed-preview");

            $("#hdivProfile_VideoGallerySlider").flexslider("pause");
        }
    });

    function loadVimeoVideo(vimeoSlide) {

        var apiUrl = $(vimeoSlide).attr("data-embed");
        var itemID = $(vimeoSlide).attr("data-videoid");
        var videoId = $(vimeoSlide).attr("data-videoKey");

        var embedJs = document.createElement("SCRIPT");
        embedJs.setAttribute("type", "text/javascript");
        embedJs.setAttribute("src", apiUrl + "&callback=videoCarousel.showThumbnail&api=1&player_id=vimeoplayer&autoplay=1" + itemID);

        document.getElementsByTagName("head").item(0).appendChild(embedJs);
    }

    function showThumbnail(video) {
        $(".vimeo-embed[data-videokey='" + video.video_id + "']").html(video.html);
    }

    return {
        showThumbnail: showThumbnail
    };
})();

function pageInit() {
    profile.init();
}
