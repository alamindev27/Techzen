<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'slug',
        'meta_title',
        'description',
        'meta_description',
        'buying_price',
        'whole_sale_price',
        'regular_price',
        'discount_type',
        'discount',
        'stock',
        'brand',
        'category',
        'sub_category',
        'shiping_charge',
        'color',
        'sku',
        'thumbnails',
        'gullury',
        'status',
    ];

    public function productWithCategoryRelation() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function productWithSubCategoryRelation() {
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }

    public function productWithBrandRelation() {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }
}
