<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'dish_id',
        'serving',
        'price',
        'final_price',  // Add this field
        'profit_percentage', // Add this field
        'chef_id',
        'manager_id'
    ];
}
