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
                'name' => 'test 13',
                'title' => 'test 122',
            ],
            [
                'id' =>2,
                'name' => 'saboori',
                'title' => 'nima',


            ],
            [
                'id' =>3,
                'name' => 'reza',
                'title' => 'test 12',

            ],
            ]);

    }
}
