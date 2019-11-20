<style>

</style>

<template>
    <div>
        <div>
            <sweet-modal ref="review">
                <login-form v-if="!vmUser || !vmUser.id" action="favorite a vendor"></login-form>
                <div v-else>
                    <div class="form-horizontal well" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-4">Review Title:<span class="requiredAsterisk">*</span></label>
                            <div class="col-xm-4 col-sm-8">
                                <input class="form-control" maxlength="100" name="Title" required="required" type="text" v-model="newReview.title"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" >Write your Review:<span class="requiredAsterisk">*</span></label>
                            <div class="col-xm-4 col-sm-8">
                                <div class="limitedTextarea">
                                    <textarea class="limitedTextarea form-control" v-model="newReview.text" maxlength="1000" name="ContentText" required="required" rows="4" ></textarea>
                                    <div >You have <strong>{{ newReviewTextRemaining }}</strong> character(s) remaining.</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group reviewForm_RatingContainer">
                            <label class="control-label col-sm-4">
                                Rating (1-5 stars):
                            </label>
                            <div class="col-xm-4 col-sm-8">
                                <div class="rating form-control-static">
                            <span @click="newReview.rating = number" v-for="number in 5" style="cursor: pointer">
                                <span v-if="number <= newReview.rating">&#9733</span>
                                <span v-else>&#9734</span>
                            </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4">
                                Event Date:
                                <span class="requiredAsterisk">*</span>
                            </label>
                            <div class="col-xm-4 col-sm-8">
                                <input v-model="newReview.event_date" class="dateTextbox form-control" max="2018-02-26" maxlength="25" min="1900-01-01" required="required" type="date"></div>
                        </div>

                        <div class="form-group">
                            <label  class="control-label col-sm-4" >Event Location:</label>
                            <div class="col-sm-5">
                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                <input :id="'event-location'+guid" class="form-control autocomplete ui-autocomplete-input" maxlength="300" placeholder="City, ST or ZIP Code" title="City, ST or ZIP Code" type="text" autocomplete="off" data-autocompleteenabled="true">
                                <typeahead v-model="newReview.location"
                                           :target="'#event-location'+guid"
                                           async-src="/api/search/location?q="
                                           :force-select="true"
                                           item-key="description"></typeahead>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4" >Reviewer's Name:<span class="requiredAsterisk">*</span></label><div class="col-xm-4 col-sm-8">

                            <input class="form-control" v-model="newReview.reviewer_display_name" maxlength="25" required="required" type="text"></div>
                        </div>
                    </div>
                </div>

                <button slot="button" class="btn btn-default" @click="$refs.review.close()">Cancel</button>
                <button slot="button" class="btn btn-success" @click="save()">Save Review</button>
            </sweet-modal>
        </div>
        <button class="btn btn-warning btn-tile" v-if="alreadyReviewed">
            Thank you for your review!
        </button>
        <button class="btn btn-primary btn-tile" v-else @click="openReviewModal()">
            <span v-if="loading"> <i class="fa fa-spin fa-spinner"></i> Loading... </span>
            <span v-else>Write a Review</span>
        </button>
    </div>
</template>

<script>
    import { EventBus } from "../../../eventBus";
    import LoginForm from '../LoginForm'
    import { SweetModal } from 'sweet-modal-vue'
    import {Typeahead} from 'uiv'

    export default {
        props: ['vendor', 'user'],
        data() {
            return {
                guid: '',
                loading: false,
                vmUser: {id: null},
                newReview: {
                    title: '',
                    rating: 0,
                    event_zip_code: null,
                    location: {
                        id: 0,
                        description: ''
                    },
                    event_date: null,
                    text: '',
                    reviewer_display_name: ''
                }
            }
        },
        mounted() {
            this.guid = this.getGuid();
            this.vmUser = this.user;
            EventBus.$on('auth:loggedIn', function(user) {
                this.vmUser = user;
            }.bind(this))
        },
        computed: {
            alreadyReviewed() {
                if(!this.user) return false;
                var alreadyReviewed = true;

                for(var i in this.vendor.reviews) {
                    if(this.vendor.reviews[i].user_id == this.user.id) alreadyReviewed = true;
                }
                return alreadyReviewed;
            },
            newReviewTextRemaining() {
                return 1000 - this.newReview.text.length;
            },
        },
        methods: {
            getGuid() {
                function s4() {
                    return Math.floor((1 + Math.random()) * 0x10000)
                        .toString(16)
                        .substring(1);
                }
                return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
            },
            save() {
                this.loading = true;
                axios.post('/api/vendors/'+this.vendor.id+'/reviews', this.newReview).then(function(response) {
                    console.log(response);
                    this.loading = false;
                    this.$refs.review.close();
                }.bind(this))
            },
            openReviewModal() {
                this.$refs.review.open();
            },
            resetNewReview() {
                this.newReview = {
                    title: '',
                    rating: 0,
                    event_zip_code: null,
                    location: {
                        id: 0,
                        description: ''
                    },
                    event_date: null,
                    text: '',
                    reviewer_display_name: ''
                };
            },
        },
        components: { LoginForm, SweetModal, Typeahead }
    }
</script>
