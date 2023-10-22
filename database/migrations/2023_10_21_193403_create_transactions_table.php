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
            $table->string('compte_source');
            $table->string('compte_destination');
            $table->string('type_transaction_id');
            $table->bigInteger('somme');
            $table->foreign('compte_source')->references('id')->on('comptes');
            $table->foreign('compte_destination')->references('id')->on('comptes');
            $table->foreign('type_transaction_id')->references('id')->on('type_transactions');
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
