<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable=['name','year','description','producer_id'];

    public function category(){
        return $this->belongsToMany(Category::class,'movie_categories','move_id', 'category_id');
    }


    public function image()
    {
        return $this->hasMany(Image::class, 'movie_id');
    }
    public function producer(){
        return $this->hasOne(Producer::class,'id','producer_id');
    }
}
