<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => "Thời trang nam",
            'description' => "Thời trang nam quý phái, lịch lãm"
        ]);

        DB::table('category')->insert([
            'name' => "Thời trang nữ",
            'description' => "Thời trang nữ quyến rũ, sexy"
        ]);
    }
}
