<?php

use GigHighway\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Get categories to copy
        $categories = Category::all();

        // Drop table to rebuild
        Schema::dropIfExists('categories');

        // Rebuild table correctly
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug',100);
            $table->string('guid',100);
            $table->string('name',200);
            $table->integer('order_num');
            $table->timestamps();
        });

        // Parse old records to insert
        $insertArray = [];
        foreach($categories as $cat) {
            $insertArray[] = [
                'slug' => strtolower($cat->id),
                'guid' => $cat->guid,
                'name' => $cat->name,
                'order_num' => $cat->order_num,
                'created_at' => $cat->created_at,
                'updated_at' => $cat->updated_at,
            ];
        }

        // Insert the records
        DB::table('categories')->insert($insertArray);

        // Update the parent and child IDs
        DB::table('category_relations')->join('categories', 'categories.slug', '=', 'category_relations.parent_category_id')
            ->update([
                'parent_category_id' => \DB::raw('`categories`.`id`')
            ]);

        DB::table('category_relations')->join('categories', 'categories.slug', '=', 'category_relations.child_category_id')
            ->update([
                'child_category_id' => \DB::raw('`categories`.`id`')
            ]);

        DB::table('category_relations')
            ->where('parent_category_id', '=', '*TOP*')->orWhere('parent_category_id', '=', 'ParentCategoryID')->delete();

        DB::table('vendor_categories')->join('categories', 'categories.slug', '=', 'vendor_categories.category_id')->update([
            'vendor_categories.category_id' => \DB::raw('`categories`.`id`')
        ]);

        // Make ids integers for better indexing
        Schema::table('category_relations', function(Blueprint $table) {
            $table->integer('parent_category_id')->change();
            $table->integer('child_category_id')->change();

            // Add index for DB performance
            $table->index(['parent_category_id', 'child_category_id'], 'parent_child_idx');
        });

        Schema::table('vendor_categories', function(Blueprint $table) {
            $table->integer('category_id')->unsigned()->change();

            // Add index for DB performance
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DO NOT GO DOWN FROM HERE.
        //
        // Once this is implemented everywhere we need to remove this migration from the DB, as we do not
        // want to go back to the way we were doing this before.
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
