<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('body')->nullable();
            $table->decimal('regular_price',10,2)->nullable();
            $table->decimal('sale_price',10,2)->nullable();
            $table->string('shipping_type')->nullable();
            $table->string('delivery')->nullable();
            $table->string('slug')->nullable();
            $table->string('product_id_type')->nullable();
            $table->string('product_id')->nullable();
            $table->date('expiry_date_of_product')->nullable();
            $table->foreignId('store_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->nullable()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
