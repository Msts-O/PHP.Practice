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
    {DB::table('todos')->truncate();
       DB::table('todos')->insert([

        ['memo' => 'task', 'status' => 0],
        ['memo' => 'test', 'status' => 1]
       ]);
    }
}
