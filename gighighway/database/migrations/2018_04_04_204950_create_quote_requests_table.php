<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('vendor_id');
            $table->integer('category_id')->nullable();
            $table->integer('duration')->nullable();
            $table->string('duration_measurement')->nullable();
            $table->integer('estimated_guest_count')->nullable();
            $table->text('event_additional_details')->nullable();
            $table->dateTime('event_date')->nullable();
            $table->integer('event_duration')->nullable();
            $table->string('event_duration_type')->nullable();
            $table->string('event_estimated_end_time')->nullable();
            $table->string('event_estimated_start_time')->nullable();
            $table->string('event_type')->nullable();
            $table->string('event_location')->nullable();
            $table->string('first_name')->nullable();
            $table->boolean('is_event_date_flexible')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('request_similar_quote')->nullable();
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
        Schema::dropIfExists('quote_requests');
    }
}
