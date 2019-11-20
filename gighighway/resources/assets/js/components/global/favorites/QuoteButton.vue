<style>

</style>

<template>
    <div>
        <button class="btn btn-tile btn-warning" @click="$refs.quote.open()">
            <span>Request a Free Quote</span>
        </button>
        <sweet-modal ref="quote" width="60%">
            <login-form v-if="!vmUser" action="favorite a vendor"></login-form>
            <div v-else class="form-horizontal well">
                <div class="control-group">
                    <label class="control-label col-sm-4">&nbsp;</label>
                    <div class="col-sm-6 no-padding">
                        <h2 class="form-control-static">Event Details</h2>
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <label class="control-label col-sm-4">Event Type:
                        <span class="requiredAsterisk">*</span>
                    </label>
                    <div class="col-sm-6">
                        <input class="form-control" data-formgroup="QuoteModel" maxlength="500"v-model="quote.event_type" placeholder="e.g. Wedding, Birthday, Graduation, etc." required="required" title="e.g. Wedding, Birthday, Graduation, etc." type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Estimated # of guests:
                        <span class="requiredAsterisk">*</span>
                    </label>
                    <div class="col-xm-2 col-sm-2">
                        <input class="form-control" data-formgroup="QuoteModel" maxlength="10" min="0"v-model="quote.estimated_guest_count" required="required" type="number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Venue Name or Address:</label>
                    <div class="col-xm-4 col-sm-6"><input class="form-control" data-formgroup="QuoteModel" maxlength="500"v-model="quote.event_location" type="text"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Event Date:<span class="requiredAsterisk">*</span></label>
                    <div class="col-xm-4 col-sm-4"><input class="dateTextbox form-control" maxlength="25" v-model="quote.event_date" required="required" type="date"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Is the date flexible?:
                        <span class="requiredAsterisk">*</span></label>
                    <div class="col-xm-2 col-sm-2"><select class="form-control" data-formgroup="QuoteModel"v-model="quote.is_event_date_flexible" value="False"><option value="true">Yes</option><option value="false" selected="selected">No</option></select></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4">Event Duration:</label><div class="col-xs-6 col-sm-3"><input class="form-control" data-formgroup="QuoteModel" maxlength="500" min="0"v-model="quote.event_duration" type="number"></div>

                    <div class="col-xs-6 col-sm-3"><select class="form-control" data-formgroup="QuoteModel"v-model="quote.event_duration_type"><option value="Minute">minute(s)</option><option value="Hour">hour(s)</option><option value="Day">day(s)</option><option value="Week">week(s)</option><option value="Month">month(s)</option><option value="Year">year(s)</option></select></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4">Event Start Time (Approx.):</label>
                    <div class="col-xs-6 col-sm-3">
                        <select v-model="quote.event_estimated_start_time" class="form-control" data-formgroup="QuoteModel">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="1:00 AM">1:00 AM</option>
                            <option value="1:30 AM">1:30 AM</option>
                            <option value="2:00 AM">2:00 AM</option>
                            <option value="2:30 AM">2:30 AM</option>
                            <option value="3:00 AM">3:00 AM</option>
                            <option value="3:30 AM">3:30 AM</option>
                            <option value="4:00 AM">4:00 AM</option>
                            <option value="4:30 AM">4:30 AM</option>
                            <option value="5:00 AM">5:00 AM</option>
                            <option value="5:30 AM">5:30 AM</option>
                            <option value="6:00 AM">6:00 AM</option>
                            <option value="6:30 AM">6:30 AM</option>
                            <option value="7:00 AM">7:00 AM</option>
                            <option value="7:30 AM">7:30 AM</option>
                            <option value="8:00 AM">8:00 AM</option>
                            <option value="8:30 AM">8:30 AM</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="9:30 AM">9:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="1:30 PM">1:30 PM</option>
                            <option value="2:00 PM">2:00 PM</option>
                            <option value="2:30 PM">2:30 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="3:30 PM">3:30 PM</option>
                            <option value="4:00 PM">4:00 PM</option>
                            <option value="4:30 PM">4:30 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                            <option value="5:30 PM">5:30 PM</option>
                            <option value="6:00 PM">6:00 PM</option>
                            <option value="6:30 PM">6:30 PM</option>
                            <option value="7:00 PM">7:00 PM</option>
                            <option value="7:30 PM">7:30 PM</option>
                            <option value="8:00 PM">8:00 PM</option>
                            <option value="8:30 PM">8:30 PM</option>
                            <option value="9:00 PM">9:00 PM</option>
                            <option value="9:30 PM">9:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4">Event End Time (Approx.):</label>
                    <div class="col-xs-6 col-sm-3">
                        <select v-model="quote.event_estimated_end_time" class="form-control" data-formgroup="QuoteModel">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="1:00 AM">1:00 AM</option>
                            <option value="1:30 AM">1:30 AM</option>
                            <option value="2:00 AM">2:00 AM</option>
                            <option value="2:30 AM">2:30 AM</option>
                            <option value="3:00 AM">3:00 AM</option>
                            <option value="3:30 AM">3:30 AM</option>
                            <option value="4:00 AM">4:00 AM</option>
                            <option value="4:30 AM">4:30 AM</option>
                            <option value="5:00 AM">5:00 AM</option>
                            <option value="5:30 AM">5:30 AM</option>
                            <option value="6:00 AM">6:00 AM</option>
                            <option value="6:30 AM">6:30 AM</option>
                            <option value="7:00 AM">7:00 AM</option>
                            <option value="7:30 AM">7:30 AM</option>
                            <option value="8:00 AM">8:00 AM</option>
                            <option value="8:30 AM">8:30 AM</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="9:30 AM">9:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="1:30 PM">1:30 PM</option>
                            <option value="2:00 PM">2:00 PM</option>
                            <option value="2:30 PM">2:30 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="3:30 PM">3:30 PM</option>
                            <option value="4:00 PM">4:00 PM</option>
                            <option value="4:30 PM">4:30 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                            <option value="5:30 PM">5:30 PM</option>
                            <option value="6:00 PM">6:00 PM</option>
                            <option value="6:30 PM">6:30 PM</option>
                            <option value="7:00 PM">7:00 PM</option>
                            <option value="7:30 PM">7:30 PM</option>
                            <option value="8:00 PM">8:00 PM</option>
                            <option value="8:30 PM">8:30 PM</option>
                            <option value="9:00 PM">9:00 PM</option>
                            <option value="9:30 PM">9:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-4">How long will services be needed?:</label><div class="col-xs-6 col-sm-3"><input class="form-control" data-formgroup="QuoteModel" maxlength="500" min="0"v-model="quote.duration" type="number"></div>

                    <div class="col-xs-6 col-sm-3"><select class="form-control" data-formgroup="QuoteModel"v-model="quote.duration_measurement"><option value="Minute">minute(s)</option><option value="Hour">hour(s)</option><option value="Day">day(s)</option><option value="Week">week(s)</option><option value="Month">month(s)</option><option value="Year">year(s)</option></select></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Additional Event Details:</label><div class="col-xm-4 col-sm-6"><div class="limitedTextarea"><textarea class="limitedTextarea form-control" data-formgroup="QuoteModel" maxlength="255"v-model="quote.event_additional_details" data-limitedtextareaenabled="true"></textarea><div>You have <strong>255</strong> character(s) remaining.</div></div></div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-4">Get free quotes from similar vendors?:</label>
                    <label class="control-label sr-only">Get free quotes from similar professionals?:<span class="requiredAsterisk">*</span></label><div class="col-xm-3 col-sm-3"><select class="form-control" data-formgroup="QuoteModel"v-model="quote.request_similar_quote"><option value="0">None</option><option value="5" selected="selected">5 similar quotes</option><option value="10">10 similar quotes</option></select></div>
                </div>

                <!-- Personal Information -->
                <div class="control-group">
                    <label class="control-label col-sm-4">&nbsp;</label>
                    <div class="col-sm-6 no-padding">
                        <h2 class="form-control-static">Personal Information</h2>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 hidden-xs">&nbsp;</label>
                    <div class="col-sm-6 no-padding">
                        <p class="form-control-static">The following information will be used to create a free GigHighway account for you, which makes it possible for service providers to send you quotes.</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required">First Name:</label><div class="col-xm-4 col-sm-4"><input class="form-control" data-formgroup="QuoteModel" maxlength="50"v-model="quote.first_name" required="required" type="text"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4 required">Last Name:</label><div class="col-xm-4 col-sm-4"><input class="form-control" data-formgroup="QuoteModel" maxlength="50"v-model="quote.last_name" required="required" type="text"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Phone Number:</label><div class="col-xm-4 col-sm-4"><input class="phoneTextbox form-control" data-formgroup="QuoteModel" maxlength="20"v-model="quote.phone_number" placeholder="(___) ___-____" type="tel" data-phonetextboxenabled="true" pattern="^((\((\d{3})\) (\d{3})-(\d{4}))|(\((\d{3})\) (\d{3})-(\d{4}) ext. \d+)|((\d{3})-(\d{3})-(\d{4}))|((\d{3})-(\d{3})-(\d{4}) ext. \d+$)|(1-(800|888|877|866|855|844|833|822)-(\d{3})-(\d{4}))|(1-(800|888|877|866|855|844|833|822)-(\d{3})-(\d{4}) ext. \d+))$"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">&nbsp;</label>
                    <div class="col-xm-3 col-sm-3">
                        <button class="btn btn-primary ajaxFormPost ajaxFormPost" @click="sendQuote()">Request Quote(s)</button>
                    </div>
                </div>
            </div>
        </sweet-modal>
    </div>
