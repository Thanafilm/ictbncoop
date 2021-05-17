<?php

namespace Database\Seeders;

use App\Models\Announce;
use Illuminate\Database\Seeder;

class AnnounceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Announce::factory(30)->create();
    }
}
