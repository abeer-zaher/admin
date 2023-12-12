<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FilmCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'description'=>'required',
            'dateshow'=>'required',
            'director'=>'required',
            'prodcompany'=>'required',
            'cast'=>'required',
            'photo'=>'required|image',
            'geners'=>'required'
        ];
    }

    public function messages(){
        return [
         'name.required'            =>    'you must input film name',
         'description.required'     =>    'you must input film description',
         'dateshow.required'        =>    'you must input film dateshow',
         'director.required'        =>    'you must input film director',
         'prodcompany.required'     =>    'you must input film prodcompany',
         'cast.required'            =>    'you must input film cast',
         'photo.required'           =>    'you must input film photo',
         'geners.required'          =>    'you must input film geners',
        ];
    }
}