</template>

<script>

    import {SweetModal} from 'sweet-modal-vue'
    import {EventBus} from "../../../eventBus";
    import LoginForm from "../LoginForm"
    import {Typeahead} from 'uiv'

    export default {
        props: ['vendor', 'user'],
        data() {
            return {
                vmUser: { id: null },
                quote: {},
            }
        },
        mounted() {
            this.vmUser = this.user;
            this.resetQuote();
            EventBus.$on('auth:loggedIn', function(user) {
                this.vmUser = user;
            }.bind(this))
        },
        computed: {
		
		},
        methods: {
            resetQuote() {
                this.quote = {
                    category_id: null,
                    vendor_id: this.vendor.id,
                    duration: null,
                    duration_measurement: null,
                    estimated_guest_count: null,
                    event_additional_details: null,
                    event_date: null,
                    event_duration: null,
                    event_duration_type: null,
                    event_estimated_end_time: null,
                    event_estimated_start_time: null,
                    event_type: null,
                    event_location: null,
                    first_name: null,
                    is_event_date_flexible: null,
                    last_name: null,
                    phone_number: null,
                    request_similar_quote: null,
                }
            },
            sendQuote() {
                axios.post('/api/quotes', this.quote).then(function(response) {
                    this.$refs.quote.close();
                }.bind(this));
            }
        },
        components: { SweetModal, EventBus, LoginForm, Typeahead }
    }
</script>
