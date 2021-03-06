<?php

namespace Database\Seeders;

use App\Models\Singer;
use App\Models\Song;
use Database\Factories\SingerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        \App\Models\Singer::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(SongSeeder::class);

    }
}
