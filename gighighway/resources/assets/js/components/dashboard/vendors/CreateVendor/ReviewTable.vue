<style>

</style>

<template>
    <div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Review</th>
                <th>Rating</th>
                <th style="white-space:nowrap;vertical-align:middle;">
                    <a @click="showAddModal = true" class="pull-left">Add Review</a>
                </th>
            </tr>
            </thead>
            <tbody v-if="reviews.length == 0">
            <tr>
                <td valign="top" colspan="5" class="dataTables_empty">There are no items to display.</td>
            </tr>
            </tbody>
            <tbody v-else>
                <tr v-for="review in vendor.reviews">
                    <td>{{ review.title }}</td>
                    <td>{{ review.text }}</td>
                    <td>
                        <span v-for="number in 5">
                            <span v-if="(number) <= review.rating">&#9733</span>
                                <span v-else>&#9734</span>
                        </span>
                    </td>
                    <td>
                        <a @click="removeReview(review)">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <modal v-model="showAddModal"
               title="Add a Review"
               @hide="modalClosed"
               size="lg"
               ref="addReviewModal">
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
                    <label  class="control-label col-sm-4" >
                        Event Location:
                        <span class="requiredAsterisk">*</span>
                    </label>
                    <div class="col-sm-5">
                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        <input id="event-location" class="form-control autocomplete ui-autocomplete-input" maxlength="300" placeholder="City, ST or ZIP Code" title="City, ST or ZIP Code" type="text" autocomplete="off" data-autocompleteenabled="true">
                        <typeahead v-model="newReview.location"
                                   target="#event-location"
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
        </modal>
    </div>
</template>

<script>
    import {Modal, Typeahead} from 'uiv'
    import { EventBus } from '../../../../eventBus'
    import _ from 'underscore'

    export default {
        props: ['vendor'],
        data() {
            return {
                showAddModal: false,
                reviews: [

                ],
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
            EventBus.$on('vendorLoaded', function(payload) {
                console.log('populating reviews')
                this.reviews = payload.vendor.reviews;
            }.bind(this))
        },
        computed: {
            newReviewTextRemaining() {
                return 1000 - this.newReview.text.length;
            },
        },
        methods: {
            removeReview(review) {
                this.reviews = this.reviews.filter(function(item) {
                    if(review.id) {
                        if(review.id == item.id) {
                            return false;
                        }
                    }else {
                        if(item.title == review.title && item.text == review.text && item.rating == review.rating && item.reviewer_display_name == review.reviewer_display_name) {
                            return false;
                        }
                    }
                    return true;
                });
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
            modalClosed(msg) {
                if(msg == 'cancel') {
                    this.resetNewReview()
                }else {
                    this.save();
                }
            },
            save() {
                this.reviews.push(_.clone(this.newReview));
                this.vendor.reviews = this.reviews;
                this.showAddModal = false;
                this.resetNewReview()
            },
        },
        components: { Modal, Typeahead }
    }
</script>
