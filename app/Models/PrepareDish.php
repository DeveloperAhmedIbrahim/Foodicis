<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrepareDish extends Model
{
    use HasFactory;
    protected $fillable = [
        'dish_id',
        'ingr_id',
        'unit_id',
        'qty',
        'chef_id',
        'manager_id',
    ];
}
