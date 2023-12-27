<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
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
                'order_id'=>$this->_id,
                'user_id'=>$this->user_id,
                'cart_id'=>$this->cart_id,
                'total'=>$this->total,
                'resolve'=>$this->resolve,
                'status'=>$this->status,
                'dateorder'=>$this->dateorder,
                'products'=>$this->products,
            ];
    }
}
