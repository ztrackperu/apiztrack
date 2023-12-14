<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    // con esto llamamos la configuracion personalizada en PostResource
    public $collects = PostResource::class;
    public function toArray($request)
    {
        return [
            // retrornamos en data todo como esta en la base de datos
            'data'=> $this->collection,
            'meta'=>[
                'organization'=>'Zgroup',
                'authors'=>[
                    'LuisMarcelo',
                    'ZtrackPeru'
                ]
            ],
            'type'=>'ripener'

        ];
    }
}
