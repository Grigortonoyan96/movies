<?php


namespace App\Repositories;
use App\Models\Image as Model;

class ImageRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function newImage($request,$newFilm){
        $fileName=$request->image->getClientOriginalName();
        $request->file('image')->storeAs('upload',$fileName,'public');
        $this->startConditions()->create(['link' => $fileName , 'movie_id' => $newFilm->id ,
            'is_gallery' => true]);
    }
}
