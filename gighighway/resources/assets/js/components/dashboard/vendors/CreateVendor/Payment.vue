<style>
    .StripeElement {
        background-color: white;
        height: 40px;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

    .mini-toastr { left:50%; top:50%; }
</style>

<template>
    <div class="panel panel-default">
        <div v-if="vendor.subscription_id" class="panel-heading">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="" href="#collapse_paymethod">Update Payment Method</a>
                    </h4>
                </div>
                <div class="col-md-4 text-right">
                    <span class="pull-right">********{{ userInfo.card_last_four }}</span>
                </div>
            </div>
        </div>
        <div v-else class="panel-heading">
            <h4 class="panel-title">
                <a  data-parent="#accordion" href="#collapse5"   class="disabled">Payment</a>
            </h4>
        </div>

        <div id="collapse5" class="panel-collapse">
            <div class="panel-body">
                <div  class="partialContent form form-horizontal" data-url="/Account/CreditCard/">

                        <div class="form-group">
                            <label class="control-label col-sm-4"  >First Name:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-6"><input class="form-control"   maxlength="500" @change="updateSubscription()" v-model="newSubscription.card_first_name" required="required" type="text"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Last Name:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-6"><input class="form-control"   maxlength="500" @change="updateSubscription()" v-model="newSubscription.card_last_name" required="required" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Credit Card Info:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-6">
                                <div ref="card"></div>
                            </div>
                        </div>

                        <div class="control-group col-sm-12">
                            <label class="control-label col-sm-4" >&nbsp;</label>
                            <div class="col-sm-6 no-padding">
                                <h4 class="form-control-static">Billing Address</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="txtCreditCard_Line1" id="lblCreditCard_Line1">Line 1:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-6">
                                <input class="form-control" @change="updateSubscription()" v-model="newSubscription.billing_address_1" maxlength="500" required="required" type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="txtCreditCard_Line2" id="lblCreditCard_Line2">Line 2:</label>
                            <div class="col-sm-6"><input class="form-control" @change="updateSubscription()" v-model="newSubscription.billing_address_2" maxlength="500" type="text" ></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >City:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-6"><input class="form-control" @change="updateSubscription()" v-model="newSubscription.billing_city"   maxlength="500" required="required" type="text" ></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >State:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-4">
                                <select class="form-control"   @change="updateSubscription()" v-model="newSubscription.billing_state" required="required" >
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AS">America Samoa</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="AA">Armed Forces - Americas (AA)</option>
                                    <option value="AE">Armed Forces - Europe (AE)</option>
                                    <option value="AP">Armed Forces - Pacific (AP)</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia (DC)</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VI">Virgin Islands</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4"  >Postal Code:<span class="requiredAsterisk">*</span></label>
                            <div class="col-sm-6"><input class="form-control"   maxlength="10" min="0" @change="updateSubscription()" v-model="newSubscription.billing_zip" required="required" type="number" ></div>
                        </div>
                        <div class="control-group col-sm-12">
                            <label class="control-label col-sm-4 hidden-xs">&nbsp;</label>
                            <div class="checkbox col-sm-6">
                                <label >
                                    <input  type="hidden" value="0" @change="updateSubscription()" v-model="newSubscription.payment_acknowledge"  >
                                    <input  type="checkbox" value="1" @change="updateSubscription()" v-model="newSubscription.payment_acknowledge" required="">
                                    By checking this box, you acknowledge that your credit card will be automatically charged each month or year depending on your account preferences.
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div  class="alert alert-dismissible" style="display:none;">
                                <button type="button" class="close" >×</button>
                                <span ><strong>Congratulations!</strong></span> <span ></span>
                            </div>
                        </div>
                    <div class="control-group col-sm-12">
                            <label class="control-label col-sm-4 hidden-xs" >&nbsp;</label>
                            <div class="col-sm-6">
                                <button class="btn btn-primary ajaxFormPost" @click="save()">
                                    <span v-if="loading">
                                        <i class="fa fa-spin fa-spinner"></i>
                                    </span>
                                    <span v-else>
                                        Submit
                                    </span>
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from "../../../../eventBus";


    export default {
        props: ['vendor', 'user', 'stripeKey'],
        data() {
            return {
                stripe: null,
                elements: null,
                card: null,
                newSubscription: {
                    card_first_name: '',
                    card_last_name: '',
                    card_number: '',
                    card_cvv: '',
                    card_expiration_month: '',
                    card_expiration_year: '',
                    billing_address_1: '',
                    billing_city: '',
                    billing_state: '',
                    billing_zip: '',
                    payment_acknowledge: 0,
                },
                userInfo: [],
                loading: false
            }
        },
        mounted() {
            this.stripe = Stripe(this.stripeKey);
            this.elements = this.stripe.elements();
            this.card = this.elements.create('card');
            this.card.mount(this.$refs.card);

            this.userInfo = this.user;

            // This should be removed after testing
            if (this.vendor.subscription_id){
                this.newSubscription.card_first_name = 'Paul';
                this.newSubscription.card_last_name =  'McGrane';
                this.newSubscription.card_number =  '';
                this.newSubscription.card_cvv =  '123';
                this.newSubscription.card_expiration_month =  '12';
                this.newSubscription.card_expiration_year =  '2020';
                this.newSubscription.billing_address_1 =  '311 S. College Ave';
                this.newSubscription.billing_city =  'Oxford';
                this.newSubscription.billing_state =  'OH';
                this.newSubscription.billing_zip =  '45056';
                this.newSubscription.payment_acknowledge =  1;
            }

            EventBus.$on('paymentMethodUpdated', function(payload) {
                console.log(payload);
                this.userInfo = payload.user;
                this.loading = false;
                this.showSuccessMsg({message: 'Your payment method has been updated'});
            }.bind(this));

            EventBus.$on('turnOffLoading', function(payload) {
                this.loading = false;
            });
        },
        computed: {

        },
        methods: {
            updateSubscription() {
                this.newSubscription.plan_id = this.vendor.newSubscription ? this.vendor.newSubscription.plan_id : '';
                this.vendor.newSubscription = this.newSubscription;
            },
            save() {
                var self = this;
                this.stripe.createToken(this.card).then(function(result) {
                    console.log(result);
                    if(result.error) {
                        self.hasCardErrors = true;
                        self.$forceUpdate();
                        return;
                    }

                    self.vendor.newSubscription.token = result.token;

                    if(self.vendor.subscription_id){ // they are updating their payment method
                        self.showInfoMsg({message: 'Working on updating your payment method'});
                        self.loading = true;
                        EventBus.$emit('updatePaymentMethod', {vendor: self.vendor});
                    }else{ // this is a new charge
                        EventBus.$emit('savePayment', {vendor: self.vendor});
                    }
                })
            }
        },
        components: {},
        notifications: {
            showSuccessMsg: {
                type: VueNotifications.types.success,
                title: '',
                message: 'That\'s the success!' // override this default message by calling this.showSuccessMsg({message: 'what you really want to say'})
            },
            showInfoMsg: {
                type: VueNotifications.types.info,
                title: '',
                message: 'Here is some info for you'
            },
            showWarnMsg: {
                type: VueNotifications.types.warn,
                title: '',
                message: 'That\'s the kind of warning'
            },
            showErrorMsg: {
                type: VueNotifications.types.error,
                title: '',
                message: 'That\'s the error'
            }
        }
    }
</script>
