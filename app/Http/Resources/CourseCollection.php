<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($item){
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'body' => $item->body,
                    'image' => $item->image
                ];
            }),

        ];
    }

    public function with($request)
    {
        return [
            'status' => 'success'
        ];
    }
}
