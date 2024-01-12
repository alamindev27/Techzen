<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varient extends Model
{
    use HasFactory;
    protected $fillable = [
        'varient'
    ];

    public function varientWithAttributesRelation() {
        return $this->hasOne(Attribute::class, 'id', 'attr_id');
    }
}
