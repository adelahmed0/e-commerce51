<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->truncate();
        DB::table('properties')->insert([
            [
                'name' => 'manufacturer',
                'priority' => 0,
                'type' => 'selector',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'weight',
                'priority' => 1,
                'type' => 'number',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
