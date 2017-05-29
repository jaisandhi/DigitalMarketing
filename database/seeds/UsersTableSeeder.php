<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today();
        DB::table('users')->truncate();
        DB::table('sales')->truncate();
        //delete users table records
        DB::table('users')->delete();
        //insert some dummy records
        DB::table('users')->insert(array(
            array(
                'name'=>'john',
                'email'=>'john@webnotrix.com',
                'password' => Hash::make('john@2017'),
                'gender' => 'M',
                'nationality' => 'Abhu Dhabi',
                'address' => 'dhubai',
                'mobile' => '9632587410',
                'party_id' => null,
                'quantity' => 0,
                'position' => "Admin",
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'mark',
                'email'=>'mark@webnotrix.com',
                'password' => Hash::make('mark@2017'),
                'gender' => 'M',
                'nationality' => 'Abhu Dhabi',
                'address' => 'dhubai',
                'mobile' => '9632587410',
                'party_id' => null,
                'position' => "Super_Admin",
                'quantity' => 0,
                'created_at' => $today,
                'updated_at' => $today
            ),
            array(
                'name'=>'Karl',
                'email'=>'karl@webnotrix.com',
                'password' => Hash::make('carl@2017'),
                'gender' => 'M',
                'nationality' => 'Abhu Dhabi',
                'address' => 'dhubai',
                'mobile' => '9632587410',
                'party_id' => 1,
                'position' => "Customer",
                'quantity' => 0,
                'created_at' => $today,
                'updated_at' => $today
            ),
        ));
    }
}
