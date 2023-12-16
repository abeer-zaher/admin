<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Film extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

            return [
                'film_id'=>$this->_id,
                'name'=>$this->name,
                'description'=>$this->description,
                'dateshow'=>$this->dateshow,
                'director'=>$this->director,
                'prodcompany'=>$this->prodcompany,
                'cast'=>$this->cast,
                'photo'=>$this->photo,

            ];

    }
}
