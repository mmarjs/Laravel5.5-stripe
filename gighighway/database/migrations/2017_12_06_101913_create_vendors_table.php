<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->boolean('featured')->default(0);
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->boolean('show_phone_number')->nullable();
            $table->string('description_brief',500)->nullable();
            $table->string('what_to_expect',1000)->nullable();
            $table->decimal('pay_range_min',18,2)->nullable();
            $table->decimal('pay_range_max',18,2)->nullable();
            $table->string('sml_facebook',100)->nullable();
            $table->string('sml_twitter',100)->nullable();
            $table->string('sml_googleplus',100)->nullable();
            $table->string('sml_instagram',100)->nullable();
            $table->string('sml_pinterest',100)->nullable();
            $table->string('sml_vimeo',100)->nullable();
            $table->string('sml_youtube',100)->nullable();
            $table->string('technical_information',1000)->nullable();
            $table->string('technical_information_filename',100)->nullable();
            $table->string('setup_requirements',1000)->nullable();
            $table->boolean('has_liability_insurance');
            $table->decimal('estimated_event_duration',18,2)->nullable();
            $table->string('estimated_event_duration_time_measurement',50)->nullable();
            $table->string('location_zip_code',100)->nullable();
            $table->integer('travel_distance_in_miles')->nullable();
            $table->string('languages',200)->nullable();
            $table->integer('image_main_id')->nullable();
            $table->integer('image_main_tile_id')->nullable();
            $table->integer('primary_category_id')->nullable();
            $table->boolean('billing_is_disabled')->nullable();
            $table->dateTime('billing_notification_last_sent')->nullable();
            $table->dateTime('billing_next_date')->nullable();
            $table->string('billing_recurrence_type',50)->nullable();
            $table->decimal('billing_basic_account_cost',18,2)->nullable();
            $table->boolean('billing_is_featured_account_add_on')->nullable();
            $table->boolean('billing_removed_featured_account_add_on_at_end_of_billing_cycle')->nullable();
            $table->decimal('billing_featured_account_add_on_cost',18,2)->nullable();
            $table->string('billing_promo_code',50)->nullable();
            $table->integer('billing_credit_card_id')->nullable();
            $table->boolean('is_special_featured')->nullable();
            $table->boolean('hide_to_public')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
