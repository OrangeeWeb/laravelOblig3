<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tags::class);
        $this->call(items::class);
        $this->call(item_tags_seeder::class);
        $this->call(users::class);
    }
}
