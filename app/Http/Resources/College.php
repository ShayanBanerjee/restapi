<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class College extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'college_name'=>$this->college_name,
            'city'=>$this->city,
            'description'=>$this->description
        ];
    }
}
