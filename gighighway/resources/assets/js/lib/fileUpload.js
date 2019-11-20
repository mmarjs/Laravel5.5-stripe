var fileManager = (function () {
    "use strict";
    var canPreviewFiles = window.File && window.FileReader;
	
    // photos
    var imagesFormSubmit = document.querySelector("#btnProfileForm_ImageLibrarySubmit");
    var profilePhotos = document.querySelector("#txtProfileForm_ImageLibrary");
    // photo tile
    var mainPhotoTileSubmit = document.querySelector("#btnProfileForm_SubmitPhotoTite");
    var mainProfilePhotoTile = document.querySelector("#fileProfileForm_MainPhotoTile");
    // main photo
	var mainPhotoSubmit = document.querySelector("#btnProfileForm_SubmitMainPhoto");
	var mainProfilePhoto = document.querySelector("#fileProfileForm_MainPhoto");
  
	var imgMainImage = document.getElementById("imgProfileForm_ImageMain");
	var hypDeleteMainImage = document.getElementById("hypProfileForm_DeleteMainImage");
	var hdivMainImageOverlay = document.getElementById("hdivProfileForm_MainImageOverlay");

	var imgTileImage = document.getElementById("imgProfileForm_ProfilePhotoTile");
	var hypDeleteTileImage = document.getElementById("hypProfileForm_DeleteTileImage");
	var hdivTileImageOverlay = document.getElementById("hdivProfileForm_TileImageOverlay");

	var $imageGallery;

	var allowedImageType = ["jpg", "png", "gif"];

	function init() {
	    $imageGallery = $("#hdivProfileForm_ImageGalleryCarousel");

	    mainPhotoSubmit.onclick = function () {
	        uploadImage(mainProfilePhoto, "/File/UploadMainProfilePhoto", true /*isMain*/, false /*isTile*/);
	    };

	    if (canPreviewFiles) {
	        mainProfilePhoto.onchange = function () {
	            previewImage(this, imgMainImage);
	        };
	    }

	    mainPhotoTileSubmit.onclick = function () {
	        uploadImage(mainProfilePhotoTile, "/File/UploadMainProfilePhoto", false /*isMain*/, true /*isTile*/);
	    };

	    if (canPreviewFiles) {
	        mainProfilePhotoTile.onchange = function () {
	            previewImage(this, imgTileImage);
	        };
	    }

	    imagesFormSubmit.onclick = function () {
	        uploadImage(profilePhotos, "/File/UploadImages", false /*isMain*/, false /*isTile*/);
	    };

	    $("#hdivProfileForm_ImageGalleryContainer").on("click", ".profileForm_ImageGalleryItem", function () {
	        var imageId;
	        var confirmDelete;

	        confirmDelete = confirm("Are you sure you want to delete this item?");

	        if (confirmDelete) {
	            overlayWindow();
	            imageId = this.getAttribute("data-imageid");
	            removeGalleryImage(imageId);
	        }
	        hideOverlayWindow();
	    });
	}

	function previewImage(fileInput, targetImageElement) {

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            var imageFile = fileInput.files[0];

            if (isValidFile(imageFile.name)) {
                reader.onload = function (event) {
                    targetImageElement.src = event.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

    function isValidFile(fileName) {

        var extension = fileName.split(".")[1];
        extension = extension.toLowerCase();

        if (allowedImageType.indexOf(extension) > -1) {
            return true;
        }

        alert("Please verify that you're submitting an image of type JPG, JPEG, PNG, or GIF.");
        return false;
    }

    function uploadImage(sourceElement, postUrl, isMain, isTile) {
        gigModal.showPleaseWait();

        var formdata = new FormData();
        var imageFiles = sourceElement;
        var isValid = true;

        var i;
        for (i = 0; i < imageFiles.files.length; i += 1) {
            isValid = isValidFile(imageFiles.files[i].name);
            formdata.append("imgs", imageFiles.files[i]);
        }

        if (isValid) {
            formdata.append("isMain", isMain);
            formdata.append("isTile", isTile);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", postUrl);
            xhr.send(formdata);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    lastJsonResult = JSON.parse(xhr.responseText);

                    if (lastJsonResult.Succeeded) {
                        sourceElement.value = "";

                        if (isMain) {
                            bindMainImage(lastJsonResult.Data, imgMainImage, hypDeleteMainImage, hdivMainImageOverlay, "https://dummyimage.com/640x360/A3A3A3/fff.jpg");
                        } else if (isTile) {
                            bindMainImage(lastJsonResult.Data, imgTileImage, hypDeleteTileImage, hdivTileImageOverlay, "https://dummyimage.com/300x300/A3A3A3/fff.jpg");
                            bindProfileTileImage(lastJsonResult.Data);
                        }
                        else {
                            imageResponse();
                        }
                    }
                    else {
                        handleServerSideValidationErrors();
                    }

                    gigModal.hidePleaseWait();
                }
            };
        }
    }

    function removeImage() {

        var requestUrl = (hasValue(lastRequestingElement.attr("data-ismain")) || hasValue(lastRequestingElement.attr("data-istile"))) ?
                         "File/DeleteMainProfileImage" : "File/DeleteImage";
        var isTilePhoto = hasValue(lastRequestingElement.attr("data-istile"));

        var itemId = hasValue(lastRequestingElement.attr("data-imageid")) ? lastRequestingElement.attr("data-imageid") : 0;
        var jsonToPost = JSON.stringify({ id: itemId, isTile: isTilePhoto });
        var serviceRequestUrl = websiteSettings.relativePathRoot + requestUrl;
        var successFunction = lastRequestingElement.attr("data-successfunction");

        ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
    }

    function removeGalleryImage(imageId) {

        var jsonToPost = JSON.stringify({ id: imageId, isTile: false });
        var serviceRequestUrl = websiteSettings.relativePathRoot + "File/DeleteImage";
        var successFunction = "fileManager.imageResponse";

        ajaxRequest(null, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
    }

    function removeMainImageResponse() {

	    if (lastJsonResult.Succeeded) {
	        bindMainImage(lastJsonResult.Data, imgMainImage, hypDeleteMainImage, hdivMainImageOverlay, "https://dummyimage.com/640x360/A3A3A3/fff.jpg");
	    } else {
	        handleServerSideValidationErrors();
	    }

	    gigModal.hidePleaseWait();
	}

    function removeImageTileResponse() {
        if (lastJsonResult.Succeeded) {
            bindMainImage(lastJsonResult.Data, imgTileImage, hypDeleteTileImage, hdivTileImageOverlay, "https://dummyimage.com/300x300/A3A3A3/fff.jpg");
            bindProfileTileImage(lastJsonResult.Data);
        } else {
            handleServerSideValidationErrors();
        }

        gigModal.hidePleaseWait();
    }

    function imageResponse() {
        if (lastJsonResult.Succeeded) {
            bingGalleryImages(lastJsonResult.Data);
	    } else {
	        handleServerSideValidationErrors();
	    }

        gigModal.hidePleaseWait();
        return true;
    }

    function bingGalleryImages(images) {
        var tblImageGallery = $("#tlProfileForm_ImageGallery");
        var imgs = [];

        for (var i = 0; i < images.length; i++) {
            var imgTest = images[i];

            var imgElement = "<td class=\"item-tile last-added\">" +
                             "<img src=\"" + imgTest.FilePartialPath + imgTest.FileNameFull_Medium + "\" alt=\"" + imgTest.FileNameFull_Small + "\" class=\"img-responsive\">" +
                             "<p class=\"flex-caption\">" +
                             "<a class=\"profileForm_ImageGalleryItem\" " +
                             "data-imageid=\"" + imgTest.ID + "\">Delete</a></p></td>";

            imgs.push(imgElement);
        }


        tblImageGallery.dataTable().fnClearTable();
        
        for (var g = 0; g < imgs.length; g++) {
            var img = imgs[g];
            tblImageGallery.dataTable().fnAddData([img]);
        }

        var rows = tblImageGallery.fnGetNodes();

        for (var r = 0; r < rows.length; r++) {
            var row = rows[r];
            $(row).addClass("tile col-xs-6 col-sm-4");
            $(row).find("td").addClass("item-tile");
        }

        tblImageGallery.dataTable().fnDraw();

	    enableUiFeatures("#hdivProfileForm_ImageGalleryContainer");
    }

    function removeGalleryImageResponse() {
        if (lastJsonResult.Succeeded) {
            bingGalleryImages(lastJsonResult.Data);
        } else {
            handleServerSideValidationErrors();
        }

        gigModal.hidePleaseWait();
	    return true;
    }

    function bindMainImage(imageData, imageElement, hypDelete, imageOverlay, dummyImage) {
        var fileSrc = dummyImage,
            fileId = 0,
            fileName,
            $hypDelete = $(hypDelete);

        if (hasValue(imageData) && imageData.ID > 0) {
            fileSrc = imageData.FilePartialPath + imageData.FileNameFull_Medium;
            fileName = imageData.FileNameFull_Medium;
            fileId = imageData.ID;
        }

        $(imageElement).attr({
            "src": fileSrc,
            "alt": fileName
        });

        $hypDelete.attr("data-imageid", fileId);
        imageOverlay.style.display = (fileId === 0) ? "none" : "inline-block";
    }

    function bindProfileTileImage(image) {
        var fileSrc = "https://dummyimage.com/300x300/A3A3A3/fff.jpg",
            fileName;

        if (hasValue(image) && image.ID > 0) {
            fileSrc = image.FilePartialPath + image.FileNameFull_Small;
            fileName = image.FileName;
        }

        $(".image-profile-tile").attr({
            "src": fileSrc,
            "alt": fileName
        }).centerImage();
    }

	return {
	    init: init,
		upload: uploadImage,
		removeImage: removeImage,
		removeMainImageResponse: removeMainImageResponse,
		removeImageTileResponse: removeImageTileResponse,
		imageResponse: imageResponse,
		removeGalleryImageResponse: removeGalleryImageResponse,
		isValidFile: isValidFile,
	};
}());

var video = (function () {
    "use strict";

    var videoFormSubmit = document.querySelector("#btnProfileForm_VideoUploadSubmit");
    var txtVideoUrl = document.querySelector("#txtProfileForm_VideoUrl");

    function init() {
        videoFormSubmit.onclick = function () {
            gigModal.showPleaseWait();
            uploadVideo();
        };

        $("#hdivProfileForm_VideoGalleryContainer").on("click", ".profileForm_VideoGalleryItem", function () {
            var videoId;
            var confirmDelete;
            
            confirmDelete = confirm("Are you sure you want to delete this item?");

            if (confirmDelete) {
                overlayWindow();
                videoId = this.getAttribute("data-videoid");
                removeVideo(videoId);
            }
            hideOverlayWindow();
        });

        // lazy load vimeo videos here
        $("body").on("click.LazyLoadEmbed", ".video-thumbnail-embed", function (event) {
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
            }
        });
    }

    function uploadVideo() {
        var txtVideoUrlField = document.querySelector("#txtProfileForm_VideoUrl");
        var isVimeo = /vimeo/g.test(txtVideoUrlField.value);
        var videoUrl = txtVideoUrlField.value;

        lastRequestingElement = $("#btnProfileForm_VideoUploadSubmit");

        if (isVimeo) {
             getThumbnailAndEmbed(txtVideoUrlField.value);
        } else {
            var jsonToPost = "{'videoUrl': '" + videoUrl + "'}";
            var serviceRequestUrl = websiteSettings.relativePathRoot + "File/UploadVideo/";
            var successFunction = "video.videoResponse";

            ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
        }
    }

    function uploadVimeoVideo(vimeoUrl) {
        var jsonToPost = "{'videoUrl': '" + vimeoUrl + "'}";
        var serviceRequestUrl = websiteSettings.relativePathRoot + "File/UploadVideo/";
        var successFunction = "video.videoResponse";

        ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
    }

    function getThumbnailAndEmbed(vimeoUrl) {
        var vimeoKey = vimeoUrl.split("/");
        vimeoKey = vimeoKey[vimeoKey.length - 1];

        $.getJSON("https://vimeo.com/api/v2/video/" + vimeoKey + ".json", function (data) {
            uploadVimeoVideo(data[0].url + "?tn=" +data[0].thumbnail_medium);
        });
    }

    function removeVideo(itemId) {
	    var jsonToPost = "{'id': '" + itemId + "'}";
	    var serviceRequestUrl = websiteSettings.relativePathRoot + "File/DeleteVideo/";
	    var successFunction = "video.removeVideoGalleryResponse";

	    ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
	}

    function videoResponse() {
	    if (lastJsonResult.Succeeded) {
	        txtVideoUrl.value = "";
            bindVideoGallery(lastJsonResult.Data);

	    } else {
	        handleServerSideValidationErrors();
	    }

	    self.setTimeout(function () {
	        hideOverlayWindow();
	        return true;
	    }, 1000);
    }

    function bindVideoGallery(videos) {

        var tblVideoGallery = $("#tlProfileForm_VideoGallery");
        var vids = [];

        for (var i = 0; i < videos.length; i++) {
            var vid = videos[i];

            var videoEmbedClass = vid.isVimeo ? "vimeo-embed" : "youtube-embed";

            var vidElement = "<td class=\"item-tile\">" +
                            "<div class=\"video-thumbnail-embed embed-responsive embed-responsive-16by9 video-embed-preview " + videoEmbedClass + "\" " +
                                  "data-embed=\"" + vid.ExternallyHostedUrl + "\" data-videoid=\"" + vid.ID + "\" data-videokey=\"" + vid.VideoID + "\">" +
                                    "<img src=\"" + vid.ThumbnailUrl + "\" class=\"img-responsive\" alt=\"Alternate title\">" +
                                    "<span class=\"glyphicon glyphicon-play\"></span>" +
                            "</div>" +
                            "<p class=\"flex-caption\">" +
                            "<a class=\"profileForm_VideoGalleryItem\"" +
                            "data-videoid=\"" + vid.ID + "\">Delete</a>" +
                            "</p></td>";

            vids.push(vidElement);
        }

        tblVideoGallery.dataTable().fnClearTable();

        for (var v = 0; v < vids.length; v++) {
            var item = vids[v];
            tblVideoGallery.dataTable().fnAddData([item]);
        }

        var rows = tblVideoGallery.fnGetNodes();

        for (var r = 0; r < rows.length; r++) {
            var row = rows[r];
            $(row).addClass("tile col-xs-6 col-sm-4");
            $(row).find("td").addClass("item-tile");
        }

        tblVideoGallery.dataTable().fnDraw();
    }

    function removeVideoGalleryResponse() {
        
        if (lastJsonResult.Succeeded) {
            bindVideoGallery(lastJsonResult.Data);
        } else {
            handleServerSideValidationErrors();
        }

        self.setTimeout(function () {
            hideOverlayWindow();
            return true;
        }, 1000);
    }

    function showThumbnail(video) {
        $(".vimeo-embed[data-videokey='" + video.video_id + "']").html(video.html);
    }

    function loadVimeoVideo(vimeoSlide) {

        var apiUrl = $(vimeoSlide).attr("data-embed");
        var itemID = $(vimeoSlide).attr("data-videoid");
        var videoId = $(vimeoSlide).attr("data-videoKey");

        var embedJs = document.createElement("SCRIPT");
        embedJs.setAttribute("type", "text/javascript");
        embedJs.setAttribute("src", apiUrl + "&callback=video.showThumbnail");

        document.getElementsByTagName("head").item(0).appendChild(embedJs);
    }

    return {
        init:init,
        uploadVideo: uploadVideo,
        removeVideo: removeVideo,
        removeVideoGalleryResponse: removeVideoGalleryResponse,
        videoResponse: videoResponse,
        showThumbnail: showThumbnail
    };
})();

var audio = (function () {
    "use strict";

    var audioLibrarySubmit = document.querySelector("#btnProfileForm_AudioLibrarySubmit");
    var audioFiles = document.querySelector("#txtProfieForm_AudioLibrary");
    var audioTitle = document.querySelector("#txtProfileForm_AudioTitle");
    var audioContainer = document.getElementById("htbodyProfileForm_AudioContainer");
    var audioTemplate = document.getElementById("tmplProfileForm_AudiosTemplate");
    var audioUploadConfirmation = document.getElementById("spProfileForm_AudioUploadConfirmation");
    var deleteAllFiles = document.getElementById("hypProfileForm_DeleteAllAudioFiles");

    audioLibrarySubmit.onclick = function () {
        gigModal.showPleaseWait();
        uploadFile(audioFiles, "/File/UploadAudio");
    };

    function uploadFile(sourceElement, postUrl) {
        gigModal.showPleaseWait();

        var formdata = new FormData();
        var audioFiles = sourceElement;
        var i;
        for (i = 0; i < audioFiles.files.length; i += 1) {
            formdata.append("files", audioFiles.files[i]);
        }
        
        formdata.append("title", audioTitle.value);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", postUrl);
        xhr.send(formdata);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                lastJsonResult = JSON.parse(xhr.responseText);
                uploadResponse();
            }
        };
    }

	function removeFile(requestingElement) {
		var confirmResult;
		var confirmDelete = true;

		if (typeof requestingElement !== "undefined" && requestingElement !== null) {
			lastRequestingElement = $(requestingElement);
			confirmResult = confirm(lastRequestingElement.attr("data-confirmactionmessage"));
			confirmDelete = confirmResult;
		}

		if(confirmDelete) {
			overlayWindow();

			var itemId = lastRequestingElement.attr("data-audio-id");
			var serviceRequestUrl = websiteSettings.relativePathRoot + "File/DeleteAudio?id=" + itemId;
			var successFunction = "audio.removeResponse";

			ajaxRequest(lastRequestingElement, null, serviceRequestUrl, successFunction, null, null, true);
		} 
	}

	function updateFileName(requestingElement) {
		lastRequestingElement = $(requestingElement);

		overlayWindow();

		var formGroup = lastRequestingElement.attr("data-formgroup");
		var audioId = lastRequestingElement.attr("data-audioid");
		var audioTitle = $("input[data-formgroup='" + formGroup + "'][name='title']").val();

		var jsonToPost = JSON.stringify({id:audioId, title:audioTitle});
		var serviceRequestUrl = lastRequestingElement.attr("data-servicerequesturl");
		var successFunction = "audio.updateResponse";

		ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
	}

	function uploadResponse() {
	    
	    if (lastJsonResult.Succeeded) {
		 
		 	audioFiles.value = "";
		 	audioTitle.value = "";
		 	
		 	$(audioUploadConfirmation).show();
		 	window.setTimeout(function () {
		 	    $(audioUploadConfirmation).fadeOut(1500);
		 	}, 2000);

		   _bindAudios(lastJsonResult.Data);
		  
	    }
	    else {
	        handleServerSideValidationErrors();
	    }

		hideOverlayWindow();
		return true;
	}

	function removeResponse() {

		if (lastJsonResult.Succeeded) {
			$.event.trigger("AudioDelete");
			_bindAudios(lastJsonResult.Data);
		} else {
			handleServerSideValidationErrors();
		}

	    hideOverlayWindow();
	    return true;
	}

	function deleteAll() {
	    var serviceRequestUrl = websiteSettings.relativePathRoot + "File/DeleteAllAudioFiles";
	    var successFunction = "audio.removeResponse";

	    ajaxRequest(lastRequestingElement, null, serviceRequestUrl, successFunction, null, null, true);
	}

	function updateResponse() {

	    if (lastJsonResult.Succeeded) {
	        _bindAudios(lastJsonResult.Data);
	    } else {
	        handleServerSideValidationErrors();
	    }

		hideOverlayWindow();
	    return true;
	}

	function editFile(requestingElement) {
		if (typeof requestingElement !== "undefined" && requestingElement !== null) {
			lastRequestingElement = $(requestingElement);
		}
		
	    var id = lastRequestingElement.attr("data-audio-id");
	    var $txtAudioTitle = $("#txtProfileForm_Audio_" + id);
	    var orignalValue = $txtAudioTitle.attr("data-original-value");

		$(".profileForm_EditAudio_Input").hide();
		$(".profileForm_Audio_UpdateControls").hide();
		$(".profileForm_EditAudio_Label").show();
		$(".profileForm_Audio_EditControls").show();

	    $("#spProfileForm_Audio_" + id).hide();
	    $("#hdivProfileForm_AudioEditFile_" + id).hide();
	    $("#hdivProfileForm_AudioUpdateFile_" + id).show();

	    $txtAudioTitle
	    	.val(orignalValue)
	    	.show()
	    	.focus();
	}

	function cancelEditFile(requestingElement) {
		if (typeof requestingElement !== "undefined" && requestingElement !== null) {
			lastRequestingElement = $(requestingElement);
		}
		
	    var id = lastRequestingElement.attr("data-audio-id");
	    $("#hdivProfileForm_AudioUpdateFile_" + id).hide();
	    $("#txtProfileForm_Audio_" + id).hide();
	    $("#spProfileForm_Audio_" + id).show();
	    $("#hdivProfileForm_AudioEditFile_" + id).show();
	}

	function _bindAudios(audios) {
	    var tblAudioList = $("#tblProfileForm_AudioFiles").DataTable();

		tblAudioList.clear();

		if (audios.length > 0) {
			$("#hdivProfileForm_AudioPlayerContainer").show();

			for (var i = 0; i < audios.length; i++) {
				var audio = audios[i];

				var audioElement = "<td class=\"text-left\">" +
										"<a onclick=\"audioPlayer.playTrack(this);\" id=\"hypAudioPlayer_PlayTrack_" + audio.ID + "\" data-src=\"" + audio.FilePartialPath + audio.FileName_Mp3 + "\" data-audio-id=\"" + audio.ID + "\" data-title=\"" + audio.Title + "\">" +
											"<span class=\"glyphicon glyphicon-play\"></span>" +
										"</a>" +
										"<a onclick=\"audioPlayer.pauseTrack(this);\" id=\"hypAudioPlayer_PauseTrack_" + audio.ID + "\" class=\"audioPlayer_PlayingState\" style=\"color:#0d87e9;display:none;\">" +
											"<span class=\"glyphicon glyphicon-pause\"></span>" +
										"</a>" +
										"<span id=\"spProfileForm_Audio_" + audio.ID + "\" class=\"profileForm_EditAudio_Label\" style=\"margin-left:9px;\">" + audio.Title + "</span>" +
										"<label for=\"txtProfileForm_Audio_" + audio.ID + "\" class=\"sr-only\" style=\"height:0;\">Audio file name</label>" +
										"<input type=\"text\" id=\"txtProfileForm_Audio_" + audio.ID + "\" class=\'profileForm_EditAudio_Input\' value=\"test 3\" data-original-value=\"" + audio.Title + "\" data-formgroup=\"UpdateAudio-" + audio.ID + "\" name=\"title\" required style=\"display:none;margin-left:9px;\">" +
										"<input type=\"hidden\" id=\"hfProfileForm_AudioId_" + audio.ID + "\" value=\"" + audio.ID + "\" data-formgroup=\"UpdateAudio-" + audio.ID + "\" name=\"id\">" +
									"</td>";

				var audioElement2 = "<td class=\"text-right text-nowrap\">" +
										"<div id=\"hdivProfileForm_AudioEditFile_" + audio.ID + "\" class=\"profileForm_Audio_EditControls\">" +
											"<a data-audio-id=\"" + audio.ID + "\" onclick=\"audio.editFile(this);\">Edit</a> | " +
											"<a data-audio-id=\"" + audio.ID + "\" onclick=\"audio.removeFile(this);\" data-confirmactionmessage=\"Are you sure you want to delete this item?\" data-processingmessage=\"Deleting...\" data-successfunction=\"audio.removeResponse\">Delete</a>" +
										"</div>" +
										"<div id=\"hdivProfileForm_AudioUpdateFile_" + audio.ID + "\" style=\"display:none;\" class=\"profileForm_Audio_UpdateControls\">" +
											"<a data-audioid=\"" + audio.ID + "\" onclick=\"audio.updateAudio(this);\" data-formgroup=\"UpdateAudio-" + audio.ID + "\" data-overlaywindowwhileprocessing=\"true\" data-servicerequesturl=\"/File/UpdateAudio/\" data-successfunction=\"audio.updateResponse\">Update</a> | " +
											"<a data-audio-id=\"" + audio.ID + "\" onclick=\"audio.cancelEditFile(this);\">Cancel</a>" +
										"</div>" +
									"</td>";

				tblAudioList.row.add([audioElement, audioElement2]).draw();
			}
		} else {
			$("#hdivProfileForm_AudioPlayerContainer").hide();
			tblAudioList.draw();
		}

		self.setTimeout(function () {
		    deleteAllFiles.style.display = audios.length > 0 ? "inline" : "none";
			$("#txtProfileForm_AudioTitle").focus();
			$.event.trigger("AudioUploaded");
		}, 10);
    }

    return {
        removeFile: removeFile,
        updateResponse: uploadResponse,
        editFile: editFile,
        cancelEditFile: cancelEditFile,
        removeResponse: removeResponse,
        deleteAll: deleteAll,
        updateAudio: updateFileName
    };
})();

