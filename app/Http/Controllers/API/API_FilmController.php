<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\API_BaseController as API_BaseController;
use App\Services\Admin\Admin_FilmService;
use App\Http\Requests\Admin\FilmCreateRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Film as filmResource;
use App\Http\Resources\Cart as cartResource;
use App\Http\Resources\Filmcart as filmcartResource;
use App\Http\Resources\Order as orderResource;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Gener;
use App\Models\User;



class API_FilmController extends API_BaseController
{
    protected Admin_FilmService $film_service;

    public function __construct(Admin_FilmService $film_service) {
        $this->film_service = $film_service;
    }
    public function api_get_films(Request $request)
    {

        $geners = Gener::all();
        $response = $this->film_service->get_films($request->all());
        $response_data = $response['data'];
        if ($response['code'] == 200) {
            return $this->sendResponse( filmResource::collection($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);


    }

    public function show_films(){
       // $id = Auth::User()->id;
        $response = $this->film_service->show_film();
        $response_data = $response['data'];
        if ($response['code'] == 200) {
            return $this->sendResponse( filmResource::collection($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }
    public function getcart($id){
        $response = $this->film_service->get_cart($id);
        $response_data = $response['data'];
        if ($response['code'] == 200) {
            return $this->sendResponse(new cartResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);
    }

    public function add_to_filmcart(Request $request,$id){
         $response = $this->film_service->add_to_filmcart($request->all(),$id);
        $response_data = $response['data'];
         if ($response['code'] == 200) {
            return $this->sendResponse( new filmcartResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }
    public function cencel_order($id){
         $response = $this->film_service->cencel_order($id);
        $response_data = $response['data'];
         if ($response['code'] == 200) {
            return $this->sendResponse( [], $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }
    public function add_order(Request $request){
         $response = $this->film_service->add_order($request->all());
        $response_data = $response['data'];
         if ($response['code'] == 200) {
            return $this->sendResponse(new orderResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }
    public function payment(Request $request){
        $response = $this->film_service->payment($request->all());
        $response_data = $response['data'];
         if ($response['code'] == 200) {
            return $this->sendResponse(new orderResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);
    }
    public function finish_orders(){
        $response = $this->film_service->finished();
        $response_data = $response['data'];
         if ($response['code'] == 200) {
            return $this->sendResponse( orderResource::collection($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }
    public function convertToProgress(Request $request){
        $response = $this->film_service->convert_to_inProgress($request->all());
        $response_data =$response['data'];
        if($response['code'] == 200) {
            return $this->sendResponse(new orderResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);
    }
    public function add_cart($id){
         $response = $this->film_service->add_cart($id);
        $response_data = $response['data'];
        if ($response['code'] == 200) {
            return $this->sendResponse(new cartResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);
    }

    public function delete_filmcart (Request $request){
        $response = $this->film_service->delete_item($request->all());
        $response_data = $response['data'];
        if($response['code'] == 200){
            return $this->sendResponse([]  , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);


    }

    public function checkout($id){
        $response = $this->film_service->checkout_cart($id);
        $response_data = $response['data'];
        if($responce['code'] == 200){
            return $this->sendResponse( [] , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }
    public function api_store(Request $request)
    {
        //$request->validate();
      $response = $this->film_service->store_film($request->all());
      $response_data = $response['data'];
      if($response['code'] == 200){
        return $this->sendResponse(new filmResource($response['data']) , $response['msg'],$response['code']);
      }else
      return $this->sendResponse( [] , $response['msg'],$response['code']);
    }

    public function api_update(Request $request,$id){

        $response = $this->film_service->update_film($request->all(),$id);
        $response_data = $response['data'];
        if($responce['code'] == 200){
            return $this->sendResponse(new filmResource($response['data']) , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);
    }

    public function api_destroy($id){
        $response = $this->film_service->destroy_film($id);
        $response_data = $response['data'];
        if($responce['code'] == 200){
            return $this->sendResponse( [] , $response['msg'],$response['code']);
        }else
        return $this->sendResponse( [] , $response['msg'],$response['code']);

    }




}
