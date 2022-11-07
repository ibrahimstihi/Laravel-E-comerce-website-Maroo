<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ["title","slug","icon"];
    public function getRouteKeyName(){
        return "slug";
    }
    public function products(){
        return $this->hasMany(Product::class);
    }

}
