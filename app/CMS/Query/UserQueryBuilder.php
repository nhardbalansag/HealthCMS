<?php

namespace App\CMS\Query;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserQueryBuilder extends Model
{
    public static function createUser($request){
        $data = User::create([
                'user_login_type' => $request['user_login_type'],
                'app_id' => $request['app_id'],
                'user_first_name' => $request['user_first_name'],
                'user_middle_name' => $request['user_middle_name'],
                'user_last_name' => $request['user_last_name'],
                'user_birthday' => $request['user_birthday'],
                'user_sex' => $request['user_sex'],
                'user_house_number' => $request['user_house_number'],
                'user_street' => $request['user_street'],
                'user_building_name_or_subdivision_name' => $request['user_building_name_or_subdivision_name'],
                'user_city' => $request['user_city'],
                'user_company_name' => $request['user_company_name'],
                'user_type' => $request['user_type'],
                'user_edit_count' => $request['user_edit_count'],
                'email' => $request['email'],
                'password' => Hash::make($request['password'])
        ]);

        return $data;
    }

    public static function get_user_info($param_id){

        $data = User::where('id', $param_id)->first();

        return $data;
    }
}
