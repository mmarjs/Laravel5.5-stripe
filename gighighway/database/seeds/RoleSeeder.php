<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = Role::create(['name' => 'administrator',
		'slug'=>'administrator',
		'permissions'=>json_encode(['users_manage'=>true,]),
		]);
		$vendor = Role::create(['name' => 'vendor',
		'slug'=>'vendor',
		'permissions'=>json_encode(['quote-users'=>true,]),
		]);
		$member = Role::create(['name' => 'member',
		'slug'=>'vendor',
		'permissions'=>json_encode(['quote-requests'=>true,
		'make-reviews'=>true,
		'manage-favorites'=>true,]),
		]);
        
    }
}
