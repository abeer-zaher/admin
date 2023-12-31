<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class API_BaseController extends Controller
{
    public function sendResponse($data, $message, $code)
    {

        $success_state = $code == 200 ? true : false;

        $response = [
            'success'   => $success_state,
            'data'      => $data,
            'message'   => $message
        ];

        return response()->json($response, $code);
    }


    protected function paginate(Collection $collection, $per_page = 10)
    {
        $page = LengthAwarePaginator::resolveCurrentPage();

        $results = $collection->slice(($page - 1) * $per_page, $per_page)->values();

        $data = new LengthAwarePaginator($results, $collection->count(), $per_page, $page, [
            'path'  =>  LengthAwarePaginator::resolveCurrentPath(),
        ]);

        // $paginated->appends(request()->all());

        $paginated['data']    =   $data;

        $paginated['meta']    =   [
            'total_elements'    =>  $data->total(),
            'total_pages'       =>  $data->lastPage(),
            'current_page'      =>  $data->currentPage(),
            'first_page_url'    =>  $data->url(1),
            'next_page_url'     =>  $data->nextPageUrl() === null ? '' : $data->nextPageUrl(),
            'prev_page_url'     =>  $data->previousPageUrl() === null ? '' : $data->previousPageUrl(),
            'last_page_url'     =>  $data->url($data->lastPage()),
        ];

        return $paginated;
    }
}
