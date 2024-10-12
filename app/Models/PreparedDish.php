<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreparedDish extends Model
{
    use HasFactory;
    protected $fillable = [
        'dish_id',
        'manager_id',
        'chef_id'

    ];
}
