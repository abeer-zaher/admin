<?php

namespace App\Services\Admin;

use App\Services\Common\MediaService;
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

        if($this->validate_create_input($input_data) !='success'){
              $code = 400;
              $msg = $this->validate_create_input($input_data);
        }else {
            $path = (New MediaService)->save_image($input_data['photo'],'images/');
            $film = Film::create([
                'name'=>$input_data['name'],
                'description'=>$input_data['description'],
                'dateshow'=>$input_data['dateshow'],
                'director'=>$input_data['director'],
                'prodcompany'=>$input_data['prodcompany'],
                'cast'=>$input_data['cast'],
                'photo'=>$path,

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
        $msg = 'fail';
        $data = [] ;

        $film = Film::find($id);
        if($film != null){

        $name = '';
        $description ='';
        $dateshow= '';
        $director= '';
        $prodcompany='';
        $cast='';
        $photo = '';




        if(!isset($input_data['name'])){

             $name = $film->name;

        }
        else $name = $input_data['name'];

        if(!isset($input_data['description'])){

             $description = $film->description;

        }
        else   $description = $input_data['description'];



        if(!isset($input_data['dateshow'])){

            $dateshow = $film->dateshow;

        }
        else  $dateshow = $input_data['dateshow'];


        if(!isset($input_data['director'])){

             $director = $film->director;

        }
        else $director = $input_data['director'];


        if(!isset($input_data['prodcompany'])){

            $prodcompany = $film->prodcompany;

        }
        else $prodcompany = $input_data['prodcompany'];


        if(!isset($input_data['cast'])){

            $cast = $film->cast;

        }
        else $cast = $input_data['cast'];

        if(isset($input_data['geners'])){
            $geners = $input_data['geners'];
            $film->geners()->sync($geners);
        }

        if(!isset($input_data['photo'])){

           $photo = $film->photo ;
        }else {
            $path = (New MediaService)->save_image($input_data['photo'],'images/');
            $photo = $path;
        }

        $film->name = $name ;
        $film->description = $description ;
        $film->dateshow = $dateshow ;
        $film->director = $director ;
        $film->prodcompany = $prodcompany ;
        $film->cast = $cast ;
        $film->photo = $photo;

        $film->save();

        $code = 200;
        $msg = 'updated';
        $data = $input_data;
     }
     else {
        $code = 400;
        $msg = 'film is not exist';
        }

        $result =[
            'code' => $code,
            'msg'  => $msg,
            'data'  => $data,

        ];
        return $result;


    }

    public function destroy_film($id){
    $result = [];
    $data = [] ;

     $film = Film::find($id);
     if($film != null){
     $geners = $film->geners;
     $film->geners()->detach($geners);
     $film->delete();

     $code = 200;
     $msg = 'deleted';
     $data = [];
    }
     else {
        $code = 400;
        $msg = 'film is not exist';

     }

     $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,

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
