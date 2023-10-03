<?php

use App\Models\ProductType;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id("type_id");
            $table->string("name");
            $table->string("description");
            $table->integer("cost");
        });

        ProductType::create(["name" => "Gumikacsa", "description" => "Magas minőségű gumiból készült kacsa", "cost" => 2000]);
        ProductType::create(["name" => "Kidobó tégla", "description" => "Magas minőségű cementből készült tégla", "cost" => 3500]);
        ProductType::create(["name" => "Bicikli", "description" => "Egy jó bicigli", "cost" => 15000]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
