<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit'
    ];


    public function purchaseIngredients()
    {
        return $this->hasMany(PurchaseIngredient::class, 'unit_id');
    }
}
