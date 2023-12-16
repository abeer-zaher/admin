<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Admin_GenerService;
use App\Http\Requests\Admin\GenerCreateRequest;
use Illuminate\Http\Request;
use App\Models\Gener;
use App\Models\Film;

class GenerController extends Controller
{
    protected Admin_GenerService $gener_service;

    public function __construct(Admin_GenerService $gener_service) {
        $this->gener_service = $gener_service;
    }

    public function get_gener(Request $request)
    {

        $response = $this->gener_service->get_geners($request->all());

        $response_data = $response['data'];
        if ($response['code'] == 200) {
            $geners = $response['data'];
            return view('admin.gener.gener_index', compact('geners'));
        }


    }



    public function create()
    {

        return view('admin.gener.gener_create');
    }



    public function store(Request $request)
    {
      //  $request->validate();
      $response = $this->gener_service->store_gener($request->all());
      $response_data = $response['data'];

      if($response['code'] == 200)
  {
        return redirect()->back()->withSuccess($response['msg']);

  }
  return  redirect()->back()->withErrors($response['msg']);
    }



    public function edit($id)
    {

        $gener = Gener::find($id);

        return view('admin.gener.gener_edit',compact('gener'));


    }

    public function update(Request $request, $id)
    {
        $response = $this->gener_service->update_gener($request->all(),$id);
        $response_data = $response['data'];
     return redirect()->back()->withSuccess($response['msg']);

    }


    public function destroy($id)
    {
        $response = $this->gener_service->destroy_gener($id);
        $response_data = $response['data'];

         return redirect()->route('admin.gener.index')->withSuccess($response['msg']);
    }
}
