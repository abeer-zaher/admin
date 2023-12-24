<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Admin_FilmService;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\FilmCreateRequest;
use App\Models\Film;
use App\Models\Gener;
use App\Models\Order;
use Auth;


class FilmController extends Controller
{
    protected Admin_FilmService $film_service;

    public function __construct(Admin_FilmService $film_service) {
        $this->film_service = $film_service;
    }

    public function get_films(Request $request)
    {

        // $filter = $request->filter;
        $geners = Gener::all();
        $response = $this->film_service->get_films($request->all());

        $response_data = $response['data'];
        if ($response['code'] == 200) {
            $films = $response['data'];
            return view('admin.film.film_index', compact('films','geners'));
        }

        # redirect to error page
    }
      public function searchbyname(Request $request){
        $geners = Gener::all();
         $response = $this->film_service->searchbyname($request->input('search'));
                $response_data = $response['data'];
                if ($response['code'] == 200) {
                    $films = $response['data'];
                    return view('admin.film.film_index', compact('films','geners'))->withSuccess($response['msg']);
                }else
                 return view('admin.film.film_index', compact('films','geners'))->withErrors($response['msg']);



                  /*  $searchquery = $request->input('search');
                $films = Film::where(function($query) use ($searchquery){
                    $query->where('name','like','%'.$searchquery.'%');
                })
                ->get();
                return view('admin.film.film_index', compact('films','geners'));*/



            }

public function create_film(){
    $geners = Gener::all();
    return view('admin.film.film_create',compact('geners'));
}
public function store(Request $request){

   // $request->validate();

    $response = $this->film_service->store_film($request->all());
    $response_data = $response['data'];
    error_log($response['code']);
    if($response['code'] == 200)
{
      return redirect()->back()->withSuccess($response['msg']);

}
return  redirect()->back()->withErrors($response['msg']);


}


public function edit($id){
    $film = Film::find($id);
    $geners = Gener::all();
    return view('admin.film.film_edit',compact('film','geners'));
}
public function update(Request $request,$id){

    $response = $this->film_service->update_film($request->all(),$id);
    $response_data = $response['data'];
    if($response['code'] == 200){
    return redirect()->back()->withSuccess($response['msg']);
    }else
    return  redirect()->back()->withErrors($response['msg']);
}

public function destroy($id){
    $response = $this->film_service->destroy_film($id);
    $response_data = $response['data'];

     return redirect()->route('admin.film.index')->withSuccess($response['msg']);



}

public function add_images($id){
    $film = Film::find($id);
     return view('admin.film.film_add_images',compact('film'));
}



public function store_imgs(Request $request,$id){


    $response = $this->film_service->store_film_img($request->all(),$id);
    $response_data = $response['data'];
    if($response['code'] == 200)
{
      return redirect()->back()->withSuccess($response['msg']);

}
return  redirect()->back()->withErrors($response['msg']);


}

public function edit_img(Request $request){

 $film = Film::find($id);
     return view('admin.film.film_edit_images',compact('film'));
}
public function update_img(Request $request,$id){

    $response = $this->film_service->update_film_imgs($request->all(),$id);
    $response_data = $response['data'];
    if($responce['code'] == 200){
    return redirect()->back()->withSuccess($response['msg']);
    }else
    return  redirect()->back()->withErrors($response['msg']);
}
public function show(){
    $films = Film::all();
     return view('admin.film.film_show',compact('films'));

}
public function addToCart($id){
    $film = Film::find($id);
    $cart = session()->get('cart',[]);
    if(isset($cart[$id])){
        $cart[$id]['quantity']++;
    }else{
        $cart[$id]=[
            "film_name" => $film->name,
            "photo" => $film->photo,
            "price" => $film->price,
            'quantity' => 1
        ];
    }
    session()->put('cart',$cart);
    return redirect()->back()->with('success','film add to cart successfuly');
}

public function cart(){
    return view ('admin.film.cart');
}
public function cart_remove($id){

        $cart = session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
           $cart = session()->put('cart',$cart);
        }
       session()->flash('success','Film successfuly removed');
        return view('admin.film.cart',compact('cart'));


}
public function update_cart(Request $request){

       /* $cart = session()->get('cart');
        foreach (session('cart') as $id => $details){
        $cart[$id]["quantity"] = $request->quantity;
       $cart = session()->put('cart',$cart);
        }
        session()->flash('success','Cart successfuly updated');*/

        return view('admin.film.cart',compact('cart'));

}
public function checkout(Request $request){
    $films = Film::all();
    $cart = session()->get('cart');
    $total = 0;
    foreach (session('cart') as $id => $details){
    $total += $details['price'] * $details['quantity'];
    }

   foreach (session('cart') as $id => $details){
    $subtotal = 0;
    $subtotal = $details['price'] * $details['quantity'];
    $order = Order::create([
    'user_id' => Auth::user()->id,
    'product_name' => $details['film_name'],
    'quentity' => $details['quantity'],
    'price' => $details['price'],
    'subtotal' => $subtotal ,
    'total' => $total,
   ]);

 }
 foreach (session('cart') as $id => $details){
     unset($cart[$id]);
     $cart = session()->put('cart',$cart);
 }
    return view('admin.film.film_show',compact('films','cart'));

}
}
