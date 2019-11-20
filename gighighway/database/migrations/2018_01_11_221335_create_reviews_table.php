<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            /*
             * This is largely a copy and past structure from
             * the original website.
             * */
            $table->increments('id');
            $table->integer('vendor_id');
            $table->string('title');
            $table->smallInteger('rating');
            $table->string('event_zip_code',10);
            $table->dateTime('event_date');
            $table->string('text',1000);
            $table->string('reviewer_display_name',25);
            $table->string('service_provider_reply',1000);
            $table->boolean('is_outside_review');
            $table->boolean('is_admin_reviewed');
            $table->dateTime('date_created');
            $table->integer('account_id');
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
        Schema::dropIfExists('reviews');
    }
}
