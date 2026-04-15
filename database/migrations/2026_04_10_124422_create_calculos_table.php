<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('calculos', function (Blueprint $table) {
            $table->id();
            $table->decimal('numero1', 15, 4);
            $table->decimal('numero2', 15, 4);
            $table->string('operacion');
            $table->decimal('resultado', 15, 4)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calculos');
    }
};