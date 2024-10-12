<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseIngredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'ingredient_id',
        'purchase_quantity',
        'expiry_date',
        'amount',
        'unit_id',
        'stock_availability',
        'weight',
        'manager_id',
        'chef_id',
        'price_per_unit', // Add this line

    ];

    public function ingredient()
    {
        return $this->belongsTo(ingredient_name::class, 'ingredient_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
