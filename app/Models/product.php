<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        "title","slug","description",
        "price","old_price",
        "image","inStock","category_id"
    ];
    public function getRouteKeyName(){
        return "slug";
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }
}
