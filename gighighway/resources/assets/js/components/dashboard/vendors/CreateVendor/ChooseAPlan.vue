<style>
    .service-pricing-main {
        margin-bottom:0;
    }
    .service-pricing-block .pricing-block-header h2 {
        font-size: 33px;
    }
    .service-pricing-block .pricing-block-header .rating {
        font-size: .8em;
    }
    .pricing-body{font-size:13px;}
    .service-block-pricing {
        min-height:146px;
    }
    .service-block-pricing .radio:first-child {
        border-bottom:1px solid;
    }
    .service-block-pricing .radio {
        height:79px;
    }
    .service-block-pricing .radio label, .service-block-pricing .checkbox label {
        font-weight:500;
    }
    .service-block-pricing .checkbox input,
    .service-block-pricing .radio input {
        vertical-align:text-top;
    }
    .pricing-bottom-section:nth-child(2){
        margin-bottom:6px;
    }
    .membershipPlan_SubmitButtonWrapper {
        margin-top:9px;
    }
    .membershipPlan_PromoGroupFields {
        padding-left:15px!important;
        padding-right:15px!important;
    }
    .label-disabled {
        opacity:0.6;
    }
    #hypMembershipPlan_RemovePromoCode {
        margin-right: 6px;
    }
</style>

<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="false" data-parent="#accordion" href="#collapse4"  data-loaded="false" class="disabled">
                    <span>Choose a Plan</span>
                </a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse">
            <div class="panel-body">
                <div class="col-md-12" v-if="vendor.subscription_id">
                    You are currently subscribed to the plan: {{ currentPlanName }}
                </div>
                <div v-else class="tab-pane col-md-12" id="tab2">
                    <div id="hdivProfileForm_MembershipForm" class="partialContent" data-url="/Account/MembershipPlan/">
                        <link href="/css/pageSpecific/pricing.css" rel="stylesheet">

                        <div class="row">
                            <div class="form form-horizontal">
                                <div class="col-sm-6 service-pricing-main">
                                    <div class="service-pricing-block service-pricing-orage">
                                        <div class="service-block pricing-block-header">
                                            <h2>Professional</h2>
                                            <div class="rating">
                                                <span class="averageRating">☆</span>
                                                <span class="averageRating">☆</span>
                                                <span class="averageRating">☆</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body text-center">
                                            <p class="pricing-lead">For those who want <br> more leads and more gigs.</p>
                                            <p class="pricing-plan-features">
                                                High visibility<br>
                                                Multiple Categories<br>
                                                50 photos including hi-res<br>
                                                Add YouTube and Vimeo videos<br>
                                                Add audio files<br>
                                                Display a link to your website<br>
                                                Display your phone number<br>
                                                Potential clients can contact you directly<br>
                                                No GigHighway commissions to pay<br>
                                                No hidden fees - You make all the money
                                                <br><br><br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pricing-bottom-section service-block-pricing">
                                        <div class="radio basicYearly text-center">
                                            <label>
                                                <input type="radio" class="cbProfileForm_ChosenPlan" v-model="planId" :value="plans.pro_monthly.id">
                                                <span id="spProfileForm_MonthlyBasicAccountCost">$19.99</span> / Month
                                            </label>
                                        </div>
                                        <div class="radio featuredMonthly text-center " data-isfeatured="false">
                                            <label>
                                                <input type="radio" class="cbProfileForm_ChosenPlan" v-model="planId" :value="plans.pro_yearly.id">
                                                <span id="spProfileForm_YearlyBasicAccountCost"> $149</span> / Year
                                                <br>
                                                <span class="membershipPlan_UpsellText text-primary">SAVE $90</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs">&nbsp;</div>
                                <div class="col-sm-6 service-pricing-main">
                                    <div class="service-pricing-block service-pricing-blue">
                                        <div class="service-block pricing-block-header">
                                            <h2>Featured</h2>
                                            <div class="rating">
                                                <span class="averageRating">☆</span>
                                                <span class="averageRating">☆</span>
                                                <span class="averageRating">☆</span>
                                                <span class="averageRating">☆</span>
                                                <span class="averageRating">☆</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body text-center">
                                            <p class="pricing-lead">For those who want the most leads, most gigs, and greatest exposure.</p>
                                            <p class="pricing-plan-features">
                                                <span class="pricing-featured-highlight danger">Appear above competitors in search results</span><br>
                                                High visibility<br>
                                                Multiple Categories<br>
                                                100 photos including hi-res<br>
                                                Add YouTube and Vimeo videos<br>
                                                Add audio files<br>
                                                Display a link to your website<br>
                                                Display your phone number<br>
                                                Potential clients can contact you directly<br>
                                                No GigHighway commissions to pay<br>
                                                No hidden fees - You make all the money<br>
                                                <span class="pricing-featured-highlight featured-ribbon">TOP PLACEMENT</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pricing-bottom-section service-block-pricing">
                                        <div class="radio basicMonthly text-center">
                                            <label id="lblMembershipPlan_FeaturedMonthly" class="">
                                                <input type="radio" class="cbProfileForm_ChosenPlan" v-model="planId" :value="plans.enterprise_monthly.id">
                                                <span id="spProfileForm_MonthlyFeaturedAccountCost">$29.98</span> / Month
                                            </label>
                                        </div>
                                        <div class="radio featuredAnnually text-center " data-isfeatured="false">
                                            <label>
                                                <input type="radio"  class="cbProfileForm_ChosenPlan" v-model="planId" :value="plans.enterprise_yearly.id">
                                                <span id="spProfileForm_YearlyFeaturedAccountCost">$199</span> / Year
                                                <br>
                                                <span class="membershipPlan_UpsellText text-danger">SAVE $160</span>
                                            </label>
                                        </div>
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
    import { EventBus } from "../../../../eventBus";

    export default {
        props: ['vendor', 'plans'],
        data() {
            return {
                planId: ''
            }
        },
        mounted() {
            if(!this.planId) {
                this.planId = this.plans.pro_monthly.id;
            }
            if(!this.vendor.newSubscription) {
                this.vendor.newSubscription = {};
            }
        },
        watch: {
            planId(newValue) {
                this.vendor.newSubscription.plan_id = newValue;
            }
        },
        computed: {
            currentPlanName() {
                if(!this.vendor.newSubscription) {
                    return 'None';
                    this.vendor.newSubscription = {}
                }
                for(var i in this.plans) {
                    if(this.plans[i].id == this.vendor.newSubscription.stripe_plan) {
                        return this.plans[i].name;
                    }
                }
            }
        },
        methods: {
            gotoPayment() {
                EventBus.$emit('changePaymentView', 'payment')
            }
        },
        components: {}
    }
</script>
