<style>

</style>

<template>
    <div class="panel panel-default mBottom-10">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="" href="#collapse21">Upgrade your Gig Highway Plan</a>
            </h4>
        </div>
        <div id="collapse21" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="row" v-if="alertMessage">
                    <div class="col-md-12">
                        <div v-bind:class="[alertName, alertBlock, alertType]">
                            <button type="button" class="close" data-dismiss="alert" v-on:click="cancelAlert()">
                                <i class="fa fa-remove"></i>
                            </button>
                            {{ alertMessage }}
                        </div>
                    </div>
                </div>
                <div v-if="vendor.subscription.status != 'cancelled'">
                    <div class="col-md-12">
                        <h3 class="text-center">You are currently subscribed to the plan:<br>{{ currentPlanName }}</h3>
                        <p class="text-right">Your subscription renews: {{ planEndDate }} </p>
                    </div>
                    <div class="col-md-12">
                        <h4>Upgrade your plan!</h4>
                        <div v-for="plan in plans" >
                            <h5 v-if="!plan.upsell">{{ plan.short_desc}}</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="availablePlans" :value="plan.id" v-model="selectedPlan">
                                <!--<input class="form-check-input" type="radio" name="availablePlans" :value="plan.id" v-else >-->
                                <label class="form-check-label" >
                                    {{ plan.name }} - {{ plan.price }} <span v-if="plan.upsell">({{ plan.upsell }})</span>
                                </label>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-success pull-right" @click="upgradePlan()">
                        <span v-if="loading">
                            <i class="fa fa-spin fa-spinner"></i>
                        </span>
                            <span v-else>
                            Upgrade your plan
                        </span>
                        </a>
                    </div>
                </div>


                <div v-else>
                    <div class="col-md-12">
                        <h3 class="text-center">You recently cancelled your<br>{{ currentPlanName }} Subscription</h3>
                        <p class="text-center">You have access to the system until: {{ planEndDate }} </p>
                    </div>
                    <div class="col-md-12 text-center">
                        <h4>Change your mind?</h4>

                        <a href="javascript:void(0)" class="btn btn-primary" @click="resumePlan()">
                        <span v-if="loading">
                            <i class="fa fa-spin fa-spinner"></i>
                        </span>
                            <span v-else>
                            Click here to resume your subscription!
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from '../../../../eventBus'
    import moment from 'moment';


    export default {
        props: ['vendor', 'plans'],
        data() {
            return {
                planId: '',
                planEndDate: moment(),
                selectedPlan: '',
                loading: false,

                alertName: 'alert',
                alertBlock: 'alertBlock',
                alertType: '',
                alertMessage: '',
            }
        },
        watch: {
            vendor(newValue) {
                // this.$dispatch('vendorUpdated', newValue);
            },
            // planId(newValue) {
            //     this.vendor.newSubscription.plan_id = newValue;
            // }
        },
        mounted() {
            this.planEndDate = moment(this.vendor.subscription.ends_at).format("MM/DD/YYYY");
            this.selectedPlan = this.vendor.subscription.stripe_plan;

            EventBus.$on('turnOffLoading', function(payload) {
                this.loading = false;
            }.bind(this));

            EventBus.$on('confirmResumption', function(payload) {
                this.showSuccessMsg({message: 'Your subscription has been re-activated'});
            }.bind(this));


        },
        computed: {
            currentPlanName() {
                if(!this.vendor.subscription) {
                    return 'None';
                    this.vendor.subscription = {}
                }
                for(var i in this.plans) {
                    if(this.plans[i].id == this.vendor.subscription.stripe_plan) {
                        return this.plans[i].name;
                    }
                }
            }
        },
        methods: {
            upgradePlan() {
                var vm = this;
                var requested_plan = vm.selectedPlan;

                vm.loading = true;

                // need to figure out which new plan they are asking for
                if (vm.selectedPlan == vm.vendor.subscription.stripe_plan){
                    // they selected their current plan...just play dumb
                }else{
                    axios.post('/api/vendors/' + this.vendor.id + '/change-plan', {
                        vendor_id: vm.id,
                        new_plan: requested_plan
                    }).then(function(response) {
                        console.log(response.data.vendor);
                            vm.vendor.subscription.stripe_plan = requested_plan;
                            vm.loading = false;

                            vm.alertType = 'alert-success';
                            vm.alertMessage = 'Your plan has been updated';

                        },
                        function(response) {
                            console.log('in start stop route, should not be here...means we failed somehow' + response);
                        })
                }
            },
            resumePlan() {
                this.loading = true;
                this.showInfoMsg({message: 'Working on resuming your subscription'});
                EventBus.$emit('resumeSubscription', {
                    vendor: this.vendor
                })
            },

            saveAndContinue() {
                // Validate Section
                console.log('Emitting Event');
                EventBus.$emit('saveVendor', {
                    vendor: this.vendor,
                    section: 'general'
                })
            },
            cancelAlert() {
                this.alertType = '';
                this.alertMessage = '';
            }
        },
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
        //components: { Typeahead, ReviewTable }
    }
</script>
