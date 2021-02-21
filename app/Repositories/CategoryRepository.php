<?php
namespace App\Repositories;
use App\Models\Category as Model;

class CategoryRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }
}
