<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'discount_type',
        'discount_amount',
        'total_use_limit',
        'total_use_limit_per_user',
        'start_date',
        'end_date',
        'status',
    ];
}
