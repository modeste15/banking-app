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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('reference');
            $table->bigInteger('somme');
            $table->foreignId('compte_source')->references('id')->on('comptes');
            $table->foreignId('compte_destination')->references('id')->on('comptes');
            $table->foreignId('type_transaction_id')->references('id')->on('type_transactions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
