<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\API_BaseController as API_BaseController;
use App\Services\Admin\Admin_FilmService;
use App\Http\Requests\Admin\FilmCreateRequest;

use App\Http\Resources\Film as filmResource;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Gener;



class API_FilmController extends Controller
{

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



    public function api_store(Request $request)
    {
        //$request->validate();
      $response = $this->film_service->store_film($request->all());
      $response_data = $response['data'];
      if($response['code'] == 200){
        return $this->sendResponse( filmResource::collection($response['data']) , $response['msg'],$response['code']);
      }else
      return $this->sendResponse( [] , $response['msg'],$response['code']);
    }



}
