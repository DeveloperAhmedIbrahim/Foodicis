<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTaker extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'order_takers';

    // Define the fillable fields
    protected $fillable = [
        'name',
        'email',
        'password',
        'manager_id',
    ];

    // You might want to hash the password when creating/updating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (isset($model->password)) {
                $model->password = bcrypt($model->password);
            }
        });

        static::updating(function ($model) {
            if (isset($model->password) && !empty($model->password)) {
                $model->password = bcrypt($model->password);
            }
        });
    }
}
