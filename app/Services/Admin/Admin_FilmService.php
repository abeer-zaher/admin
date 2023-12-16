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
        $msg = '';
        $code = 0;

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
        $msg = '';
        $code = 0;
        $data = [] ;

        $film = Film::find($id);
        if(is_null($film)){
            $code = 400;
            $msg = 'film not found';
        }else {
            $name = isset($input_data['name']) ? $input_data['name'] : $film->name;

            $description = isset($input_data['description']) ? $input_data['description'] : $film->description;

            $dateshow = isset($input_data['dateshow']) ? $input_data['dateshow'] : $film->dateshow;

            $director = isset($input_data['director']) ? $input_data['director'] : $film->director;

            $prodcompany = isset($input_data['prodcompany']) ? $input_data['prodcompany'] : $film->prodcompany;

            $cast = isset($input_data['cast']) ? $input_data['cast'] : $film->cast;

            $photo_path = $film->photo;
            if(isset($input_data['photo'])){
                File::delete($photo_path);
                $photo_path = (new MediaService)->save_image($input_data['photo'], 'images/');
            }

            $geners = $film->geners;
            if(isset($input_data['geners'])){
                $geners = $input_data['geners'];
                $film->geners()->sync($geners);
            }

        $film->update([
            'name' => $name,
            'description' => $description,
            'dateshow' => $dateshow,
            'director'=> $director,
            'prodcompany' => $prodcompany,
            'cast' => $cast,
            'photo' => $photo_path,
        ]);

        $code = 200;
        $msg = 'updated';
        $data = $film;

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
    $code = 0;
    $msg = '';
    $data = [] ;

     $film = Film::find($id);
     if(is_null($film)){
        $code = 400;
        $msg = 'film is not exist';
     }else{
      $geners = $film->geners;
      $film->geners()->detach($geners);
      $film->delete();

       $code = 200;
       $msg = 'film deleted';
       $data = [];
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
