<?php

use App\Models\Product;
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
            $table->id("item_id");
            $table->foreignId("type")->references("type_id")->on("product_types");
            $table->dateTime("date");
        });

        Product::create(["type" => 1, "date" => "2023-01-01"]);
        Product::create(["type" => 3, "date" => "2023-01-01"]);
        Product::create(["type" => 2, "date" => "2023-01-01"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
