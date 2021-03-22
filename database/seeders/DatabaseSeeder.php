<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *10人のデモデータ作成
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
    }
}
