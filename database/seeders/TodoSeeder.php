<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("todos")->insert([
            [
                'id' =>1,
                'title' => 'sony',
                'description' => 'tv 350cm',
                'grouping' => 'tv',
            ],
            [
                'id' =>2,
                'title' => 'samsung',
                'description' => 'tv 100cm',
                'grouping' => 'tv',

            ],
            [
                'id' =>3,
                'title' => 'LG',
                'description' => 'tv 300cm',
                'grouping' => 'tv',

             ],
            ]);

    }
}
