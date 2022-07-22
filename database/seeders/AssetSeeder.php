<?php

namespace Database\Seeders;

use App\Models\Assets;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assets::factory(1)->create();
    }
}
