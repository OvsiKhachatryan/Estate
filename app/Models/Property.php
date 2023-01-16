<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'property_type',
        'quarter',
        'name',
        'company_logo',
        'about',
        'starting_price',
        'price_per_m2',
        'an_initial_fee'
    ];
}
