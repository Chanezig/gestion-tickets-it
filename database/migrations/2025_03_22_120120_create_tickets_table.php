<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->text('description');
        $table->enum('statut', ['Ouvert', 'En cours', 'Résolu', 'Fermé']);
        $table->enum('priorite', ['Faible', 'Moyenne', 'Élevée', 'Critique']);
        $table->foreignId('id_employe')->constrained('users');
        $table->foreignId('id_technicien')->nullable()->constrained('users');
        $table->timestamps();
    });
}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
