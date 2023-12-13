<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Admin_FilmService;
use App\Services\Common\MediaService;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\FilmCreateRequest;
use App\Models\Film;
use App\Models\Gener;

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
public function create_film(){
    $geners = Gener::all();
    return view('admin.film.film_create',compact('geners'));
}
public function store(Request $request){

   // $request->validate();
    $path = (New MediaService)->save_image($request->photo,'images/');
     //error_log($path);
    $response = $this->film_service->store_film($request->all(),$path);
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
    return redirect()->back()->withSuccess($response['msg']);

}

public function destroy($id){
    $response = $this->film_service->destroy_film($id);
    $response_data = $response['data'];
    return view('admin.film.film_index')->withSuccess($response['$msg']);
    //return redirect()->back()->withSuccess($response['msg']);

}






}
