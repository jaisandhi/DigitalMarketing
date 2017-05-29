<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LocalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('locality')->truncate();
        //delete users table records
        DB::table('locality')->delete();
        //insert some dummy records
        DB::table('locality')->insert(array(
            array(
                'name'=>'Abu Dhabi',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Ajman',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Dubai',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Fujairah',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Ras al-Khaimah',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Sharjah',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Umm al-Qaiwain',
                'created_at' => $today,
                'updated_at' => $today
            ),
        ));
    }
}
