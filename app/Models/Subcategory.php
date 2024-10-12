<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_id',
        'subcat',
        'manager_id',
        'chef_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Dish
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
