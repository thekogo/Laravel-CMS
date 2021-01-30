<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            [
                'image_1' => '',
                'image_2' => '',
                'image_3' => '',
                'conclusion' => '',
            ]
        ]);
    }
}
