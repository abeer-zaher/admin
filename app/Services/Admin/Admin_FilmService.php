<?php

namespace App\Services\Admin;

use App\Models\Film;
use App\Models\Gener;

class Admin_FilmService {

    private function validate_create_input($input_data){

        $msg = 'success';


        if(!isset($input_data['name'])){
            $code =400;
            $msg = 'name is requird';
        }else if(!isset($input_data['description'])){
            $code =400;
            $msg = 'desciption is requird';
        }else if(!isset($input_data['dateshow'])){
            $code =400;
            $msg = 'dateshow is requird';
        }else if(!isset($input_data['director'])){
            $code =400;
            $msg = 'director is requird';
        }else if(!isset($input_data['prodcompany'])){
            $code =400;
            $msg = 'prodcompany is requird';
        }else if(!isset($input_data['cast'])){
            $code =400;
            $msg = 'cast is requird';
        }else if(!isset($input_data['geners'])){
            $code = 400;
            $msg = 'gener is requird';
        }
        return $msg;




    }

    public function get_films($input_data)
    {
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        if (isset($input_data['data'])) {
            $films = Film::where('dateshow','<',$input_data['data'])->get();
        } else {
            $films = Film::all();
        }



        $code = 200;
        $msg = 'Films';
        $data = $films;

        $result = [
            'data'  =>  $data,
            'code'  =>  $code,
            'msg'   =>  $msg,
        ];

        return $result;
    }

    public function store_film($input_data){

        $result = [];
        $data = [];

        if(!$this->validate_create_input($input_data) !='success'){
              $code = 400;
              $msg = $this->validate_create_input($input_data);
        }else {
            $film = Film::create([
                'name'=>$input_data['name'],
                'description'=>$input_data['description'],
                'dateshow'=>$input_data['dateshow'],
                'director'=>$input_data['director'],
                'prodcompany'=>$input_data['prodcompany'],
                'cast'=>$input_data['cast'],


            ]);
            $film->geners()->attach($input_data['geners']);
            $code = 200;
            $msg = 'created';
            $data = $input_data;
        }

            $result = [
                'code' => $code,
                'msg' => $msg,
                'data' => $data,
            ];
            return $result;



    }
    public function update_film($input_data,$id){

        $result = [];

        $data = [] ;

        $film = Film::find($id);

        if(!isset($input_data['name'])){

             $film->name = $film->name;

        }
        else $film->name = $input_data['name'];

        if(!isset($input_data['description'])){

             $film->description = $film->description;

        }
        else   $film->description = $input_data['description'];



        if(!isset($input_data['dateshow'])){

            $film->dateshow = $film->dateshow;

        }
        else  $film->dateshow = $input_data['dateshow'];


        if(!isset($input_data['director'])){

             $film->director = $film->director;

        }
        else $film->director = $input_data['director'];


        if(!isset($input_data['prodcompany'])){

            $film->prodcompany = $film->prodcompany;

        }
        else $film->prodcompany = $input_data['prodcompany'];


        if(!isset($input_data['cast'])){

            $film->cast = $film->cast;

        }
        else $film->cast = $input_data['cast'];


        $film->save();

        $code = 200;
        $msg = 'update';
        $data = $input_data;

        $result =[
            'code' => $code,
            'msg'  => $msg,
            'data'  => $data,

        ];
        return $result;


    }




    public function get_driver_profile(Driver $driver)
    {
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];


        $services = Service::all();

        $code = 200;
        $msg = 'السائق';
        $data['driver'] = $driver;
        $data['services'] = $services;

        $result = [
            'data'  =>  $data,
            'code'  =>  $code,
            'msg'   =>  $msg,
        ];

        return $result;
    }

}
