<?php

namespace App\Repositories;
use App\Models\Movie as Model;


class MovieRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function createMovie($producer,$request){

     return  $this->startConditions()->create(['name'=>$request->movie , 'year' => $request->year , 'category'
       => $request->category, 'description' => $request->description , 'producer_id' => $producer->id]);


    }


}
