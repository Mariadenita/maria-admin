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
            $table->string('name');
            $table->string('modelnum');
            $table->string('category');
            $table->text('product_details');
            $table->text('how_to_use');
            $table->text('shipping_details');
            $table->decimal('price');
            $table->decimal('weight');
            $table->integer('quantity');
            $table->string('large_image'); // To store the file path of the large image
            $table->string('small_image1')->nullable(); // To store the file path of the first small image
            $table->string('small_image2')->nullable(); // To store the file path of the second small image
            $table->string('small_image3')->nullable(); // To store the file path of the third small image
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
