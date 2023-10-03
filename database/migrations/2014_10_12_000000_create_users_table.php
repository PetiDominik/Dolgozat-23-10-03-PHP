<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('balance');
        });

        User::create(["name" => "Pista", "email" => "pis@ta.hu", "balance" => 15000]);
        User::create(["name" => "Géza", "email" => "ge@za.hu", "balance" => 20000]);
        User::create(["name" => "Gyöngyi", "email" => "gyon@gyi.hu", "balance" => 18500]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
