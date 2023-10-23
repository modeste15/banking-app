<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_transactions')->insert([
            [
                'libelle' => "INTERNE",
            ],
            [
                'libelle' => "EXTERNE",
            ],
            [
                'libelle' => "DEPOT",
            ],
            [
                'libelle' => "PAIEMENT",
            ],
            [
                'libelle' => "RETRAIT",
            ],
            [
                'libelle' => "PRELEVEMENT",
            ],
        ]);
    }
}
