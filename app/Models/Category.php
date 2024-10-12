<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat',
        'image',
        'chef_id',
        'manager_id',

    ];
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // Relationship with Dish
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
