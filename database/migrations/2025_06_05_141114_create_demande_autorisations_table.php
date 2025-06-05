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
        Schema::create('demande_autorisations', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->enum('statut');
            $table->enum('motif');
            $table->string('emeteur');
            $table->string('destinataire');
            $table->date('date_soumission');
            $table->enum('fichier_joint');
            $table->int('quantite_moto');
            $table->int('valeur');
            $table->foreignId('personne_physique_id')->constrained();
            $table->foreignId('personne_morale_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_autorisations');
    }
};
