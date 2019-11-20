<style>
    .gallery-image {
        max-width: 150px;
        display: inline-block;
        position: relative;
    }
    .gallery-image .delete {
        width: 90%;
        height: 25px;
        position: absolute;
        right: 10px;
        bottom: -25px;
        background-color: rgba(50, 50, 50, 0.8);
        color: white;
        font-weight: bold;
        font-size: 14px;
        text-align: center;
        padding-top: 0px;
    }
    .gallery-image .delete:hover {

    }

    .gallery-image .delete a {
        color: white;
    }
</style>

<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a  data-toggle="false" data-parent="#accordion" href="#collapse2" class="disabled">Media Files</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse">
            <div class="panel-body">
                <h3>Profile Photo Tile</h3>
                <p>
                    Upload an image to represent your service. This will be the primary image shown in search results. The final image will be resized to 300 x 300 (square), so uploading a "square" image, ie. 300 x 300, 400 x 400, etc., will give the best results.
                </p>
                <div class="form-inline">
                    <div class="form-group">
                        <input accept="image/gif, image/jpeg, image/png" class="btn btn-default" @change="updateProfileImage" type="file" value="">
                    </div>
                    <button @click="uploadMainImage()" class="btn btn-primary">Upload</button>
                </div>
                <div class="clearfix">
                    &nbsp;
                </div>

                <div  class="profileForm_TileProfilePhoto" v-if="vendor.profile_image">
                    <img :src="vendor.profile_image.file_url" alt="logo" class="profile-image img-responsive">
                    <div class="profileForm_ProfileImageOverlay" style="display:">
                        <a class="clickFunction"
                           @click="deleteProfileImage()"
                        >Delete</a>
                    </div>
                </div>

                <div class="profileForm_TileProfilePhoto" v-else="">
                    <img src="/images/ImageNotAvailable_Small.jpg" alt="Profile Photo Tile" class="profile-image img-responsive">
                    <div  class="profileForm_ProfileImageOverlay" style="display:none;">
                        <a class="clickFunction" data-clickfunction="fileManager.removeImage" data-confirmactionmessage="Are you sure you want to delete this item?" data-imageid="0" data-istile="true" data-overlaywindowwhileprocessing="true" data-processingmessage="Deleting..." data-successfunction="fileManager.removeImageTileResponse"  data-clickfunctionenabled="true">Delete</a>
                    </div>
                </div>

                <h3>Photo Gallery</h3>
                <p>
                    A picture is worth a thousand words. Upload additional images to provide further details about your service. These images will be resized to 640 x 360," so uploading images that are exactly 640 x 360, or images with the same aspect ratio (ie. 1280 x 720, 800 x 450, etc.) will give the best results.
                </p>
                <div class="form-inline">
                    <div class="form-group">
                        <input accept="image/gif, image/jpeg, image/png" class="btn btn-default" @change="updateGalleryImage" type="file">
                    </div>
                    <button @click="uploadGalleryImage()" class="btn btn-primary">Upload</button>
                </div>
                <div class="clearfix">
                    &nbsp;
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12 col-md-6 col-lg-4 gallery-image" v-for="image in vendor.images">
                        <div class="delete">
                            <a @click="deletePhoto(image)">delete</a>
                        </div>
                        <img :src="image.thumbnail_url" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="clearfix">
                    &nbsp;
                </div>

                <h3>Video Gallery</h3>
                <p>
                    Upload YouTube or Vimeo videos of your service. Simply copy and paste the URLs of your individual videos.
                </p>
                <div class="form-inline">
                    <div class="form-group" style="margin-right:6px;">
                        <label class="control-label sr-only">Enter Video URL:</label>
                        <input type="text" v-model="videoToAddUrl" placeholder="Enter Video URL" class="form-control">
                    </div>
                    <button @click="addVideo()" class="btn btn-primary" >Upload</button>
                </div>
                <div class="clearfix">
                    &nbsp;
                </div>
                <div  class="col-sm-12">
                    <div v-for="video in vendor.videos" v-html="getEmbedCode(video.url)"></div>
                </div>
                <div class="clearfix">
                    &nbsp;
                </div>
                <h3>Audio Library</h3>
                <p>
                    Upload audio (MP3) files as audio samples of your service.
                </p>
                <div class="form-inline">
                    <div class="form-group">
                        <label class="control-label sr-only">Audio file name:</label>
                        <input type="text" class="form-control" v-model="audioFileTitle" placeholder="Audio file name">
                    </div>
                    <div class="form-group">
                        <input type="file" @change="updateAudioData" class="btn btn-default" accept="audio/mp3,audio/ogg">
                    </div>
                    <button @click="uploadAudioFile()" class="btn btn-primary">Upload</button>
                    <span  class="profileForm_MediaSaved text-success" style="display:none;">file uploaded!</span>
                </div>
                <div  class="col-sm-12">
                    <div  style="display:none;">
                        <div class="col-sm-6 col-xs-6 no-padding text-left audioPlayer_TrackInformation">
                            <h4 ></h4>
                        </div>
                        <div class="col-sm-6 col-xs-6 no-padding text-right audioPlayer_TrackInformation">
                            <h4 >
                            </h4>
                        </div>
                        <div >
                            <div id="audio0">
                                <audio preload="auto"  controls="controls" src="" data-audio- style="width:100%;">Your browser does not support HTML5 Audio!</audio>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="dataTable-custom-filter col-sm-6">
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="dataTables_info"  role="status" aria-live="polite">
                                        Showing 0 to 0 of 0 items
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-hover table-condensed no-footer">
                                        <thead>
                                        <tr role="row">
                                            <th style="width: 90%;">
                                                Title
                                            </th>
                                            <th style="width: 10%;">&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                        <tr class="odd" v-for="audio in vendor.audios">
                                            <td valign="top">
                                                {{ audio.title }}
                                            </td>
                                            <td>
                                                <audio controls>
                                                    <source :src="audio.file_url">
                                                </audio>
                                            </td>

                                            <td>
                                                <button class="btn btn-sm btn-warning">Delete</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    &nbsp;
                </div>
                <h3>Song List</h3>
                <div class="form-inline">
                    <div class="form-group" style="margin-right:6px;">
                        <label class="control-label sr-only">Song Title</label>
                        <input class="form-control" v-model="songToAdd.title" placeholder="Song Title">
                    </div>
                    <div class="form-group" style="margin-right:6px;">
                        <label  class="control-label sr-only">Artist Name</label>
                        <input type="text" class="form-control" v-model="songToAdd.artist" placeholder="Artist Name">
                    </div>
                    <button @click="addSong()" class="btn btn-primary">Save</button>
                </div>
                <div  class="col-sm-12" style="margin-top:16px;">
                    <div class="table-responsive">
                        <div  class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="dataTable-custom-filter col-sm-6">
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="dataTables_info"  role="status" aria-live="polite">
                                        Showing 0 to 0 of 0 items
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table  class="table table-hover table-bordered table-condensed dataTable no-footer" data-allowfilter="false" data-allowpaging="true" data-showsummaryinformation="true" data-pagingsizeoptions="[[6, 12, 32, -1], [6, 12, 32, 'All']]" data-pagingsizedefaultoption="6" data-allowsort="false" data-dom="<'row'<'dataTable-custom-filter col-sm-6'f>
								<'col-sm-6 text-right'i>><'row'<'col-sm-12'tr>><'row'<'col-sm-12'p>>" aria-describedby="tblProfileForm_Songs_info" role="grid" data-datatableenabled="true">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">
                                                Song Title
                                            </th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">
                                                Artist Name
                                            </th>
                                            <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">
                                                <a class="clickFunction" data-clickfunction="song.deleteAll" data-overlaywindowwhileprocessing="true" data-processingmessage="deleting..." data-successfunction="song.deleteAllResponse"  style="display:none;" data-clickfunctionenabled="true">Delete all</a>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody v-if="vendor.songs && vendor.songs.length">
                                        <tr v-for="song in vendor.songs">
                                            <td>{{ song.title }}</td>
                                            <td>{{ song.artist }}</td>
                                        </tr>
                                        </tbody>
                                        <tbody v-else>
                                        <tr class="odd">
                                            <td valign="top" colspan="3" class="dataTables_empty">
                                                There are no items to display.
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="dataTables_paginate paging_full_numbers" >
                                        <ul class="pagination">
                                            <li class="paginate_button first disabled" ><a href="#" aria-controls="tblProfileForm_Songs" data-dt-idx="0" tabindex="0">«</a></li>
                                            <li class="paginate_button previous disabled" ><a href="#" aria-controls="tblProfileForm_Songs" data-dt-idx="1" tabindex="0">‹</a></li>
                                            <li class="paginate_button next disabled" ><a href="#" aria-controls="tblProfileForm_Songs" data-dt-idx="2" tabindex="0">›</a></li>
                                            <li class="paginate_button last disabled" ><a href="#" aria-controls="tblProfileForm_Songs" data-dt-idx="3" tabindex="0">» </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from '../../../../eventBus'
    import bootbox from 'bootbox';



    import _ from 'underscore'

    export default {
        props: ['vendor'],
        data() {
            return {
                profileImageData: null,
                imageToUploadData: null,
                imageIndex: null,

                videoToAddUrl: '',

                audioUploadData: null,
                audioFileTitle: '',

                songToAdd: {
                    title: '',
                    artist: '',
                }
            }
        },
        mounted() {

        },
        computed: {
            imageGalleryImages() {
                var images = [];
                _.each(this.vendor.images, function (img) {
                    images.push(img.thumbnail_url)
                })
                return images;
            },
            galleryDropzoneOptions() {
                return {
                    url: '/api/images',
                    thumbnailWidth: 200
                }
            }
        },
        methods: {
            updateAudioData(e) {
                this.audioUploadData = e.target.files[0];
            },
            uploadAudioFile() {
                if(!this.audioUploadData) return;
                var data = new FormData();
                data.append('vendor_id', this.vendor.id);
                data.append('title', this.audioFileTitle);
                data.append('file', this.audioUploadData);
                axios.post('/api/audio', data).then(function(response) {
                    EventBus.$emit('vendorUpdated', { vendor: response.data.vendor })
                    this.audioUploadData = null;
                    this.audioFileTitle = '';
                }.bind(this));

            },

            updateProfileImage(e) {
                this.profileImageData = e.target.files[0];
            },
            uploadMainImage() {
                if(!this.profileImageData) return;
                this.uploadImage('profile', this.profileImageData);
            },
            updateGalleryImage(e) {
                this.imageToUploadData = e.target.files[0];
            },
            uploadGalleryImage(e) {
                if(!this.imageToUploadData) return;
                this.uploadImage('gallery', this.imageToUploadData);
            },
            uploadImage(type, dataSource) {
                var data = new FormData();
                data.append('vendor_id', this.vendor.id);
                data.append('type', type);
                data.append('file', dataSource);
                axios.post('/api/images', data).then(function(response) {
                    EventBus.$emit('vendorUpdated', { vendor: response.data.vendor })
                    this.profileImageData = null;
                    this.imageToUploadData = null;
                }.bind(this))
            },
            deletePhoto(image) {
                bootbox.confirm('Are you sure you want to delete this image?', function(yes) {
                    if(yes) {
                        axios.delete('/api/images/'+image.id).then(function(response) {
                            EventBus.$emit('vendorUpdated', { vendor: response.data.vendor })
                        })
                    }
                })
            },

            addSong() {
                axios.post('/api/songs', {
                    vendor_id: this.vendor.id,
                    title: this.songToAdd.title,
                    artist: this.songToAdd.artist
                }).then(function(response) {
                    EventBus.$emit('vendorUpdated', {vendor: response.data.vendor})
                    this.songToAdd.title = '';
                    this.songToAdd.artist = '';
                }.bind(this))
            },

            addVideo() {
                axios.post('/api/videos', {
                    vendor_id: this.vendor.id,
                    url: this.videoToAddUrl
                }).then(function (response) {
                    EventBus.$emit('vendorUpdated', {vendor: response.data.vendor})
                    this.videoToAddUrl = '';
                }.bind(this))
            },

            getVideoIdFromUrl(url) {
                var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
                var match = url.match(regExp);

                if (match && match[2].length == 11) {
                    return match[2];
                } else {
                    return 'error';
                }
            },

            getEmbedCode(url) {
                var videoId = this.getVideoIdFromUrl(url);
                return '<iframe width="560" height="315" src="//www.youtube.com/embed/'
                    + videoId + '" frameborder="0" allowfullscreen></iframe>';
            },
        },
        components: {

        }
    }
</script>
