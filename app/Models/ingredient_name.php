<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredient_name extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manager_id',
        'price'
    ];

    public function purchaseIngredients()
    {
        return $this->hasMany(PurchaseIngredient::class, 'ingredient_id');
    }
}
