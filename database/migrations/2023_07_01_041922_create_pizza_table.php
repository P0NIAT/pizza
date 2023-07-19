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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('type', ['CALABRIA', 'FIORENTINA', 'GIARDINO', 'MARGHERITA', 'PEPPERONI', 'POLLO', 'TROPICALI', 'REGINA'])->default('PEPPERONI');
            $table->enum('base', ['Thin & Crispy', 'Thick Pan', 'Cheesy Crust'])->default('Thick Pan');
            $table->integer('price')->nullable();
            $table->json('toppings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
