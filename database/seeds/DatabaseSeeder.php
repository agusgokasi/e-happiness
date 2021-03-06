<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(FormsTableSeeder::class);
        $this->call(ProvinsisTableSeeder::class);
        $this->call(KotasTableSeeder::class);
    }
}
