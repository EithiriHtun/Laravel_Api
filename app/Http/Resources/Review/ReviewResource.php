<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'customer' => $this->customer,
        //     'review' => $this->review,
        //     'star' => $this->star,
        //     'href'=> [
        //         'reviews' => route('reviews.index',$this->id)
        //     ]
        // ];
    }
}
