<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waste extends Model
{
    use HasFactory;
    protected $fillable = [
        'dish_id',
        'waste_ingr_id',
        'waste_unit',
        'waste_qty',
        'purpose',
        'chef_id',
        'manager_id',
    ];
}
