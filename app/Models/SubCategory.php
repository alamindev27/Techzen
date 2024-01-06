<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_name',
        'slug',
        'image',
        'meta_title',
        'meta_description',
        'status',
        'is_featured',
    ];

    public function subCategoryWithCategoryRelation() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
