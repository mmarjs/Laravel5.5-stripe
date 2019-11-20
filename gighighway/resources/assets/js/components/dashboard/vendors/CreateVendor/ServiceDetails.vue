<style>

</style>

<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="false" data-parent="#accordion" href="#collapse3"  data-loaded="false" class="disabled">Service Details</a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse">
            <div class="panel-body">
                <div  class="partialContent" data-url="/Account/ServiceDetails/">
                    <form class="form-horizontal" role="form" action="/" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >What to expect:</label>
                            <div class="col-sm-6">
                                <div  class="limitedTextarea">
                                    <textarea class="limitedTextarea form-control" v-model="vendor.what_to_expect"  maxlength="255" name="WhatToExpect"  ></textarea>
                                    <div >You have <strong>{{ whatToExpectCharactersRemaining }}</strong> character(s) remaining.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Notes/Technical Info:</label>
                            <div class="col-sm-6">
                                <div  class="limitedTextarea">
                                    <textarea class="limitedTextarea form-control" v-model="vendor.technical_information"  maxlength="255" name="TechnicalInformation"  ></textarea>
                                    <div >You have <strong>{{ technicalInfoCharactersRemaining }}</strong> character(s) remaining.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">Setup requirements:</label>
                                        <div class="col-sm-6">
                                <div  class="limitedTextarea">
                                    <textarea class="limitedTextarea form-control" v-model="vendor.setup_requirements" maxlength="255" name="SetupRequirements"  ></textarea>
                                    <div >You have <strong>{{ setupRequirementsCharactersRemaining }}</strong> character(s) remaining.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Liability Insurance:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-2">
                                <select class="form-control" v-model="vendor.has_liability_insurance" required="required">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-4"  >Estimated Event Duration:</label>
                            <div class="col-xs-6 col-sm-2"><input class="form-control"   maxlength="500" min="0" v-model="vendor.estimated_event_duration" pattern="^((\d+\.\d{1,2})|(\d+))$" type="number" ></div>
                            <div class="col-xs-6 col-sm-3">
                                <select class="form-control" v-model="vendor.estimated_event_duration_time_measurement">
                                    <option value="1">minute(s)</option>
                                    <option value="2">hour(s)</option>
                                    <option value="3">day(s)</option>
                                    <option value="4">week(s)</option>
                                    <option value="5">month(s)</option>
                                    <option value="6">year(s)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Travel distance (in miles):</label>
                            <div class="col-sm-2">
                                <select class="form-control"   v-model="vendor.travel_distance_in_miles">
                                    <option value="0" selected="selected">No Limit</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                    <option value="500">500</option>
                                    <option value="600">600</option>
                                    <option value="700">700</option>
                                    <option value="800">800</option>
                                    <option value="900">900</option>
                                    <option value="1000">1000</option>
                                    <option value="1500">1500</option>
                                    <option value="2000">2000</option>
                                    <option value="2500">2500</option>
                                    <option value="3000">3000</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-4"  >Pay Range:<span class="requiredAsterisk">*</span></label>
                            <div class="col-xs-6 col-sm-3"><input v-model="vendor.pay_range_min" class="form-control"   maxlength="500" min="0" pattern="^((\d+\.\d{1,2})|(\d+))$" placeholder="Min. $0.00" title="Min. $0.00" type="number" ></div>
                            <div class="col-xs-6 col-sm-3"><input v-model="vendor.pay_range_max" class="form-control"   maxlength="500" min="0" pattern="^((\d+\.\d{1,2})|(\d+))$" placeholder="Max. $0.00" title="Max. $0.00" type="number" ></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Languages:</label>
                            <div class="col-sm-6"><input class="form-control"   maxlength="500" v-model="vendor.languages" placeholder="e.g. English, Spanish, French, etc." title="e.g. English, Spanish, French, etc." type="text" ></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-5">
                                <button type="button" class="btn btn-primary ajaxFormPost" @click="saveAndContinue()" >Save and Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from '../../../../eventBus'

    export default {
        props: ['vendor'],
        data() {
            return {}
        },
        mounted() {

        },
        computed: {
            whatToExpectCharactersRemaining() {
                if(!this.vendor.what_to_expect) return 255;
                return 255 - this.vendor.what_to_expect.length;
            },
            technicalInfoCharactersRemaining() {
                if(!this.vendor.technical_information) return 255;
                return 255 - this.vendor.technical_information.length;
            },

            setupRequirementsCharactersRemaining() {
                if(!this.vendor.setup_requirements) return 255;
                return 255 - this.vendor.setup_requirements.length;
            },
        },
        methods: {
            saveAndContinue() {
                EventBus.$emit('saveVendor', {
                    vendor: this.vendor,
                    section: 'serviceDetails'
                })
            }
        },
        components: {}
    }
</script>
