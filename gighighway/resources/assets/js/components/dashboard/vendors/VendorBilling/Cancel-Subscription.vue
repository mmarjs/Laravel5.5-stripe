<style>

</style>

<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="" href="#collapse_cansub">Cancel Your Subscription</a>
            </h4>
        </div>
        <div id="collapse_cansub" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="col-md-12">
                    <h4>Cancel Your Subscription</h4>
                    <a href="javascript:void(0)" class="btn btn-danger pull-right" @click="doubleCheck">
                    <!--<a href="javascript:void(0)" class="btn btn-danger pull-right" @click="cancelSubscription()">-->
                        <span v-if="loading">
                            <i class="fa fa-spin fa-spinner"></i>
                        </span>
                        <span v-else>
                            Cancel Your Subscription
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from '../../../../eventBus'
    import moment from 'moment';


    export default {
        props: ['vendor'],
        data() {
            return {
                planEndDate: moment(),
                loading: false,
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

            EventBus.$on('turnOffLoading', function(payload) {
                this.loading = false;
            });
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
            doubleCheck() {
                this.$swal({
                    title: 'Are you sure?',
                    text: 'You\'ll have access to the system until the end of your current billing period.',
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, I would like to Cancel',
                    cancelButtonText: 'No, Please don\'t cancel my subscription',
                    showCloseButton: true,
                    showLoaderOnConfirm: true
                }).then((result) => {
                    if(result.value) {
                        this.cancelSubscription();
                    } else {
                        this.$swal('Whew!', 'Your subscription is still active', 'info')
                    }
                })
            },
            cancelSubscription() {
                var vm = this;

                this.loading = true;
                EventBus.$emit('cancelSubscription', {
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
            }
        },
        //components: { Typeahead, ReviewTable }
    }
</script>
