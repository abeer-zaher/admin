<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\API_BaseController as API_BaseController;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Services\API\API_AuthService;
use App\Http\Resources\Userdata as userDataResource;
//use App\Http\Resource\Userlogin as userLoginResource;
use Illuminate\Http\Request;

class API_AuthController extends API_BaseController
{
    public function __construct(API_AuthService $auth_service) {
        $this->auth_service = $auth_service;
    }

    public function register(Request $request){

        $response = $this->auth_service->register_user($request->all());
        $response_data = $response['data'];
        if($response['code'] == 200){
            return $this->sendResponse( userDataResource::collection($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);
    }


    public function login(Request $request){
        $response = $this->auth_service->login_user($request->all());
        $response_data = $response['data'];
        if($response['code'] == 200){
            return $this->sendResponse( userDataResource::collection($response['data']), $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }


}
