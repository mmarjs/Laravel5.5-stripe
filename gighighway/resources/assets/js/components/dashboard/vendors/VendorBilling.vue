<style>

</style>

<template>
    <div>

        <div v-if="vendor.subscription_id" class="row edit-vendor">

            <h1 style="margin-left:16px;">
                <span id="spProfileForm_ProfileName"></span> &nbsp;
            </h1>

            <div class="visible-md visible-lg">

                <div class="col-sm-6 col-md-3 col-lg-3 tile-wrapper text-center">
                    <left-column :vendor="vendor"></left-column>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel-group" id="accordion">

                    <plans :vendor="vendor" :plans="plans"></plans>

                    <payment v-if="vendor.subscription.status != 'cancelled'" :vendor="vendor" :user="user" :stripe-key="stripeKey"></payment>

                    <cancel-subscription v-if="vendor.subscription.status != 'cancelled'" :vendor="vendor" :plans="plans"></cancel-subscription>

                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
        </div>

        <div v-else>
            <h1>Billing</h1>
            <choose-a-plan v-show="purchaseView == 'plan'" :vendor="vendor" :plans="plans"></choose-a-plan>
            <payment :vendor="vendor"  :stripe-key="stripeKey"></payment>
        </div>
    </div>
</template>

<script>
    import { EventBus } from "../../../eventBus";
    import ChooseAPlan from './CreateVendor/ChooseAPlan';
    import Payment from './CreateVendor/Payment';
    import LeftColumn from './CreateVendor/LeftColumn';
    import Plans from './VendorBilling/Plans';
    import CancelSubscription from './VendorBilling/Cancel-Subscription';

    export default {
        props: ['user', 'vendorId', 'plans', 'stripeKey'],
        data() {
            return {

                vendor: {
                    description_brief: '',
                    description: '',
                    categories: []
                },
                currentSubscription: [],

                purchaseView: 'plan',

                userInfo: []

            }
        },
        mounted() {
            this.initVendor();
            this.userInfo = this.user;

            var vm = this;
            EventBus.$on('changePaymentView', function(view) {
                vm.purchaseView = view;
            });
            EventBus.$on('savePayment', function(payload) {
                vm.savePayment(payload.vendor);
            });
            EventBus.$on('updatePaymentMethod', function(payload) {
                vm.updatePaymentMethod(payload.vendor);
            });
            EventBus.$on('cancelSubscription', function(payload) {
                vm.cancelSubscription(payload.vendor);
            });
            EventBus.$on('resumeSubscription', function(payload) {
                vm.resumeSubscription(payload.vendor);
            });
        },
        computed: {
            currentPlan() {
                for(var i in this.plans) {
                    if(this.plans[i].id == this.vendor.subscription.stripe_plan) {
                        return this.plans[i];
                    }
                }
                return null;
            },
            currentPlanName() {
                if(this.currentPlan) {
                    return this.currentPlan.name;
                }
                return 'None';
            },
            currentPlanDuration() {
                if(this.currentPlan) {
                    if(this.currentPlan.name.indexOf('Yearly') != -1) {
                        return 'Yearly'
                    }else {
                        return 'Monthly'
                    }
                    // if(this.currentPlan.name.indexOf('Monthly'))
                }
            },

            /*
            User can upgrade the plan from Pro -> Enterprise

             */
            vendorCanUpgrade() {
                return true;
            }
        },
        methods: {
            upgradePlan() {

            },
            initVendor() {
                axios.get('/api/vendors/'+this.vendorId).then(function(response) {
                    this.vendor = response.data.vendor;
                    this.vendor.newSubscription = {};
                    this.currentSubscription = response.data.subscriptionInformation;
                    EventBus.$emit('vendorLoaded', { vendor: response.data.vendor });
                }.bind(this));
            },
            savePayment(vendor) {
                console.log(vendor);
                axios.put('/api/vendors/'+this.vendor.id, vendor).then(function(response) {
                    this.vendor = response.data.vendor;
                    EventBus.$emit('vendorLoaded', { vendor: response.data.vendor });
                }.bind(this));
            },
            updatePaymentMethod(vendor) {
                console.log(vendor);
                var vm = this;

                axios.post('/api/vendors/' + this.vendor.id + '/update-payment-method', {
                    vendor_id: this.vendor.id,
                    new_token: vendor.newSubscription.token
                })
                .then(function(response) {
                    console.log(response.data);

                    vm.userInfo = response.data.user;
                    EventBus.$emit('paymentMethodUpdated', { user: response.data.user });
                    EventBus.$emit('turnOffLoading', true);
                },
                function(response) {
                    console.log('we failed somehow' + response);
                });
            },
            cancelSubscription(vendor) {
                var vm = this;

                axios.post('/api/vendors/' + this.vendor.id + '/cancel-subscription', {
                    vendor_id: vm.id
                })
                .then(function(response) {
                        console.log(response.data);

                        vm.vendor = response.data.vendor;
                        // need to check if they still have time and show appropriate message.
                        var finalMsg = 'You successfully cancelled your account, you will have access to the system until: ' + response.data.end_date;
                        if (response.data.end_date == 'Today'){
                            finalMsg = 'You successfully cancelled your account.';
                        }

                        vm.$swal('Cancelled', finalMsg, 'success');

                        EventBus.$emit('turnOffLoading', true);
                    },
                    function(response) {
                        console.log('in start stop route, should not be here...means we failed somehow' + response);
                    })

            },
            resumeSubscription(vendor) {
                var vm = this;

                axios.post('/api/vendors/' + this.vendor.id + '/resume-subscription', {
                    vendor_id: vm.vendor.id
                })
                .then(function(response) {
                    console.log(response.data);

                    vm.vendor = response.data.vendor;
                    EventBus.$emit('confirmResumption', true);
                    EventBus.$emit('turnOffLoading', true);
                },
                function(response) {
                    console.log('we failed somehow' + response);
                });
            }
        },
        components: { ChooseAPlan, Payment, LeftColumn, Plans, CancelSubscription }
    }
</script>
