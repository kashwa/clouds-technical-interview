<?php

namespace Modules\AdminModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AdminModule\Entities\Admin;

class SeedFakeAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Admin::firstOrCreate([
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
