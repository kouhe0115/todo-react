<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('todos')->insert([
        [
          'title' => 'Todo1'
        ],
        [
          'title' => 'Todo2'
        ],
        [
          'title' => 'Todo3'
        ]
      ]);
    }
}
