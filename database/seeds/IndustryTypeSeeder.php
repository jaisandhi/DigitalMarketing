<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IndustryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('industry_type')->truncate();
        //delete users table records
        DB::table('industry_type')->delete();
        //insert some dummy records
        DB::table('industry_type')->insert(array(
            array(
                'type'=>'Advertising',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'type'=>'Business',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'type'=>'Marketing',
                'created_at' => $today,
                'updated_at' => $today
            ),
        ));
    }
}
