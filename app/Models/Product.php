<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        "name",
        "description",
        "quantity",
        "category_id",
        "price",
        "status",
        "image",
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
