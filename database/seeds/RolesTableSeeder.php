<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('roles')->truncate();
        //delete users table records
        DB::table('roles')->delete();
        //insert some dummy records
        DB::table('roles')->insert(array(
            array(
                'name'=>'Admin',
                'display_name'=>'administrator',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Super-Admin',
                'display_name'=>'super_admin',
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Customer',
                'display_name'=>'customer',
                'created_at' => $today,
                'updated_at' => $today
            ),
        ));
    }
}
