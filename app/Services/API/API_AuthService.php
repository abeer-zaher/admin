<?php

namespace App\Services\API;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class API_AuthService {

    private function validate_register($input_data){
        $msg = 'success register';
        if(!isset($input_data['name'])){
            $code = 400;
            $msg = 'name is requird';
        }else if(!isset($input_data['email'])){
            $code = 400;
            $msg = 'email is requird';
        }else if(!isset($input_data['password'])){
            $code = 400;
            $msg = 'password is requird';
        }else if(!isset($input_data['c_password'])){
            $code = 400;
            $msg = 'retype password is requird';
        }
        return $msg;

    }
    private function validate_login($input_data){

        $msg = 'success validate';
        if(!isset($input_data['email'])){
            $code = 400;
            $msg = 'email is requird';
        }else if(!isset($input_data['password'])){
            $code = 400;
            $msg = 'password is requird';
        }
        return $msg;

    }

    public function register_user($input_data){

        $result = [];
        $code = 0;
        $msg = '';
        $data = [];


        if($this->validate_register($input_data) !='success register'){
            $code = 400;
            $msg = 'failed register';

        }else {
            $user = User::Create([
            'name' => $input_data['name'],
            'email' => $input_data['email'],
            'password' => $input_data['password'],
            'c_password' => $input_data['c_password'],
        ]);

        $code = 200;
        $msg = 'user registerd successfuly';
        $data = $input_data;

        }
        $result =[
            'code'=> $code,
            'msg' => $msg,
            'data'=> $data,

        ];
        return $result;


    }

    public function login_user($input_data){
        $result = [];
        $data = [];
        $code = 0;
        $msg = '';

        if($this->validate_login($input_data) !='success validate'){
            $code = 400;
            $msg = 'failed';

        }else {
         if(Auth::attempt(['email'=>$input_data['email'], 'password'=>$input_data['password']])){
         $user = Auth::user();
         $success['token'] = $user->createToken('Mohammad')->accessToken;
         $success['name'] = $user->name;

            $code = 200;
            $msg = 'user login successfuly';
            $data = $input_data;
         }
        }
        $result = [
            'code'=> $code,
            'msg' => $msg,
            'data'=> $data,
        ];
        return $result;

    }
}

