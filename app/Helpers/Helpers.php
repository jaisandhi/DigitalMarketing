<?php

namespace App\Helpers;
Use App\User;
Use App\Models\Nationality;
Use App\Models\Locality;

class Helpers
{
    /**
     * @param $userid
     * @return mixed
     */
    public static function getrole($userid){
        return User::join('role_user','role_user.user_id','=','users.id')
            ->join('roles','roles.id','=','role_user.role_id')->where('users.id',$userid)->select('users.*','roles.name as rolename')->first();
    }

    /**
     * @param $partyid
     * @return mixed
     */
    public static function getcompanyname($partyid){
        return User::join('client_base_companies','client_base_companies.id','=','users.party_id')->where('users.party_id',$partyid)->select('client_base_companies.*')->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getnationality(){
        return Nationality::all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getlocality(){
        return Locality::all();
    }
}
