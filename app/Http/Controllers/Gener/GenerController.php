<?php

namespace App\Http\Controllers\Gener;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gener;
use App\Models\Film;

class GenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geners = Gener::all();
        return view('admin.gener.gener_index',compact('geners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.gener.gener_create');
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

            ]);
            $gener = Gener::create([
                'name'=> $request->name,
            ]);

            return redirect()->back()->withSuccess('تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $gener = Gener::find($id);

        return view('admin.gener.gener_edit',compact('gener'));
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
        $gener = Gener::find($id);
        $request->validate([
            'name'=>'required',
        ]);
        $gener->name = $request->name;
        $gener->save();
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
        $gener = Gener::find($id);
        $gener->delete();
        return redirect()->back();
    }
}