var audioPlayer = (function (undefined) {
    var audio;
    var npAction;
    var npTitle;
    var extension;
    var loadAudioFailed = false;

    var _audioState = {
    	Paused: "Paused",
    	Loading: "Loading...",
    	Playing: "Now Playing...",
    	Error: "Error playing this track..."
    };

	$(document).on("AudioDelete", resetAudioMetaData);
	$(document).on("AudioUploaded", loadFirstTrack);

    function init() {

        npAction = $("#audioPlayer_Action");
        npTitle = $("#audioPlayer_Title");

        audio = $("#profile_AudioPlayer").on("play", function () {

            loadAudioFailed = false;
            npAction.html(_audioState.Loading);
            var audioId = this.getAttribute("data-audio-id");
            $("#hypAudioPlayer_PlayTrack_" + audioId).hide();
            $("#hypAudioPlayer_PauseTrack_" + audioId).show();

        }).on("playing", function(){

			npAction.html(_audioState.Playing);
			
		}).on("pause", function () {

            if (!loadAudioFailed) {
                npAction.html(_audioState.Paused);
                var audioId = this.getAttribute("data-audio-id");

                $("#hypAudioPlayer_PauseTrack_" + audioId).hide();
                $("#hypAudioPlayer_PlayTrack_" + audioId).show();
            }

        }).on("ended", function () {

            npAction.html("");

            $(".audioPlayer_PlayingState").hide();
            var audioId = this.getAttribute("data-audio-id");
            $("#hypAudioPlayer_PlayTrack_" + audioId).show();

        }).on("error", function (event) {

            npAction.html(_audioState.Error);
            loadAudioFailed = true;

        }).get(0);

    }

    function loadTrack(playButton) {
        var $playButton = $(playButton);

        audio.pause();

        var playingNow_ID = audio.getAttribute("data-audio-id");
        $("#hypAudioPlayer_PauseTrack_" + playingNow_ID).hide();
        $("#hypAudioPlayer_PlayTrack_" + playingNow_ID).show();

        var audioId = $playButton.attr("data-audio-id");
        var audioTitle = $playButton.attr("data-title");
        var audioSrc = $playButton.attr("data-src");
        var audioPlaying_ID = audio.getAttribute("data-audio-id");

        if (audioPlaying_ID !== audioId) {
        	npAction.html("");

            audio.src = audioSrc;
            audio.setAttribute("data-audio-id", audioId);
        }
		
		npTitle.html(audioTitle);
    }

    function loadFirstTrack() {
    	loadTrack($("#htbodyProfileForm_AudioContainer").find("tr:first").find("a:first")[0]);
    }

    function playTrack(playButton) {
        var audioId = playButton.getAttribute("data-audio-id");
        var audioTitle = playButton.getAttribute("data-title");

        loadTrack(playButton);

        $(playButton).hide();
        $("#hypAudioPlayer_PauseTrack_" + audioId).show();
        
        audio.play();
    }

    function resetAudioMetaData() {
		
		$("#audioPlayer_Title").html("");
		$("#audioPlayer_Action").html(_audioState.Stoppped);
		
		var hasAudioFiles = lastJsonResult.Data.length > 0;

		if(hasAudioFiles) {
			loadFirstTrack();
		} else {
			audio.src = "";
			audio.load();	
		}
	}

    function pauseTrack() {
        audio.pause();
    }

    return {
        init: init,
        loadTrack: loadTrack,
        playTrack: playTrack,
        pauseTrack: pauseTrack
    };
})();

