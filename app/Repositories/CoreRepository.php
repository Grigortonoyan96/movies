<?php


namespace App\Repositories;



abstract class CoreRepository
{
    private $model;
    public function __construct()
    {
        $this->model = new ($this->getModelClass());
    }
abstract protected function getModelClass();

    protected function startConditions(){
        return clone $this->model;
    }
}
