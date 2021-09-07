<?php

namespace Database\Seeders;

use App\Models\Singer;
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
        \App\Models\Singer::factory(100)->create();
        $this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SongSeeder::class);
    }
}
