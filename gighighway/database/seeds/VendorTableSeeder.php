<?php

use GigHighway\Category;
use GigHighway\Location;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = Location::query()->limit(100)->get();
        $categories = Category::query()->limit(10)->get();
        factory(GigHighway\Vendor::class, 500)->create()->each(function($vendor) use($locations, $categories) {
            $vendor->update(['location_zip_code' => $locations->random()->zip_code]);
            $vendor->categories()->attach($categories->random()->id);
            $vendor->images()->create([
                'guid' => '',
                'file_name' => '/images/thumbnail',
                'file_extension' => '.jpg',
                'title' => 'Image Title',
                'caption' => 'Image Caption',
                'is_admin_reviewed' => 1,
                'sort_index' => 1
            ]);
            $vendor->images()->create([
                'guid' => '',
                'file_name' => '/images/thumbnail',
                'file_extension' => '.jpg',
                'title' => 'Image Title',
                'caption' => 'Image Caption',
                'is_admin_reviewed' => 1,
                'sort_index' => 2
            ]);
            $vendor->images()->create([
                'guid' => '',
                'file_name' => '/images/thumbnail',
                'file_extension' => '.jpg',
                'title' => 'Image Title',
                'caption' => 'Image Caption',
                'is_admin_reviewed' => 1,
                'sort_index' => 3
            ]);
        });
    }
}
