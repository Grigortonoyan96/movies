<?php


namespace App\Repositories;

use App\Models\Producer as Model;

class ProducerRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }
    public function createProducer($data){

        $newProducer=Model::Where('name',$data->producer)->get();

        if(!count($newProducer)){
        return $this->startConditions()->create(['name'=>$data->producer]);
    }
        else return $newProducer[0];
        }

}