var song = (function () {
    "use strict";

    var songListSubmit = document.querySelector("#btnProfileForm_SongListSubmit");
    var txtSongTitleField = document.getElementById("txtProfileForm_SongTitle");
    var txtSongArtistField = document.getElementById("txtProfileForm_SongArtist");

    var tbodySongs = document.getElementById("tbodyProfileForm_SongsContainer");
    var tmplSongsTemplate = document.getElementById("tmplProfileForm_SongsTemplate");

    var csvFileUpload = document.querySelector("#txtProfieForm_SongListCsv");
    var csvFileUploadSubmit = document.querySelector("#btnProfileForm_SongListCsvSubmit");

    var tbodySongList = document.getElementById("tbodyProfileForm_SongsContainer");
    var songUploadConfirmation = document.getElementById("spProfileForm_SongUploadConfirmation");
    var deleteAllSongs = document.getElementById("hypProfileForm_DeleteAllSongs");

    songListSubmit.onclick = function () {
        gigModal.showPleaseWait();
        uploadSong();
    };

    csvFileUploadSubmit.onclick = function () {
        gigModal.showPleaseWait();
        uploadFile(csvFileUpload, "/File/UploadCsv");
    };

    function uploadSong() {
        var songTitle = txtSongTitleField.value;
        var songArtist = txtSongArtistField.value;

        var jsonToPost = "{'Artist': '" + songArtist + "', 'Title': '" + songTitle + "'}";
        var serviceRequestUrl = websiteSettings.relativePathRoot + "File/UploadSong";
        var successFunction = "song.uploadResponse";

        ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
    }

    function updateSong(requestingElement) {
        overlayWindow();
        var songId = requestingElement.getAttribute("data-song-id");
        var title = $("#txtProfileForm_SongTitle_" + songId).val();
        var artist = $("#txtProfileForm_SongArtist_" + songId).val();

        var jsonToPost = "{'ID': '" + songId + "', 'Artist': '" + artist + "', 'Title': '" + title + "'}";
        var serviceRequestUrl = websiteSettings.relativePathRoot + "File/UpdateSong";
        var successFunction = "song.uploadResponse";

        ajaxRequest(lastRequestingElement, jsonToPost, serviceRequestUrl, successFunction, null, null, true);
    }

    function removeItem(requestingElement) {
        var $spanProcessingMsg;
        var lastRequestingElement = $(requestingElement);
        var processingMsg = lastRequestingElement.attr("data-processingmessage");
        var confirmationMessage = lastRequestingElement.attr("data-confirmactionmessage");
        var result = confirm(confirmationMessage);

        if (result) {
            $spanProcessingMsg = $("<span>").html(processingMsg);
            lastRequestingElement.before($spanProcessingMsg).hide();

            var itemId = lastRequestingElement.attr("data-song-id");
            var serviceRequestUrl = websiteSettings.relativePathRoot + "File/DeleteSong?id=" + itemId;
            var successFunction = "song.removeResponse";

            ajaxRequest(lastRequestingElement, null, serviceRequestUrl, successFunction, null, null, true);
        } else {
            buttonClickRequestComplete(lastRequestingElement);
        }
    }

    function uploadResponse() {

        if (lastJsonResult.Succeeded) {
            txtSongTitleField.value = "";
            txtSongArtistField.value = "";

            $(songUploadConfirmation).show();
            window.setTimeout(function () {
                $(songUploadConfirmation).fadeOut(1500);
            }, 2000);

            _bindSongs();
        }
        else {
            handleServerSideValidationErrors();
        }

        gigModal.hidePleaseWait();
        return true;
    }

    function deleteAll() {
        var serviceRequestUrl = websiteSettings.relativePathRoot + "File/DeleteAllSongs";
        var successFunction = "song.deleteAllResponse";

        ajaxRequest(lastRequestingElement, null, serviceRequestUrl, successFunction, null, null, true);
    }

    function deleteAllResponse() {

        if (lastJsonResult.Succeeded) {
            _bindSongs();
        } else {
            handleServerSideValidationErrors();
        }

        return true;
    }

    function _bindSongs() {
        var dt = $("#tblProfileForm_Songs").DataTable();
        var songs = lastJsonResult.Data;

        dt.clear();

        if (songs.length > 0) {
            for (var i = 0; i < songs.length; i++) {
                var item = songs[i];

                var itemTitle = "<span id=\"spProfileForm_SongTitle_" + item.ID + "\">" + item.Title + "</span>" +
                    "<input type=\"text\" id=\"txtProfileForm_SongTitle_" + item.ID + "\" value=\"" + item.Title + "\" data-original-value=\"" + item.Title + "\" data-formgroup=\"UpdateSong-" + item.ID + "\" name=\"Title\" required style=\"display:none;\">" +
                    "<input type=\"hidden\" id=\"hfProfileForm_SongTitleId_" + item.ID + "\" value=\"" + item.ID + "\" data-formgroup=\"UpdateSong-" + item.ID + "\" name=\"ID\">";

                var itemArtist = "<span id=\"spProfileForm_SongArtist_" + item.ID + "\">" + item.Artist + "</span>" +
                   "<input type=\"text\" id=\"txtProfileForm_SongArtist_" + item.ID + "\" value=\"" + item.Artist + "\" data-original-value=\"" + item.Artist + "\" data-formgroup=\"UpdateSong-" + item.ID + "\" name=\"Artist\" required style=\"display:none;\">";

                var itemControls = "<div id=\"hdivProfileForm_SongEditContainer_" + item.ID + "\">" +
                            "<a onclick=\"song.editFile(this);\" data-song-id=\"" + item.ID + "\">Edit</a> | " +
                            "<a class=\"newly-created-song\" onclick=\"song.removeSong(this);\" data-confirmactionmessage=\"Are you sure you want to delete this item?\" data-processingmessage=\"Deleting...\" data-song-id=\"" + item.ID + "\">Delete</a></div>" +
                        "<div id=\"hdivProfileForm_SongUpdateContainer_" + item.ID + "\" style=\"display:none;\">" +
                            "<a onclick=\"song.updateSong(this);\" data-formgroup=\"UpdateSong-" + item.ID + "\" data-servicerequesturl=\"/File/UpdateSong/\" data-song-id=\"" + item.ID + "\" data-successfunction=\"song.updateResponse\">Update</a> | " +
                            "<a onclick=\"song.cancelEditFile(this)\" data-song-id=\"" + item.ID + "\">Cancel</a></div>";

                dt.row.add([itemTitle, itemArtist, itemControls]).draw();
            }

            var cells = dt.cells().nodes();
        }
        else {
            dt.draw();
        }

        self.setTimeout(function () {
            deleteAllSongs.style.display = (songs.length > 0) ? "inline" : "none";
            $("#txtProfileForm_SongTitle").focus();
        },10);
    }

    function uploadFile(sourceElement, postUrl) {
        gigModal.showPleaseWait();
        var formdata = new FormData();
        var audioFiles = sourceElement;

        var i;
        for (i = 0; i < audioFiles.files.length; i += 1) {
            formdata.append("files", audioFiles.files[i]);
        }

        var xhr = new XMLHttpRequest();
        xhr.open("POST", postUrl);
        xhr.send(formdata);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                lastJsonResult = JSON.parse(xhr.responseText);
                sourceElement.value = "";
                uploadResponse();
                gigModal.hidePleaseWait();
            }
        };
    }

    function editFile(requestingElement) {
        var songid = typeof requestingElement !== "undefined" && requestingElement !== null ?
                     requestingElement.getAttribute("data-song-id") :
                     lastRequestingElement.attr("data-song-id");
        var $txtSongTitle = $("#txtProfileForm_SongTitle_" + songid);
        var $txtArtistName = $("#txtProfileForm_SongArtist_" + songid);

        var originalSongTitle = $txtSongTitle.attr("data-original-value");
        var originalArtistName = $txtArtistName.attr("data-original-value");

        $("#spProfileForm_SongTitle_" + songid).hide();
        $("#spProfileForm_SongArtist_" + songid).hide();
        $("#hdivProfileForm_SongEditContainer_" + songid).hide();
        $txtSongTitle.val(originalSongTitle).show();
        $("#hfProfileForm_SongTitleId_" + songid).show();
        $txtArtistName.val(originalArtistName).show();
        $("#hdivProfileForm_SongUpdateContainer_" + songid).show();
    }

    function cancelEditFile(requestingElement) {
        var songid = typeof requestingElement !== "undefined" && requestingElement !== null ?
                     requestingElement.getAttribute("data-song-id") :
                     lastRequestingElement.attr("data-song-id");
        
        $("#hdivProfileForm_SongEditContainer_" + songid).show();
        $("#txtProfileForm_SongTitle_" + songid).hide();
        $("#hfProfileForm_SongTitleId_" + songid).hide();
        $("#txtProfileForm_SongArtist_" + songid).hide();
        $("#hdivProfileForm_SongUpdateContainer_" + songid).hide();
        $("#spProfileForm_SongTitle_" + songid).show();
        $("#spProfileForm_SongArtist_" + songid).show();
    }
  
    return {
        uploadSong: uploadSong,
        uploadResponse: uploadResponse,
        updateSong: updateSong,
        updateResponse: uploadResponse,
        removeSong: removeItem,
        removeResponse: uploadResponse,
        editFile: editFile,
        cancelEditFile: cancelEditFile,
        deleteAll: deleteAll,
        deleteAllResponse: deleteAllResponse
    };
})();


fileManager.init();
video.init();
audioPlayer.init();