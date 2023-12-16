<?php

namespace App\Services\Admin;

use App\Models\Film;
use App\Models\Gener;

class Admin_GenerService {

private function validate_create($input_data){
    $msg = 'success';

    if(!isset($input_data['name'])){
        $code =400;
        $msg = 'name is requird';
    }
    return $msg;
}
public function get_geners($input_data){
    $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        if (isset($input_data['data'])) {
            $geners = Gener::where('id','<',$input_data['data'])->get();
        } else {
            $geners = Gener::all();
        }

        $code = 200;
        $msg = 'Geners';
        $data = $geners;

        $result = [
            'data'  =>  $data,
            'code'  =>  $code,
            'msg'   =>  $msg,
        ];

        return $result;
}

public function store_gener($input_data){
    $result = [];
    $code = 0;
    $msg = '';
    $data = [];

    if($this->validate_create($input_data) !='success'){
        $code = 400;
        $msg = $this->validate_create($input_data);
  }else {
    $gener = Gener::create([
        'name' => $input_data['name'],
    ]);

    $code = 200;
    $msg = 'created';
    $data = $input_data;
  }
  $result = [
    'data'  =>  $data,
    'code'  =>  $code,
    'msg'   =>  $msg,
];

return $result;

}
public function update_gener($input_data,$id){
    $result = [];
    $code = 0;
    $msg = '';
    $data = [];

    $gener = Gener::find($id);
    if(is_null($gener)){
        $code = 400 ;
        $msg = 'gener not found';
    }else {
        $name = isset($input_data['name']) ? $input_data['name'] : $gener->name;

        $gener->update([
            'name' => $name,
        ]);
        $code = 200;
        $msg = 'updated';
        $data = $gener;
    }


    $result =[
        'code' => $code,
        'msg'  => $msg,
        'data'  => $data,

    ];
    return $result;


}
public function destroy_gener($id){
    $result = [];
    $code = 0;
    $msg = '';
    $data = [];


    $gener = Gener::find($id);
    if(is_null($gener)){
       $code = 400;
       $msg = 'gener is not exist';
    }else{

     $gener->delete();

      $code = 200;
      $msg = 'gener deleted';
      $data = [];
    }

    $result = [
       'code' => $code,
       'msg' => $msg,
       'data' => $data,

   ];
   return $result;
}


}
