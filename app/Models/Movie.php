<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'date', 'hour', 'category_id'   
    ] ;

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
