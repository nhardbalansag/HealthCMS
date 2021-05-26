<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CMS\Query\{AdminQueryBuilder, UserQueryBuilder};

class UserController extends Controller
{
    public function testindex(){
        return response()->json("hello", 200, [], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }

    public function loginUser(){

    }

    public function registerUser(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255'],
            'user_login_type' => ['required', 'string', 'max:255'],
            'user_first_name' => ['required', 'string'],
            'user_last_name' => ['required', 'string']
        ]);

        $errors = $validator->errors();

        if(!$validator->fails()){
            //create user and get user id
            $queryInfo = UserQueryBuilder::createUser($request->all());

            //get user information
            $userData = UserQueryBuilder::get_user_info($queryInfo->id);

            //create token information using passport
            $token = $userData->createToken('access token')->accessToken;

            $dataresponse = array(
                "token" => $token,
                "information" => $userData,
                "status" => true
            );

            return response()->json($dataresponse, 200, [], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

        }else if($validator->fails()){

            $dataresponse = array(
                "token" =>null,
                "information" => null,
                "status" => false
            );

            return response()->json($dataresponse, 200, [], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

        }
    }
}


