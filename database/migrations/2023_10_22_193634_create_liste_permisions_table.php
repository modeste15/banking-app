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
        Schema::create('liste_permisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission_id')->references('id')->on('clients');
            $table->foreignId('compte_id')->references('id')->on('comptes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liste_permisions');
    }
};
