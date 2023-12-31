<?php

namespace App\Services\Admin;

use App\Services\Common\MediaService;

use App\Models\User;
use App\Models\Film;
use App\Models\Gener;
use App\Models\Image;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Filmcart;

class Admin_FilmService {



    private function validate_create_input($input_data){

        $msg = 'success';


        if(!isset($input_data['product_name'])){
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
            $films = Film::all() ;
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

    public function show_film(){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];

       // $carts = Cart::where('user_id','=',$id)->get();
       $films = Film::all();

         $code = 200;
         $msg = 'films';
         $data = $films;

        $result = [
            'data'  =>  $data,
            'code'  =>  $code,
            'msg'   =>  $msg,
        ];

        return $result;
    }

    public function validate_add_filmcart($input_data){
         $msg = 'success';

         if(!isset($input_data['product_name'])){
            $code =400;
            $msg = 'product name is requird';
        }else if(!isset($input_data['quentity'])){
            $code =400;
            $msg = 'quentity is requird';
        }else if(!isset($input_data['price'])){
            $code =400;
            $msg = 'price is requird';
        }/*else if(!isset($input_data['cart_id'])){
            $code = 400;
            $msg = 'cart id is required';
        }*/
        return $msg;

    }

    public function add_to_filmcart($input_data,$id){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];
        $total = 0;
        $subtotal = 0;
        $fineltotal = 0;
        $qety = 0;
        $bool = 0;
        $name = $input_data['product_name'];

        $cart = Cart::find($id);

        if($this->validate_add_filmcart($input_data) !='success'){
              $code = 400;
              $msg = $this->validate_add_filmcart($input_data);
        }else {

            $subtotal = $input_data['price'] * $input_data['quentity'];
            $total +=$input_data['price'] * $input_data['quentity'];

            $filmcarts = $cart->film_cart;

            foreach($filmcarts as $filmcart){
            if($filmcart->product_name == $name){
              $bool = 1;
                $qety = $filmcart->quentity + $input_data['quentity'];
                   $filmcart->update([
                        'quentity' => $qety ,
                   ]);
                    $data = $filmcart;
             }

            }

                if($bool == 1){

                    $fineltotal = $cart->total + $total ;
                     $cart->update([
                    'total' => $fineltotal,
                   ]);

                }else{

            $film = Filmcart::create([
                'product_name' => $input_data['product_name'],
                'quentity' => $input_data['quentity'],
                'price' => $input_data['price'],
                'subtotal' => $subtotal ,
                'cart_id' => $id,
            ]);
            $fineltotal = $cart->total + $total ;
            $cart->update([
                'total' => $fineltotal,
            ]);
            $data = $film;
        }
            $code = 200 ;
            $msg = 'film cart add successuly';
    }
          $result = [
            'data'  =>  $data,
            'code'  =>  $code,
            'msg'   =>  $msg,
        ];

        return $result;

    }
    public function add_order($input_data){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];
        $total = 0 ;
        $resolve = 0 ;
        $products ='';
        $id = $input_data['cart_id'];


        $cart = Cart::find($id);
        if(!is_null($cart)){
          $filmcarts = $cart->film_cart;
          foreach($filmcarts as $filmcart){
            $products ='-'. $filmcart->product_name;
        }
        }

        if(isset($input_data['resolve'])){
            $total = $cart->total * $input_data['resolve']/100;
        }else
        $total = $cart->total;

