<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVendorsToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->boolean('show_phone_number')->nullable()->change();
            $table->string('description_brief',500)->nullable()->change();
            $table->string('what_to_expect',1000)->nullable()->change();
            $table->decimal('pay_range_min',18,2)->nullable()->change();
            $table->decimal('pay_range_max',18,2)->nullable()->change();
            $table->string('sml_facebook',100)->nullable()->change();
            $table->string('sml_twitter',100)->nullable()->change();
            $table->string('sml_googleplus',100)->nullable()->change();
            $table->string('sml_instagram',100)->nullable()->change();
            $table->string('sml_pinterest',100)->nullable()->change();
            $table->string('sml_vimeo',100)->nullable()->change();
            $table->string('sml_youtube',100)->nullable()->change();
            $table->string('technical_information',1000)->nullable()->change();
            $table->string('technical_information_filename',100)->nullable()->change();
            $table->string('setup_requirements',1000)->nullable()->change();
            $table->decimal('estimated_event_duration',18,2)->nullable()->change();
            $table->string('estimated_event_duration_time_measurement',50)->nullable()->change();
            $table->string('location_zip_code',100)->nullable()->change();
            $table->integer('travel_distance_in_miles')->nullable()->change();
            $table->string('languages',200)->nullable()->change();
            $table->integer('image_main_id')->nullable()->change();
            $table->integer('image_main_tile_id')->nullable()->change();
            $table->integer('primary_category_id')->nullable()->change();
            $table->boolean('billing_is_disabled')->nullable()->change();
            $table->dateTime('billing_notification_last_sent')->nullable()->change();
            $table->dateTime('billing_next_date')->nullable()->change();
            $table->string('billing_recurrence_type',50)->nullable()->change();
            $table->decimal('billing_basic_account_cost',18,2)->nullable()->change();
            $table->boolean('billing_is_featured_account_add_on')->nullable()->change();
            $table->boolean('billing_removed_featured_account_add_on_at_end_of_billing_cycle')->nullable()->change();
            $table->decimal('billing_featured_account_add_on_cost',18,2)->nullable()->change();
            $table->string('billing_promo_code',50)->nullable()->change();
            $table->integer('billing_credit_card_id')->nullable()->change();
            $table->boolean('is_special_featured')->nullable()->change();
            $table->boolean('hide_to_public')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            //
        });
    }
}
