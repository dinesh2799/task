<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $fillable=['name','category_id'];

    public function sub_categories()
    {
        return $this->hasMany(Category::class,'category_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
