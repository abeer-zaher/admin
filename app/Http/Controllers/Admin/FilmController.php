<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Gener;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      /*  $films = Film::all();
        return view('films.index',compact('films'));*/
        $geners = Gener::all();
        $films = Film::all();
        return view('admin.film.film_index',compact('geners','films'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $geners = Gener::all();
        return view('admin.film.film_create',compact('geners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'dateshow'=>'required',
            'director'=>'required',
            'prodcompany'=>'required',
            'cast'=>'required',
            'photo'=>'required|image',
            'geners'=>'required'

            ]);


            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('images/',$newPhoto);

            $film = Film::create([

                'name'=>$request->name,
                'description'=>$request->description,
                'dateshow'=>$request->dateshow,
                'director'=>$request->director,
                'prodcompany'=>$request->prodcompany,
                'cast'=>$request->cast,
                'photo'=>'images/'.$newPhoto

             ]);


             $film->geners()->attach($request->geners);

             return redirect()->back()->withSuccess('تمت الإضافة');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        $geners = Gener::all();

        return view('admin.film.film_edit',compact('film','geners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film = Film::find($id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'dateshow'=>'required',
            'director'=>'required',
            'prodcompany'=>'required',
            'cast'=>'required'
            ]);

            if($request->has('photo')){
                $photo = $request->photo;
                $newPhoto = time().$photo->getClientOriginalName();
                $photo->move('uploads/posts',$newPhoto);
                $film->photo = 'uploads/posts'.$newPhoto;

            }

            $film->name = $request->name;
            $film->description = $request->description;
            $film->dateshow = $request->dateshow;
            $film->director = $request->director;
            $film->prodcompany = $request->prodcompany;
            $film->cast = $request->cast;
            $film->save();
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
