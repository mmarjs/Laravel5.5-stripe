<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMediaTablesWithVendorId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function(Blueprint $table) {
            $table->dropColumn('profile_id');
            $table->integer('vendor_id')->after('id');
        });

        Schema::table('videos', function(Blueprint $table) {
            $table->dropColumn('profile_id');
            $table->integer('vendor_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs', function(Blueprint $table) {
            $table->dropColumn('vendor_id');
            $table->integer('profile')->after('id');
        });

        Schema::table('videos', function(Blueprint $table) {
            $table->dropColumn('vendor_id');
            $table->integer('profile')->after('id');
        });
    }
}
