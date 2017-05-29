<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientBaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('client_base_companies')->truncate();
        //delete users table records
        DB::table('client_base_companies')->delete();
        //insert some dummy records
        DB::table('client_base_companies')->insert(array(
            array(
                'name'=>'Webnotrix',
                'address'=>'Abhu Dhabi',
                'mobile' => '9687451230',
                'land_line' => '20136555',
                'Comments' => 'good',
                'no_of_employee' => 0,
                'is_deleted' => 0,
                'Industry_Type' => 'Advertising',
                'email' => 'webnotrix@mail.com',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Dream Soft',
                'address'=>'Abhu Dhabi',
                'mobile' => '9687451230',
                'land_line' => '20136555',
                'Comments' => 'good thought',
                'is_deleted' => 0,
                'no_of_employee' => 0,
                'Industry_Type' => 'Advertising',
                'email' => 'dsoft@mail.com',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'CaptialArea',
                'address'=>'Abhu Dhabi',
                'mobile' => '9687451230',
                'land_line' => '20136555',
                'Comments' => 'good thought knowledge',
                'is_deleted' => 0,
                'no_of_employee' => 0,
                'Industry_Type' => 'Advertising',
                'email' => 'capital@mail.com',
                'created_at' => $today,
                'updated_at' => $today
            ),
        ));
    }
}
