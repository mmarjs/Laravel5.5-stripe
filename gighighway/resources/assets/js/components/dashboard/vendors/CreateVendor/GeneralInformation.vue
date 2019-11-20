<style>
    .additional-category {
        list-style: none;
        padding: 4px 10px;
        font-size: 16px;
        background-color: #bcdaff;
        display: inline;
        margin-left: 5px;
        border-radius: 10px;
        color: #333;
    }

    .additional-category .remove-category {
        font-weight: bold;
        color: #999;
        cursor: pointer;
    }
</style>

<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">General Information</a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="form-horizontal" role="form">
                    <input type="hidden"  name="ID"  required="required" value="0">
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Act or Business Name:
                            <span class="requiredAsterisk">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input class="form-control"  maxlength="100" v-model="vendor.name" required="required" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Brief Service Description:
                            <span class="requiredAsterisk">*</span>
                        </label>
                        <div class="col-sm-6">
                            <div>
                                <textarea class="limitedTextarea form-control" maxlength="500" v-model="vendor.description_brief" required="required" ></textarea>
                                <div>
                                    You have <strong>{{ briefDescriptionCharactersLeft }}</strong> character(s) remaining.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Extended Service Description:
                        </label>
                        <div class="col-sm-6">
                            <div class="limitedTextarea">
                                <textarea class="limitedTextarea form-control" maxlength="5000" v-model="vendor.description" rows="4" ></textarea>
                                <div>You have <strong>{{ fullDescriptionCharactersLeft }}</strong> character(s) remaining.</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <label  class="control-label col-sm-4 required" >Main Category:</label>
                        <div  class="col-sm-6">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input id="primary-category" class="form-control autocomplete ui-autocomplete-input" maxlength="300" placeholder="ex: Magician, Rock Band, Guitarist..." required="required" title="ex: Magician, Rock Band, Guitarist..." type="text" autocomplete="off">
                            <typeahead v-model="vendor.primary_category"
                                       target="#primary-category"
                                       :limit="25"
                                       :async-src="categoryAutocompleteUrl"
                                       :force-select="true"
                                       item-key="name"></typeahead>
                            <span class="help-block"><a href="#"  data-target="#hdivProfileForm_CategoryListModal" data-toggle="modal" data-ismain="true" data-modaltitle="Select a Main Category">Can't find what you are looking for?</a></span>
                        </div>
                    </div>
                    <div  class="form-group" style="display:none;">
                        <div class="col-sm-4">&nbsp;</div>
                        <div class="col-sm-6">
                            <p  class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="control-label col-sm-4" >Additional Categories</label>
                        <div class="col-sm-6">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input id="additional-category" class="form-control autocomplete ui-autocomplete-input" maxlength="300" placeholder="ex: Magician, Rock Band, Guitarist..." required="required" title="ex: Magician, Rock Band, Guitarist..." type="text" autocomplete="off">
                            <typeahead v-model="categoryToAdd"
                                       target="#additional-category"
                                       :async-src="categoryAutocompleteUrl"
                                       :limit="25"
                                       :force-select="true"
                                       item-key="name"></typeahead>
                            <span class="help-block"><a href="#"  data-target="#hdivProfileForm_CategoryListModal" data-toggle="modal" data-ismain="true" data-modaltitle="Select a Main Category">Can't find what you are looking for?</a></span>
                            <div>
                                <ul>
                                    <li class="additional-category" v-for="category in vendor.categories">
                                        {{ category.name }}
                                        <span class="remove-category" @click="removeAdditionalCategory(category)">x</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Phone Number:
                        </label>
                        <div class="col-sm-6">
                            <input class="phoneTextbox form-control" maxlength="30" type="tel" v-model="vendor.phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">
                            Display Phone Number on Profile?:
                            <span class="requiredAsterisk">*</span>
                        </label>
                        <div class="col-sm-2">
                            <select class="form-control" v-model="vendor.show_phone_number">
                                <option :value="1" selected="selected">Yes</option>
                                <option :value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 required">Location:</label>
                        <input type="hidden" name="ServiceLocation">
                        <div class="col-sm-6">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input class="form-control autocomplete ui-autocomplete-input"
                                   id="location-input"
                                   maxlength="300" placeholder="City, ST or ZIP Code" required="required" title="City, ST or ZIP Code" type="text" autocomplete="off" data-autocompleteenabled="true">
                            <typeahead v-model="vendor.location"
                                       :limit="25"
                                       target="#location-input"
                                       async-src="/api/search/location?q="
                                       :force-select="true"
                                       item-key="description"></typeahead>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Your Website URL:</label>
                        <div class="col-sm-6">
                            <input class="form-control" maxlength="100" type="text" v-model="vendor.website">
                        </div>
                    </div>
                    <h4>Social Links</h4>
                    <p>There are many social networking websites you can use to share and promote your service. Below you can add the web addresses to your service's profile pages for each of the social website you are using at this time.</p>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Google Plus:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_googleplus"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Twitter:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_twitter"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Facebook:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_facebook"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Instagram:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_instagram"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Youtube:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_youtube"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Vimeo:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_vimeo"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Pinterest:</label>
                        <div class="col-sm-6"><input class="form-control" maxlength="500" type="text" v-model="vendor.sml_pinterest"></div>
                    </div>
                    <h4>Client Reviews</h4>
                    <p>Below you can add reviews you have received from previous clients. Clients you find through GigHighway will also be able to add reviews for your service.</p>
                    <div class="col-sm-12">
                        <div class="col-sm-12 table-responsive">
                            <review-table :vendor="vendor"></review-table>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <input class="btn btn-primary ajaxFormPost" value="Save and Continue" @click="saveAndContinue()">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from '../../../../eventBus'
    import {Typeahead} from 'uiv'
    import _ from 'underscore'
    import ReviewTable from './ReviewTable'

    export default {
        props: ['vendor'],
        data() {
            return {
                categoryToAdd: 0,
                additionalCategories: [],
            }
        },
        watch: {
            vendor(newValue) {
                // this.$dispatch('vendorUpdated', newValue);
            },
            categoryToAdd(newValue) {
                if(_.isObject(newValue)) {
                    this.vendor.categories.push(newValue);
                    this.categoryToAdd = null;
                }
            }
        },
        mounted() {

        },
        computed: {
            /**
             * Build up the category search url to exclude already selected Categories
             * @returns {string}
             */
            categoryAutocompleteUrl() {
                var url = '/api/search/category?';
                if(this.additionalCategories.length) {
                    var ids = [];
                    if(this.vendor.primary_category_id) {
                        ids.push(this.vendor.primary_category_id);
                    }
                    _.each(this.additionalCategories, function(cat) {
                        ids.push(cat.id);
                    })
                    url = url + 'excludedIds='+ids.join(',') + '&';
                }
                url = url + 'q=';
                return url;
            },
            briefDescriptionCharactersLeft() {
                if(!this.vendor || this.vendor.description_brief === null) {
                    return 0;
                }
                return 500 - this.vendor.description_brief.length;
            },
            fullDescriptionCharactersLeft() {
                if(!this.vendor || this.vendor.description === null) {
                    return 0;
                }
                return 5000 - this.vendor.description.length;
            },
        },
        methods: {
            handleMainCategoryTypeahead(response) {
                console.log(response);
            },

            removeAdditionalCategory(category) {
                var categories = [];
                _.each(this.vendor.categories, function(_category) {
                    if(_category.id != category.id) {
                        categories.push(_category);
                    }
                })
                this.vendor.categories = categories;
            },

            saveAndContinue() {
                // Validate Section
                console.log('Emitting Event');
                EventBus.$emit('saveVendor', {
                    vendor: this.vendor,
                    section: 'general'
                })
            }
        },
        components: { Typeahead, ReviewTable }
    }
</script>
