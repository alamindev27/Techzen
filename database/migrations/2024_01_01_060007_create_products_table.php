<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('slug');
            $table->string('meta_title')->nullable();
            $table->longText('description');
            $table->string('meta_description')->nullable();
            $table->float('buying_price');
            $table->float('whole_sale_price');
            $table->float('regular_price');
            $table->string('discount_type');
            $table->float('discount');
            $table->integer('stock');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->float('shiping_charge');
            $table->unsignedBigInteger('color_id');
            $table->string('sku')->nullable();
            $table->string('thumbnails');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
