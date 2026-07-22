<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedInteger('product_variant_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->enum('status', ['show', 'hide'])->default('show')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('stock')->nullable();
            $table->string('low_stock_alert')->nullable();
            $table->decimal('length', 10, 2)->nullable();
            $table->decimal('width', 10, 2)->nullable();
            $table->decimal('height', 10, 2)->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('attribute_id')->nullable();
            // $table->string('sku')->nullable();
            $table->integer('product_min_order')->nullable();
            $table->integer('product_max_order')->nullable();
            $table->text('slug')->nullable();
            $table->text('sku')->nullable();
            $table->text('image')->nullable();
            $table->string('hover_image')->nullable();
            $table->string('video', 1000)->nullable();
            $table->string('promotional_video', 1000)->nullable();
            $table->string('purchased_price')->nullable();
            $table->string('seller_price')->nullable();
            $table->string('actual_price')->nullable();
            $table->string('price')->nullable();
            $table->decimal('weight', 10, 2)->nullable();
            $table->enum('today_deal', ['yes', 'no'])->nullable()->default('no');
            $table->boolean('preorder')->default(0);
            $table->integer('preorder_stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
