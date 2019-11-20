<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function(Blueprint $table){

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function(Blueprint $table){
            $table->dropColumn('show_phone_number');
            $table->dropColumn('description_brief');
            $table->dropColumn ('what_to_expect');
            $table->dropColumn('pay_range_min');
            $table->dropColumn('pay_range_max');
            $table->dropColumn('sml_facebook');
            $table->dropColumn('sml_twitter');
            $table->dropColumn ('sml_googleplus');
            $table->dropColumn( 'sml_instagram');
            $table->dropColumn('sml_pinterest');
            $table->dropColumn('sml_vimeo');
            $table->dropColumn('sml_youtube');
            $table->dropColumn('technical_information');
            $table->dropColumn('technical_information_filename');
            $table->dropColumn('setup_requirements');
            $table->dropColumn('has_liability_insurance');
            $table->dropColumn('estimated_event_duration');
            $table->dropColumn('estimated_event_duration_time_measurement');
            $table->dropColumn('location_zip_code');
            $table->dropColumn('travel_distance_in_miles');
            $table->dropColumn('languages');
            $table->dropColumn('image_main_id');
            $table->dropColumn('image_main_tile_id');
            $table->dropColumn('primary_category_id');
            $table->dropColumn('billing_is_disabled');
            $table->dropColumn('billing_notification_last_sent');
            $table->dropColumn('billing_next_date');
            $table->dropColumn('billing_recurrence_type');
            $table->dropColumn('billing_basic_account_cost');
            $table->dropColumn('billing_is_featured_account_add_on');
            $table->dropColumn('billing_removed_featured_account_add_on_at_end_of_billing_cycle');
            $table->dropColumn('billing_featured_account_add_on_cost');
            $table->dropColumn('billing_promo_code');
            $table->dropColumn('billing_credit_card_id');
            $table->dropColumn('is_special_featured');
            $table->dropColumn('hide_to_public');
        });
    }
}
