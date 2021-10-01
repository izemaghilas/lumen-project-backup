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
        DB::table('movies')->insert([
            'name' => 'Transformers',
            'category' => 'Comedy',
        ]);

        DB::table('movies')->insert([
            'name' => 'Knives out',
            'category' => 'Mystery/Crime',
        ]);
    }
}
