<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Product extends Model
{
    protected $fillable = [
        "name",
        "price",
        "stock"
    ];
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}
