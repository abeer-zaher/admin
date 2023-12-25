<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Filmcart extends JsonResource
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
                'filmcart_id'=>$this->_id,
                'product_name'=>$this->product_name,
                'quentity'=>$this->quentity,
                'price'=>$this->price,
                'subtotal'=>$this->subtotal,
                'cart_id'=>$this->cart_id,
            ];
    }
}
