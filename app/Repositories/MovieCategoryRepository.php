<?php


namespace App\Repositories;
use App\Models\MovieCategory as Model;

class MovieCategoryRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function createMovieCategory($newFilm,$request){
       /* $collact=['move_id','category_id'];
        $x = $this->startConditions()->select($collact)->with('category')->get();*/
        $newFilm->category()->attach($request->category);
        // $this->startConditions()->create(['move_id' => $newFilm->id , 'category_id' => ]);
    }
}
