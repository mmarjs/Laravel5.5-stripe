<?php

use GigHighway\Vendor;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToVendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->string('slug', 500)->after('name');
        });

        $vendors = Vendor::all();
        foreach($vendors as $vendor) {
            $vendor->slug = $vendor->generateSlug();
            $vendor->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
