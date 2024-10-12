<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'business_name',
        'branches',
        'country_id'
    ];
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
