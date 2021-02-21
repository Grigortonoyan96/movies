<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;

    protected $fillable=['move_id','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
