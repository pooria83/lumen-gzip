<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

use function PHPSTORM_META\map;

class EpisodeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
             $this->collection->map(function ($item){
                return [
                    'title' => $item->title,
                    'body' => $item->body,
                    'episode_number' => $item->number
                ];
            });

    }
}
