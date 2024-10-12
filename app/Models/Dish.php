<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'manager_id',
        'chef_id',
        'category_id',
        'subcategory_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Optional relationship with Subcategory (if dishes can belong to subcategories)
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