        $order = Order::create([
            'user_id' => $input_data['user_id'],
            'cart_id' => $input_data['cart_id'],
            'total' => $total ,
            'resolve' => $input_data['resolve'],
            'status' => 'waiting for payment',
            'dateorder' => now(),
            'products'=> $products,
        ]);
        if(is_null($order)){
            $code = 400;
            $msg = 'can not create order';
        }else {
            $code = 200 ;
            $msg = 'created';
            $data = $order;
        }
         $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,

    ];
    return $result;



    }



    public function cencel_order($id){
         $result = [];
        $code = 0;
        $msg = '';
        $data = [];
        $orders = Order::where('user_id','like',"%$id%")->get();
        if(is_null($orders)){
            $code = 400;
            $msg = 'there is no order';
        }else{
            foreach($orders as $order){
             if($order->status == 'waiting for payment'){
                $order->update([
                    'status' => 'canceled',
                ]);
                $code = 200;
                 $msg = 'cenceled';
            }else{
                $msg = 'you can not cencel this order' ;
                $code = 400 ;
            }
            }

        $data = $orders;
        }

        $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,

    ];
    return $result;


    }

    public function convert_to_inProgress($input_data){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        $id = $input_data['order_id'];
        $order = Order::find($id);
        if(is_null($order)){
            $code = 400;
            $msg = 'this order is not exist';
        }else {
            if($order->status == 'payment was made'){
            $order->update([
                'status' => 'underway',
            ]);
            $code = 200 ;
            $msg = 'the order is in progress';

          }else
            $msg = 'this order has another status';

            $data = $order ;

        }
        $result = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ];
        return $result;
    }

    public function payment($input_data){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        $id = $input_data['user_id'];

        $orders = Order::where('user_id','like',"%$id%")->get();
        if(is_null($orders)){
            $code = 400;
            $msg = 'there is no order';
        }else{
            foreach($orders as $order){
                if($order->status == 'waiting for payment'){
                 $order->update([
                    'status' => 'payment was made',
                 ]);
                 $msg = 'status was update';
                }
                }
                $code = 200;
                $msg = 'status does not change';
                $data = $order;
                    }
            $result = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data,

        ];
        return $result;

    }
    public function finished(){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];
        $str = 'underway';

        //$id = $input_data['user_id'];

        $orders = Order::where('status','like',"%$str%")->get();

        if(is_null($orders)){
            $code = 400 ;
            $msg = 'there is no order';
        }else {
            foreach($orders as $order){
                $order->update([
                   'status' => 'finished',
                ]);
            }
            $code = 200;
            $msg = 'orders are finished';
            $data = $orders;
        }
        $result =[
        'code' => $code,
        'msg' => $msg,
        'data' => $data,
        ];
        return $result;

    }

    public function get_cart($id){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        // $user = User::find($id);
         $carts = Cart::where('user_id','like',"%$id%")->get();
       if(is_null($carts)){
            $code = 400;
            $msg = 'you do not have cart you should add a new one by add cart function';
         }else{
            foreach($carts as $cart){
            if($cart->status != 'active'){
                $cart->status = 'active';
            }
            $msg = 'cart is already exist for user';
            $code = 200 ;
            $data = $cart;
         }
        }

        $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,

    ];
    return $result;

    }

    public function delete_item($input_data){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];
        $name = $input_data['product_name'];
        $id = $input_data['cart_id'];
        $total = 0;
        $fineltotal = 0;
        $qty = 0;

        $cart = Cart::find($id);

        $filmcarts = Filmcart::where('product_name','like',"%$name%")
        ->where('cart_id','like',"%$id%")
        ->get();
        if(is_null($filmcarts)){
        $code = 400;
        $msg = 'film  cart is not exist';
        }else{

        foreach($filmcarts as $filmcart){
            $total += $filmcart->price * $filmcart->quentity ;
            $qty = $filmcart->quentity - $input_data['quentity'];
            $filmcart->update([
                'quentity' =>$qty,
            ]);
            if($qty <= 0){
                 $filmcart->delete();
            }
             $fineltotal = $filmcart->cart->total - $total ;
             $cart->update([
                'total' => $fineltotal,
            ]);
            if(count($cart->film_cart) == 0){
                 $cart->delete();
            }
        }





        $code = 200;
        $msg = count($cart->film_cart);
        $data = $filmcarts;
     }

     $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,

    ];
    return $result;


    }
    public function checkout_cart($id){
         $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        $cart = Cart::find($id);

        $cart->update([
            'status' => 'inactive',
        ]);
         $code = 200;
        $msg = 'updated';
        $data = $cart;



        $result =[
            'code' => $code,
            'msg'  => $msg,
            'data'  => $data,

        ];
        return $result;
    }

    public function add_cart($id){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];

        $cart = Cart::create([
            'user_id'=>$id,
            'total' => 0,
            'status' => 'active',
        ]);
         $code = 200 ;
        $msg =  'cart add successuly';
         $data = $cart;


         $result = [
            'data'  =>  $data,
            'code'  =>  $code,
            'msg'   =>  $msg,
        ];

        return $result;


    }

    public function searchbyname($searchquery){
        $result = [];
        $code = 0;
        $msg = '';
        $data = [];


        $films = Film::where('name','like',"%$searchquery%")
        ->orwhereHas('geners',function($query) use ($searchquery){
            $query->where('name','like',"%$searchquery%");
        })
        ->get();


        if(is_null($films)){
            $code = 400;
            $msg = 'no film';
        }else {
            $code = 200;
            $msg = 'films';
           $data = $films;
        }
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
                'price' =>$input_data['price'],
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
    public function store_film_img($input_data,$id){
        $result = [];
        $msg = '';
        $code = 0;
        $data = [] ;

         $film = Film::find($id);

        if(is_null($film)){
            $code = 400;
            $msg = 'film not found';
        }else {
            $files = $input_data['image'];
            foreach($files as $file){
                $image = (New MediaService)->save_image($file,'images/');
                 $film->images()->create([
                    'film_id' =>$film->id,
                    'path' =>$image,
                ]);
            }

            $code = 200;
            $msg = 'add image';
            $data = $input_data;
        }
         $result = [
                'code' => $code,
                'msg' => $msg,
                'data' => $data,
            ];
            return $result;

    }
    public function update_film_imgs($input_data,$id){
        $result = [];
        $msg = '';
        $code = 0;
        $data = [] ;

        $film = Film::find($id);

        if(is_null($film)){
            $code = 400;
            $msg = 'film not found';
        }else {

             $img_path = $film->images;

            if(isset($input_data['images'])){
                $img_path = $input_data['images'];
                $film->images()->update([
                    'path' =>$img_path,
                ]);
            }
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

            $price = isset($input_data['price']) ? $input_data['price'] : $film->price;

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
            'price' =>$price,
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
