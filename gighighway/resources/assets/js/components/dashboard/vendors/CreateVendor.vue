<style lang="scss">
    .edit-vendor {
        position: relative;

        .inactive-vendor-alert {
            position: fixed;
            top: 120px;
            left: 0;
            right: 0;
            z-index: 2;
            background-color: #f89911;
            font-weight: bold;
            font-size: 1.3em;
        }
    }
</style>

<template>
    <div class="row edit-vendor">

        <div class="alert alert-fixed alert-warning inactive-vendor-alert" v-if="vendor.id && !vendor.subscription_id">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        Note: This profile is not yet active. Please click 'Upgrade to Featured' or follow <a :href="'/dashboard/vendors/'+vendor.id+'/billing'" style="text-decoration: underline;">this link</a>
                    </div>
                </div>
            </div>
        </div>

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

                <general-information :vendor="vendor"></general-information>

                <media-files v-if="vendor.id" :vendor="vendor"></media-files>

                <service-details v-if="vendor.id" :vendor="vendor"></service-details>

            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
</template>

<script>

    import { EventBus } from '../../../eventBus'
    import LeftColumn from './CreateVendor/LeftColumn'
    import GeneralInformation from './CreateVendor/GeneralInformation'
    import MediaFiles from './CreateVendor/MediaFiles'
    import ServiceDetails from './CreateVendor/ServiceDetails'
    import ChooseAPlan from './CreateVendor/ChooseAPlan'
    import Payment from './CreateVendor/Payment'


    export default {
        props: ['user', 'vendorId', 'plans', 'stripeKey'],
        components: {
            LeftColumn,
            GeneralInformation,
            MediaFiles,
            ServiceDetails,
            ChooseAPlan,
            Payment,
        },
        data() {
            return {
                vendor: {
                    description_brief: '',
                    description: '',
                    categories: []
                }
            }
        },
        mounted() {
            // If vendor id, fetch it.  If not, init the blank vendor
            if(this.vendorId) {
                this.initVendor();
            }else {
                this.clearVendor();
            }

            this.$on('vendorUpdated', function(vendor) {
                this.vendor = vendor;
            }.bind(this));

            EventBus.$on('saveVendor', function(payload) {
                this.vendor = payload.vendor;
                if(payload.section == 'general' && !this.vendor.id) {
                    this.initialSaveAndContinue();
                }else {
                    this.saveAndContinue(payload.section);
                }
            }.bind(this));

            EventBus.$on('vendorUpdated', function(payload) {
                this.initVendor();
            }.bind(this));
        },
        computed: {

        },
        methods: {
            validateSection(section) {
                var messages = [];
                switch(section) {
                    case 'general':
                        if( !this.vendor.name ) messages.push('You must enter a vendor name.');
                        if( !this.vendor.description_brief ) messages.push('You must enter a brief description.');
                        if( !this.vendor.primary_category ) messages.push('You must enter a main category.');
                        if( !this.vendor.location || !this.vendor.location.id ) messages.push('You must enter choose a location from the list.');
                        break;

                    case 'serviceDetails':

                        break;
                }

                console.log(messages);
                if(messages.length) {
                    // Display Messages.

                    return false;
                }

                return true;
            },
            initVendor() {
                axios.get('/api/vendors/'+this.vendorId).then(function(response) {
                    this.vendor = response.data.vendor;
                    EventBus.$emit('vendorLoaded', { vendor: response.data.vendor });
                }.bind(this));
            },
            clearVendor() {
                this.vendor = {
                    id: null,
                    name: null,
                    description: '',
                    featured: null,
                    email: null,
                    phone: this.user.phone,
                    website: null,
                    created_at: null,
                    updated_at: null,
                    show_phone_number: true,
                    description_brief: '',
                    what_to_expect: null,
                    pay_range_min: null,
                    pay_range_max: null,
                    sml_facebook: null,
                    sml_twitter: null,
                    sml_googleplus: null,
                    sml_instagram: null,
                    sml_pinterest: null,
                    sml_vimeo: null,
                    sml_youtube: null,
                    technical_information: null,
                    technical_information_filename: null,
                    setup_requirements: null,
                    has_liability_insurance: null,
                    estimated_event_duration: null,
                    estimated_event_duration_time_measurement: null,
                    location_zip_code: null,
                    travel_distance_in_miles: null,
                    languages: null,
                    image_main_id: null,
                    image_main_tile_id: null,
                    primary_category_id: null,
                    billing_is_disabled: null,
                    billing_notification_last_sent: null,
                    billing_next_date: null,
                    billing_recurrence_type: null,
                    billing_basic_account_cost: null,
                    billing_is_featured_account_add_on: null,
                    billing_removed_featured_account_add_on_at_end_of_billing_cycle: null,
                    billing_featured_account_add_on_cost: null,
                    billing_promo_code: null,
                    billing_credit_card_id: null,
                    is_special_featured: null,
                    hide_to_public: null,
                    categories: [],
                }
            },

            /**
             * Saves and continues from the initial create page, redirects to the edit page
             * starting with the media section.
             */
            initialSaveAndContinue() {
                if( this.validateSection('general') ) {
                    axios.post('/api/vendors', this.vendor).then(function(response) {
                        window.location = '/dashboard/vendors/'+response.data.vendor.id+'/edit';
                    });
                }
            },
            saveAndContinue(section)
            {
                if( this.validateSection(section) ) {
                    axios.put('/api/vendors/'+this.vendor.id, this.vendor).then(function(response) {
                        if(section == 'serviceDetails') {
                            window.location = '/dashboard';
                        }
                        this.vendor = response.data.vendor;
                        EventBus.$emit('vendorLoaded', { vendor: response.data.vendor });
                    }.bind(this));
                }
            }
        }
    }
</script>
